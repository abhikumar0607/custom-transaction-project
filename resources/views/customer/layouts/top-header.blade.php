<div class="header-top-area">
    <div class="fixed-header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                <div class="mobile-view">
                    <a href="#" class="logo-mbile"><img src="{{ asset('public/assets/img/logo/d-logo.png') }}" alt="#"></a>
                    <div class="mean-bar">
                        <a href="#nav" class="meanmenu-reveal" style="right: 0px; left: auto; text-align: center; text-indent: 0px; font-size: 18px;"><span></span><span></span><span></span></a>
                        <nav class="mean-nav">
                            <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li class="nav-item"> <a href="dashboard.html"> <img src="{{ asset('public/assets/img/logo/meni-1-svg.svg') }}"> <span class="mini-dn">Dashboard</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
                                    <li class="nav-item"> <a href="customs-transactions-listing.html"> <img src="{{ asset('public/assets/img/logo/meni-2-svg.svg') }}"> <span class="mini-dn">Declaration View</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
                                    <li class="nav-item"> <a href="customs-transactions.html" class="active"> <img src="{{ asset('public/assets/img/logo/meni-3-svg.svg') }}"> <span class="mini-dn">Reconciliation</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
                                    <li class="nav-item"> <a href="reports.html"> <img src="{{ asset('public/assets/img/logo/meni-4-svg.svg') }}"> <span class="mini-dn">Reports</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
                                    <div class="footer-menu-side-bar">
                                        <ul class="tool-tphv">
                                        <li><a href="#"><img src="{{ asset('public/assets/img/logo/meni-5-svg.svg') }}"> <span>Terms of use</span></a></li>
                                        <li><a href="#"><img src="{{ asset('public/assets/img/logo/meni-6-svg.svg') }}"> <span>Privacy policy</span> </a></li>
                                        <li ><a href="#"><img src="{{ asset('public/assets/img/logo/meni-7-svg.svg') }}"><span>Security</span></a></li>
                                        </ul>
                                    </div>
                                </ul>
                            </nav>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="header-top-menu from-serch">
                    <div class="breadcome-heading">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                    <li class="nav-item dropdown"> <a href="#" class="right-nv"><img src="{{ asset('public/assets/img/logo/head-svg.svg') }}"></a> </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle right-nv"><img src="{{ asset('public/assets/img/logo/noti-svg.svg') }}"><span class="indicator-nt"></span></a>
                        <div role="menu" class="notification-author dropdown-menu animated flipInX">
                            <div class="notification-single-top">
                            <h1>Notifications</h1>
                            </div>
                            <ul class="notification-menu">
                            <li>
                                <a href="#">
                                    <div class="notification-icon"> <span class="adminpro-icon adminpro-checked-pro"></span> </div>
                                    <div class="notification-content">
                                        <span class="notification-date">16 Sept</span>
                                        <h2>Advanda Cro</h2>
                                        <p>Please done this project as soon possible.</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-icon"> <span class="adminpro-icon adminpro-cloud-computing-down"></span> </div>
                                    <div class="notification-content">
                                        <span class="notification-date">16 Sept</span>
                                        <h2>Sulaiman din</h2>
                                        <p>Please done this project as soon possible.</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-icon"> <span class="adminpro-icon adminpro-shield"></span> </div>
                                    <div class="notification-content">
                                        <span class="notification-date">16 Sept</span>
                                        <h2>Victor Jara</h2>
                                        <p>Please done this project as soon possible.</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-icon"> <span class="adminpro-icon adminpro-analytics-arrow"></span> </div>
                                    <div class="notification-content">
                                        <span class="notification-date">16 Sept</span>
                                        <h2>Victor Jara</h2>
                                        <p>Please done this project as soon possible.</p>
                                    </div>
                                </a>
                            </li>
                            </ul>
                            <div class="notification-view"> <a href="#">View All Notification</a> </div>
                        </div>
                    </li>
                    <li class="nav-item user-profile">
                         @php 
                          $image = Auth::user()->avatar;
                        @endphp 
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> <span class="adminpro-iconuser"><img src="{{ asset('public/uploads/users/' . $image) }}"></span> <span class="admin-name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span> <span class="author-project-icon adminpro-icon adminpro-down-arrow"><img src="{{ asset('public/assets/img/logo/drop-dwon.png') }}"></span> </a>
                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                            <li><a href="{{ url('customer/user-profile') }}"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a> </li>
                            <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a> </li>
                            <li><a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="adminpro-icon adminpro-locked author-log-ic"></span><span>Logout</span> </a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>