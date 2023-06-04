@extends('frontEnd.master')
@section('title')
    Childhood Development
@endsection
@section('content')

    <!--ECDP start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/background/a.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">Early Childhood Development Program (ECDP)</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('childhood-development')}}" class="btn btn-light btn-sm px-3">Early Childhood Development Program</a>

        </div>
    </section><br>

    <div class="row mt-3" style="width: 100%;margin:0px auto">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="history-paragraph p-3">
                <h3 class="text-dark font-bold mb-4">Early Childhood Development Program (ECDP): An Epoch-Making Endeavour</h3>
                    <hr>
                    <p style="text-align: justify;">Proyash has introduced special education connecting with mainstream education
                        for children with special needs, slow learners and physically or mentally disadvantaged children for their
                        growth and development in the year 2010. The research shows that growth and development of children from
                        birth to 5 years is a very crucial period. By setting an example for others, “Proyash” is contributing to
                        the development of early childhood education as well as long and short term mission of early primary
                        education. ECDP has started to stimulate the development ol the children within the ages of 2 to 5 years.
                        Training is imparted to the parents so that they can provide their children a safe, enthusiastic and
                        friendly environment. With a view to mainstreaming the children, ECDP provides regular assessment to
                        identify their strength through observation and evaluation
                    </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 ">
            <img src="{{asset('frontEndAsset')}}/img/ecdp/c.jpg" class="img-fluid align-middle" alt="medical assesment">
        </div>
    </div><br>
    <div class="row g-1">
        <div class="col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/ecdp/c.jpg" class="img-fluid" alt="medical assesment">
        </div>
        <div class="col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/ecdp/c.jpg" class="img-fluid" alt="medical assesment">
        </div>
    </div>
    <br>

    <!--ECDP end-->
@endsection
