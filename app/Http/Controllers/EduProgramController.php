<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EduProgramController extends Controller
{
    public function childhoodDevelopment(){
        return view('frontEnd.educationProgram.specialeducationprogram.childhood-development');
    }
}
