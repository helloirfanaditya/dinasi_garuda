@extends('admin.layouts.app',['title' => 'News'])
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
                                    <li class="breadcrumb-item active">News</li>
                                </ol>
                            </div>
                            <h4 class="page-title">News</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>News</h5>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.news.create') }}" class="btn btn-danger">Add News</a>
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-borderless" id="news-table">
                                    <thead>
                                        <tr>
                                            <th>DATE/TIME</th>
                                            <th>NEWS</th>
                                            <th>VIEW</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                </table>
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
            var table = $('#news-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/news/table",
                columns: [{
                        data: 'date'
                    },
                    {
                        data: 'news'
                    },
                    {
                        data: 'view'
                    },
                    {
                        data: 'action'
                    },
                ]
            });
        })
    </script>
@endsection
