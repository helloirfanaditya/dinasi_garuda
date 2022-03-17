@extends('admin.layouts.app',['title' => 'Edit Event '.$event->title])
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dinasti Garuda</a></li>
                                    <li class="breadcrumb-item active">Edit Event</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Event</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <form action="{{ route('admin.event.update', ['id' => $event->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Title"
                                                    value="{{ $event->title }}">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Date/Time</label>
                                                <input type="datetime-local" name="date" class="form-control"
                                                    placeholder="Date/Time"
                                                    value="{{ $event->date->format('d/m/Y H.i') }}">
                                                @error('date')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Place</label>
                                                <input type="text" class="form-control" name="place" placeholder="Place"
                                                    value="{{ $event->place }}">
                                                @error('place')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description">{{ $event->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger">SUBMIT</button>
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
        $(document).ready(function() {
            CKEDITOR.replace('description');
            $('#customFile').on('change', function() {
                //get the file name
                fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        })
    </script>
@endsection
