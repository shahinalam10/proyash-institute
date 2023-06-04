<?php

namespace App\Http\Controllers;

use App\Models\newsSlider;
use Illuminate\Http\Request;

class ProyashNewsController extends Controller
{
    public $newsslider, $image, $imageName, $directory, $imgUrl;
    public function proyashNewsSlider(){
        return view('admin.proyashNewsSlider.proyash-news-slider');
    }

    public function manageNewsSlider(){
        return view('admin.proyashNewsSlider.manage-news-slider',[
            'newssliders'=>newsSlider::all()
        ]);
    }

    public function saveProyashNews(Request $request){
        $this->newsslider = new newsSlider();
        $this->newsslider->title = $request->title;
        $this->newsslider->news_content = $request->news_content;
        $this->newsslider->image = $this->saveImage($request);
        $this->newsslider->save();
        return redirect('proyash-news-slider')->with('message','Data insert successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/proyash-news-slider/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function editNewsSlider($id){
        return view('admin.proyashNewsSlider.edit-news-slider',[
            'newsslider'=>newsSlider::find($id)
        ]);
    }
    public function updateNewsSlider(Request $request){
        $this->newsslider = newsSlider::find($request->news_slider_id);
        $this->newsslider->title = $request->title;
        $this->newsslider->news_content = $request->news_content;
        if ($request->file('image')){
            if ($this->newsslider->image){
                unlink($this->newsslider->image);
            }
            $this->newsslider->image = $this->saveImage($request);
        }
        $this->newsslider->save();
        return redirect('manage-news-slider')->with('message','Data update successfully');
    }
    public function deleteNewsSlider(Request $request){
        $this->newsslider = newsSlider::find($request->news_slider_id);
        if ($this->newsslider->image){
            unlink($this->newsslider->image);
        }
        $this->newsslider->delete();
        return redirect('manage-news-slider')->with('message','Data delete successfully');
    }
}
