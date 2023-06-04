<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') || Admin</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset ('adminAsset') }}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

    <!--fontawsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        @include('admin.include.header')

        @include('admin.include.left-sidebar')
        <!-- Main Content -->
        <div class="main-content">
           @yield('content')

            @include('admin.include.right-sidebar')

        </div>
      @include('admin.include.footer')
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{asset ('adminAsset') }}/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="{{asset ('adminAsset') }}/assets/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{asset ('adminAsset') }}/assets/js/custom.js"></script>
</body>
</html>
