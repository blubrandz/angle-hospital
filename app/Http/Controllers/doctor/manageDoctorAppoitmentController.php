<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Auth ;
use App\Models\appointment_date ;
use App\Models\appointment_timeslot ;
use App\Models\patient_appointment ;


class manageDoctorAppoitmentController extends Controller
{
    //View All Doctores Appoitments
    public function ViewAllDoctoreAppoitments() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $data = patient_appointment::latest()->where('pateintappo_doctorname' , $user->email)->get() ; 
        return view('doctor_dashboard.doctor_appoitment.view_doctorappoitment' , compact(['data'])) ;
    }

    //Upcomming Appoitments
    public function UpcommingAppoitmentsDoctoreAppoitments() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $currentDate = date('Y-m-d');

        $data = patient_appointment::latest()->where('pateintappo_doctorname' , $user->email)->where('pateintappo_doctordate', '>=' , $currentDate)->get() ;
        return view('doctor_dashboard.doctor_appoitment.view_doctorappoitment' , compact(['data'])) ;
    }

    //Passed Appoitments
    public function PassedAppoitmentsDoctoreAppoitments() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $currentDate = date('Y-m-d');

        $data = patient_appointment::latest()->where('pateintappo_doctorname' , $user->email)->where('pateintappo_doctordate', '<=' , $currentDate)->get() ;
        return view('doctor_dashboard.doctor_appoitment.view_doctorappoitment' , compact(['data'])) ;

    }

    //delete patient appoitment by doctor
    public function DeleteDoctoreAppoitments($id) {
        $data = patient_appointment::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Appoitment Deleted',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctorappoitments.viewall')->with($notification) ;

    }
}
