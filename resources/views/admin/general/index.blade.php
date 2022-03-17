@extends('admin.layouts.app',['title' => 'General'])
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dinasti Garuda</a></li>
                                    <li class="breadcrumb-item active">General</li>
                                </ol>
                            </div>
                            <h4 class="page-title">General</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                            aria-controls="home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Header</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                            role="tab" aria-controls="contact" aria-selected="false">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="visi-tab" data-toggle="tab" href="#visi" role="tab"
                                            aria-controls="visi" aria-selected="false">Visi & Mision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="team-tab" data-toggle="tab" href="#team" role="tab"
                                            aria-controls="team" aria-selected="false">Team</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <form action="{{ route('admin.general-logo-dark') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label>Logo Dark</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                            name="logo_dark">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                        @error('logo_dark')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger my-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-3">
                                                <form action="{{ route('admin.general-logo-light') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label>Logo Light</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                            name="logo_light">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                        @error('logo_light')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger my-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-3">
                                                <form action="{{ route('admin.general.logo-sm') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label>Logo Icon</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                            name="logo_icon">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                        @error('logo_icon')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger my-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-3">
                                                <form action="{{ route('admin.general.logo-favicon') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label>Favicon</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                            name="favicon">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                        @error('favicon')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger my-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-6">
                                                <form action="{{ route('admin.general.title') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="{{ $data_general['TITLE'] }}">
                                                        @error('title')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger mb-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-6">
                                                <form action="{{ route('admin.general.app_url') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>App URL</label>
                                                        <input type="text" class="form-control" name="app_url"
                                                            value="{{ $data_general['APP_URL'] }}">
                                                        @error('app_url')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger mb-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-12">
                                                <form action="{{ route('admin.general.descrtipion') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input type="text" class="form-control" name="description"
                                                            value="{{ $data_general['DESCRIPTION'] }}">
                                                        @error('description')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger mb-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-6">
                                                <form action="{{ route('admin.general.phone') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            value="{{ $data_general['PHONE'] }}">
                                                        @error('phone')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger mb-2">Submit</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-6">
                                                <form action="{{ route('admin.general.email') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email"
                                                            value="{{ $data_general['EMAIL'] }}">
                                                        @error('email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-danger mb-2">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="{{ route('admin.general.title-header') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Header Title</label>
                                                        <textarea name="header_title"></textarea>
                                                    </div>
                                                    <button class="btn btn-danger">SUBMIT</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="{{ route('admin.general.about-store') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>About : </label>
                                                        <textarea name="about">{!! $data_general['ABOUT'] !!}</textarea>
                                                    </div>
                                                    <button class="btn btn-danger">SUBMIT</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="visi" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form action="{{ route('admin.general.visi-page') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Visi : </label>
                                                        <textarea name="visi_page"> {!! $data_general['VISI_PAGE'] !!}</textarea>
                                                    </div>
                                                    <button class="btn btn-danger">SUBMIT</button>
                                                </form>
                                            </div>
                                            <div class="col-lg-6">
                                                <form action="{{ route('admin.general.misi-page') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Misi : </label>
                                                        <textarea name="misi_page"> {!! $data_general['MISI_PAGE'] !!}</textarea>
                                                    </div>
                                                    <button class="btn btn-danger">SUBMIT</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="mb-4">
                                            <h5>Our Team</h5>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card shadow" style="border-radius: 10px;">
                                                            <img src="{{ asset('assets/landings/img/image1.png') }}"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5>Ayu Tania</h5>
                                                                <p>Ceo & Master Concept</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card shadow" style="border-radius: 10px;">
                                                            <img src="{{ asset('assets/landings/img/image2.png') }}"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5>Reinny Devi</h5>
                                                                <p>COO & Project Leader</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card shadow" style="border-radius: 10px;">
                                                            <img src="{{ asset('assets/landings/img/image3.png') }}"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5>Chandra Gunawan</h5>
                                                                <p>Chief Marketing Officer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <a href="">
                                                    <i class="fas fa-plus-circle" style="font-size: 54px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('header_title');
            CKEDITOR.replace('about');
            CKEDITOR.replace('visi_page');
            CKEDITOR.replace('misi_page');
        })
    </script>
@endsection
