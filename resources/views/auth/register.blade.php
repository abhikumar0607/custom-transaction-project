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
   <div class="login-register-saction rigester-from">
      <div class="container">
         <div class="login-register-inner">
            <div class="row">
               <div class="col-md-6">
                  <div class="login-registerleft">
                     <img src="{{ asset('public/assets/img/logo/rigestir.png') }}">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="login-registerright register-from">
                     <h2>Get Started with Us</h2>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="left-input">
                           <div class="field">
                                 <input type="text" name="business_name" value="{{ old('business_name') }}" required>
                                 <label for="business_name" title="Business Name" data-title="Business Name"></label>
                                 <div class="icon"><img src="{{ asset('public/assets/img/logo/bussnes.png') }}"></div>
                           </div>
                        </div>
                        <div class="right-input">
                           <div class="field">
                                 <input type="text" name="importer_code" value="{{ old('importer_code') }}" required>
                                 <label for="importer_code" title="Importer Code" data-title="Importer Code"></label>
                                 <div class="icon"><img src="{{ asset('public/assets/img/logo/bussnes.png') }}"></div>
                           </div>
                        </div>
                        <div class="field">
                           <input type="text" name="first_name" value="{{ old('first_name') }}" required>
                           <label for="first_name" title="First Name" data-title="First Name"></label>
                           <div class="icon"><img src="{{ asset('public/assets/img/logo/user-from.png') }}"></div>
                           @error('email')
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                           @enderror
                        </div>
                        <div class="field">
                           <input type="text" name="last_name" value="{{ old('last_name') }}" required>
                           <label for="last_name" title="Last Name" data-title="Last Name"></label>
                           <div class="icon"><img src="{{ asset('public/assets/img/logo/user-from.png') }}"></div>
                        </div>
                        <div class="field">
                           <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                           <label for="email" title="Business Email" data-title="Business Email"></label>
                           <div class="icon"><img src="{{ asset('public/assets/img/logo/mail.png') }}"></div>
                        </div>
                        <div class="field">
                           <input type="tel" placeholder="Phone Number" name="mobile" value="{{ old('mobile') }}" onkeypress="return onlyNumber(event)" required>
                        </div>
                        <div class="field pass">
                           <input type="password" class="@error('password') is-invalid @enderror" name="password" value="" required>
                           <label for="password" title="Password" data-title="Password"></label>
                           <div class="icon"><img src="{{ asset('public/assets/img/logo/pasword.png') }}"></div>
                           <div class="icon-squer"><img src="{{ asset('public/assets/img/logo/squer.png') }}"></div>
                           @error('password')
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                           @enderror
                        </div>
                        <!-- <div class="field pass">
                           <input type="password" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" required>
                           <label for="password-confirm" title="password-confirm" data-title="password-confirm"></label>
                           <div class="icon"><img src="{{ asset('public/assets/img/logo/pasword.png') }}"></div>
                           <div class="icon-squer"><img src="{{ asset('public/assets/img/logo/squer.png') }}"></div>
                        </div> -->
                        <div class="field-accept">
                           <p><input type="checkbox" name="accept_terms"> I Accept <a href="{{ url('term-condition') }}">Terms & Condition</a> and <a href="{{ url('privacy-policy') }}">Privacy Policy</a></p>
                        </div>
                        <div class="field-send">
                           <button type="submit">Sign Up</button>
                        </div>
                        <div class="field-signup">
                           <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
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
    <script>
    function onlyNumber(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57)){
                        return false;
                    }
                return true;
            }
    </script>
</body>
</html>