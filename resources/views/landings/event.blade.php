@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">Events</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($event as $new)
                <div class="col-lg-4">
                    <a href="{{ route('event.detail', ['id' => $new->id]) }}">
                        <div class="card">
                            <img src="{{ asset('assets/admin/event-assets/' . $new->image) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5>{{ $new->title }}</h5>
                                <p> {{ $new->place }}</p>
                                <p> {{ $new->date->format('d, F Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            {{ $event->links() }}
        </div>
    </div>
@endsection
