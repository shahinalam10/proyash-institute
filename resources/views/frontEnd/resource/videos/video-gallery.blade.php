@extends('frontEnd.master')
@section('title')
    Video gallery
@endsection
@section('content')
    <!--video gallery start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/gallery/photos.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Video Gallery</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('video-gallery')}}" class="btn btn-light btn-sm px-3">Video Gallery</a>
        </div>
    </section><br>

    <div class="row row-cols-1 col-xs-6 row-cols-md-2 row-cols-lg-4  g-2">
        <div class="col">
            <div class="card h-100">
                <div class="card-body m-0 p-0">
                    <iframe src="https://www.youtube.com/embed/LT_OtDVS4pE?feature=oembed" width="295" height="225"
                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body m-0 p-0">
                    <iframe src="https://www.youtube.com/embed/5Al2gNVzJqM?feature=oembed" width="295" height="225"
                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body m-0 p-0">
                    <iframe src="https://www.youtube.com/embed/5Al2gNVzJqM?feature=oembed" width="295" height="225"
                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body m-0 p-0">
                    <iframe src="https://www.youtube.com/embed/IoQbaWDPHAQ?feature=oembed" width="295" height="225"
                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body m-0 p-0">
                    <iframe src="https://www.youtube.com/embed/uD_azBzPmeI?feature=oembed" width="295" height="225"
                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body m-0 p-0">
                    <iframe src="https://www.youtube.com/embed/FnOZLsAcrA0?feature=oembed" width="295" height="225"
                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
    </div><br>
    <!--video gallry end-->
@endsection
