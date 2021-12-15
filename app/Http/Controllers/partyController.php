<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\party ;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\DB;

class partyController extends Controller
{
    //adding the party  functionality here
    public function adminPartyAdd() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $includeinparty = array('Welcome Drink' , 'Snacks' , 'Music' , 'Games' , 'Drinks' , 'Open mic' , 'Artist Performance' , 'Host' , 'Stay' , 'Breakfast' , 'Dinner' , 'Gift' , 'Adventure' ) ;
        return view('backend.party.add_party' , compact(['user' , 'includeinparty'])) ;
    }

    //post or store the party here
    public function adminPartyStore(Request $request) {
        $dataDB = new party() ;
        $dataDB->party_hosted_by = $request->party_hosted_by ;
        $dataDB->party_name = $request->party_name ;
        $dataDB->party_description = $request->party_description ;
        $dataDB->party_starting_date = $request->party_starting_date ;
        $dataDB->party_ending_date = $request->party_ending_date ;
        $dataDB->party_starting_time = $request->party_starting_time ;
        $dataDB->party_ending_time = $request->party_ending_time ;
        $dataDB->party_city = $request->party_city ;
        $dataDB->party_location = $request->party_location ;
        $dataDB->party_fees = $request->party_fees ;
        $dataDB->party_discount = $request->party_discount ;
        $dataDB->party_includes = implode(',',$request->party_includes) ;
         // $data->image = $request->image ;

        if($request->file('party_banner_image')) {
            $file = $request->file('party_banner_image') ;
            @unlink(public_path('upload/party_banner_img/'.$dataDB->party_banner_image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/party_banner_img'),$filename) ;
            $dataDB['party_banner_image'] = $filename ;
        }

        //Multiple image uplod
        $party_gallary_images = array() ;
        if($multi_image_filess = $request->file('party_gallary_images')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/party_gallary_image/' ;  //path here

                $multi_image_url = $upload_path.$multi_image_full_name ; //
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $party_gallary_images[] = $multi_image_url ;
                $dataDB->party_gallary_images = implode('|' , $party_gallary_images) ;

            }
        }//multi image upload end here

        //now uplaod video of party
        $party_gallary_videos = array() ;
        if($multi_image_filess = $request->file('party_gallary_videos')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/party_gallary_videos/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $party_gallary_videos[] = $multi_image_url ;
                $dataDB->party_gallary_videos = implode('|' , $party_gallary_videos) ;

            }
        } //video upload end here

        $dataDB->save() ;
        $notification = array(
            'message' => 'New Party Added Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('adminparty.viewparty')->with($notification) ;

    }

    //view the Admin Party here
    public function adminPartyViewParty() {
        $partyData = party::latest()->get() ;
        return view('backend.party.view_party' , compact(['partyData'])) ;
    }

    //view party in details
    public function adminPartyDetailsView ($id) {
        $dataEdit  = party::find($id) ;
        return view('backend.party.detail_partyview' , compact(['dataEdit'])) ;

    }

    //edit the party here[view]
    public function adminPartyEdit($id) {
        $dataEdit = party::find($id) ;
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        $includeinparty = array('Welcome Drink' , 'Snacks' , 'Music' , 'Games' , 'Drinks' , 'Open mic' , 'Artist Performance' , 'Host' , 'Stay' , 'Breakfast' , 'Dinner' , 'Gift' , 'Adventure' ) ;

        return view('backend.party.edit_party' , compact(['dataEdit' , 'user' , 'includeinparty'])) ;
    }

    //edit data update here[post]
    public function adminPartyUpdate(Request $request,$id) {
        $dataDB = party::find($id) ;
        $dataDB->party_hosted_by = $request->party_hosted_by ;
        $dataDB->party_name = $request->party_name ;
        $dataDB->party_description = $request->party_description ;
        $dataDB->party_starting_date = $request->party_starting_date ;
        $dataDB->party_ending_date = $request->party_ending_date ;
        $dataDB->party_starting_time = $request->party_starting_time ;
        $dataDB->party_ending_time = $request->party_ending_time ;
        $dataDB->party_city = $request->party_city ;
        $dataDB->party_location = $request->party_location ;
        $dataDB->party_fees = $request->party_fees ;
        $dataDB->party_discount = $request->party_discount ;
        $dataDB->party_includes = implode(',',$request->party_includes) ;
         // $data->image = $request->image ;

        if($request->file('party_banner_image')) {
            $file = $request->file('party_banner_image') ;
            @unlink(public_path('upload/party_banner_img/'.$dataDB->party_banner_image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/party_banner_img'),$filename) ;
            $dataDB['party_banner_image'] = $filename ;
        }

        //Multiple image uplod
        $party_gallary_images = array() ;
        if($multi_image_filess = $request->file('party_gallary_images')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/party_gallary_image/' ;  //path here

                $multi_image_url = $upload_path.$multi_image_full_name ; //
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $party_gallary_images[] = $multi_image_url ;
                $dataDB->party_gallary_images = implode('|' , $party_gallary_images) ;

            }
        }//multi image upload end here

        //now uplaod video of party
        $party_gallary_videos = array() ;
        if($multi_image_filess = $request->file('party_gallary_videos')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/party_gallary_videos/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $party_gallary_videos[] = $multi_image_url ;
                $dataDB->party_gallary_videos = implode('|' , $party_gallary_videos) ;

            }
        } //video upload end here
        $dataDB->party_status = $request->party_status ;

        $dataDB->save() ;
        $notification = array(
            'message' => 'Party Updated Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('adminparty.viewparty')->with($notification) ;

    }

    //approve or deny the party status here
    public function adminPartyStatusEdit($id) {
        $dataEdit = party::find($id) ;
        return view('backend.party.approveedit_party' , compact(['dataEdit' ])) ;
    }

    //approve or deny the party status here
    public function adminPartyApproveOrDenyUpdate(Request $request,$id) {
        $dataDB = party::find($id) ;
        $dataDB->party_status = $request->party_status ;
        $dataDB->save() ;
        $notification = array(
            'message' => 'Party Status Updated Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('adminparty.viewparty')->with($notification) ;
    }

    //passed party view here
    public function adminPassedPartyView() {
        $startingdate = party::all('party_starting_date' ) ;
        $endingdate = party::all('party_ending_date' ) ;
        $currentDate = date('Y-m-d');
        $partyData = party::latest()->get()->where('party_ending_date' , '<=' , $currentDate ) ;
        return view('backend.party.view_party' , compact(['partyData'])) ;

    }

    //upcoming party here
    public function adminUpcomingParty(){
        $startingdate = party::all('party_starting_date' ) ;
        $endingdate = party::all('party_ending_date' ) ;
        $currentDate = date('Y-m-d');
        
        $partyData = party::latest()->get()->where('party_ending_date' , '>=' , $currentDate ) ;
        return view('backend.party.view_party' , compact(['partyData'])) ;

    }

    //deleting the party here
    public function adminPartyDelete($id) {
        $party = party::find($id) ;
        $party->delete() ;
        $notification = array(
            'message' => 'Party Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('adminparty.viewparty')->with($notification) ;
    }


}
