<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service ;

class manageAdminDoctorServicesController extends Controller
{
    //add services adminservice.addservices
    public function addServices() {
        return view('backend.adminservice.addservices') ;
    }

    //store services
    public function StoreServices(Request $request) {
        $data = new service() ;
        $data->services_name = $request->services_name ;
        $data->services_description = $request->services_description ;
        $data->save() ;
        $notification = array(
            'message' => "$request->services_name  Service Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('services.view')->with($notification) ;

    }

    //view all services here viewservices
    public function ViewServices() {
        $data = service::latest()->get() ;
        return view('backend.adminservice.viewservices' , compact(['data'])) ;
    }

    //delete the services here
    public function DeleteServices($id) {
        $data = service::find($id) ;
        $data->delete() ;
        $notification = array(
            'message' => "Selected Service Deleted Successfully" ,
            'alert-type' => 'info'
        ) ;
        return redirect()->route('services.view')->with($notification) ;
    }
}
