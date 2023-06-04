@extends('frontEnd.master')
@section('title')
    Admission Form
@endsection
@section('content')
<!--admission form start-->
<section class="history-section">
    <div class="history-section__image-wrapper">
        <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/gallery/photos.jpg" class="img-fluid" alt="Picsum placeholder image" />
    </div>
    <div class="history-section__text">
        <h1 class="text-light">Admission Form</h1>
        <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
        <a href="{{route('admission-form')}}" class="btn btn-light btn-sm px-3">Admission Form</a>
    </div>
</section><br>

<div class="section-title">
    <h3 class="text-center mt-4 mb-5">ADMISSION FORM</h3>
</div>
<!--admission form end-->
@endsection
