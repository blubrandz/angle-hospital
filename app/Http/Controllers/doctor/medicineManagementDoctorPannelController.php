<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Auth ;
use App\Models\appointment_date ;
use App\Models\appointment_timeslot ;
use App\Models\patient_appointment ;
use App\Models\doctor_prescription ;
use App\Models\manage_medicine ;

class medicineManagementDoctorPannelController extends Controller
{
    //add medicine here
    public function AddMedicineByDoctor() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        return view('doctor_dashboard.medicine_management.add_newmedicine' ,compact(['user'])) ;
    }

    //Store medicine here
    public function StoreMedicineByDoctor(Request $request) {
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
        return redirect()->route('doctormedicine.view')->with($notification) ;
    }

    //view all medicine data  here
    public function ViewAllMedicineByDoctor() {
        $data = manage_medicine::latest()->get() ;
        return view('doctor_dashboard.medicine_management.view_allmedicine' ,compact(['data'])) ;
    }

    //delete the medicine here
    public function DeleteMedicineByDoctor($id) {
        $data = manage_medicine::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Medicine Deleted Succesfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctormedicine.view')->with($notification) ;

    }

}
