@extends('admin.layouts.app',['title' => 'Kingdom'])
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
                                    <li class="breadcrumb-item active">Kingdom</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kingdom</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>List Kingdom</h5>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.kingdom.create') }}" class="btn btn-danger">Add New</a>
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-borderless" id="kingdom">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>KERAJAAN</th>
                                            <th>PERIOD</th>
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
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            var table = $('#kingdom').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/kingdom/table",
                columns: [{
                        data: 'DT_RowIndex'
                    },
                    {
                        data: 'kerajaan'
                    },
                    {
                        data: 'period'
                    },
                    {
                        data: 'action'
                    },
                ]
            });
        })
    </script>
@endsection
