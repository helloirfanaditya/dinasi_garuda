@extends('landing.layouts.app')
@section('content')
    <div class="jumbotron" id="kingdom_detail">
        <div class="container-fluid">
            <h5>Kingdom</h5>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mt-5">
            @foreach ($kingdoms as $kingdom)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('assets/admin/kingdom-assets/' . $kingdom->image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kingdom->title }}</h5>
                            <p class="card-text">{{ $kingdom->period }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            {{ $kingdoms->links() }}
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(window).scroll(function() { // check if scroll event happened
                if ($(document).scrollTop() >
                    20) {
                    $('#navigation').css('box-shadow', '0px -2px 19px rgb(0 0 0 / 10%')
                    $("#navigation").css("background-color", "white");
                    $(".nav-link").removeClass("text-white");
                    $(".nav-link").css("color", "black");
                    $('.navbar-brand').removeClass('text-white');
                    $(".navbar-brand").css("color", "black");
                } else {
                    $("#navigation").css("background-color",
                        "transparent");
                    $(".nav-link").addClass("text-white");
                    $('.navbar-brand').addClass('text-white');
                }
            });
        })
    </script>
@endsection
