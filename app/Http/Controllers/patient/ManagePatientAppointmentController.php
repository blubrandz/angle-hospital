<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\User ;
use App\Models\appointment_date ;

class ManagePatientAppointmentController extends Controller
{
    //Add Manage Patient Appointment
    public function AddManagePatientAppointment() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $currentDate = date('Y-m-d');
        $dateData = appointment_date::latest()->where('date_appointmentdate', '>=' , $currentDate)->get() ;
        $doctorList = User::latest()->where('usertype','doctor')->get() ;
        return view('users_dashboard.patient_appointment.add_patientmanageappointment' , compact(['dateData' , 'user' , 'doctorList'])) ;
    }
}
