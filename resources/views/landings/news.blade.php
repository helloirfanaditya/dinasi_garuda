@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">News</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($news as $new)
                <div class="col-lg-4">
                    <a href="{{ route('news.detail', ['id' => $new->id]) }}">
                        <div class="card">
                            <img src="{{ asset('assets/admin/news-assets/' . $new->image) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-text"> {{ $new->created_at->format('d,F Y') }}</p>
                                <h5 class="card-title">{{ $new->title }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            {{ $news->links() }}
        </div>
    </div>
@endsection
