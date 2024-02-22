<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Transactions Project</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/adminpro-custon-icon.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/meanmenu.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/jquery.mCustomScrollbar.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/data-table/bootstrap-table.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/data-table/bootstrap-editable.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/normalize.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/c3.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/form/all-type-forms.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
      <script src="{{ asset('public/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css'>
      <link href="{{ asset('public/assets/css/date-clander.css') }}" rel="stylesheet" type="text/css" />
      <!-- Include DataTables Buttons CSS (Optional) -->
  
      <script>
        var base_url = '{{ url("customer/") }}'; 
      </script>
      
   </head>
      @yield('content')
      






   </body>
</html>