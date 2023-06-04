<?php

namespace App\Http\Controllers;

use App\Models\Upoloadimage;
use Illuminate\Http\Request;

class UploadImgController extends Controller
{
    public $uploadimage, $imageName, $directory, $imgUrl;
    public function uploadImage(){
        return view('admin.gallery.upload-image');
    }
    public function newUploadImg(Request $request){
        $this->uploadimage = new Upoloadimage();
        $this->uploadimage->image = $this->saveImage($request);
        $this->uploadimage->save();
        return redirect('upload-image')->with('message','Image upload successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/upload-gallery-image/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function manageImage(){
        return view('admin.gallery.manage-image',[
            'uploadimages'=>Upoloadimage::all()
        ]);
    }
    public function editImage($id){
        return view('admin.gallery.edit-image',[
            'uploadimage'=>Upoloadimage::find($id)
        ]);
    }
    public function updateUploadImg(Request $request){
        $this->uploadimage = Upoloadimage::find($request->upiamge_id);
        if($request->file('image')){
            if ($this->uploadimage->image){
                unlink($this->uploadimage->image);
            }
            $this->uploadimage->image = $this->saveImage($request);
        }
        $this->uploadimage->save();
        return redirect('manage-image')->with('message','Image update successfully');
    }
    public function deleteImage(Request $request){
        $this->uploadimage = Upoloadimage::find($request->upiamge_id);
        if ($this->uploadimage->image){
            unlink($this->uploadimage->image);
        }
        $this->uploadimage->delete();
        return redirect('manage-image')->with('message','Image update successfully');
    }
}
