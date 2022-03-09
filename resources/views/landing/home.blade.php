@extends('landing.layouts.app')
@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron mt-5" id="hero">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-6">
                <p class="tagline">Main Game sambil mengenal Sejarah Kerajaan-Kerajaan di <span>INDONESIA!</span> </p>
                <p class="description mt-5">
                    Tunjukkan dan Asah Pengetahuanmu serta Bangga dengan sejarah dan budaya yang kita miliki!
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/landing/img/hero.png') }}" class="shadow-lg img-fluid">
            </div>
        </div>
    </div>
    {{-- About Us --}}
    <div id="about-us">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/landing/img/about_us.png') }}" class="img-responsive">
                </div>
                <div class="col-lg-6">
                    <p class="about-tagline">About Us</p>
                    <p class="description-tagline">Dinasti Garuda merupakan Game STRATEGI dengan konsep awal Card Battle
                        Game yang mengambil tema Majapahit sebagai pembukaan Game untuk mengantar kedalam Visi Misi yaitu
                        <span>“Mempersatukan Nusantara”</span> sesuai dengan Sumpah Palapa.
                    </p>
                    <div class="d-flex align-items-center">
                        <a href="" class="btn-read-more">Read More </a>
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Kingdom --}}
    <div id="kingdom">
        <div class="text-center">
            <h5>Nusantara Kingdom</h5>
        </div>
        <div class="container d-none d-md-block d-lg-block">
            <div class="row justify-content-center">
                @foreach ($kingdoms as $kingdom)
                    <div class="col-md-6 col-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top"
                                src="{{ asset('assets/admin/kingdom-assets/' . $kingdom->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kingdom->title }}</h5>
                                <p class="card-text">{{ $kingdom->period }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="/kingdom" class="text-secondary" style="text-decoration: none;">Read More</a>
            </div>
        </div>
    </div>
    {{-- New Collection --}}
    <div id="new_collection">
        <div class="text-center">
            <h5>New Collection</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Most Popular</a></li>
                        @foreach ($collection_category as $category)
                            <li class="list-group-item"><a
                                    href="{{ $category->id }}">{{ $category->collection_category }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($collections as $col)
                            <div class="col-lg-4">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/admin/collection-assets/' . $col->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $col->collection }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-5">
                        <a href="/collection" class="text-secondary" style="text-decoration: none;">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact Us --}}
    <div id="contact_us">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h5>Contact Us</h5>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <input type="text" class="form-control">
                    </div>
                    <button class="btn btn-orange text-center">SEND MESSAGE</button>
                </div>
                <div class="col-lg-6 text-center text-justify">
                    <h5></h5>
                    <p><i class="fas fa-phone-alt"></i> (021) 1129 2212</p>
                    <p><i class="far fa-envelope"></i> support@dinastigaruda.id</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Footer --}}
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
                }
            });
        })
    </script>
@endsection
