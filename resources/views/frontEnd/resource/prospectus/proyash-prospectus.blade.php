@extends('frontEnd.master')
@section('title')
    Proyash Prospectus
@endsection
@section('content')
    <!--prospectus start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/gallery/photos.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Prospectus</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('proyash-prospectus')}}" class="btn btn-light btn-sm px-3">Prospectus</a>
        </div>
    </section><br>

    <div class="container">
        <div class="section-title">
            <h3 class="text-center mt-4 mb-5">PROSPECTUS</h3>
        </div>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <div class="col">
                <div class="border">
                    <img src="{{asset('frontEndAsset')}}/img/gallery/prospect1.jpg" class="img-fluid">
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                </div>

            </div>
            <div class="col">
                <div class="border">
                    <img src="{{asset('frontEndAsset')}}/img/gallery/prospect2.jpg" class="img-fluid">
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <img src="{{asset('frontEndAsset')}}/img/gallery/prospect3.jpg" class="img-fluid">
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                </div>
            </div>
        </div>
    </div><br>
    <!--prospectus end-->
@endsection
