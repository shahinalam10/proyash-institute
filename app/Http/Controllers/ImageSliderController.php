<?php

namespace App\Http\Controllers;

use App\Models\imageSlider;
use Illuminate\Http\Request;

class ImageSliderController extends Controller
{
    public $imageSlider,$image, $imageName, $directory, $imgUrl;
    public function addSlider(){
        return view('admin.imageSlider.add-slider');
    }
    public function manageSlide(){
        return view('admin.imageSlider.manage-slide',[
            'imagesliders'=>imageSlider::all()
        ]);
    }

    public function newSaveSlide(Request $request){
        $this->imageslider = new imageSlider();
        $this->imageslider->title = $request->title;
        $this->imageslider->slide_content = $request->slide_content;
        $this->imageslider->image = $this->saveImage($request);
        $this->imageslider->save();
        return redirect('add-slider')->with('message','Data insert successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/image-slider/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function editSlide($id){
        return view('admin.imageSlider.edit-slide',[
            'imageslider'=>imageSlider::find($id)
        ]);
    }

    public function updateSlide(Request $request){
        $this->imageslider = imageSlider::find($request->slide_id);
        $this->imageslider->title = $request->title;
        $this->imageslider->slide_content = $request->slide_content;
        if ($request->file('image')){
            if ($this->imageslider->image){
                unlink($this->imageslider->image);
            }
            $this->imageslider->image = $this->saveImage($request);
        }

        $this->imageslider->save();
        return redirect('manage-slide')->with('message','Data update successfully');
    }

    public function deleteSlider(Request $request){
        $this->imageslider = imageSlider::find($request->slide_id);
        if ($this->imageslider->image){
            unlink($this->imageslider->image);
        }
        $this->imageslider->delete();
        return redirect('manage-slide')->with('message','Data delete successfully');

    }

}
