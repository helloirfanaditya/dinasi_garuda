@extends('admin.layouts.app',['title' => 'Update Collection '.$collection->collection])
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
                                    <li class="breadcrumb-item active">Update Collection {{ $collection->collection }}</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Update Collection {{ $collection->collection }}</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5>Update</h5>
                                <hr>
                                <form action="{{ route('admin.collection.update', ['id' => $collection->id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Title"
                                                    value="{{ $collection->collection }}">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>URL Link</label>
                                                <input type="text" class="form-control" name="url_link"
                                                    value="{{ $collection->url_link }}">
                                                @error('url_link')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="category" id="" class="form-control">
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $category->id == $collection->category->id ? 'selected' : '' }}>
                                                            {{ $category->collection_category }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
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
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description">{{ $collection->description }}</textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger" type="submit">UPDATE</button>
                                    <a href="/admin/collection" class="btn text-secondary">BACK</a>
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
            fileName = $(this).val().replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection
