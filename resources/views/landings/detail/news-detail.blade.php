@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">{{ $new->title }}</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <img src="{{ asset('assets/admin/news-assets/' . $new->image) }}" class="card-img-top" alt="...">
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="card-title">{{ $new->title }}</h1>
                    </div>
                    <div>
                        <h4>{{ $new->date->format('d, F Y') }}</h4>
                    </div>
                </div>
                <p class="card-text">{!! $new->description !!}</p>
            </div>
            <div class="col-lg-4">
                @foreach ($related as $relate)
                    <div class="card">
                        <img src="{{ asset('assets/admin/news-assets/' . $relate->image) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $relate->title }}</h5>
                            <p class="card-text">{{ $relate->place }}</p>
                            <p class="card-text">{{ $relate->date->format('d, F Y ') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
