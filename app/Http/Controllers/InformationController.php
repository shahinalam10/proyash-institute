<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function schoolAdmission(){
        return view('frontEnd.information.school.school-admission');
    }
}
