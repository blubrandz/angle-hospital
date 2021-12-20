<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;


class manageReceptionController extends Controller
{
    //add reseptionist here
    public function AddReceptionist() {
        return view('backend.manage_receptionist.add_person');
    }

    //store the receptionist data
    public function StoreReceptionist(Request $request) {
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
        return redirect()->route('reception.view')->with($notification) ;
    }

    //view receptionsit
    public function ViewReceptionist() {
        $allData = User::latest()->where('usertype','reception')->get() ;
        return view('backend.manage_receptionist.view_person' , compact(['allData']));
    }

    //edit receptionist
    public function EditReceptionist($id) {
        $editData = User::find($id) ;
        return view('backend.manage_receptionist.edit_persons' , compact('editData')) ;

    }

    //update receptionist 
    public function UpdateReceptionist(Request $request,$id) {
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
            'message' => 'Receptionist Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('reception.view')->with($notification) ;

    }

    //delete receptionist here
    public function DeleteReceptionist($id) {
        $user = User::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Doctor Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('reception.view')->with($notification) ;

    }
}
