<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User ;
use Illuminate\Support\Facades\Auth ;


class completeProfleCOntroller extends Controller
{
    public function userProfileCompleteStore(Request $request) {
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
            'message' => 'Your Profile will Varified Soon',
            'alert-type' => 'success'
        ) ;
        // return redirect()->route('userprofile.view')->with($notification) ;
        return view('website.index')->with($notification) ;
    }

    public function userProfileCompleteLogout() {
        Auth::logout();
        return redirect()->route('login') ;
    }
}
