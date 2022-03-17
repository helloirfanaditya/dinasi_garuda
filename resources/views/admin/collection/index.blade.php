@extends('admin.layouts.app',['title' => 'Collection'])
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
                                    <li class="breadcrumb-item active">Collection</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Collection</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">List Collection</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#category"
                                                    role="tab" aria-controls="home" aria-selected="true">Category</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.collection.create') }}" class="btn btn-danger">Add
                                            Collection</a>
                                        <a href="{{ route('admin.collection.category.create') }}"
                                            class="btn btn-danger">Add
                                            Category</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <table class="table table-borderless" id="collection">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>COLLECTION</th>
                                                    <th>CATEGORY</th>
                                                    <th>VIEW</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="home-tab">
                                        <table class="table table-borderless" id="collection_category" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>CATEGORY</th>
                                                    <th>CREATED</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
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
            var table = $('#collection').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/collection/table",
                columns: [{
                        data: 'DT_RowIndex'
                    },
                    {
                        data: 'collection'
                    },
                    {
                        data: 'category'
                    },
                    {
                        data: 'view'
                    },
                    {
                        data: 'action'
                    },
                ]
            });
            var table = $('#collection_category').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/collection/category/table",
                columns: [{
                        data: 'DT_RowIndex'
                    },
                    {
                        data: 'collection_category'
                    },
                    {
                        data: 'created'
                    },
                    {
                        data: 'action'
                    },
                ]
            });
        })
    </script>
@endsection
