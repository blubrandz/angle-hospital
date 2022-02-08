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


class doctorManagementTimeandDateController extends Controller
{
    //view all time and schedules of doctors
    public function viewAllDateAndTimeSchedules() {
        $data = appointment_timeslot::latest()->get() ;
        return view('backend.admin_doctormanagment.view_alldoctordetails' ,compact(['data'])) ;
    }

    //passed schedules
    public function viewAllPassedSchedules() {
        $currentDate = date('Y-m-d');
        $data = appointment_timeslot::latest()->where('selectdate_timeslot', '<' , $currentDate)->get() ;
        return view('backend.admin_doctormanagment.view_alldoctordetails' ,compact(['data'])) ;
    }

    //upcomming schedules
    public function viewAllUpcommingSchedules() {
        $currentDate = date('Y-m-d');
        $data = appointment_timeslot::latest()->where('selectdate_timeslot', '>=' , $currentDate)->get() ;
        return view('backend.admin_doctormanagment.view_alldoctordetails' ,compact(['data'])) ;
    }

    //view schedules of doctors based on names view_doctorlist
    public function viewallDoctorsList() {
        $data = User::all()->where('usertype' , 'doctor') ;
        return view('backend.admin_doctormanagment.view_doctorlist' ,compact(['data'])) ;
    }

    //view all list of doctor based  view_alldataofdoctorsdetails
    public function ViewAllListOfDOctor($id) {
        $currentDate = date('Y-m-d');
        $userdata = User::find($id) ;
        $data = appointment_timeslot::latest()->where('username_timeslot' , $userdata->name)->where('useremail_timeslot' , $userdata->email)->get() ;

        return view('backend.admin_doctormanagment.view_alldataofdoctorsdetails' ,compact(['userdata' , 'data'])) ;
    }

    //View all list of doctor upcooming schedules ViewAllUpcommingListOfDOctor
    public function ViewAllUpcommingListOfDOctor($id) {
        $currentDate = date('Y-m-d');
        $userdata = User::find($id) ;
        $data = appointment_timeslot::latest()->where('username_timeslot' , $userdata->name)->where('useremail_timeslot' , $userdata->email)->where('selectdate_timeslot', '>=' , $currentDate)->get() ;
        return view('backend.admin_doctormanagment.view_alldataofdoctorsdetails' ,compact(['userdata' , 'data'])) ;
    }

    //View all list of doctor passed schedule ViewAllPassedListOfDOctor
    public function ViewAllPassedListOfDOctor($id) {
        $currentDate = date('Y-m-d');
        $userdata = User::find($id) ;
        $data = appointment_timeslot::latest()->where('username_timeslot' , $userdata->name)->where('useremail_timeslot' , $userdata->email)->where('selectdate_timeslot', '<' , $currentDate)->get() ;
        return view('backend.admin_doctormanagment.view_alldataofdoctorsdetails' ,compact(['userdata' , 'data'])) ;
    }

    //vdelete the doctor schedules
    public function DeleteDoctorsSchedules($id) {
        $data = appointment_timeslot::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => 'Timeslot Deleted',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('doctormanagement.viewall')->with($notification) ;    }
    
}
