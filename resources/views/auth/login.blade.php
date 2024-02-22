
<!doctype html>
<html class="no-js" lang="en">
<head>
<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">  
<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">  
<link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">  
<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">  
<style>
.login-register-saction {
  display: table-cell;
  width: 100vw;
  height: 100vh;
  vertical-align: middle;
  text-align: center;
  position: relative;
  background: url(public/images/creative-people-working-office.jpg);
  background-size: cover;
  background-position: 100%;
}
.login-register-saction::after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  display: inline-block;
  text-align: center;
  background: rgba(15, 54, 80, 0.90);
  width: 100%;
  height: 100vh;
  top: 0;
}
.login-register-inner {
  display: inline-block;
  position: relative;
  z-index: 999;
  background-color: #fff;
  box-shadow: 0px 0px 30px 0px rgba(9, 10, 18, 0.06);
  width: 1150px;
  padding: 34px;
  border-radius: 4px;
  padding-right: 46px;
}
.login-registerright {
  display: inline-block;
  width: 100%;
  padding: 88px 0 88px 10px;
}
.login-registerright h2 {
  display: inline-block;
  width: 100%;
  text-align: center;
  color:#2a9d8f;
  font-size: 24px;
  font-weight: 500;
  margin: 0px 0 0 0;
}
.login-registerright form {
  display: inline-block;
  width: 100%;
  margin: 37px 0 0 0;
}
.login-registerright form .field label {
  font-weight: 400;
  font-size: 16px;
  display: initial;
}
.field .icon {
  position: absolute;
  top: 15px;
  left: 14px;
}
.icon-squer {
  position: absolute;
  right: 15px;
  top: 16px;
}
.field-forget {
  display: inline-block;
  width: 100%;
  text-align: right;
  margin: 10px 0 0 0;
}
.field-forget img {
  margin: 0 7px 0 0;
}
.field-forget a {
  color:#2a9d8f;
  font-size: 14px;
  font-weight: 500;
}
.field.pass {
  margin: 0 !important;
}
.field-send {
  display: inline-block;
  width: 100%;
  margin: 26px 0 0 0;
}
.field-send button {
  width: 100%;
  background-color:#2a9d8f;
  border: none;
  height: 52px;
  border-radius: 4px;
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  box-shadow: 0px 0px 30px 0px rgba(9, 10, 18, 0.06);
}
.field-signup {
  display: inline-block;
  width: 100%;
  margin: 24px 0 0 0;
}
.field-signup p {
  color: #090A12;
  font-size: 14px;
  font-weight: 400;
  width: 100%;
  display: inline-block;
}
.field-signup p a {
  color:#2a9d8f;
}
.left-input {
  float: left;
  width: 48%;
}
.right-input {
  float: right;
  width: 48%;
}
.field input {
    width: 100%;
    padding: 0px 38px;
    box-sizing: border-box;
    font-size: 16px;
    color: #222;
    border: 1px solid rgba(9, 10, 18, 0.20);
    border-radius: 4px;
    height: 52px;
    line-height: 52px;
    box-shadow: 0px 0px 30px 0px rgba(9, 10, 18, 0.06);
    font-weight: 400;
    font-family: 'Poppins', sans-serif;
}
.login-registerright form .field label {
    font-weight: 400;
    font-size: 16px;
    display: initial;
}
.field .icon {
    position: absolute;
    top: 15px;
    left: 14px;
}
.login-registerright form .field {
    display: inline-block;
    width: 100%;
    margin: 0 0 31px 0;
    position: relative;
}
.login-registerright form .field {
    display: inline-block;
    width: 100%;
    margin: 0 0 31px 0;
    position: relative;
}
  </style>
</head>
<body>

<div class="login-register-saction">
   <div class="container">
      <div class="login-register-inner">
         <div class="row">
            <div class="col-md-6">
               <div class="login-registerleft">
                  <img src="{{ asset('public/assets/images/login-image.png') }}">
               </div>
            </div>
            <div class="col-md-6">
               <div class="login-registerright">
                  <h2>Let’s Get Started</h2>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                     <div class="field">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="username" title="Email" data-title="Email"></label>
                        <div class="icon"><img src="{{ asset('public/assets/images/mail.png') }}"></div>
                     </div>
                     <div class="field pass">

                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="username" title="Password" data-title="Password"></label>
                        <div class="icon"><img src="{{ asset('public/assets/images/pasword.png') }}"></div>
                        <div class="icon-squer"><img src="{{ asset('public/assets/images/squer.png') }}"></div>
                     </div>
                     <div class="field-forget">
                     @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"><img src="{{ asset('public/assets/images/foget-icon.png') }}">Forgot Password ?</a>
                        @endif
                     </div>
                     <div class="field-send">
                     <button type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                      </button>
                     </div>
                     <div class="field-signup">
                        <p>Don’t have an account? <a href="{{ url('register') }}">Sign Up</a></p>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="{{ asset('public/assets/js/js/vendor/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('public/assets/js/main.js') }}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
</body>
</html>

