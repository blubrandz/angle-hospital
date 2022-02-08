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

    //delete prescriptions
    public function DeletePrescriptions($id) {
        $data = doctor_prescription::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Selected Prescription Deleted',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctorprescriptionmanagement.viewall')->with($notification) ;
    }

    //View all doctor list to check all prescrptions view_doctorlist
    public function ViewAllDoctorLists() {
        $data = User::all()->where('usertype' , 'doctor') ;
        return view('backend.admin_managedoctor_prescriptions.view_doctorlist' ,compact(['data'])) ;
    }

    //View all list of prescrption written by doctor view_prescriptionsdetsillist
    public function ViewAllListOfPrescrptionWriitenByDoctor($id) {
        $doctorData = User::find($id) ;
        $data = doctor_prescription::latest()->where('doctorname_prescription' , $doctorData->name)->where('doctoremail_prescription' , $doctorData->email)->get() ;
        return view('backend.admin_managedoctor_prescriptions.view_prescriptionsdetsillist' ,compact(['data'])) ;
    }

    //View All PatientList here ViewAllPatientLists
    public function ViewAllPatientLists() {
        $data = User::latest()->where('usertype' , 'user')->get() ;
        return view('backend.admin_managedoctor_prescriptions.ViewAllPatientLists' ,compact(['data'])) ;

    }

    //List of all prescription written by doctor for patients
    public function ViewAllListOfPrescrptionWriitenForPatient($id) {
        $doctorData = User::find($id) ;
        $data = doctor_prescription::latest()->where('patientname_prescription' , $doctorData->name)->where('patientemail_prescription' , $doctorData->email)->get() ;
        return view('backend.admin_managedoctor_prescriptions.view_prescriptionsdetsillist' ,compact(['data'])) ;

    }


}
