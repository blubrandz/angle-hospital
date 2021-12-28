<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\disease_category ;

class diseaseCatagoryManagmentController extends Controller
{
    //adding disease catagory here  add_diseasecatagory
    public function AddDiseaseCatagory() {
        return view('backend.disease_catagory.add_diseasecatagory' ) ;
    }

    //store disease catagory here
    public function StoreDiseaseCatagory(Request $request) {
        $data = new disease_category() ;
        $data->main_catagory_name = $request->main_catagory_name ;
        $data->main_catagory_discription = $request->main_catagory_discription ;
        $data->save() ;
        $notification = array(
            'message' => "$request->main_catagory_name  Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('diseasecatagory.view')->with($notification) ;
    }

    //view disease catagory here  view_diseasecatagory
    public function ViewDiseaseCatagory() {
        $data = disease_category::latest()->get() ;
        return view('backend.disease_catagory.view_diseasecatagory' , compact(['data']) ) ;
    }


}
