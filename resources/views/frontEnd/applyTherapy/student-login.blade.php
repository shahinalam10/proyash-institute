<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> Login || Proyash</title>
    <!-- General CSS Files -->
    <link href="{{asset('frontEndAsset')}}/img/favicon/favicon.ico" rel="icon">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.css">
</head>
<style>
    .bg-image{
        background-image: url("frontEndAsset/students-image/login/photo.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 594px;
    }
    .login-text-content{
        height: 35px;
        width: 100%;
        background-color: #35407f;
        color: white;
        font-size: 22px;
        border-bottom:1px solid white;
        margin-bottom: 20px;
        line-height: 30px;
    }
    .btn-primary{
        background-color: #35407f !important;
        border-color: #35407f;
    }
</style>

<body class="bg-image">
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-3 bg-image-opacity text-center">
                    <img src="{{asset('frontEndAsset')}}/img/logo/Logo.png" alt="Logo" style="height: 70px; width: 75px">
                    <div class="login-text-content mt-2">Special Child Special Right</div>
                </div>
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <form method="POST" action="#" class="needs-validation" novalidate="">
                                @csrf

                                <div class="form-group mb-4">
                                    <label for="email" value="{{ __('Email') }}">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" :value="old('email')" required autofocus autocomplete="username">
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label" value="{{ __('Password') }}">Password</label>
                                        <div class="float-right">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-small">
{{--                                                    {{ __('Forgot your password?') }}--}}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required autocomplete="current-password">
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">{{ __('Remember me') }}</label>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary px-3" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-4 mb-3 text-muted text-center">
                            Don't have an account? <a href="{{route('student-register')}}">Create One</a>
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
