@extends('frontEnd.master')
@section('title')
    Library
@endsection
@section('content')
    <!--library image and text-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/background/b.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Our Library</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('proyash-library')}}" class="btn btn-light btn-sm px-3">Our Library</a>
        </div>
    </section><br>
    <!--library image and text end-->

    <!--library section start-->
    <div class="row g-2">
        <div class="col-lg-6 col-md-6">
            <div class="history-paragraph p-3">
                <h3 class="text-dark font-bold mb-4">Explore Our Library</h3>
                    <hr>
                    <p style="text-align: justify;">Explore Our Library to improve yourself </p>
            </div>
        </div>
        <div class="col-lg col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/background/a.jpg" class="img-fluid" alt="school">
        </div>
    </div><br>
    <!--library end-->
@endsection
