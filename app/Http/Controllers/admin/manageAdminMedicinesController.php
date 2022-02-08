<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\User ;
use App\Models\speciality ;
use App\Models\service ;
use App\Models\appointment_date ;
use App\Models\appointment_timeslot ;
use App\Models\patient_appointment ;
use App\Models\doctor_prescription ;
use App\Models\manage_medicine ;


class manageAdminMedicinesController extends Controller
{
    //add medicines admin_medicine.add_adminemedicine
    public function AddMedicines() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        return view('backend.admin_medicine.add_adminemedicine', compact(['user'])) ;
    }

    //store medicines
    public function StoreMedicines(Request $request) {
        $data = new manage_medicine() ;
        $data->medicine_username = $request->medicine_username ;
        $data->medicine_useremail = $request->medicine_useremail ;
        $data->medicine__userid = $request->medicine__userid ;
        $data->medicine_name = $request->medicine_name ;
        $data->medicine_note = $request->medicine_note ;
        $data->save() ;
        $notification = array(
            'message' => "$data->medicine_name Added Succesfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('adminmedicine.view')->with($notification) ;
    }

    //view all medicines here view_adminmedicine
    public function ViewAllMedicines() {
        $data = manage_medicine::latest()->get() ;
        return view('backend.admin_medicine.view_adminmedicine' ,compact(['data'])) ;

    }

    //delete medicine 
    public function DeleteMEdicines($id) {
        $data = manage_medicine::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Medicine Deleted Succesfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('adminmedicine.view')->with($notification) ;

    }
}
