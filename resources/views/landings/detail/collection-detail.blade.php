@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">{{ $collection->collection }}</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow">
                    <img src="{{ asset('assets/admin/collection-assets/' . $collection->image) }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-center">{{ $collection->collection }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3>Overview</h3>
                <p class="text-black">{!! $collection->description !!}</p>
                <div>
                    <a href="{{ $collection->url_link }}" target="_blank"
                        class="btn bg-orange text-white semibold px-4 py-2">Get In OpenSea <i
                            class="fas fa-arrow-right align-items-center"></i></a>
                </div>
            </div>
        </div>
        <h3 class="my-5">Other Collection</h3>
        <div class="row justify-content-center">
            @foreach ($otherCollection as $other)
                <div class="col-lg-3">
                    <a href="{{ route('collection.detail', ['id' => $other->id]) }}">
                        <div class="card shadow">
                            <img src="{{ asset('assets/admin/collection-assets/' . $other->image) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $other->collection }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
