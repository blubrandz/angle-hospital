<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\disease;
use App\Models\disease_category ;

class diseaseManagementController extends Controller
{
    //add disease 
    public function AddDisease() {
        $maincatagoty = disease_category::latest()->get() ;
        return view('backend.disease.add_disease' , compact(['maincatagoty']) ) ;
    }

    //
    //STORE THE DISEASE HERE
    public function storeDisease(Request $request) {
        $dataDB = new disease() ;
        $dataDB->disease_main_catagory = $request->disease_main_catagory ;
        $dataDB->disease_name = $request->disease_name ;
        $dataDB->disease_description = $request->disease_description ;

        //Multiple image uplod
        $disease_image = array() ;
        if($multi_image_filess = $request->file('disease_image')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/disease/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $disease_image[] = $multi_image_url ;
                $dataDB->disease_image = implode('|' , $disease_image) ;

            }
        }//multi image upload end here

        //now uplaod video of sub machine
        $disease_video = array() ;
        if($multi_image_filess = $request->file('disease_video')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/disease/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $disease_video[] = $multi_image_url ;
                $dataDB->disease_video = implode('|' , $disease_video) ;

            }
        } //video upload end here
        $dataDB->save() ;
        $notification = array(
            'message' => "$request->disease_name  Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('disease.view')->with($notification) ;
    }

    //
    //VIEW DISEASE view_disease
    public function ViewDisease() {
        $data = disease::latest()->get() ;
        return view('backend.disease.view_disease' , compact(['data']) ) ;
    }

    //view Disease in Details  view_detail_disease
    public function DetailViewDisease($id) {
        $data = disease::find($id) ;
        return view('backend.disease.view_detail_disease' , compact(['data']) ) ;
    }

    //Edit Disease
    public function EditDisease($id) {
        $data = disease::find($id) ;
        $maincatagoty = disease_category::latest()->get() ;

        return view('backend.disease.edit_disease' , compact(['data' , 'maincatagoty']) ) ;
    }

    //update disease
    public function UpdateDisease(Request $request,$id) {
        $dataDB = disease::find($id) ;
        $dataDB->disease_main_catagory = $request->disease_main_catagory ;
        $dataDB->disease_name = $request->disease_name ;
        $dataDB->disease_description = $request->disease_description ;

        //Multiple image uplod
        $disease_image = array() ;
        if($multi_image_filess = $request->file('disease_image')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/disease/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $disease_image[] = $multi_image_url ;
                $dataDB->disease_image = implode('|' , $disease_image) ;

            }
        }//multi image upload end here

        //now uplaod video of sub machine
        $disease_video = array() ;
        if($multi_image_filess = $request->file('disease_video')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/disease/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move($upload_path,$multi_image_full_name)  ;
                $disease_video[] = $multi_image_url ;
                $dataDB->disease_video = implode('|' , $disease_video) ;

            }
        } //video upload end here
        $dataDB->save() ;
        $notification = array(
            'message' => "$request->disease_name  Update Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('disease.view')->with($notification) ;
    }

    //Delete Disease
    public function DeleteDisease($id) {
        $diseaseDelete = disease::find($id) ;
        $diseaseDelete->delete() ;
        $notification = array(
            'message' => "$diseaseDelete->disease_name Deleted Successfully" ,
            'alert-type' => 'info'
        ) ;
        return redirect()->route('disease.view')->with($notification) ;

    }
}
