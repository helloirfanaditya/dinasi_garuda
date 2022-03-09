@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">Kingdom</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($kingdoms as $kingdom)
                <div class="col-lg-4">
                    <a href="{{ route('kingdom.detail', ['id' => $kingdom->id]) }}">
                        <div class="card">
                            <img src="{{ asset('assets/admin/kingdom-assets/' . $kingdom->image) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kingdom->title }}</h5>
                                <p class="card-text">{{ $kingdom->period }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            {{ $kingdoms->links() }}
        </div>
    </div>
@endsection
