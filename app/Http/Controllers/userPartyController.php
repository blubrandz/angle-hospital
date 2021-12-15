<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\party ;
use App\Models\User;

class userPartyController extends Controller
{
    //upcomming party view here
    public function userUpcommingPartyView() {
        $startingdate = party::all('party_starting_date' ) ;
        $endingdate = party::all('party_ending_date' ) ;
        $host = User::all('name') ;
        $currentDate = date('Y-m-d');
        $partyData = party::latest()->get()->where('party_status' , 'approve')->where('party_ending_date' , '>=' , $currentDate) ;
        return view('users_dashboard.partys.view_upcommingparty' , compact(['partyData' , 'host' ])) ;
    }

    //missed party here
    public function userMissedPartyView() {
        $startingdate = party::all('party_starting_date' ) ;
        $endingdate = party::all('party_ending_date' ) ;
        $host = User::all('name') ;
        $currentDate = date('Y-m-d');
        $partyData = party::latest()->get()->where('party_status' , 'approve')->where('party_ending_date' , '<=' , $currentDate) ;
        return view('users_dashboard.partys.view_upcommingparty' , compact(['partyData' , 'host' ])) ;

    }

    //full details of party is here   detail_upcommingparty
    public function userPartyFullDetailsView($id) {
        $detailPartyData = party::find($id) ;
        return view('users_dashboard.partys.detail_upcommingparty' , compact(['detailPartyData'])) ;
    }
}
