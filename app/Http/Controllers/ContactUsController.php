<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function getInTouch(){
        return view('frontEnd.getInTouch.get-in-touch');
    }
}
