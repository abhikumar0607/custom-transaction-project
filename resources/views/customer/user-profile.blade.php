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
            <div class="user-profile-left">
              <div class="user-box-one">
                <h3>User Profile</h3>
                <div class="img-profile-upload">
                  <div class="avatar-upload">
                    <!-- <div class="avatar-edit">
                      <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload"></label>
                    </div> -->
                    <div class="avatar-preview">
                        @php 
                          $image = Auth::user()->avatar;
                          $avatarPath = asset('public/uploads/users/' . $image);
                        @endphp  
                      <div id="imagePreview" style="background-image: url('{{ $avatarPath }}');"> </div>
                    </div>
                  </div>
                  <div class="profile-name">
                    <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                  </div>
                </div>
                <div class="edit-profile-upload"> <a href="{{ url('customer/edit-profile') }}"><img src="{{ asset('public/assets/img/logo/edit.svg') }}">Edit Profile</a> </div>
              </div>
              <div class="user-info-address">
                <ul>
                  <li>
                    <div class="icon"><img src="{{ asset('public/assets/img/logo/logi-svg.svg') }}"></div>
                    <span class="iddd">Logistics Solutions</span></li>
                  <li>
                    <div class="icon"><img src="{{ asset('public/assets/img/logo/mail-svg.svg') }}"></div>
                    <span class="iddd">{{ Auth::user()->email }}</span></li>
                  <li>
                    <div class="icon"><img src="{{ asset('public/assets/img/logo/phone.svg') }}"></div>
                    <span class="iddd">{{ Auth::user()->mobile }}</span></li>
                  <li>
                    <div class="icon"><img src="{{ asset('public/assets/img/logo/ae-svg.svg') }}"></div>
                    <span class="iddd">{{ Auth::user()->importer_code }}</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="user-profile-right">
              <div class="other-users-row">
                <div class="invite-user">
                  <h2>Other Users</h2>
                </div>
                <div class="invite-user"><a href="edit-profile.html"><img src="{{ asset('public/assets/img/logo/add-user.svg') }}">Invite User</a></div>
              </div>
              <div class="user-alllist">
                <div class="row">
                  <div class="col-md-6">
                    <div class="user-alllist-box">
                      <div class="user-all-pic"><img src="{{ asset('public/assets/img/logo/Ellipse 11.jpg') }}"></div>
                      <div class="user-all-name"><span>John Doe</span> <br>
                        <p>info@johndoe.com</p>
                      </div>
                      <div class="user-all-remove">
                        <button><img src="{{ asset('public/assets/img/logo/remove.svg') }}">Remove User</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="user-alllist-box">
                      <div class="user-all-pic"><img src="{{ asset('public/assets/img/logo/Ellipse 11.jpg') }}"></div>
                      <div class="user-all-name"><span>John Doe</span> <br>
                        <p>info@johndoe.com</p>
                      </div>
                      <div class="user-all-remove">
                        <button><img src="{{ asset('public/assets/img/logo/remove.svg') }}">Remove User</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="user-alllist-box">
                      <div class="user-all-pic"><img src="{{ asset('public/assets/img/logo/Ellipse 11.jpg') }}"></div>
                      <div class="user-all-name"><span>John Doe</span> <br>
                        <p>info@johndoe.com</p>
                      </div>
                      <div class="user-all-remove">
                        <button><img src="{{ asset('public/assets/img/logo/remove.svg') }}">Remove User</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="user-alllist-box">
                      <div class="user-all-pic"><img src="{{ asset('public/assets/img/logo/Ellipse 11.jpg') }}"></div>
                      <div class="user-all-name"><span>John Doe</span> <br>
                        <p>info@johndoe.com</p>
                      </div>
                      <div class="user-all-remove">
                        <button><img src="{{ asset('public/assets/img/logo/remove.svg') }}">Remove User</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Breadcome End-->

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