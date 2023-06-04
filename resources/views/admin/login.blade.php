<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login || Admin</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/app.min.css">
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4><span class="fw-bold fs-4">Admin Login</span></h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf

                                <div class="form-group">
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
                                                {{ __('Forgot your password?') }}
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
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="{{route('register')}}">Create One</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src="{{asset ('adminAsset') }}/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/custom.js"></script>
</body>

</html>
