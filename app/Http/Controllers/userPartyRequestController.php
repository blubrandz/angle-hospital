<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\party ;
use App\Models\User;
use Illuminate\Support\Facades\Auth ;
use App\Models\userparty_request ;


class userPartyRequestController extends Controller
{
    //form page view of user party request
    public function userPartyRequestAdd() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $includeinparty = array('Singing' , 'Hosting' , 'Promoting' , 'Sharing Story' , 'Comedy' , 'Dancing') ;

        $partyData = party::latest()->get()->where('party_status' , 'approve') ;
        return view('users_dashboard.party_request.add_partyrequest' , compact(['partyData' , 'user' , 'includeinparty'])) ;
    }

    //store the user party  request here
    public function userPartyRequestStore(Request $request) {
        $dataDB = new userparty_request() ;
        $dataDB->user_party_request_username = $request->user_party_request_username ;
        $dataDB->user_party_request_useremail = $request->user_party_request_useremail ;
        $dataDB->user_party_request_userphoneno1 = $request->user_party_request_userphoneno1 ;
        $dataDB->Request_party_name = $request->Request_party_name ;
        $dataDB->user_party_contribution = implode(',' , $request->user_party_contribution) ;
        $dataDB->user_party_request_userphoneno2 = $request->user_party_request_userphoneno2 ;
        $dataDB->party_request_special_message = $request->party_request_special_message ;
        $dataDB->save() ;
        $notification = array(
            'message' => 'Your Request Has Been Send Sucessfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('userpartyrequest.partyrequestadd')->with($notification) ;
    }

    //view all the party request by user here  view_partyrequest
    public function userPartyRequestView() {
        $emailData = Auth::user()->email ;
        $PartyDataView = userparty_request::latest()->get()->where('user_party_request_useremail' ,$emailData ) ;
        return view('users_dashboard.party_request.view_partyrequest' , compact(['PartyDataView'])) ;
    }

    //view all the party details by user 
    public function userPartyRequestPartyDetails($id) {
        $data = userparty_request::find($id) ;
        $reqParty = $data->request_party_name ;
        $partyData = party::all()->where('party_name' , $reqParty) ;
        return view('users_dashboard.partys.view_upcommingparty' , compact(['partyData' ])) ;
    }

    //viewing the profile of user here
    // public function userPartyRequestPartyViewProfiles($id) {
    //     $data = User::find($id) ;
    //     return view('backend.party_request.view_userdetails' , compact(['data'])) ;
    // }


    
}
