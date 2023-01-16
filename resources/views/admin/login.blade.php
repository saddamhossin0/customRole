<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS Libraries -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/toastr.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('public/assets/css/yoori.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/custom.css') }}">
</head>
<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class="card-header"><h4>{{ __('Login') }}</h4></div>
                        <div class="card-body">
                            <form method="POST" class="login_form" action="{{route('post.login')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control"
                                           value=""
                                           name="email" tabindex="1"
                                           required autofocus>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password"
                                           value=""
                                           type="password" class="form-control" name="password"
                                           tabindex="2" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block login_btn" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('public/assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/assets/js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}

{{--<!-- Template JS File -->--}}
<script src="{{ asset('public/assets/js/scripts.js') }}"></script>


</body>
</html>
