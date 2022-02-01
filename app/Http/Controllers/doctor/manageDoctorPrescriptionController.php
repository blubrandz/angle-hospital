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
use Illuminate\Support\Facades\DB ;


class manageDoctorPrescriptionController extends Controller
{
    //View todays appoitment
    public function viewDoctorsTodaysAppoiutment() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $currentDate = date('Y-m-d');
        $data = patient_appointment::latest()->where('pateintappo_doctorname', $user->email)->where('pateintappo_doctordate', '=' ,  $currentDate)->get() ;

        return view('doctor_dashboard.doctor_prescription.view_todaysappoitment' , compact(['data' , 'user'])) ;
        //doctor_prescription.view_todaysappoitment
    }

    //Add Prescription method one  add_prescription1
    public function AddPrescriptionMETHODONeDoctorsTodaysAppoiutment($id) {
        $data = patient_appointment::find($id) ;
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $medicineData = DB::table('manage_medicines')->orderBy('medicine_name')->get();
        return view('doctor_dashboard.doctor_prescription.add_prescription1' , compact(['data' , 'user' , 'medicineData'])) ;
    }

    //storing the doctor prescription here
    public function StoreFIrstFormDataDoctorsTodaysAppoiutment(Request $request) {
        $data = new doctor_prescription() ;
        $data->doctorname_prescription = $request->doctorname_prescription ;
        $data->doctoremail_prescription = $request->doctoremail_prescription ;
        $data->patientname_prescription = $request->patientname_prescription ;
        $data->patientemail_prescription = $request->patientemail_prescription ;
        $data->patientapoitmentdate_prescription = $request->patientapoitmentdate_prescription ;
        $data->patientslot_prescription = $request->patientslot_prescription ;
        $data->patientphonenumber_prescription = $request->patientphonenumber_prescription ;
        $data->doctor_detailprescription = $request->doctor_detailprescription ;
        $data->medicine_prescription = $request->medicine_prescription ;
        $data->frequency_prescription = $request->frequency_prescription ;
        $data->note_prescription = $request->note_prescription ;

        $data->nextapoitment_prescription = $request->nextapoitment_prescription ;
        $data->patientappoitment_id = $request->patientappoitment_id ;
        $data->save() ;
        $notification = array(
            'message' => "Prescription for $request->patientname_prescription Saved Succesfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctorprescription.todaysappoitmentview')->with($notification) ;
    }

    //View All Doctor Prescriptions view_allprescriptions
    public function ViewAllDoctorPrescriptions() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;

        $data = doctor_prescription::latest()->where('doctorname_prescription' , $user->name)->where('doctoremail_prescription' , $user->email)->get() ;
        return view('doctor_dashboard.doctor_prescription.view_allprescriptions' , compact(['data'])) ;
    }

    //View Details of prescrptions
    public function ViewDetailsOFPrescriptions($id) {
        $data = doctor_prescription::find($id) ;

        
        
        return view('doctor_dashboard.doctor_prescription.view_prescriptiondetails' , compact(['data' ])) ;
    }

    //Edit Doctor Prescription here
    public function EditDoctorPrescriptions($id) {
        $data = doctor_prescription::find($id) ;
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $medicineData = DB::table('manage_medicines')->orderBy('medicine_name')->get();

        return view('doctor_dashboard.doctor_prescription.edit_prescriptions' , compact([  'user' , 'data' , 'medicineData'])) ;
    }

    //Update Doctor Prescriptions detais here
    public function UpdateDoctorPrescriptions( Request $request,$id) {
        $data = doctor_prescription::find($id) ;
        $data->doctorname_prescription = $request->doctorname_prescription ;
        $data->doctoremail_prescription = $request->doctoremail_prescription ;
        $data->patientname_prescription = $request->patientname_prescription ;
        $data->patientemail_prescription = $request->patientemail_prescription ;
        $data->patientapoitmentdate_prescription = $request->patientapoitmentdate_prescription ;
        $data->patientslot_prescription = $request->patientslot_prescription ;
        $data->patientphonenumber_prescription = $request->patientphonenumber_prescription ;
        $data->doctor_detailprescription = $request->doctor_detailprescription ;
        $data->medicine_prescription = $request->medicine_prescription ;
        $data->frequency_prescription = $request->frequency_prescription ;
        $data->note_prescription = $request->note_prescription ;

        $data->nextapoitment_prescription = $request->nextapoitment_prescription ;
        $data->save() ;
        $notification = array(
            'message' => "Prescription for $request->patientname_prescription Updated Succesfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctorprescription.viewallprescription')->with($notification) ;

    }

    //check Previous history of patient here
    public function PreviousHistoryOfPatient($id) {
        $data = patient_appointment::find($id) ;
        
        $allData = doctor_prescription::latest()->where('patientname_prescription' , $data->username_timeslot)->where('patientemail_prescription' , $data->useremail_timeslot)->get() ;
        return view('doctor_dashboard.doctor_prescription.view_previoushistorypage' , compact(['allData'])) ;
    }

    //User Based Prescription view view_userbasedprescription
    public function UserBasedPrescriptionVIew() {
        $data = User::all()->where('usertype' , 'user') ;
        return view('doctor_dashboard.doctor_prescription.view_userbasedprescription' , compact(['data'])) ;
    }

    //User BAsed Details Prescriptions View
    public function UserBasedPrescriptionDetailsVIew($id) {
        $userdata = User::find($id) ;
        
        $authid = Auth::user()->id ;
        $user = User::find($authid) ;

        $data = doctor_prescription::latest()->where('doctorname_prescription' , $user->name)->where('doctoremail_prescription' , $user->email)->where('patientname_prescription' , $userdata->name)->where('patientemail_prescription' , $userdata->email)->get() ;
        return view('doctor_dashboard.doctor_prescription.view_allprescriptions' , compact(['data'])) ;
    }

    //view all history of patient 
    public function ViewAllHistoryOFPatientOnAllApooitment($id) {
        $userid = doctor_prescription::find($id) ;
        $authid = Auth::user()->id ;
        $user = User::find($authid) ;

        $allData = doctor_prescription::latest()->where('doctorname_prescription' , $user->name)->where('doctoremail_prescription' , $user->email)->where('patientname_prescription' , $userid->patientname_prescription)->where('patientemail_prescription' , $userid->patientemail_prescription)->get() ;
        return view('doctor_dashboard.doctor_prescription.view_previoushistorypage' , compact(['allData'])) ;

    }
}
