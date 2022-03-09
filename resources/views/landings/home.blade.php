@extends('landings.layouts.app')
@section('content')
    <!-- home start -->
    <section class="bg-home" id="home" style="background-color: transparent">
        <div class="container-fluid mt-n2">
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="home-title text-white">
                        <h1 class="mb-4">Main Game sambil mengenal Sejarah Kerajaan-Kerajaan di INDONESIA!
                        </h1>
                        <p class="mb-5 text-secondary">Tunjukkan dan Asah Pengetahuanmu serta Bangga dengan sejarah dan
                            budaya yang kita miliki! </p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" data-aos="fade-left">
                    <div class="home-img p-3">
                        <img src="{{ asset('assets/landings/img/hero.png') }}" alt="" class="img-fluid mx-auto d-block">
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
                        <h3 class="mb-3">About Us</h3>
                        <p class="text-black">Dinasti Garuda merupakan Game STRATEGI dengan konsep awal Card Battle
                            Game yang mengambil
                            tema Majapahit sebagai pembukaan Game untuk mengantar kedalam Visi Misi yaitu “Mempersatukan
                            Nusantara” sesuai dengan Sumpah Palapa.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container-fluid end -->
    </section>
    <!-- Features end -->
    {{-- Kingdom --}}
    <div id="kingdom">
        <div class="text-center my-5">
            <h3>Nusantara Kingdom</h3>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($kingdoms as $kingdom)
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="{{ asset('assets/admin/kingdom-assets/' . $kingdom->image) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kingdom->title }}</h5>
                                <p class="card-text">{{ $kingdom->period }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <h5><a href="/kingdom" class="text-black">View More</a></h5>
            </div>
        </div>
    </div>
    {{-- Collection --}}
    <div id="collection">
        <div class="text-center">
            <h3 class="text-black">New Collection</h3>
        </div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-3">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/collection?cat=most" class=" text-black">Most Popular</a>
                        </li>
                        @foreach ($collection_category as $category)
                            <li class="list-group-item"><a class=" text-black"
                                    href="/collection?cat={{ $category->id }}">{{ $category->collection_category }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="row justify-content-center">
                        @foreach ($collections as $collection)
                            <div class="col-md-4 col-12 justify-content-center">
                                <div class="card">
                                    <img src="{{ asset('assets/admin/collection-assets/' . $collection->image) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $collection->collection }}</h5>
                                    </div>
                                </div>
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
                            <div class="card">
                                <img src="{{ asset('assets/admin/news-assets/' . $news->image) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $news->title }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Latest News</h5>
                                </div>
                            </div>
                            @foreach ($related_news as $related_new)
                                <div class="card">
                                    <img src="{{ asset('assets/admin/news-assets/' . $related_new->image) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $related_new->title }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
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
            <div class="row align-items-end">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-img d-none d-lg-block">
                        <img src="images/contact.svg" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card contact-form mb-lg-0">
                        <div class="custom-form p-5">
                            <div id="message"></div>
                            <form method="post" action="#" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control"
                                                placeholder="Enter your name...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control"
                                                placeholder="Enter your email...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control"
                                                placeholder="Enter your message..."></textarea>
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
            </div>
            <!-- row end -->
        </div>
        <!-- container-fluid end -->
    </section>
    <!-- contact us end -->
@endsection
