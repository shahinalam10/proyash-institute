<?php

namespace App\Http\Controllers;

use App\Models\proyashService;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public $proyashservice, $image, $imageName, $directory,$imgUrl;
    public function addService(){
        return view('admin.ourServices.add-service');
    }
    public function serviceManage(){
        return view('admin.ourServices.service-manage',[
            'proyashservices'=>proyashService::all()
        ]);
    }
    public function saveNewService(Request $request){
    $this->proyashservice = new proyashService();
    $this->proyashservice->title = $request->title;
    $this->proyashservice->service_content = $request->service_content;
    $this->proyashservice->image = $this->saveImage($request);
    $this->proyashservice->save();
    return redirect('add-service')->with('message','Data insert successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/proyash-services/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function editService($id){
        return view('admin.ourServices.edit-service',[
            'proyashservice'=>proyashService::find($id)
        ]);

    }
    public function updateService(Request $request){
        $this->proyashservice = proyashService::find($request->service_id);
        $this->proyashservice->title = $request->title;
        $this->proyashservice->service_content = $request->service_content;
        if ($request->file('image')){
            if ($this->proyashservice->image){
                unlink($this->proyashservice->image);
            }
            $this->proyashservice->image = $this->saveImage($request);
        }
        $this->proyashservice->save();
        return redirect('service-manage')->with('message','Data update successfully');
    }
    public function deleteService(Request $request){
        $this->proyashservice = proyashService::find($request->service_id);
        if ($this->proyashservice->image){
            unlink($this->proyashservice->image);
        }
        $this->proyashservice->delete();
        return redirect('service-manage')->with('message','Data delete successfully');

    }

}
