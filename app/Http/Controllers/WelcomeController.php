<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function getIndex(){

        return view('welcome');
    }

    public function getCourier(){

        return view('courier');
    }

    public function getCall(){
        
        return view('call');
    }
}
