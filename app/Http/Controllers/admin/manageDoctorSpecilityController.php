<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\speciality ;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class manageDoctorSpecilityController extends Controller
{
    //add doctor specility   doctor_specility
    public function addDoctorSpecility() {
        return view('backend.doctor_specility.add_specility');
    }

    //storing the data in here
    public function StoreDoctorSpecility(Request $request) {
        $data = new speciality() ;
        $data->specility_name = $request->specility_name ;
        $data->specility_description = $request->specility_description;
        $data->save() ;
        $notification = array(
            'message' => "$request->specility_name Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctorspecility.view')->with($notification) ;
    }

    //view the doctor specilist
    public function ViewDoctorSpecility() {
        $data = speciality::latest()->get() ;
        return view('backend.doctor_specility.view_specility' , compact(['data']));
    }

    //edit specility here edit_specility
    public function EditDoctorSpecility($id) {
        $data = speciality::find($id) ;
        return view('backend.doctor_specility.edit_specility' , compact(['data']));
    }

    //update the data of edited speciluity here
    public function UpdateDoctorSpecility(Request $request,$id) {
        $data = speciality::find($id) ;
        $data->specility_name = $request->specility_name ;
        $data->specility_description = $request->specility_description ;
        $data->save() ;
        $notification = array(
            'message' => "$request->specility_name Updated Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctorspecility.view')->with($notification) ;
    }

    //delete doctor specility here
    public function DeleteDoctorSpecility($id) {
        $data = speciality::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Specility Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctorspecility.view')->with($notification) ;

    }
}
