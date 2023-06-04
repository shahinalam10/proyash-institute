@extends('frontEnd.master')
@section('title')
    Education System
@endsection
@section('content')
    <!--history start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/background/c.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Education System</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('education-system')}}" class="btn btn-light btn-sm px-3">Education System</a>
        </div>
    </section><br>
    <!--history end-->

    <!--education start-->

    <div class="row g-2">
        <div class="col-lg-6 col-md-6">
            <div class="history-paragraph p-3">
                <h3 class="text-dark mb-4">Success Of Proyash In Introducing Special Education</h3>
                    <hr>
                    <p style="text-align: justify;">Proyash was the first organisation to introduce special educational structure
                        in Bangladesh. It has imparted training to children with special needs to develop day to day efficiency. The
                        organisation has made outstanding endeavours to bring forth a relevant context of special education to
                        mainstream education. Proyash has adapted programmer to organize the classes of children aged 6 to 16 years
                        in accordance with their need, type, efficiency (aptness) and age. A comprehensive curriculum is also
                        formulated to cope up with the existing education of the mainstream curriculum.
                    </p>
            </div>
        </div>
        <div class="col-lg col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/gallery/1.JPG" class="img-fluid" alt="school">
        </div>
    </div><br>


    <!--education system end-->
@endsection
