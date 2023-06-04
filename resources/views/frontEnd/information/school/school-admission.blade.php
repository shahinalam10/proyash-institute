@extends('frontEnd.master')
@section('title')
    Admission
@endsection
@section('content')
    <!--admission image and text start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/gallery/photos.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Admission Information</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('school-admission')}}" class="btn btn-light btn-sm px-3">Admission Information</a>
        </div>
    </section><br>

    <div class="section-title">
        <h3 class="text-center mt-4 mb-5">ADMISSION</h3>
        <p>Admission details</p>
    </div>
    <!--admission form end-->
@endsection
