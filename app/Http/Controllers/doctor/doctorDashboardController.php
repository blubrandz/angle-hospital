<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class doctorDashboardController extends Controller
{
    //doctor login functionality here
    public function doctorDashboardLogout() {
        $authData = Auth::logout();
        return redirect()->route('login') ;
    }
    
}
