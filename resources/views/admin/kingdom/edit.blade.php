@extends('admin.layouts.app',['title' => 'Update Kingdom '.$kingdom->title])
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                                    <li class="breadcrumb-item active">Create new Kingdom</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Create new Kingdom</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5>Create</h5>
                                <hr>
                                <form action="{{ route('admin.kingdom.update', ['id' => $kingdom->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Title"
                                                    value="{{ $kingdom->title }}">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Period</label>
                                                <input type="text" class="form-control" name="period"
                                                    placeholder="1500SM - 1600SM" value="{{ $kingdom->period }}">
                                                @error('period')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        name="image">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                    @error('image')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description">{{ $kingdom->description }}</textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger" type="submit">SUBIMT</button>
                                    <a href="/admin/kingdom" class="btn text-secondary">BACK</a>
                                </form>
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
        CKEDITOR.replace('description');
        $('#customFile').on('change', function() {
            //get the file name
            fileName = $(this).val().replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection
