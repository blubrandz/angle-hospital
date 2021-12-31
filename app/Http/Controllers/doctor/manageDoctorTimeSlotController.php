<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class manageDoctorTimeSlotController extends Controller
{
    //add timeslot here
    public function AddManageDoctorTimeSlot() {
        return view('doctor_dashboard.doctor_timeslot.add_timeslot') ;
    }
}
