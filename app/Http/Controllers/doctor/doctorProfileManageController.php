<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash ;

class doctorProfileManageController extends Controller
{
    //Doctor Profile View
    public function doctorProfileViewProfile() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        return view('doctor_dashboard.profile.view_profile' , compact(['user'])) ;
    }

    //edit doctor profile
    public function doctorProfileEditProfile() {
        $id = Auth::user()->id ;
        $editData = User::find($id) ;
        return view('doctor_dashboard.profile.edit_profile' , compact(['editData'])) ;
    }

    //edited data store
    public function doctorProfileUpdateDataStore(Request $request) {
        $data = User::find(Auth::user()->id) ;
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->mobile = $request->mobile ;
        $data->address = $request->address ;
        $data->gender = $request->gender ;
        $data->birth_date = $request->birth_date ;
        $data->gmail_address = $request->gmail_address ;
        $data->facebook_profile = $request->facebook_profile ;
        $data->instagram_profile = $request->instagram_profile ;
        $data->linkdine_profile = $request->linkdine_profile ;
        $data->hear_about_party = $request->hear_about_party ;
        $data->expectation_from_aragma = $request->expectation_from_aragma ;
        $data->user_tallent = $request->user_tallent ;

        // $data->image = $request->image ;
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
            'message' => 'Your Profile Updated Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctorprofile.view')->with($notification) ;
    }

    //change password of doctor  edit_doctorpassword
    public function doctorProfileChangePassword() {
        return view('doctor_dashboard.profile.edit_doctorpassword' ) ;
    }

    //change password update 
    public function doctorProfileChangePasswordUpdate(Request $request) {
                //validation
                $validatedData = $request->validate([
                    'oldpassword'=> 'required' ,
                    'password' => 'required|confirmed',
                ]) ;
               
                $hashedPassword = Auth::user()->password ;
                if(Hash::check($request->oldpassword,$hashedPassword)) {
                    $user = User::find(Auth::id()) ;
                    $user->password = Hash::make($request->password) ;
                    $user->save() ;
                    Auth::logout(); //after changing the password the authenticated use must be logout automatically
                    $notification = array(
                        'message' => 'Your Password Updated Successfully',
                        'alert-type' => 'success'
                    ) ;
            
                    return redirect()->route('login')->with($notification) ;
                }
                else{
                    return redirect()->back() ; //return to the back page
                }
                

    }
}
