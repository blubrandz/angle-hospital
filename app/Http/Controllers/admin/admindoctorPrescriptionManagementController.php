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

class admindoctorPrescriptionManagementController extends Controller
{
    //view all list of doctor prescription  admin_managedoctor_prescriptions.view_alldoctorprescriptions
    public function ViewAllDoctorManagmentList() {
        $data = doctor_prescription::latest()->get() ;
        return view('backend.admin_managedoctor_prescriptions.view_alldoctorprescriptions' ,compact(['data'])) ;
    }

    //view details of prestion  view_doctorprescriptiondetails
    public function ViewFullDetailOfDoctorPrescriptionList($id) {
        $data = doctor_prescription::find($id) ;
        return view('backend.admin_managedoctor_prescriptions.view_doctorprescriptiondetails' ,compact(['data'])) ;

    }
}
