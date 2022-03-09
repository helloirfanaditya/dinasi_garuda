<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h2>Dinasi Garuda</h2>
                            </div>
                            <form action="{{ route('admin.login.store') }}" class="pt-2" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required=""
                                        placeholder="Enter your email" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    {{-- <a href="auth-recoverpassword.html" class="text-muted float-right"><small>Forgot
                                            your password?</small></a> --}}
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password"
                                        placeholder="Enter your password" name="password">
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block text-uppercase" type="submit"> Login
                                    </button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <script src="{{ asset('assets/admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
