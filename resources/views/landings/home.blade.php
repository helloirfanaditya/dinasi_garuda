@extends('landings.layouts.app')
@section('content')
    <!-- home start -->
    <section class="bg-home" id="home" style="background-color: transparent;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="text-white">
                        <span class="mb-5">
                            {!! $data_general['TITLE_HEADER'] !!}
                        </span>
                        <p class="mb-5 text-secondary">Tunjukkan dan Asah Pengetahuanmu serta Bangga dengan sejarah dan
                            budaya yang kita miliki! </p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" data-aos="fade-left">
                    <div class="home-img p-3 d-none d-sm-block">
                        <iframe class="rounded" width="560" height="315"
                            src="https://www.youtube.com/embed/ZLWl4eKtrhU" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
    <!-- home end -->
    <!-- Features start -->
    <section class="section" id="features">
        <div class="bg-overlay"></div>
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="features-img">
                        <img src="{{ asset('assets/landings/img/about_us.png') }}" alt=""
                            class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" data-aos="fade-left">
                    <div class="mt-5 mt-lg-0">
                        <h1 class="mb-3">About Us</h1>
                        <p class="text-black" style="font-size: 24px">Dinasti Garuda merupakan Game STRATEGI dengan
                            konsep awal Card Battle
                            Game yang mengambil
                            tema Majapahit sebagai pembukaan Game untuk mengantar kedalam Visi Misi yaitu “Mempersatukan
                            Nusantara” sesuai dengan Sumpah Palapa.</p>
                        <h5><a href="/about-us" class="text-black">Read More</a></h5>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container-fluid end -->
    </section>
    <!-- Features end -->
    {{-- Kingdom --}}
    <div id="kingdom" style="padding-top: 50px;">
        <div class="text-center my-5">
            <h3 id="kingdom_nusantara_title">Nusantara Kingdom</h3>
        </div>
        <div class="container" style="padding-top:50px;">
            <div class="row justify-content-center swiper">
                <div class="swiper-wrapper">
                    @foreach ($kingdoms as $kingdom)
                        <div class="col-lg-4 col-6 swiper-slide">
                            <a href="{{ route('kingdom.detail', ['id' => $kingdom->id]) }}" target="_blank">
                                <div class="card">
                                    <img src="{{ asset('assets/admin/kingdom-assets/' . $kingdom->image) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $kingdom->title }}</h5>
                                        <p class="card-text">{{ $kingdom->period }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="text-center">
                <h5><a href="/kingdom" class="text-black">View More</a></h5>
            </div>
        </div>
    </div>

    {{-- Collection --}}
    <div id="collection" style="padding-top:50px;">
        <div class="text-center">
            <h3 class="text-black" id="new_collection_title">New Collection</h3>
        </div>
        <div class="container" style="padding-top:50px;">
            <div class="d-flex justify-content-center align-items-center" id="filler-1">
                <li class="list-group-item text-black filtr-active" data-fltr="all">
                    All
                </li>
                @foreach ($collection_category as $category)
                    <li class="list-group-item text-black" data-fltr="{{ $category->id }}">
                        {{ $category->collection_category }}
                    </li>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row fltr-contains">
                        @foreach ($collections as $collection)
                            <div class="col-md-4 col-12 justify-content-center filtr-item"
                                data-category="{{ $collection->collection_category_id }}">
                                <a href="{{ route('collection.detail', ['id' => $collection->id]) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/admin/collection-assets/' . $collection->image) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $collection->collection }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center">
                        <h5><a href="/collection" class="text-black">View More</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- News & Event --}}
    <div id="news_event">
        <div class="text-center">
            <h3 class="text-black">News & Event</h3>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Upcoming Event</h5>
                                </div>
                                <div>
                                    <a href="{{ route('news') }}">
                                        <h6>View More</h6>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('event.detail', ['id' => $news->id]) }}" target="_blank">
                                <div class="card">
                                    <img src="{{ asset('assets/admin/event-assets/' . $news->image) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $news->title }}</h5>
                                        <p class="card-title text-black">
                                            <i class="fas fa-map-marker-alt pr-2"></i>
                                            {{ $news->place }}
                                        </p>
                                        <p class="card-title text-black">
                                            <i class="fas fa-calendar-alt pr-2"></i>
                                            {{ $news->date->format('d, F Y') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Latest News</h5>
                                </div>
                            </div>
                            @foreach ($related_news as $related_new)
                                <a href="{{ route('news.detail', ['id' => $related_new->id]) }}" target="_blank">
                                    <div class="card">
                                        <img src="{{ asset('assets/admin/news-assets/' . $related_new->image) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $related_new->title }}</h5>
                                            <p class="card-title text-black">
                                                <i class="fas fa-calendar-alt pr-1"></i>
                                                {{ $related_new->date->format('d, F Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Media Partner --}}
    <div id="media_partner" class="my-5">
        <div class="text-center">
            <h3 class="text-black" id="media_partner_title">Media Partner</h3>
        </div>
        <div class="container my-5">
            <div class="my-5 d-flex justify-content-center align-items-center">
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/honda.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/yamaha.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/hino.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/w.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/bni.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/hideway.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/broco.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="my-5 d-flex justify-content-center align-items-center">
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/honda.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/yamaha.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/hino.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/w.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/bni.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/hideway.png') }}" alt="" class="img-fluid">
                </div>
                <div class="mx-4 mr-auto">
                    <img src="{{ asset('assets/media-partner/broco.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- contact us start -->
    <section class="section pb-lg-0" id="contact">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5" data-aos="fade-down">
                    <div class="title text-center mb-4">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card contact-form mb-lg-0">
                        <div class="custom-form p-5">
                            <div id="message"></div>
                            <form method="post" action="{{ route('send.message') }}" name="contact-form"
                                id="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input name="name" id="name" type="text" class="form-control"
                                                placeholder="Enter your name...">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" id="email" type="email" class="form-control"
                                                placeholder="Enter your email...">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                            @error('comments')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-primary btn-rounded" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                        <!-- end custom-form -->
                    </div>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left">
                    <h4>{{ $data_general['PHONE'] }}</h4>
                    <h4>{{ $data_general['EMAIL'] }}</h4>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container-fluid end -->
    </section>
    <!-- contact us end -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            var filer1 = $('.fltr-contains').filterizr({
                delay: 25,
            });
            $('#filler-1 li').click(function() {
                $('#filler-1 li').removeClass('filtr-active');
                $(this).addClass('filtr-active');
                var filter = $(this).data('fltr');
                filer1.filterizr('filter', filter);
            });
            const lengtOfCollection = $('.filtr-item').length;
            const swiper = new Swiper('.swiper', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                slidesPerView: 3,
                loop: true,
                speed: 400,
            });
        })
    </script>
@endsection
