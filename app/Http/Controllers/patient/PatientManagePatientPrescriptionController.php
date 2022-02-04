<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Auth ;
use App\Models\appointment_date ;
use App\Models\appointment_timeslot ;
use App\Models\patient_appointment ;
use App\Models\doctor_prescription ;
use App\Models\manage_medicine ;
use Illuminate\Support\Facades\DB ;


class PatientManagePatientPrescriptionController extends Controller
{
    //view all prescrions //patient_prescriptions.view_allpatientprescription
    public function viewAllDoctorsPrescrions() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;

        $data = doctor_prescription::latest()->where('patientname_prescription', $user->name)->where('patientemail_prescription' , $user->email)->get() ;
        return view('users_dashboard.patient_prescriptions.view_allpatientprescription' ,compact(['data' , 'user'])) ;
    }

    //view the details of prescription view_patientprescriptiondetails
    public function viewAllDoctorsPrescrionsInDetail($id) {
        $data = doctor_prescription::find($id) ;
        return view('users_dashboard.patient_prescriptions.view_patientprescriptiondetails' ,compact(['data' ])) ;
    }
}
