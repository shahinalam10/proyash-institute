<!-- top header start -->
<div class="container-fluid py-2">
    <div class="row align-items-center top-bar">
        <div class="col-lg-9 col-md-12 text-start text-lg-start">
            <a href="{{route('/')}}" class="navbar-brand m-0 p-0">
                <img src="{{asset('frontEndAsset')}}/img/logo/Logo.png" alt="Logo">
            </a>
            <div class="institute-name btn-group">
                PROYASH<br> INSTITUTE OF SPECIAL EDUCATION
            </div>
        </div>
        <div class="col-lg-3 col-md-7 d-none d-lg-block">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 btn-square border rounded-circle mb-5">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-2" style="color: black;font-size:18px;font-weight: bold;">(+88)<span style="color:#3657a3">01760138678 </span></p>
                            <h6 class="mb-2 text-end">Call for query</h6>
                            <div class="apply-dropdown-section">
                                <div class="dropdown">
                                    <button class="text-dropdown-section btn btn-primary" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Apply for therapy
                                    </button>
                                    <ul class="dropdown-menu text-show" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{route('student-login')}}">Login</a></li>
                                        <li><a class="dropdown-item" href="{{route('student-register')}}">Registration</a></li>
                                        <li><a class="dropdown-item" href="#">If new student</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top header end -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-lg-0 px-lg-1 wow fadeIn" data-wow-delay="0.1s"
     style="background-color: #364180;">
    <div class="container-fluid">
        <a href="{{route('/')}}" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('/')}}"><i class="fa-solid fa-house"></i>&nbsp;
                        HOME</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">ABOUT PROYASH</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">OVERVIEW</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="{{route('glorious-history')}}">HISTORY</a></li>
                                <li><a class="dropdown-item" href="{{route('organiz-structure')}}">ORGANIZATIONAL STRUCTURE</a></li>
                                <li><a class="dropdown-item" href="{{route('education-system')}}">EDUCATION SYSTEM</a></li>
                                <li><a class="dropdown-item" href="#">PROYASH ACCROSS THE COUNTRY</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">FACILITIES</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="{{route('proyash-library')}}">LIBRARY</a></li>
                                <li><a class="dropdown-item" href="#">COMPUTER LAB</a></li>
                                <li><a class="dropdown-item" href="#">PLAYGROUND</a></li>
                                <li><a class="dropdown-item" href="#">CANTEEN</a></li>
                                <li><a class="dropdown-item" href="#">TRANSPORT SERVICE</a></li>
                                <li><a class="dropdown-item" href="#">SWIMING POOL</a></li>
                                <li><a class="dropdown-item" href="#">HYDROTHERAPY POOL</a></li>
                                <li><a class="dropdown-item" href="#">MULTIPURPOSE HALL </a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">ACHIEVEMENTS</a></li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">ONGOING PROJECTS</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="#">SENSORY GARDEN</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">FUTURE PLAN</a></li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">REGULATORY BODY</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="#">THE CENTRAL COMMITTEE</a></li>
                                <li><a class="dropdown-item" href="{{route('administrative-body')}}">ADMINISTRATIVE BODY</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item submenu-item-hover" href="#">MESSAGES</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">SERVICE AVAILABLE</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">SPECIALIZED INTERVENTION CLINIC</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="{{route('medical-assessment')}}">MEDICAL ASSESMENT & CARE</a></li>
                                <li><a class="dropdown-item" href="#">NUROLOGICAL ASSESMENT</a></li>
                                <li><a class="dropdown-item" href="#">AUDIOLOGY ASSESMENT</a></li>
                                <li><a class="dropdown-item" href="#">PHYCHOLOGY ASSESMENT AND MANAGEMENT</a>
                                </li>
                                <li><a class="dropdown-item" href="#">DIET MANAGEMENT</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">THERAPEUTIC SUPPORT SERVICE</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="#">COUNSELLING</a></li>
                                <li><a class="dropdown-item" href="#">SPECH & LANGUAGE THERAPY</a></li>
                                <li><a class="dropdown-item" href="#">OCUPETIONAL & SENSORY THERAPY</a></li>
                                <li><a class="dropdown-item" href="#">PHYSIOTHERAPY</a></li>
                                <li><a class="dropdown-item" href="#">PROSTHETIC & ORTHOTIC CENTER</a></li>
                                <li><a class="dropdown-item" href="#">MUSIC THERAPY AND YOGA</a></li>
                                <li><a class="dropdown-item" href="#">HYPERBERIC OXYGEN CHAMBER</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">OUTDOOR SERVICE</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="#">OUTDOOR PHYSIOTHERAPY</a></li>
                                <li><a class="dropdown-item" href="#">OCUPETIONA THERAPY</a></li>
                                <li><a class="dropdown-item" href="#">SPECH & LANGUAGE THERAPY</a></li>
                                <li><a class="dropdown-item" href="#">SWIMING</a></li>
                                <li><a class="dropdown-item" href="#">ART & CRAFT</a></li>
                                <li><a class="dropdown-item" href="#">MUSIC AND DANCE</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">PROYASH-CARE</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">EDUCATION PROGRAM</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">SPECIAL EDUCATION PROGRAM</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="childhood-development">EARLY CHILDHOOD DEVELOPMENT PROGRAMME(ECDP)</a></li>
                                <li><a class="dropdown-item" href="#">ADULT LEISURE LEARNING PROGRAM (ALLP)</a></li>
                                <li><a class="dropdown-item" href="#">SCHOOL OF AUTISM</a></li>
                                <li><a class="dropdown-item" href="#">SCHOOL OF INTELLECTUALLY CHALLENGED</a></li>
                                <li><a class="dropdown-item" href="#">SCHOOL OF PHYSICALLY CHALLENGED</a></li>
                                <li><a class="dropdown-item" href="#">SCHOOL OF HEARING IMPAIRMENT</a></li>
                                <li><a class="dropdown-item" href="#">SCHOOL OF VISUAL IMPAIRMENT</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">SINCLUSIVE EDUCATION PROGRAM</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="#">SCHOOL OF PRIMARY EDUCATION</a></li>
                                <li><a class="dropdown-item" href="#">PROTTOY AN INCLUSIVE ENGLISH MEDIUM SCHOOL</a></li>
                                <li><a class="dropdown-item" href="#">VOCATIONAL SCHOOL</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">PISER</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">ACHIEVEMENTS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item submenu-item-hover" href="#">EDUCATION</a></li>
                        <li><a class="dropdown-item" href="#">SPORTS</a></li>
                        <li><a class="dropdown-item" href="#">CULTURAL</a></li>
                        <li><a class="dropdown-item" href="#">IT</a></li>
                        <li><a class="dropdown-item" href="#">MAINSTREAM EDUCATION & EMPLOYMENT</a></li>
                        <li><a class="dropdown-item" href="#">INTERNATIONAL</a></li>
                        <li><a class="dropdown-item" href="#">AWARDS & RECOGNITION</a></li>
                        <li><a class="dropdown-item" href="#">SUMMARY</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">INFORMATION</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">SCHOOLS</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="{{route('school-admission')}}">ADMISSION</a></li>
                                <li><a class="dropdown-item" href="#">TUITION FEES</a></li>
                                <li><a class="dropdown-item" href="#">RESULTS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle submenu-hover" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">DONATION</a>
                            <ul class="dropdown-menu submenu-item">
                                <li><a class="dropdown-item" href="#">SCOPE OF DONATION</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">VOLUNTEER SERVICE</a></li>
                        <li><a class="dropdown-item" href="#">FORUM</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">RESOURCES</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('photos-gallery')}}">PHOTOS</a></li>
                        <li><a class="dropdown-item" href="{{route('video-gallery')}}">VIDEOS</a></li>
                        <li><a class="dropdown-item" href="{{route('proyash-prospectus')}}">PROSPECTUS</a></li>
                        <li><a class="dropdown-item" href="{{route('admission-form')}}">FORMS</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('notice-board')}}">NOTICE BOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('get-in-touch')}}">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-donate" href="{{route('donate-proyash')}}">DONATE</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar end -->
