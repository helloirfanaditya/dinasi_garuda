<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data_general['TITLE'] }}</title>
    <meta name="description" content="{{ $data_general['DESCRIPTION'] }}" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon"
        href="{{ asset('assets/landings/asseting/' . $data_general['LOGO_FAVICON']) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/landings/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landings/css/style.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.min.css">
    <link href="{{ asset('assets/landings/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>
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
    <script src="{{ asset('assets/landings/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="{{ asset('assets/landings/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landings/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/landings/js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('assets/landings/js/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
    <script>
        AOS.init();
        $(document).ready(function() {
            $(".preloader").fadeOut();
            // $(window).scroll(function() {
            //     if ($(document).scrollTop() > 20) {
            //         $(".navbar").css("background-color", "white");
            //     } else {
            //         $(".navbar").css("background-color", "transparent");
            //     }
            // });
        });
    </script>
    @yield('js')
    @include('sweetalert::alert')
</body>

</html>
