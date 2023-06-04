<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function photosGallery(){

       $gallery = Gallery::all();
        return view('frontEnd.resource.photos.photos-gallery',[
            'gallery'=> $gallery

        ]);
    }
    public function videoGallery(){
        return view('frontEnd.resource.videos.video-gallery');
    }
    public function proyashProspectus(){
        return view('frontEnd.resource.prospectus.proyash-prospectus');
    }

    public function admissionForm(){
        return view('frontEnd.resource.form.admission-form');
    }

    public function goAlbum(){
        return view('frontEnd.resource.photos.photos-gallery');
    }
}
