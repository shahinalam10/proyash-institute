<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function medicalAssessment(){
        return view('frontEnd.serviceAvailable.specializedintervation.medical-assessment');
    }
}
