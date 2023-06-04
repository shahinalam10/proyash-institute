@extends('frontEnd.master')
@section('title')
    Administrative Body
@endsection
@section('content')
    <!--Administrative body-->
    <div class="section-bg-color">
        <div class="row" style="width: 100%;margin:0px auto">
            <div class="section-title">
                <h3 class="text-center mt-4 mb-4">Administrative body</h3>
            </div>
            <div class="row row-cols-1 col-xs-6 row-cols-md-4 row-cols-lg-4  g-1 mx-auto administrative-details-font">
                <div class="col">
                    <div class="card shadow">
                        <img src="{{asset('frontEndAsset')}}/img/administrative/e.jpg" class="card-img-top img-fluid"
                             alt="Hollywood Sign on The Hill">
                        <div class="card-body">
                            <h5 class="card-title">Noorjahan Ahmed</h5><br>
                            <p class="card-text">
                                Patron,PROYASH
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="{{asset('frontEndAsset')}}/img/administrative/d.jpg" class="card-img-top img-fluid"
                             alt="Palm Springs Road">
                        <div class="card-body">
                            <h5 class="card-title">Brig Gen Md Moin Uddin, SUP, ndc, psc</h5>
                            <p class="card-text">Chairman, PROYASH</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="{{asset('frontEndAsset')}}/img/administrative/a.jpg" class="card-img-top img-fluid"
                             alt="Los Angeles Skyscrapers">
                        <div class="card-body">
                            <h5 class="card-title">Col Md Anwar Uz Zaman, BPMS, PPM ,AFWC, PSC,G</h5>
                            <p class="card-text">Executive Director, Principal PROYASH</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="{{asset('frontEndAsset')}}/img/administrative/f.jpg" class="card-img-top img-fluid" alt="Skyscrapers">
                        <div class="card-body">
                            <h5 class="card-title">Lt Col Md Altaf Ali, PSC, Arty</h5>
                            <p class="card-text">
                                Director, Incl & Sp Svc, PROYASH
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 col-xs-6 row-cols-md-4 row-cols-lg-4 g-1 mx-auto administrative-details-font">
                <div class="col">
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="{{asset('frontEndAsset')}}/img/administrative/c.jpg" class="card-img-top img-fluid"
                             alt="Palm Springs Road">
                        <div class="card-body">
                            <h5 class="card-title">Lt Col Md Razib Hossain Khan, PSC, Inf</h5>
                            <p class="card-text">
                                Director, PISER
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="{{asset('frontEndAsset')}}/img/administrative/b.jpg" class="card-img-top img-fluid"
                             alt="Los Angeles Skyscrapers">
                        <div class="card-body">
                            <h5 class="card-title">Qazi Afroza Sultana</h5><br>
                            <p class="card-text">Vice Principal, PROYASH</p>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div><br>
    <!--Administrative body-->
@endsection
