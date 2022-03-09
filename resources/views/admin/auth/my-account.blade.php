@extends('admin.layouts.app',['title' => 'My Account'])
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
                                    <li class="breadcrumb-item active">My Account</li>
                                </ol>
                            </div>
                            <h4 class="page-title">My Account</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5>Add new Admin</h5>
                                <hr>
                                <form action="{{ route('admin.my-account.store') }}" method="post">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    value="{{ auth('admin')->user()->username }}" placeholder="Username"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" class="form-control" name="fullname"
                                                    placeholder="Fullname" value="{{ auth('admin')->user()->fullname }}">
                                                @error('fullname')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email"
                                                    value="{{ auth('admin')->user()->email }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Type the password if you wanna change password">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Password Confirmation</label>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    placeholder="Password confirmation">
                                                @error('password_confirmation')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success" type="submit">Add new Admin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
