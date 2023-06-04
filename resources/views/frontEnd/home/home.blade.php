@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <!--news marquee-->
    <div class="ticker-wrapper-h">
        <div class="heading">Updates</div>
        @foreach($proyashnotice as $scrollnotice)
        <ul class="news-ticker-h">
            <li><a href="">{{$scrollnotice->title}}</a></li>
        </ul>
        @endforeach
    </div>
    <!--news marquee end-->

    <!--carousel start-->
    <div class="row" style="width: 100%;margin:0px auto">
        <div class="col-lg-8 col-md-12 m-0 p-0">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                            aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                            aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6"
                            aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7"
                            aria-label="Slide 4"></button>

                </div>

                <div class="carousel-inner m-0 p-0">
{{--                    @foreach($imageSliders as $imageSlider)--}}
{{--                        <div class="carousel-item active" data-bs-interval="10000">--}}
{{--                            <img src="{{$imageSlider->image}}" class="d-block w-100" alt="...">--}}
{{--                            <div class="carousel-caption d-none d-md-block">--}}
{{--                                <h5>Special Child Special Rights</h5>--}}
{{--                                <p>Proyash –is a specialized organization that values the holistic development of all children</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ $imageSliders[0]->image }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $imageSliders[0]->title }}</h5>
                            <p>{{ $imageSliders[0]->slide_content }}</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{$imageSliders[1]->image }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$imageSliders[1]->title }}</h5>
                            <p>{{$imageSliders[1]->slide_content }}</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ $imageSliders[2]->image }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $imageSliders[2]->title }}</h5>
                            <p>{{ $imageSliders[2]->slide_content }}</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{$imageSliders[3]->image}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$imageSliders[3]->title}}</h5>
                            <p>{{$imageSliders[3]->slide_content}}</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{$imageSliders[4]->image}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$imageSliders[4]->title}}</h5>
                            <p>{{$imageSliders[4]->slide_content}}</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{$imageSliders[5]->image}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$imageSliders[5]->title}}</h5>
                            <p>{{$imageSliders[5]->slide_content}}</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{$imageSliders[6]->image}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$imageSliders[6]->title}}</h5>
                            <p>{{$imageSliders[6]->slide_content}}</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{$imageSliders[7]->image}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$imageSliders[7]->title}}</h5>
                            <p>{{$imageSliders[7]->slide_content}}</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-lg-4 col-md-7 d-none d-lg-block text-center" style="background-color: #f7f7f7;">
            <table class="table table-bordered caption-top">
                <caption class="text-center text-notice">Notice</caption>
                <thead>
                <tr class="table-head-color">
                    <th scope="col">Title</th>
                    <th scope="col">publish date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proyashnotices as $notice)
                <tr>
                    <td>
                        <a href="#" class="px-5 btn btn-primary " style="text-decoration: none;">{{$notice->notice_file}}</a>
                    </td>
                    <td>{{$notice->date}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div><br>
    <!--carousel start-->

    <!--about proyash start-->
    <div class="row" style="width: 100%;margin:0px auto">
        <div class="col-lg-7 col-md-12 m-0 p-0 ">
            <div class="card p-2 proyash-bg-color">
                <div class="card-header about-proyash">
                    <h4>ABOUT PROYASH</h4>
                </div>
                <div class="card-body text-justiy" style="text-align: justify;">
                    <p>Proyash is functioning under the patronization of Bangladesh Army since July 2006. Proyash runs similar
                        programs in Jessore, Bogra, Chittagong, Rangpur, Savar, Comilla, Shyllhet and Ghatail area. All the services
                        and facilities are open for all types of children with special needs of Bangladesh and other nationalities
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 d-none d-lg-block text-center m-0 p-0">
            <div class="ratio ratio-21x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nraM-PV4mYc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div><br>
    <!--about proyash end-->


    <!--proyash news start-->
    <div class="section-bg-color">
        <div class="row" style="width: 100%;margin:0px auto">
            <div class="section-title">
                <h3 class="text-center mt-4 mb-4">PROYASH NEWS</h3>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper news-card-font">
{{--                            @foreach($newSlider as $item)--}}
{{--                            <div class="card card-box-cust">--}}
{{--                                <div class="image-wrapper">--}}
{{--                                    <img src="{{asset('frontEndAsset')}}/img/gallery/news1.jpg" class="img-fluid" alt="...">--}}
{{--                                </div>--}}
{{--                                <div class="card-body ">--}}
{{--                                    <h5 class="card-title">বিশেষ শিক্ষার্থীদের আইসিটি বিভাগে অর্জিত সফলতা [07-05-23]</h5>--}}
{{--                                    <p class="card-text">বাংলাদেশ কম্পিউটার কাউন্সিল, আইসিটি মন্ত্রণালয় ও বেসরকারি এনজিও সিএসআইডি সম্মেলিত ভাবে `যুব বিশেষায়িত শিক্ষার্থীদের জন্য  আইটি প্রতিযো...</p>--}}
{{--                                    <a href="#" class="btn btn-primary btn-sm">Read More <i class="fa-solid fa-angle-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
                            <div class="card card-box-cust">
                                <div class="image-wrapper">
                                    <img src="{{$newSlider[0]->image}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">{{$newSlider[0]->title}}</h5>
                                    <p class="card-text">{{$newSlider[0]->news_content}}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Read More <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>

                            <div class="card card-box-cust">
                                <div class="image-wrapper">
                                    <img src="{{$newSlider[1]->image}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$newSlider[1]->title }}</h5>
                                    <p class="card-text">{{$newSlider[1]->news_content}}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Read More <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>

                            <div class="card card-box-cust">
                                <div class="image-wrapper">
                                    <img src="{{$newSlider[2]->image}}"
                                         alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$newSlider[2]->title}}</h5>
                                    <p class="card-text">{{$newSlider[2]->news_content}}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Read More <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper news-card-font">
                            <div class="card card-box-cust">
                                <div class="image-wrapper">
                                    <img src="{{$newSlider[3]->image}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$newSlider[3]->title}}</h5>
                                    <p class="card-text">{{$newSlider[2]->news_content}}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                            <div class="card card-box-cust">
                                <div class="image-wrapper">
                                    <img src="{{$newSlider[4]->image}}"
                                         alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$newSlider[4]->title}}</h5>
                                    <p class="card-text">{{$newSlider[4]->news_content}}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Read More <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="card card-box-cust">
                                <div class="image-wrapper">
                                    <img src="{{$newSlider[5]->image}}"
                                         alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$newSlider[5]->title}}</h5>
                                    <p class="card-text">{{$newSlider[5]->news_content}}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Read More <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div><br>
    <!--proyash new end-->

    <!--our service start-->
    <div class="section-bg-color">
        <div class="row" style="width: 100%;margin:0px auto">
            <div class="section-title">
                <h3 class="text-center mt-4 mb-4">OUR SERVICES</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 mx-auto service-card-font">
                @foreach($services as $service)
                <div class="col">
                    <div class="card shadow">
                        <img src="{{$service->image}}" class="card-img-top"
                             alt="Hollywood Sign on The Hill">
                        <div class="card-body">
                            <h5 class="card-title">{{$service->title}}</h5>
                            <p class="card-text">{{$service->service_content}}</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div><br>
    <!--our service end-->


    <!--gallery start-->
    <div class="section-bg-color">
        <div class="row">
            <div class="section-title">
                <h3 class="text-center mt-4 mb-4">GALLERY</h3>
            </div>
            <div class="row gallery mx-auto">
                @foreach($uploadimage as $images)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 thumb">
                    <a href="{{$images->image}}">
                        <figure><img class="img-fluid img-thumbnail" src="{{$images->image}}" alt="Random Image"></figure>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <a href="{{route('go-album')}}" class="btn btn-primary px-4">See more &nbsp <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div><br>
    <!--gallery end-->


    <!--Administrative body-->
    <div class="section-bg-color">
        <div class="row" style="width: 100%;margin:0px auto">
            <div class="section-title">
                <h3 class="text-center mt-4 mb-4">Administrative body</h3>
            </div>
            <div class="row row-cols-1 col-xs-6 row-cols-md-3 row-cols-lg-6  g-1 mx-auto administrative-details-font">
                @foreach($administrative as $item)
                <div class="col">
                    <div class="card h-100 shadow image-zoom-hover">
                        <img src="{{$item->image}}" class="card-img-top img-fluid"
                             alt="Hollywood Sign on The Hill">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <p class="card-text">{{$item->designation}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div><br>
    <!--Administrative body-->
@endsection
