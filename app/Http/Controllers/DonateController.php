<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donateProyash(){
        return view('frontEnd.donate.donate-proyash');
    }
}
