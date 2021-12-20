<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;

class manageDoctorController extends Controller
{
    //adding doctors here
    public function AddDoctor() {
        return view('backend.hospital_users.add_person');
    }

    //storing the dcotor data
    public function storeDoctorData(Request $request) {
        $validatedData = $request->validate([
            'email'=> 'required|unique:users' ,
            'name' => 'required',
        ]) ;

        $data = new User() ;
        $data->usertype = $request->usertype ;
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->password = bcrypt($request->password);
        $data->mobile = $request->mobile ;
        $data->gender = $request->gender ;
        // profile image ;
        if($request->file('image')) {
            $file = $request->file('image') ;
            @unlink(public_path('upload/user_images/'.$data->image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/user_images'),$filename) ;
            $data['image'] = $filename ;
        }
        $data->save() ;
        $notification = array(
            'message' => "new $request->usertype Added Successfully" ,
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctors.view')->with($notification) ;

    }

    //view the doctors  view_person
    public function ViewDoctors() {
        $allData = User::latest()->where('usertype','doctor')->get() ;
        return view('backend.hospital_users.view_person' , compact(['allData']));
    }

    //edit doctors 
    public function EditDoctors($id) {
        $editData = User::find($id) ;
        return view('backend.hospital_users.edit_persons' , compact('editData')) ;
    }

    //updating the doctor data here
    public function UpdateDoctors(Request $request,$id) {
        $data = User::find($id) ;
        $data->usertype = $request->usertype ;
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->mobile = $request->mobile ;
        $data->address = $request->address ;
        $data->gender = $request->gender ;
        $data->birth_date = $request->birth_date ;
        $data->save() ;
        $notification = array(
            'message' => 'Doctor Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctors.view')->with($notification) ;
    }

    //delete doctore here
    public function DeleteDoctors($id) {
        $user = User::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Doctor Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctors.view')->with($notification) ;
    }
}
