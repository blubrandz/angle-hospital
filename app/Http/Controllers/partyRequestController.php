<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\party ;
use App\Models\User;
use Illuminate\Support\Facades\Auth ;
use App\Models\userparty_request ;
use Illuminate\Support\Facades\Redirect ;


class partyRequestController extends Controller
{
    //party niew here
    public function partyRequestPartyView() {
        $data = userparty_request::latest()->get() ;
        $partyData = party::latest()->where('party_status' , 'approve')->get() ;
        return view('backend.party_request.partyview_admin' , compact(['partyData'])) ;
    }

    //view the users [request]
    public function partyRequestView($id) {
        $partyData = party::find($id)->party_name ;
        $userRequestData = userparty_request::latest()->where('request_party_name' , $partyData)->get() ;
        return view('backend.party_request.partyuser_request_admin' , compact(['userRequestData'])) ;
    }

    //user status partyRequestUserStatus
    public function partyRequestUserStatus($id) {
        $dataParty = userparty_request::find($id) ;
        return view('backend.party_request.updaterequest_admin' , compact(['dataParty'])) ;
    }

    //user sttsus update post
    public function partyRequestUserStatusUpdate(Request $request, $id) {
        $dataParty = userparty_request::find($id) ;
        $partyurl = party::all()->where('party_name',$dataParty->request_party_name) ;
        $dataParty->user_party_request_status = $request->user_party_request_status ;
        $dataParty->save() ;
        $notification = array(
            'message' => 'User Party status Updated',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('partyrequest.partyview')->with($notification) ;
    }

    //viewing the profile of user here
    public function partyRequestUserProfileData($id) {
        // $data = User::find($id) ;
        // return view('backend.party_request.view_userdetails' , compact(['data'])) ;

        $dataPartyRequest = userparty_request::find($id) ;
        $dataname =  $dataPartyRequest->user_party_request_username ;
        $dataemail = $dataPartyRequest->user_party_request_useremail ;
        $data = User::all()->where('name', $dataname)->where('email' , $dataemail)->first() ;
        return view('backend.party_request.view_userdetails' , compact(['data'])) ;
    }



}
