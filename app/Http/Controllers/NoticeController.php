<?php

namespace App\Http\Controllers;

use App\Models\proyashNotice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticeBoard(){
        $proyashnotice = proyashNotice::all();
        return view('frontEnd.noticeBoard.notice-board',[
            'proyashnotice'=>$proyashnotice
        ]);
    }
}
