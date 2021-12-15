<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userMessageController extends Controller
{
    ///user chat page [view] here
    public function userMessageChatView() {
       return view('users_dashboard.usermessage.view_usermessage') ;
    }
}
