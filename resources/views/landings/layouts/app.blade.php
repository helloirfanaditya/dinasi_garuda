<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dinasi Garuda</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/icon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/landings/css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/materialdesignicons.min.css') }}" />

    <!-- pe-7 Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/pe-icon-7-stroke.css') }}" />

    <!-- owl carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/owl.transitions.css') }}">

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/style.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="{{ asset('assets/landings/css/custom.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="preloader text-black">
        <div class="loading text-black">
            <div class="lds-ripple text-black">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    @include('landings.layouts.components.navbar')
    @yield('content')
    @include('landings.layouts.components.footer')

    <!-- Javascript -->
    <script src="{{ asset('assets/landings/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/landings/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landings/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/landings/js/scrollspy.min.js') }}"></script>

    <!-- owl-carousel -->
    <script src="{{ asset('assets/landings/js/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- custom js -->
    <script src="js/app.js"></script>
    <script>
        AOS.init();

        $(document).ready(function() {
            $(".preloader").fadeOut();
        });
    </script>
</body>

</html>
