@extends('admin.layouts.app',['title' => 'Events'])
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                                    <li class="breadcrumb-item active">Events</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Events</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>List Events</h5>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.event.create') }}" class="btn btn-danger">Add Event</a>
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-borderless" id="table-events">
                                    <thead>
                                        <tr>
                                            <th>Date/Time</th>
                                            <th>Events</th>
                                            <th>Place</th>
                                            <th>View</th>
                                            <th>Action</th>
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
            var table = $('#table-events').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/event/table",
                columns: [{
                        data: 'date'
                    },
                    {
                        data: 'event'
                    },
                    {
                        data: 'place'
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
