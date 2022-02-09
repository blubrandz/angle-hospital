<?php

namespace App\Http\Controllers\receptionist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class ReceptionistController extends Controller
{
    //Loging Out the Receptionist here
    public function ReceptionistLogout() {
        Auth::logout() ;
        return Redirect()->route('login') ;
    }
}
