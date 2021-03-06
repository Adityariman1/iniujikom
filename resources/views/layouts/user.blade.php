<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>BookStore.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset("asset/images/favicon.ico")}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="asset/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href={{asset("asset/css/style.css")}}>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href={{asset("asset/css/responsive.css")}}>
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{asset("asset/css/custom.css")}}>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @include('partials.navbar')

<div class="container">
    @yield('container')
</div>

<main class="py-6">
            @yield('content')
        </main>



@include('partials.footer')
<div class="footer">
    @yield('footer')
</div>

    <!-- ALL JS FILES -->
    <script src="{{asset("asset/js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("asset/js/popper.min.js")}}"></script>
    <script src="{{asset("asset/js/bootstrap.min.js")}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset("asset/js/jquery.superslides.min.js")}}"></script>
    <script src="{{asset("asset/js/bootstrap-select.js")}}"></script>
    <script src="{{asset("asset/js/inewsticker.js")}}"></script>
    <script src="{{asset("asset/js/bootsnav.js.")}}"></script>
    <script src="{{asset("asset/js/images-loded.min.js")}}"></script>
    <script src="{{asset("asset/js/isotope.min.js")}}"></script>
    <script src="{{asset("asset/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("asset/js/baguetteBox.min.js")}}"></script>
    <script src="{{asset("asset/js/form-validator.min.js")}}"></script>
    <script src="{{asset("asset/js/contact-form-script.js")}}"></script>
    <script src="{{asset("asset/js/custom.js")}}"></script>
</body>

</html>
