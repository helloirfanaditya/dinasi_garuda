@extends('landing.layouts.app')
@section('content')
    <div class="jumbotron" id="collection_detail">
        <div class="container-fluid">
            <h5>Collection</h5>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="/collection?cat=most">Most Popular</a></li>
                    @foreach ($collection_category as $category)
                        <li class="list-group-item"><a
                                href="/collection?cat={{ $category->id }}">{{ $category->collection_category }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row mt-5">
                    @foreach ($collections as $kingdom)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card" style="width: 15rem;">
                                <a href="{{ $kingdom->url_link }}" style="text-decoration: none">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/admin/collection-assets/' . $kingdom->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $kingdom->collection }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center">
            {{ $collections->links() }}
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
