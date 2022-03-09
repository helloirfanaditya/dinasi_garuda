@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">{{ $kingdom->title }}</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <img src="{{ asset('assets/admin/kingdom-assets/' . $kingdom->image) }}" class="card-img-top"
                        alt="...">
                </div>
                <h1 class="card-title">{{ $kingdom->title }}</h1>
                <p class="card-text">{!! $kingdom->description !!}</p>
            </div>
            <div class="col-lg-4">
                @foreach ($related as $relate)
                    <div class="card">
                        <img src="{{ asset('assets/admin/kingdom-assets/' . $relate->image) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $relate->title }}</h5>
                            <p class="card-text">{{ $relate->period }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
