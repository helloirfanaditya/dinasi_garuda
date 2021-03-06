@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">About Us</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/landings/img/about_us.png') }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1 class="mb-5">Dinasti Garuda</h1>
                {!! $data_general['ABOUT'] !!}
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Vision</h1>
                {!! $data_general['VISI_PAGE'] !!}
            </div>
            <div class="col-md-6">
                <h1>Mission</h1>
                {!! $data_general['MISI_PAGE'] !!}
            </div>
        </div>
    </div>
    <div id="our-team" class="my-5">
        <div class="text-center">
            <h1>Our Team</h1>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('assets/landings/img/image1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Ayu Tania</h5>
                            <p>Ceo & Master Concept</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('assets/landings/img/image2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Reinny Devi</h5>
                            <p>COO & Project Leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('assets/landings/img/image3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Chandra Gunawan</h5>
                            <p>Chief Marketing Officer</p>
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
