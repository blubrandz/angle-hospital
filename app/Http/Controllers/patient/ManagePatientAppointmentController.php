<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\User ;
use App\Models\appointment_date ;
use App\Models\appointment_timeslot ;
use App\Models\patient_appointment ;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Queue\Events\Looping;
use Illuminate\Support\Facades\DB ;

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
        $doctordatelist = appointment_date::all()->where('email_appointmentdate',$doctornameid)->where('date_appointmentdate', '>=' , $currentDate) ;

        $html = '<option value="" selected="" disabled>----Select Date----</option>' ;
        foreach ($doctordatelist as $datelistdata) {
            $html.= '<option value="'. $datelistdata->date_appointmentdate .'" > '. $datelistdata->date_appointmentdate .' </option>' ;
        }
        echo $html;
    }

    //AJAX [time slot picker ]
    // public function GetTimeManageAjaxData(Request $request) {
    //     $doctordateid = $request->post('doctordateid') ;
    //     $doctornamedata = $request->post('doctornamedata') ;
    //     $currentDate = date('Y-m-d');

    //     $usertabledata = User::all()->where('usertype','doctor')->where('name',$doctornamedata) ; //auth checking
    //     foreach($usertabledata as $key=>$item){
    //         // return $key = $item->email;
    //         $timeslotdatalist = appointment_timeslot::latest()->where('username_timeslot' , $key=$item->name)->where('useremail_timeslot' , $key=$item->email)->where('selectdate_timeslot',$doctordateid)->get() ;
    //         $html = '<option value="" selected="" disabled>----Select Timeslots----</option>' ;
    //         foreach ($timeslotdatalist as $timeslotsitem) {
    //             $html.= '<option value="'. $timeslotsitem->starting_time_timeslot . " - " . $timeslotsitem->ending_time_timeslot .'" > '. $timeslotsitem->starting_time_timeslot. " - ". $timeslotsitem->ending_time_timeslot  .' </option>' ;
    //         }
    //         echo $html;
    //     }
    // }

    //AJAX [time slot picker ]
    public function GetTimeManageAjaxData(Request $request) {
        $doctordateid = $request->post('doctordateid') ;
        $doctornamedata = $request->post('doctornamedata') ;
        $currentDate = date('Y-m-d');
        $patientappoitntmentData = patient_appointment::all() ;
        
        $usertabledata = User::all()->where('usertype','doctor')->where('name',$doctornamedata) ; //auth checking
        foreach($usertabledata as $key=>$item){
            // return $key = $item->email;

            $timeslotdatalist = appointment_timeslot::all()->where('username_timeslot' , $key=$item->name)->where('useremail_timeslot' , $key=$item->email)->where('selectdate_timeslot',$doctordateid) ;
            //exp
            $patientBookedTimeSlotsData = patient_appointment::all()->where('pateintappo_doctorname' , $key=$item->email)->where('pateintappo_doctordate', $doctordateid) ;
            // foreach($patientBookedTimeSlotsData as $key=>$disableSelectData) {
            //     $disableBtnData = $disableSelectData->pateintappo_doctortimeslot ;
            // }
            // foreach($patientBookedTimeSlotsData as $key=>$disableSelectData) {
            //     $disableBtnData = $disableSelectData->pateintappo_doctortimeslot ;
                
            //     if(!empty($disableBtnData)) {
            //         $data =  $disableBtnData ;
            //         echo $data . "<br>";
            //     }
            //     else{
            //         $disableBtnData = null ;

            //     }
            // }
            //exp end
            $html = '<option value="" selected="" disabled>----Select Timeslots----</option>' ;
            foreach ($timeslotdatalist as $timeslotsitem ) {
                
                $html.= '<option value="'. $timeslotsitem->starting_time_timeslot . " - " . $timeslotsitem->ending_time_timeslot .'" > '. $timeslotsitem->starting_time_timeslot. " - ". $timeslotsitem->ending_time_timeslot  .' </option>' ;
                // "'.$disableBtnData ==$timeslotsitem->starting_time_timeslot . " - " . $timeslotsitem->ending_time_timeslot .'"
                foreach($patientBookedTimeSlotsData as $key=>$disableSelectData) {
                    $disableBtnData = $disableSelectData->pateintappo_doctortimeslot ;
                    
                    if(!empty($disableBtnData)) {
                        $data =  $disableBtnData ;
                        echo $data . "<br>";
                    }
                    else{
                        $disableBtnData = null ;
    
                    }
                }
                
            }
            echo $html;
        }
    }


    //store patient appointment dated
    public function StoreManagePatientAppointment(Request $request) {
        $data = new patient_appointment() ;
        $data->username_timeslot = $request->username_timeslot ;
        $data->useremail_timeslot = $request->useremail_timeslot ;
        $data->pateintappo_doctorname = $request->pateintappo_doctorname ;
        $data->pateintappo_doctordate = $request->pateintappo_doctordate ;
        $data->pateintappo_doctortimeslot = $request->pateintappo_doctortimeslot ;
        $data->patientappo_phonenumber = $request->patientappo_phonenumber ;
        $data->patientappo_bookingstatus = $request->patientappo_bookingstatus ;
        $data->save() ;
        $notification = array(
            'message' => "Your Appointment at $request->pateintappo_doctordate Booked succesfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('patientappointment.view')->with($notification) ;
    }

    //view paitent appointments
    public function ViewManagePatientAppointment() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $data = patient_appointment::latest()->where('username_timeslot', $user->name)->where('useremail_timeslot',$user->email)->get() ;       
        return view('users_dashboard.patient_appointment.view_pateintmanagementappo',compact(['data'])) ;
    }

    //Rescudaling add from here
    public function AddRescheduleManagePatientAppointment($id) {
        $resData = patient_appointment::find($id) ;
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $currentDate = date('Y-m-d');
        $dateData = appointment_date::latest()->where('date_appointmentdate', '>=' , $currentDate)->get() ;
        $doctorList = User::latest()->where('usertype','doctor')->get() ;

        return view('users_dashboard.patient_appointment.rescedual_patientappoitmentmanagement',compact(['resData' , 'dateData' , 'user' , 'doctorList'])) ;
    }

    //update rescedual form data 
    public function UpdateGetDateManageAjaxData(Request $request) {
        $currentDate = date('Y-m-d');
        

        $doctornameid = $request->post('doctornameid') ;
        $doctordatelist = appointment_date::latest()->where('email_appointmentdate',$doctornameid)->where('date_appointmentdate', '>=' , $currentDate)->get() ;
        $html = '<option value="" selected="" disabled>----Select Date----</option>' ;
        foreach ($doctordatelist as $datelistdata) {
            $html.= '<option value="'. $datelistdata->date_appointmentdate .'" > '. $datelistdata->date_appointmentdate .' </option>' ;
        }
        echo $html;
    }

    //update resceduale form data [ajex]
    public function UpdateGetTimeManageAjaxData(Request $request) {
        $doctordateid = $request->post('doctordateid') ;
        $doctornamedata = $request->post('doctornamedata') ;
        $currentDate = date('Y-m-d');
        $patientappoitntmentData = patient_appointment::all() ;
        
        $usertabledata = User::all()->where('usertype','doctor')->where('name',$doctornamedata) ; //auth checking
        foreach($usertabledata as $key=>$item){
            // return $key = $item->email;

            $timeslotdatalist = appointment_timeslot::latest()->where('username_timeslot' , $key=$item->name)->where('useremail_timeslot' , $key=$item->email)->where('selectdate_timeslot',$doctordateid)->get() ;
            //exp
            $patientBookedTimeSlotsData = patient_appointment::latest()->where('pateintappo_doctorname' , $key=$item->email)->where('pateintappo_doctordate', $doctordateid)->get() ;
            //exp end
            $html = '<option value="" selected="" disabled>----Select Timeslots----</option>' ;
            foreach ($timeslotdatalist as $timeslotsitem ) {
                
                $html.= '<option value="'. $timeslotsitem->starting_time_timeslot . " - " . $timeslotsitem->ending_time_timeslot .'" > '. $timeslotsitem->starting_time_timeslot. " - ". $timeslotsitem->ending_time_timeslot  .' </option>' ;
                // "'.$disableBtnData ==$timeslotsitem->starting_time_timeslot . " - " . $timeslotsitem->ending_time_timeslot .'"
                foreach($patientBookedTimeSlotsData as $key=>$disableSelectData) {
                    $disableBtnData = $disableSelectData->pateintappo_doctortimeslot ;
                    
                    if(!empty($disableBtnData)) {
                        $data =  $disableBtnData ;
                        echo $data . "<br>";
                    }
                    else{
                        $disableBtnData = null ;
    
                    }
                }
                
            }
            echo $html;
        }

    }

    //updated or Resceduled appoitment
    public function UpdateManagePatientAppointment(Request $request,$id) {
        $data = patient_appointment::find($id) ;
        $data->username_timeslot = $request->username_timeslot ;
        $data->useremail_timeslot = $request->useremail_timeslot ;
        $data->pateintappo_doctorname = $request->pateintappo_doctorname ;
        $data->pateintappo_doctordate = $request->pateintappo_doctordate ;
        $data->pateintappo_doctortimeslot = $request->pateintappo_doctortimeslot ;
        $data->patientappo_phonenumber = $request->patientappo_phonenumber ;
        $data->pateintappo_rescedualed = $request->pateintappo_rescedualed ;

        $data->save() ;
        $notification = array(
            'message' => "Your Appointment at $request->pateintappo_doctordate  with Dr.$request->pateintappo_doctorname Booked succesfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('patientappointment.view')->with($notification) ;


    }
}
