<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentLogin(){
        return view('frontEnd.applyTherapy.student-login');
    }
    public function studentRegister(){
        return view('frontEnd.applyTherapy.student-register');
    }
}
