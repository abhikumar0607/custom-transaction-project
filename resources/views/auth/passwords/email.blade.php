<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transactions Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/img/favicon.ico') }}">-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
</head>
<body>
    <div class="login-register-saction forgot-password-page">
        <div class="container">
            <div class="login-register-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="login-registerleft">
                            <img src="{{ asset('public/assets/img/logo/forget.jpg') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-registerright">
                            <h2>Forgot Your Password ?</h2>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="field">
                                    <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    <label for="username" title="Email" data-title="Email"></label>
                                    <div class="icon"><img src="{{ asset('public/assets/img/logo/mail.png') }}"></div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field-send">
                                    <button>Forgot Password</button>
                                </div>
                                <div class="field-signup">
                                    <p>Back to > <a href="{{ url('login') }}">Log In</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="{{ asset('public/assets/js/vendor/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
</body>
</html>