
<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->



<head>
    <meta charset="UTF-8">
    <title>Pick Admin</title>
    <link rel="shortcut icon" href="{{URL::asset('dist/images/favicon.ico')}}">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/flags-icon/css/flag-icon.min.css')}}">

    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/social-button/bootstrap-social.css')}}">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/css/main.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default" style="background-image: url('dist/images/infa_Deh_fill_03.jpg');  background-position: center; background-repeat: no-repeat; background-size: cover; ">
    <!-- START: Main Content-->
    <div class="container ">
        <div class="row vh-100 justify-content-between align-items-center ">
            <div class="col-12 ">
                <form method="POST" action="{{ route('login') }}" class="row row-eq-height lockscreen mt-5 mb-5 ">
                @csrf
                    <div class="lock-image col-12 col-sm-5 "></div>
                    <div class="login-form col-12 col-sm-7 ">
                        <div class="form-group mb-3 ">
                            <label for="email ">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3 ">
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input "  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label " for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>

                        <div class="form-group mb-0 ">
                            <button class="btn btn-primary " type="submit">{{ __('Login') }}</button>
                        </div>
                        
                        <div class="mt-2 ">Forgot Password? 
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">{{ __('here') }}</a>
                            @endif
                        </div>
                        
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END: Content-->

    <!-- START: Template JS-->
    <script src="{{URL::asset('dist/vendors/jquery/jquery-3.3.1.min.js ')}}"></script>
    <script src="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.min.js ')}}"></script>
    <script src="{{URL::asset('dist/vendors/moment/moment.js ')}}"></script>
    <script src="{{URL::asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
    <script src="{{URL::asset('dist/vendors/slimscroll/jquery.slimscroll.min.js ')}}"></script>

    <!-- END: Template JS-->
</body>
<!-- END: Body-->



</html>
