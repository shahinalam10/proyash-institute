<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.einfosoft.com/templates/admin/otika/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 09:14:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register || Admin</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/app.min.css">
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/bundles/jquery-selectric/selectric.css">
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
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="text-center fs-4">Admin Register</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email" value="{{ __('Name') }}">Name</label>
                                    <input id="email" type="text" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" value="{{ __('Email') }}">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required autocomplete="username" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block" value="{{ __('Password') }}">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                                               name="password" required autocomplete="new-password" />
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block" value="{{ __('Confirm Password') }}" >Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="mb-4 text-muted text-center">
                            Already Registered? <a href="{{route('login')}}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src="{{asset ('adminAsset') }}/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="{{asset ('adminAsset') }}/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="{{asset ('adminAsset') }}/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/page/auth-register.js"></script>
<!-- Template JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/otika/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 09:14:51 GMT -->
</html>
