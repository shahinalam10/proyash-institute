<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutProyashController extends Controller
{
    public function gloriousHistory(){
        return view('frontEnd.aboutProyash.overview.glorious-history');
    }

    public function organizStructure(){
        return view('frontEnd.aboutProyash.overview.organiz-structure');
    }

    public function educationSystem(){
        return view('frontEnd.aboutProyash.overview.education-system');
    }

    public function proyashLibrary(){
        return view('frontEnd.aboutProyash.facilities.proyash-library');
    }
    public function administrativeBody(){
        return view('frontEnd.aboutProyash.regulatorybody.administrative-body');
    }
}
