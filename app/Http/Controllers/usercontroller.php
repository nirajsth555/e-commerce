<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class usercontroller extends Controller
{
    //

    public function getHomepage(){
    	return view('user.Homepage');
    }
}
