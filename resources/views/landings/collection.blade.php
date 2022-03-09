@extends('landings.layouts.app')
@section('content')
    <div class="jumbotron" id="hero_image">
        <div class="container-fluid">
            <h1 class="text-white" style="font-size: 42px;">Collection</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="/collection?cat=most"
                            class="text-black {{ 'most' == request()->get('cat') ? 'active' : '' }}">Most
                            Popular</a></li>
                    @foreach ($collection_category as $category)
                        <li class="list-group-item"><a
                                class="text-black {{ $category->id == request()->get('cat') ? 'active' : '' }}"
                                href="/collection?cat={{ $category->id }}">{{ $category->collection_category }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row mt-5">
                    @foreach ($collections as $kingdom)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <a href="{{ $kingdom->url_link }}" style="text-decoration: none" target="_blank">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/admin/collection-assets/' . $kingdom->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $kingdom->collection }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center">
            {{ $collections->links() }}
        </div>
    </div>
@endsection
