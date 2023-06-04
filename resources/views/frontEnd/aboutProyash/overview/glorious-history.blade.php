@extends('frontEnd.master')
@section('title')
    Glorious History
@endsection
@section('content')
    <!--history start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/background/a.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">A Glorious Journey</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('glorious-history')}}" class="btn btn-light btn-sm px-3">A Glorious Journey</a>
        </div>
    </section><br>
    <!--history end-->

    <!--A glorius journy histoy-->
    <div class="row mt-3">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="history-paragraph p-3">
                <h3 class="text-dark mb-4">A Glorious Journey</h3>
                    <hr>
                    <p style="text-align: justify;">Patronized by Bangladesh Army, a small school was established on 15 June 2005
                        at Dhaka Cantonment for the welfare of children with special needs of military community. The school was
                        inaugurated as 'Sena Sahayak School' by the then Chief of Army Staff on 18 July 2006 at Sena Paribar Kallyan
                        Sangstha premises and started its journey with only 17 students and 3 teachers. In course of time, with
                        expanded school activities and increased number of students, the school entailed separate infrastructure of
                        its own. Consequently, foundation stone for its own building and other infrastructure was laid on 21
                        November 2008. During this time, with diversified facilities and expanded infrastructure, the school was
                        made accessible to all children of the society. Later on, the school was renamed as Proyash (meaning
                        'Endeavour' in English) on 02 April 2010. The development of Proyash continued and the foundation stone of
                        further expansion, which was the Government-Private Partnership Project by Ministry of Social Welfare, was
                        laid on 27 May 2012. The first phase of the project was completed in the year 2014 and the second phase is
                        scheduled to be completed by June 2018. Proyash, with its dynamic potential, is serving a wide range of
                        disabilities i.e. Autism, Cerebral Palsy, Intellectually Disabled, Hearing and Visual Impaired, following
                        different customized curriculums. In addition, the adults are provided with Vocational Training, Adult
                        Leisure and Learning programmes. Proyash is not only providing intervention services to the children but
                        also producing future professionals through Proyash Institute of Special Education and Research (PISER)
                        affiliated with Bangladesh University of Professionals (BUP). Proyash has extended the diversified services
                        throughout the country with its branches in Chittagong, Jessore, Bogra, Comilla, Savar, Rangpur, Ghatail,
                        Rajshahi, Ramu and Sylhet.
                    </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row gy-2">
                <cdiv class="col-12">
                    <img src="{{asset('frontEndAsset')}}/img/ghistory/a.jpg" class="img-fluid" alt="school">
                </cdiv>
                <cdiv class="col-12 ">
                    <img src="{{asset('frontEndAsset')}}/img/ghistory/b.jpg" class="img-fluid" alt="school">
                </cdiv>
            </div>
        </div>
    </div><br>
    <div class="row g-2">
        <div class="col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/ghistory/b.jpg" class="img-fluid" alt="school">
        </div>
        <div class="col-md-6">
            <img src="{{asset('frontEndAsset')}}/img/ghistory/d.jpg" class="img-fluid" alt="school">
        </div>
    </div><br>
    <!--glorious journey end-->
@endsection
