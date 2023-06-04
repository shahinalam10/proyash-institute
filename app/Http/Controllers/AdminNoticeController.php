<?php

namespace App\Http\Controllers;

use App\Models\proyashNotice;
use Illuminate\Http\Request;

class AdminNoticeController extends Controller
{
    public $proyashnotice, $notice_file, $fileName, $directory,$fileUrl;
    public function addNotice(){
        return view('admin.noticeBoard.add-notice');
    }
    public function manageNotice(){
        return view('admin.noticeBoard.manage-notice',[
            'proyashnotices'=>proyashNotice::all()
        ]);
    }
    public function saveNewNotice(Request $request){
        $this->proyashnotice = new proyashNotice();
        $this->proyashnotice->title = $request->title;
        $this->proyashnotice->notice_file = $this->saveFile($request);
        $this->proyashnotice->date = $request->date;
        $this->proyashnotice->save();
        return redirect('add-notice')->with('message','Data insert successfully');
    }
    private function saveFile($request){
        $this->notice_file = $request->file('notice_file');
        $this->fileName = rand().'.'.$this->notice_file->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/proyash-notice/';
        $this->fileUrl = $this->directory.$this->fileName;
        $this->notice_file->move($this->directory,$this->fileName);
        return $this->fileUrl;
    }
    public function editNotice($id){
        return view('admin.noticeBoard.edit-notice',[
            'proyashnotice'=>proyashNotice::find($id)
        ]);
    }
    public function updateNotice(Request $request){
        $this->proyashnotice = proyashnotice::find($request->notice_id);
        $this->proyashnotice->title = $request->title;
        if ($request->file('notice_file')){
            if ($this->proyashnotice->notice_file){
                unlink($this->proyashnotice->notice_file);
            }
            $this->proyashnotice->notice_file = $this->saveFile($request);
        }
        $this->proyashnotice->date = $request->date;
        $this->proyashnotice->save();
        return redirect('manage-notice')->with('message','Data update successfully');
    }
    public function deleteNotice(Request $request){
        $this->proyashnotice = proyashnotice::find($request->notice_id);
        if ($this->proyashnotice->notice_file){
            unlink($this->proyashnotice->notice_file);
        }
        $this->proyashnotice->delete();
        return redirect('manage-notice')->with('message','Data delete successfully');
    }

}
