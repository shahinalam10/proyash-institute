<?php

namespace App\Http\Controllers;


use App\Models\proyashLogo;
use App\Models\imageSlider;
use App\Models\newsSlider;
use App\Models\proyashNotice;
use App\Models\proyashService;
use App\Models\administrativePerson;
use App\Models\Upoloadimage;


class HomeController extends Controller
{
    public function index(){
//      $proyashLogo = proyashLogo::all();
        $proyashnotice = proyashNotice::all();
        $imageSliders = imageSlider::all();
        $newsSlider = newsSlider::all();
        $uploadimage = Upoloadimage::all();

        return view('frontEnd.home.home',[
//          'proyashLogo' => $proyashLogo,
            'proyashnotice'=>$proyashnotice,
            'imageSliders'=> $imageSliders,
            'newSlider' => $newsSlider,
            'proyashnotices'=>proyashNotice::orderBy('id')->take(2)->get(),
            'services'=> proyashService::orderBy('id','desc')->take(4)->get(),
            'uploadimage'=>$uploadimage,
            'administrative'=> administrativePerson::orderBy('id','desc')->take(6)->get()
        ]);
    }
}
