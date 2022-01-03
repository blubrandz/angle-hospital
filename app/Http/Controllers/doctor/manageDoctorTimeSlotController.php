<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth ;
use App\Models\appointment_date;
use App\Models\appointment_timeslot ;

class manageDoctorTimeSlotController extends Controller
{
    //add timeslot here
    public function AddManageDoctorTimeSlot() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $currentDate = date('Y-m-d');
        $dateData = appointment_date::latest()->where('username_appointmentdate' , $user->name)->where('email_appointmentdate' , $user->email)->where('date_appointmentdate', '>=' , $currentDate)->get() ;
        return view('doctor_dashboard.doctor_timeslot.add_timeslot' , compact(['user' , 'dateData'])) ;
    }

    //store the time value here
    public function StoreManageDoctorTimeSlot(Request $request) {
        $data = new appointment_timeslot() ;
        $data->username_timeslot = $request->username_timeslot ;
        $data->useremail_timeslot = $request->useremail_timeslot ;
        $data->selectdate_timeslot = $request->selectdate_timeslot ;
        $data->starting_time_timeslot = $request->starting_time_timeslot ;
        $data->ending_time_timeslot = $request->ending_time_timeslot ;
        $data->save() ;
        $notification = array(
            'message' => "New Timeslot Listed Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('doctortimeslots.view')->with($notification) ;
    }

    //view the timeslot
    public function ViewManageDoctorTimeSlot() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $data = appointment_timeslot::latest()->where('username_timeslot' , $user->name)->where('useremail_timeslot',$user->email)->get() ;
        return view('doctor_dashboard.doctor_timeslot.view_timeslot' , compact(['data'])) ;
    }

    //delete timeslot data here
    public function DeleteManageDoctorTimeSlot($id) {
        $data = appointment_timeslot::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Selected Timeslot Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctortimeslots.view')->with($notification) ;
    }
}
