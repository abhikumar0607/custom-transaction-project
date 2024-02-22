@extends('customer.layouts.master')
@section('content')
    <body class="materialdesign">
        <div class="wrapper-pro">
            <div class="left-sidebar-pro">
             @include('customer.layouts.sidebar')
            </div>
            <div class="content-inner-all">
                @include('customer.layouts.top-header')
    <!-- Breadcome start-->
    <div class="user-profile">
      <div class="container-fluid">
        <div class="row">
        
          <div class="col-md-5">
          @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('unsuccess'))
               <div class="alert alert-success">
                    {{ session('unsuccess') }}
                </div>
            @endif 
        <form action="{{ route('customer.update.profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user-profile-left">
            <div class="user-box-one">
            <h3>User Profile</h3>
            <div class="img-profile-upload">
            <div class="avatar-upload">
            <div class="avatar-edit">
            <input type='file' id="imageUpload" name="avatar" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
            </div>
            <div class="avatar-preview">
                @php 
                $image = Auth::user()->avatar;
                $avatarPath = asset('public/uploads/users/' . $image);
                @endphp  
                <div id="imagePreview" style="background-image: url('{{ $avatarPath }}');"> </div>
            </div>
            </div>
            <div class="profile-name"><h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2></div>
            </div>
          </div>
            <div class="edite-profile-form">
                <div class="fild-edite">
                <label>First Name</label>
                <input type="text" placeholder="First Name" value="{{ Auth::user()->first_name }}" name="first_name"/>
                </div>
                <div class="fild-edite">
                <label>Last  Name</label>
                <input type="text" placeholder="Last  Name" value="{{ Auth::user()->last_name }}" name="last_name"/>
                </div>
                <div class="fild-edite">
                <label>Phone</label>
                <input type="tel" placeholder="Phone" value="{{ Auth::user()->mobile }}" name="mobile"/>
                <input type="hidden" placeholder="id" value="{{ Auth::user()->id }}" name="id"/>
                </div>
                @if ($errors->has('avatar'))
                    <div class="alert alert-danger">
                        {{ $errors->first('avatar') }}
                    </div>
                @endif
                <div class="from-button"><button>Save Information</button></div>   
            </div>
            </div>
          </form>
          </div>
          
          <div class="col-md-7">
          <div class="invite-new-user">
          <h3>Invite New User</h3>
          <p>Invited users won’t be able to delete customs<br> transactions. Deletion is only available for the<br> admin users.</p>
          <form class="invite-new-from">
          <div class="fild-invite">
          <label>First Name</label>
          <input type="text" placeholder=""/>
          </div>
          <div class="fild-invite">
          <label>Last Name</label>
          <input type="text" placeholder=""/>
          </div>
          <div class="fild-invite">
          <label>Enter Email Address</label>
          <input type="email" placeholder=""/>
          </div>
          <div class="fild-invite-btn">
          <button>Send Invite</button>
          </div>
          </form>
          </div>
          </div>
        </div>
      </div>
    </div>

  <!---script start here-->
  <script src="{{ asset('public/assets/js/vendor/jquery-1.11.3.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/jquery.meanmenu.js') }}"></script>
  <script src="{{ asset('public/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('public/assets/js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/counterup/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/counterup/counterup-active.js') }}"></script>
  <script src="{{ asset('public/assets/js/peity/jquery.peity.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/peity/peity-active.js') }}"></script>
  <script src="{{ asset('public/assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/sparkline/sparkline-active.js') }}"></script>
  <script src="{{ asset('public/assets/js/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('public/assets/js/flot/jquery.flot.tooltip.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/flot/jquery.flot.spline.js') }}"></script>
  <script src="{{ asset('public/assets/js/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('public/assets/js/flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('public/assets/js/flot/Chart.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/flot/flot-active.js') }}"></script>
  <script src="{{ asset('public/assets/js/map/raphael.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/map/jquery.mapael.js') }}"></script>
  <script src="{{ asset('public/assets/js/map/france_departments.js') }}"></script>
  <script src="{{ asset('public/assets/js/map/world_countries.js') }}"></script>
  <script src="{{ asset('public/assets/js/map/usa_states.js') }}"></script>
  <script src="{{ asset('public/assets/js/map/map-active.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/bootstrap-table.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/tableExport.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/data-table-active.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/bootstrap-table-editable.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/bootstrap-editable.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/bootstrap-table-resizable.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/colResizable-1.5.source.js') }}"></script>
  <script src="{{ asset('public/assets/js/data-table/bootstrap-table-export.js') }}"></script>
  <script src="{{ asset('public/assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


  <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    </script>
@endsection      