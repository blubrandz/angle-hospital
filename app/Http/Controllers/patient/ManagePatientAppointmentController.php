<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\User ;
use App\Models\appointment_date ;
use App\Models\appointment_timeslot ;

use function PHPUnit\Framework\returnValue;

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

    //AJAX [date down data for date here]
    public function GetDateManageAjaxData(Request $request) {
        $currentDate = date('Y-m-d');

        $doctornameid = $request->post('doctornameid') ;
        $doctordatelist = appointment_date::latest()->where('email_appointmentdate',$doctornameid)->where('date_appointmentdate', '>=' , $currentDate)->get() ;
        $html = '<option value="" selected="" disabled>----Select Date----</option>' ;
        foreach ($doctordatelist as $datelistdata) {
            $html.= '<option value="'. $datelistdata->date_appointmentdate .'" > '. $datelistdata->date_appointmentdate .' </option>' ;
        }
        echo $html;
    }

    //AJAX [time slot picker ]
    public function GetTimeManageAjaxData(Request $request) {
        $doctordateid = $request->post('doctordateid') ;
        $doctornamedata = $request->post('doctornamedata') ;
        $currentDate = date('Y-m-d');

        $usertabledata = User::all()->where('usertype','doctor')->where('name',$doctornamedata) ; //auth checking
        foreach($usertabledata as $key=>$item){
            // return $key = $item->email;
            $timeslotdatalist = appointment_timeslot::latest()->where('username_timeslot' , $key=$item->name)->where('useremail_timeslot' , $key=$item->email)->where('selectdate_timeslot',$doctordateid)->get() ;
            $html = '<option value="" selected="" disabled>----Select Timeslots----</option>' ;
            foreach ($timeslotdatalist as $timeslotsitem) {
                $html.= '<option value="'. $timeslotsitem->starting_time_timeslot . " - " . $timeslotsitem->ending_time_timeslot .'" > '. $timeslotsitem->starting_time_timeslot. " - ". $timeslotsitem->ending_time_timeslot  .' </option>' ;
            }
            echo $html;
        }
    }
}
