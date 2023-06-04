<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public $gallery, $image, $imageName, $directory, $imgUrl;
    public function createAlbum(){
        return view('admin.gallery.create-album');
    }
    public function newAlbum(Request $request){
     $this->gallery = new Gallery();
     $this->gallery->name = $request->name;
     $this->gallery->image = $this->saveImage($request);
     $this->gallery->save();
     return redirect('create-album')->with('message','Album create successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/album-image/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function manageAlbum(){
        return view('admin.gallery.manage-album',[
            'galleries'=>Gallery::all()
        ]);
    }
    public function editAlbum($id){
        return view('admin.gallery.edit-album',[
            'gallery'=>Gallery::find($id)
        ]);
    }
    public function updateAlbum(Request $request){
        $this->gallery = Gallery::find($request->gallery_id);
        $this->gallery->name = $request->name;
        if ($request->file('image')){
            if ($this->gallery->image){
                unlink($this->gallery->image);
            }
            $this->gallery->image = $this->saveImage($request);
        }
        $this->gallery->save();
        return redirect('manage-album')->with('message','Album update successfully');
    }
    public function deleteAlbum(Request $request){
        $this->gallery = Gallery::find($request->gallery_id);
        if ($this->gallery->image){
            unlink($this->gallery->image);
        }
        $this->gallery->delete();
        return redirect('manage-album')->with('message','Delete album successfully');
    }

}
