<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Auth ;
use App\Models\appointment_date;


class manageDoctorDaysController extends Controller
{
    //add dayas page
    public function AddManageDoctorDays() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        return view('doctor_dashboard.doctor_days.add_days' , compact(['user']));
    }

    //store the value
    public function StoreManageDoctorDays(Request $request) {
        $data = new appointment_date() ;
        $data->username_appointmentdate = $request->username_appointmentdate ;
        $data->email_appointmentdate = $request->email_appointmentdate ;
        $data->date_appointmentdate = $request->date_appointmentdate ;
        $data->save() ;
        $notification = array(
            'message' => "$request->date_appointmentdate Listed Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctorday.view')->with($notification) ;
    }

    //view for dates  
    public function ViewManageDoctorDays() {
        $data = appointment_date::latest()->get() ;
        return view('doctor_dashboard.doctor_days.view_days' , compact(['data']));
    }

    //view upcoming dates
    public function ViewUpcomingManageDoctorDays() {
        $currentDate = date('Y-m-d');
        $data = appointment_date::latest()->where('date_appointmentdate', '>=' , $currentDate)->get() ;
        return view('doctor_dashboard.doctor_days.view_days' , compact(['data']));
    }

    //view passed party 
    public function ViewPassedAppointmentManageDoctorDays() {
        $currentDate = date('Y-m-d');
        $data = appointment_date::latest()->where('date_appointmentdate', '<=' , $currentDate)->get() ;
        return view('doctor_dashboard.doctor_days.view_days' , compact(['data']));
    }

    //delete the date
    public function DeleteManageDoctorDays($id) {
        $data = appointment_date::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Selected date Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctorday.view')->with($notification) ;
    }
}
