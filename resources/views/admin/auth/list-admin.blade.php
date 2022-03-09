@extends('admin.layouts.app',['title' => 'List Admin'])
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
                                    <li class="breadcrumb-item active">List Admin</li>
                                </ol>
                            </div>
                            <h4 class="page-title">List Admin</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5>List Admin</h5>
                                <hr>
                                <table class="table table-borderless" id="table-list-admin">
                                    <thead>
                                        <tr>
                                            <th>Roles</th>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
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
            var table = $('#table-list-admin').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/list-admin/table",
                columns: [{
                        data: 'roles'
                    },
                    {
                        data: 'username'
                    },
                    {
                        data: 'fullname'
                    },
                    {
                        data: 'email'
                    },
                ]
            });
        })
    </script>
@endsection
