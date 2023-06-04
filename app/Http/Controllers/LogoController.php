<?php

namespace App\Http\Controllers;

use App\Models\proyashLogo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public $proyashlogo, $image, $imageName, $directory, $imgUrl;
    public function addLogo(){
        return view('admin.logoManage.add-logo');
    }
    public function manageLogo(){
        return view('admin.logoManage.manage-logo',[
            'proyashlogos'=>proyashLogo::all()
        ]);
    }
    public function saveNewLogo(Request $request){
    $this->proyashlogo = new proyashLogo();
    $this->proyashlogo->logo = $this->saveImage($request);
    $this->proyashlogo->save();
    return redirect('add-logo')->with('message','Logo insert successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('logo');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/proyash-logo/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function editLogo($id){
        return view('admin.logoManage.edit-logo',[
            'proyashlogo'=>proyashLogo::find($id)
        ]);
    }
    public function updateLogo(Request $request){
        $this->proyashlogo = proyashLogo::find($request->logo_id);
        if ($request->file('logo')){
            if ($this->proyashlogo->logo){
                unlink($this->proyashlogo->logo);
            }
            $this->proyashlogo->logo = $this->saveImage($request);
        }
        $this->proyashlogo->save();
        return redirect('manage-logo')->with('message','Logo insert successfully');
    }
    public function deleteLogo(Request $request){
        $this->proyashlogo = proyashLogo::find($request->logo_id);
        if ($this->proyashlogo->logo){
            unlink($this->proyashlogo->logo);
        }
        $this->proyashlogo->delete();
        return redirect('manage-logo')->with('message','logo delete successfully');
    }

}
