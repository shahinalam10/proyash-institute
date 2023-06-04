@extends('frontEnd.master')
@section('title')
    Medical Assessment
@endsection
@section('content')
    <!--history start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/background/a.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Medical Assessment and Care</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('medical-assessment')}}" class="btn btn-light btn-sm px-3">Medical Assessment & Care</a>
        </div>
    </section><br>
    <!--history end-->

    <!--medical assesments start-->
    <div class="row mt-3" style="width: 100%;margin:0px auto">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="history-paragraph p-3">
                <h3 class="text-dark mb-4">Diagnosis And Assessment</h3>
                    <hr>
                    <p style="text-align: justify;">A specialized team diagnoses and assesses a child's ability and competency by
                        a child's physical, visual, hearing, and communicative language developments. For this, the clinic conducts
                        a neurological and psychological test. EEG. audiology test and assessment by therapists. Thereafter, a plan
                        for intervention and management for the child is developed based on the Integrated decision. Parents are
                        also involved in the whole process.
                    </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{asset('frontEndAsset')}}/img/gallery/1.JPG" class="img-fluid" alt="medical assesment">
        </div>
    </div><br>
    <div class="row g-1">
        <div class="col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/gallery/1.JPG" class="img-fluid" alt="medical assesment">
        </div>
        <div class="col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/gallery/1.JPG" class="img-fluid" alt="medical assesment">
        </div>
    </div>
    <br>
    <!--medical assesment end-->
@endsection
