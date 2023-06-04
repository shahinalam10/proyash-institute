@extends('frontEnd.master')
@section('title')
    Donate us
@endsection
@section('content')
    <!--contact us start-->

    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/background/a.jpg" class="img-fluid"
                 alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">DONATE</h1>
            <a href="index.html" class="btn btn-light btn-sm px-3">Home</a>
            <a href="#" class="btn btn-light btn-sm px-3">DONATE</a>
        </div>
    </section><br>
    <!--contact us end-->

    <!--donate start-->
    <div class="row" style="width: 100%;margin:0px auto">
        <div class="section-title">
            <h3 class="text-center mt-4 mb-5">Help and Cooperation</h3>
        </div>
        <div class="col-md-12 donate-copareation">
            <h5><i class="fa-solid fa-hand-point-right"></i> Donation Account Name: Proyash Fund Raising Account </h5>
            <h5><i class="fa-solid fa-hand-point-right"></i> Account No: 0002-0310823417 </h5>
            <h5><i class="fa-solid fa-hand-point-right"></i> Trust Bank (Principal Branch), Dhaka Cantonment </h5>
        </div>
    </div><br>
    <!--donate end-->
@endsection
