
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> Register || Proyash</title>
    <!-- General CSS Files -->
    <link href="{{asset('frontEndAsset')}}/img/favicon/favicon.ico" rel="icon">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .bg-image{
        background-image: url("frontEndAsset/students-image/login/photo.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 654px;
        position:relative;
    }
    .input-group-text{
        background-color: #138496;
    }
    .input-group-text i{
        color: white;
    }
    @media screen and (max-width: 480px) {
        .d-inline-flex {
            font-size: 11px;
        }
    }
</style>

<body class="bg-image">
<section class="section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="student-register">
                        <img src="{{asset('frontEndAsset')}}/img/logo/Logo.png" class="img-fluid" alt="Logo" style="height: 50px; width: 55px">
                        <div class="d-inline-flex">
                            Proyash Institute of Special Education
                        </div>
                        </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2 d-inline-flex">
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary px-2 text-light" href="{{route('student-login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-success px-2 text-light" href="#">Assessement application</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row mt-2">
                <div class="container">
                    <div class="card card-primary" style="background-color: #138496">
                        <div class="card-header">
                            <h4 class="fs-3">Register for Outdoor:</h4>
                        </div>
                        <div class="card-body p-5">
                            <form method="POST" action="#">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col mb-2">
                                            <label for="myCheck">Are you an existing student of proyash: </label>
                                            <input type="checkbox" id="myCheck" onclick="myFunction()">

                                            <p id="text" style="display:none">
                                                <input type="text" class="form-control" placeholder="Enter your student Id">
                                            </p>

                                            <script>
                                                function myFunction() {
                                                    var checkBox = document.getElementById("myCheck");
                                                    var text = document.getElementById("text");
                                                    if (checkBox.checked == true){
                                                        text.style.display = "block";
                                                    } else {
                                                        text.style.display = "none";
                                                    }
                                                }
                                            </script>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-gear"></i></span>
                                                <select class="form-control form-select">
                                                    <option selected>Select category</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter your name english" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
                                                <input type="date" class="form-control text-muted" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
                                                <input type="number" class="form-control text-muted" placeholder="Enter birthday registration number" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-venus-mars"></i></span>
                                                <input type="text" class="form-control" placeholder="Select gender" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-person"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter father name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-tie"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter father profession" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter father mobile number" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-person-dress"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter mother name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter mother profession" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter your mobile number" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                                <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                                <input type="text" class="form-control" placeholder="Confirm password" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-stethoscope"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter diagnosis" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <i class="fa-solid fa-pen-to-square text-light"></i>&nbsp;
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">PT</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">OT</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">SLT</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3 text-end">
                                        <button type="submit" class="btn btn-outline-light px-5" tabindex="4">
                                            Registration
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mb-2 text-center">
                            Already Registered? <a class="text-light" href="{{route('student-login')}}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</div>
<script src="{{asset('frontEndAsset')}}/js/bootstrap.js"></script>
</body>
</html>
