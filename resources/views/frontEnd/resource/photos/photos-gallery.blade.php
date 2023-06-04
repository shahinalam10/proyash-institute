@extends('frontEnd.master')
@section('title')
    Photos album
@endsection
@section('content')
    <!--photo album start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/gallery/photos.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Photo Albums</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('photos-gallery')}}" class="btn btn-light btn-sm px-3">Photo Albums</a>
        </div>
    </section><br>

    <div class="row row-cols-1 col-xs-6 row-cols-md-2 row-cols-lg-3  g-3 mx-auto administrative-details-font">
        @foreach($gallery as $item)
            <div class="col">
                <div class="card h-100 shadow image-zoom-hover">
                    <img src="{{$item->image}}" class="card-img-top img-fluid"
                         alt="album">
                    <div class="card-body mx-auto">
                        <a href="{{$item->name}}" class="btn btn-primary px-3">{{$item->name}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--photos album end-->
@endsection
