<nav id="sidebar">
    <div class="sidebar-header">
        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn"> <img src="{{ asset('public/assets/img/logo/d-logo.png') }}" alt="#"> </button>
    </div>
    <div class="left-custom-menu-adp-wrap">
        <ul class="nav navbar-nav left-sidebar-menu-pro">
            <li class="nav-item"> <a href="{{ url('customer/dashboard') }}" class="{{ request()->is('customer/dashboard') ? 'active' : ''}}"> <img src="{{ asset('public/assets/img/logo/meni-1-svg.svg') }}"> <span class="mini-dn">Dashboard</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
            <li class="nav-item"> <a href="{{ url('customer/transaction-listing') }}" class="{{ request()->is('customer/transaction-listing') ? 'active' : ''}}"> <img src="{{ asset('public/assets/img/logo/meni-2-svg.svg') }}"> <span class="mini-dn">Declaration View</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
            <li class="nav-item"> <a href="{{ url('customer/custom-reconcilation') }}" class="{{ request()->is('customer/custom-reconcilation') ? 'active' : ''}}"> <img src="{{ asset('public/assets/img/logo/meni-3-svg.svg') }}"> <span class="{{ url('customer/reconcilation-groups') }}">Reconciliation</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
            <li class="nav-item"> <a href="{{ url('customer/reports') }}" class="{{ request()->is('customer/reports') ? 'active' : ''}}"> <img src="{{ asset('public/assets/img/logo/meni-4-svg.svg') }}"> <span class="mini-dn">Reports</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
            <li class="nav-item"> <a href="{{ url('customer/upload-testing') }}" class="{{ request()->is('customer/upload-testing') ? 'active' : ''}}"> <img src="{{ asset('public/assets/img/logo/meni-4-svg.svg') }}"> <span class="mini-dn">Upload BOE</span> <span class="indicator-right-menu mini-dn"></span></a> </li>
        </ul>
        <div class="footer-menu-side-bar">
            <ul class="tool-tphv">
                <li><a href="#"><img src="{{ asset('public/assets/img/logo/meni-5-svg.svg') }}"> <span>Terms of use</span></a></li>
                <li><a href="#"><img src="{{ asset('public/assets/img/logo/meni-6-svg.svg') }}"> <span>Privacy policy</span> </a></li>
                <li ><a href="#"><img src="{{ asset('public/assets/img/logo/meni-7-svg.svg') }}"><span>Security</span></a></li>
            </ul>
        </div>
    </div>
</nav>