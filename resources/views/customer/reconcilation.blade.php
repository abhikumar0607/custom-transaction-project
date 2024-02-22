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
           <div class="breadcome-area des-none">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <ul class="breadcome-menu">
                      <li><a href="#">Home</a> <span class="bread-slash">/</span> </li>
                      <li><span class="bread-blod">Dashboard</span> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcome End-->

      <!-- welcome Project, sale area start-->
      <div class="report-saction">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="report-one-dashboard">
                <div class="heder-content-left">
                  <h2>Customs Reconciliation</h2>
                  <p>Match your inbounds and outbounds based on COO, HS Codes, Weight, Qty, and Values.</p>
                </div>
                <div class="heder-icon-left"> <img src="{{ asset('public/assets/img/logo/book-svg.svg') }}"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- welcome Project, sale area start-->

      <div class="container-fluid">
        <div class="tab-saction-all">
          <div class="tabs">
            <ul class="tabs-nav">
              <li><a href="#tab-1">Non Reconciled <span>6000</span></a></li>
              <li><a href="#tab-2">Reconciled <span>4</span></a></li>
              <li><a href="#tab-3">Assets <span>4</span></a></li>
            </ul>
            <div class="search-upload-box-right">
              <div class="upload-beo"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                  data-target="#PrimaryModalalert"><img src="{{ asset('public/assets/img/logo/icon-svg2.svg') }}"> Upload BOE</a> </div>
              <div class="upload-lgp"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                  data-target="#PrimaryModalalert1"><img src="{{ asset('public/assets/img/logo/icon-svg3.svg') }}"> Upload LGP</a> </div>
            </div>
            <div class="tabs-stage">
              <div class="tabcontent" id="tab-1">
                <div class="search-upload-saction r-r-dashboard">
                  <div class="row r-r-search-box">
                    <div class="col-md-6">
                      <div class="search-upload-box">
                        <div class="search">
                          <input type="text" class="searchTerm" placeholder="Search">
                          <button type="submit" class="searchButton"><img src="{{ asset('public/assets/img/logo/search-svg.svg') }}"></button>
                        </div>
                        <div class="filter-btn">
                          <div class="btn-group dropdown-filter">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false"> <img src="{{ asset('public/assets/img/logo/filler-con-svg.svg') }}">
                            </button>
                            <ul class="dropdown-menu">
                              <form class="from-filter">
                                <h4>DATE</h4>
                                <div class="date-left">
                                  <div class="ui calendar" id="example1">
                                    <div class="ui input left icon">
                                      <input type="text" placeholder="From">
                                    </div>
                                  </div>
                                  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                                </div>
                                <div class="date-right">
                                  <div class="ui calendar" id="example2">
                                    <div class="ui input left icon">
                                      <input type="text" placeholder="To">
                                    </div>
                                  </div>
                                  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                                </div>
                                <div class="direction-bx">
                                  <h4>DIRECTION</h4>
                                  <div class="filt-button">
                                    <button class="active">All</button>
                                    <button>Inbound</button>
                                    <button>Outbound</button>
                                  </div>
                                </div>
                                <div class="dci-type">
                                  <h4>DEC TYPE</h4>
                                  <div class="form-group">
                                    <input type="checkbox" id="import">
                                    <label for="import">Import</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="export">
                                    <label for="export">Export</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="transfer">
                                    <label for="transfer">Transfer</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="transit">
                                    <label for="transit">Transit</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="temp">
                                    <label for="temp">Temp. Admission</label>
                                  </div>
                                </div>
                              </form>
                              <div class="buton-cancel-apply">
                                <button class="canc-btn">Cancel</button>
                                <button class="apply-btn">Apply Filter</button>
                              </div>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6"> </div>
                  </div>
                  <div class="table-row">
                    <div class="table-sacroll">
                      <div class="table-inner">
                        <div class="box-open">
                          <ul>
                            <li class="select-li">2 Selected</li>
                            <li><a class="Primary mg-b-10" href="#" data-toggle="modal"
                                data-target="#PrimaryModalalert2">X Ungroup Transaction</a></li>
                          </ul>
                          <div class="clos-row-btn">
                            <button class="clos-row"><em>x</em> <br>
                              Close</button>
                          </div>
                        </div>
                        <table class="table table-condensed" style="border-collapse:collapse;">
                          <thead>
                            <tr>
                              <th> </th>
                              <th><span class="th-heding">GROUP REF.</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">REFERCENCE</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">DATE UPDATED</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">REMAINING QTY</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">REMAINING WEIGHT</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th><span class="th-heding">ACTION</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                              <td><img src="{{ asset('public/assets/img/logo/gryicon-svg.svg') }}" class="don-icon"><img src="{{ asset('public/assets/img/logo/green-svg.svg') }}"
                                  class="up-icon"></td>
                              <td class="green-text">G00001</td>
                              <td>P09808988</td>
                              <td>17/11/2022</td>
                              <td><em>750</em>/900</td>
                              <td><em>5000</em>/8000</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="dot open-child-row r-r-group-table" data-row_id="1"><button class="lock-butn">
                                  <div class="tooltip"><img src="{{ asset('public/assets/img/logo/secured-lock.svg') }}" class="blck-lock"> <span
                                      class="tooltiptext">You can’t add more transactions to locked groups</span> </div>
                                  <img src="{{ asset('public/assets/img/logo/padlock-unlock.svg') }}" class="green-lock">
                                </button>
                                <ul class="my-nav">
                                  <li>
                                    <div class="dropdown">
                                      <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                      <ul class="dropdown-content">
                                        <li><a href="#"><img src="{{ asset('public/assets/img/logo/ungroup-icon.svg') }}">Ungroup</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="13" style="padding:0 !important;" class="hiddenRow r-r-inner-table">
                                <div class="accordian-body collapse" id="demo1">
                                  <div class="card-body inner-scroll">
                                    <table class="scroll">
                                      <thead>
                                        <tr class="sticky">
                                          <th class="space-empty-one"></th>
                                          <th>ID
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>REFERCENCE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>BOE DATE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>DECLARATION
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>TYPE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>DESCRIPTION
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>COO
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>HSCODE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>QTY
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>WEIGHT
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>VALUE (AED)
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-group">
                                              <input type="checkbox" id="new-11">
                                              <label for="new-11"></label>
                                            </div>
                                          </td>
                                          <td>10003</td>
                                          <td>P09808988</td>
                                          <td>21/11/2022</td>
                                          <td>15987653333</td>
                                          <td><span class="out-tw">IN</span></td>
                                          <td>Trays</td>
                                          <td>CN</td>
                                          <td>69000011</td>
                                          <td>120</td>
                                          <td>1200</td>
                                          <td>200,000</td>
                                          <td class="dot open-child-row r-r-group-table" data-row_id="1">
                                            <ul class="my-nav">
                                              <li>
                                                <div class="dropdown">
                                                  <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                                  <ul class="dropdown-content">
                                                    <li><a href="#"><img src="{{ asset('public/assets/img/logo/ico-1.png') }}">View Declaration</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </li>
                                            </ul>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabcontent" id="tab-2">
              <div class="search-upload-saction r-r-dashboard">
                  <div class="row r-r-search-box">
                    <div class="col-md-6">
                      <div class="search-upload-box">
                        <div class="search">
                          <input type="text" class="searchTerm" placeholder="Search">
                          <button type="submit" class="searchButton"><img src="{{ asset('public/assets/img/logo/search-svg.svg') }}"></button>
                        </div>
                        <div class="filter-btn">
                          <div class="btn-group dropdown-filter">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false"> <img src="{{ asset('public/assets/img/logo/filler-con-svg.svg') }}">
                            </button>
                            <ul class="dropdown-menu">
                              <form class="from-filter">
                                <h4>DATE</h4>
                                <div class="date-left">
                                  <div class="ui calendar" id="example1">
                                    <div class="ui input left icon">
                                      <input type="text" placeholder="From">
                                    </div>
                                  </div>
                                  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                                </div>
                                <div class="date-right">
                                  <div class="ui calendar" id="example2">
                                    <div class="ui input left icon">
                                      <input type="text" placeholder="To">
                                    </div>
                                  </div>
                                  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                                </div>
                                <div class="direction-bx">
                                  <h4>DIRECTION</h4>
                                  <div class="filt-button">
                                    <button class="active">All</button>
                                    <button>Inbound</button>
                                    <button>Outbound</button>
                                  </div>
                                </div>
                                <div class="dci-type">
                                  <h4>DEC TYPE</h4>
                                  <div class="form-group">
                                    <input type="checkbox" id="import">
                                    <label for="import">Import</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="export">
                                    <label for="export">Export</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="transfer">
                                    <label for="transfer">Transfer</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="transit">
                                    <label for="transit">Transit</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="temp">
                                    <label for="temp">Temp. Admission</label>
                                  </div>
                                </div>
                              </form>
                              <div class="buton-cancel-apply">
                                <button class="canc-btn">Cancel</button>
                                <button class="apply-btn">Apply Filter</button>
                              </div>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6"> </div>
                  </div>
                  <div class="table-row">
                    <div class="table-sacroll">
                      <div class="table-inner">
                        <div class="box-open">
                          <ul>
                            <li class="select-li">2 Selected</li>
                            <li><a class="Primary mg-b-10" href="#" data-toggle="modal"
                                data-target="#PrimaryModalalert2">X Ungroup Transaction</a></li>
                          </ul>
                          <div class="clos-row-btn">
                            <button class="clos-row"><em>x</em> <br>
                              Close</button>
                          </div>
                        </div>
                        <table class="table table-condensed" style="border-collapse:collapse;">
                          <thead>
                            <tr>
                              <th> </th>
                              <th><span class="th-heding">GROUP REF.</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">REFERCENCE</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">DATE UPDATED</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">REMAINING QTY</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th><span class="th-heding">REMAINING WEIGHT</span>
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th><span class="th-heding">ACTION</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr data-toggle="collapse" data-target="#demo8" class="accordion-toggle">
                              <td><img src="{{ asset('public/assets/img/logo/gryicon-svg.svg') }}" class="don-icon"><img src="{{ asset('public/assets/img/logo/green-svg.svg') }}"
                                  class="up-icon"></td>
                              <td class="green-text">G00001</td>
                              <td>P09808988</td>
                              <td>17/11/2022</td>
                              <td><em>750</em>/900</td>
                              <td><em>5000</em>/8000</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="dot open-child-row r-r-group-table" data-row_id="1"><button class="lock-butn">
                                  <div class="tooltip"><img src="{{ asset('public/assets/img/logo/secured-lock.svg') }}" class="blck-lock"> <span
                                      class="tooltiptext">You can’t add more transactions to locked groups</span> </div>
                                  <img src="{{ asset('public/assets/img/logo/padlock-unlock.svg') }}" class="green-lock">
                                </button>
                                <ul class="my-nav">
                                  <li>
                                    <div class="dropdown">
                                      <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                      <ul class="dropdown-content">
                                        <li><a href="#"><img src="{{ asset('public/assets/img/logo/ungroup-icon.svg') }}">Ungroup</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="13" style="padding:0 !important;" class="hiddenRow r-r-inner-table">
                                <div class="accordian-body collapse" id="demo8">
                                  <div class="card-body inner-scroll">
                                    <table class="scroll">
                                      <thead>
                                        <tr class="sticky">
                                          <th class="space-empty-one"></th>
                                          <th>ID
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>REFERCENCE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>'
                                          </th>
                                          <th>BOE DATE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>DECLARATION
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg')  }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>TYPE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>DESCRIPTION
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>COO
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>HSCODE
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>QTY
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>WEIGHT
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th>VALUE (AED)
                                            <div class="btn-right">
                                              <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                              <br>
                                              <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                            </div>
                                          </th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-group">
                                              <input type="checkbox" id="new-11">
                                              <label for="new-11"></label>
                                            </div>
                                          </td>
                                          <td>10003</td>
                                          <td>P09808988</td>
                                          <td>21/11/2022</td>
                                          <td>15987653333</td>
                                          <td><span class="out-tw">IN</span></td>
                                          <td>Trays</td>
                                          <td>CN</td>
                                          <td>69000011</td>
                                          <td>120</td>
                                          <td>1200</td>
                                          <td>200,000</td>
                                          <td class="dot open-child-row r-r-group-table" data-row_id="1">
                                            <ul class="my-nav">
                                              <li>
                                                <div class="dropdown">
                                                  <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                                  <ul class="dropdown-content">
                                                    <li><a href="#"><img src="{{ asset('public/assets/img/logo/ico-1.png') }}">View Declaration</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </li>
                                            </ul>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabcontent" id="tab-3">
                <div class="search-upload-saction r-r-dashboard">
                  <div class="row r-r-search-box">
                    <div class="col-md-6">
                      <div class="search-upload-box">
                        <div class="search">
                          <input type="text" class="searchTerm" placeholder="Search">
                          <button type="submit" class="searchButton"><img src="{{ asset('public/assets/img/logo/search-svg.svg') }}"></button>
                        </div>
                        <div class="filter-btn">
                          <div class="btn-group dropdown-filter">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false"> <img src="{{ asset('public/assets/img/logo/filler-con-svg.svg') }}">
                            </button>
                            <ul class="dropdown-menu">
                              <form class="from-filter">
                                <h4>DATE</h4>
                                <div class="date-left">
                                  <div class="ui calendar" id="example1">
                                    <div class="ui input left icon">
                                      <input type="text" placeholder="From">
                                    </div>
                                  </div>
                                  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                                </div>
                                <div class="date-right">
                                  <div class="ui calendar" id="example2">
                                    <div class="ui input left icon">
                                      <input type="text" placeholder="To">
                                    </div>
                                  </div>
                                  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                                </div>
                                <div class="direction-bx">
                                  <h4>DIRECTION</h4>
                                  <div class="filt-button">
                                    <button class="active">All</button>
                                    <button>Inbound</button>
                                    <button>Outbound</button>
                                  </div>
                                </div>
                                <div class="dci-type">
                                  <h4>DEC TYPE</h4>
                                  <div class="form-group">
                                    <input type="checkbox" id="import">
                                    <label for="import">Import</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="export">
                                    <label for="export">Export</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="transfer">
                                    <label for="transfer">Transfer</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="transit">
                                    <label for="transit">Transit</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="checkbox" id="temp">
                                    <label for="temp">Temp. Admission</label>
                                  </div>
                                </div>
                              </form>
                              <div class="buton-cancel-apply">
                                <button class="canc-btn">Cancel</button>
                                <button class="apply-btn">Apply Filter</button>
                              </div>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6"> </div>
                  </div>
                  <div class="table-row">
                    <div class="table-sacroll">
                      <div class="table-inner r-r-inner-table">
                        <div class="box-open">
                          <ul>
                            <li class="select-li">2 Selected</li>
                            <li><a class="Primary mg-b-10" href="#" data-toggle="modal"
                                data-target="#PrimaryModalalert2">X Ungroup Transaction</a></li>
                          </ul>
                          <div class="clos-row-btn">
                            <button class="clos-row"><em>x</em> <br>
                              Close</button>
                          </div>
                        </div>
                        <table>
                          <thead>
                            <tr class="sticky">
                              <th class="space-empty-one"></th>
                              <th>ID
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>REFERCENCE
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>BOE DATE
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>DECLARATION
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>TYPE
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>DESCRIPTION
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>COO
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>HSCODE
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>QTY
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>WEIGHT
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th>VALUE (AED)
                                <div class="btn-right">
                                  <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                  <br>
                                  <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                                </div>
                              </th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-group">
                                  <input type="checkbox" id="assets1">
                                  <label for="assets1"></label>
                                </div>
                              </td>
                              <td>10003</td>
                              <td>P09808988</td>
                              <td>21/11/2022</td>
                              <td>15987653333</td>
                              <td><span class="out-tw">IN</span></td>
                              <td>Trays</td>
                              <td>CN</td>
                              <td>69000011</td>
                              <td>120</td>
                              <td>1200</td>
                              <td>200,000</td>
                              <td class="dot open-child-row r-r-group-table" data-row_id="1">
                                <ul class="my-nav">
                                  <li>
                                    <div class="dropdown">
                                      <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                      <ul class="dropdown-content">
                                        <li><a href="#"><img src="{{ asset('public/assets/img/logo/ico-1.png') }}">View Declaration</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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
  </div>

  <!--one-poup-->
  <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> <a class="close" data-dismiss="modal" href="#"><i
              class="fa fa-close"></i></a> </div>
        <div class="modal-body">
          <div class="oupload-poupbxx">
            <h3>Upload BOE and Supporting Docs</h3>
            <div class="refrencs">
              <label>Reference</label>
              <input type="text" placeholder="Example: PO10001" />
            </div>
            <div class="file-uploding">
              <div class="files-wr" data-count-files="1">
                <div class="one-file">
                  <label for="file-1">
                    <img src="{{ asset('public/assets/img/logo/upload-icon.svg') }}">
                    <p class="drag">Drag & Drop BOE or <span>Browse</span></p>
                    <span class="only-pdf">only PDF format</span>
                  </label>
                  <input name="file-1" id="file-1" type="file">
                </div>
                <div class="file-upload-name"> <span class="file-name">File Name</span> <span
                    class="uploding"><em>Uploading : 0%</em></span>
                  <div class="progrss-upload"></div>
                  <span class="file-size">File Size: 2.5 MB</span>
                </div>
                <div class="add-additional-documents"> <span>Add Additional Documents</span>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <div class="selectBtn" data-type="firstOption">Packing List</div>
                          <div class="selectDropdown">
                            <div class="option" data-type="firstOption">Packing List 1</div>
                            <div class="option" data-type="secondOption">Packing List 2</div>
                            <div class="option" data-type="thirdOption">Packing List 3</div>
                            <div class="option" data-type="thirdOption">Packing List 4</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <div class="selectBtn" data-type="firstOption">Invoice</div>
                          <div class="selectDropdown">
                            <div class="option" data-type="firstOption">Invoice 1</div>
                            <div class="option" data-type="secondOption">Invoice 2</div>
                            <div class="option" data-type="thirdOption">Invoice 3</div>
                            <div class="option" data-type="thirdOption">Invoice 4</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <div class="selectBtn" data-type="firstOption">Document Type</div>
                          <div class="selectDropdown">
                            <div class="option" data-type="firstOption">Document Type</div>
                            <div class="option" data-type="secondOption">Document Type</div>
                            <div class="option" data-type="thirdOption">Document Type</div>
                            <div class="option" data-type="thirdOption">Document Type</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="save-data">
                  <button>Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--tow-poup-->
  <div id="PrimaryModalalert1" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> <a class="close" data-dismiss="modal" href="#"><i
              class="fa fa-close"></i></a> </div>
        <div class="modal-body">
          <div class="oupload-poupbxx">
            <h3>Upload LGP and Supporting Docs</h3>
            <div class="refrencs">
              <label>Reference</label>
              <input type="text" placeholder="Example: PO10001" />
            </div>
            <div class="file-uploding">
              <div class="files-wr" data-count-files="1">
                <div class="one-file">
                  <label for="file-1">
                    <img src="{{ asset('public/assets/img/logo/upload-icon.svg') }}">
                    <p class="drag">Drag & Drop LGP or <span>Browse</span></p>
                    <span class="only-pdf">only PDF format</span>
                  </label>
                  <input name="file-1" id="file-1" type="file">
                </div>
                <div class="file-upload-name"> <span class="file-name">File Name</span> <span
                    class="uploding"><em>Uploading : 0%</em></span>
                  <div class="progrss-upload"></div>
                  <span class="file-size">File Size: 2.5 MB</span>
                </div>
                <div class="lgp-detlas-input">
                  <h6>LGP Details</h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="lgp-detlas-input-box">
                        <label>LGP Number</label>
                        <input type="text" placeholder="" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="lgp-detlas-input-box">
                        <label>LGP Type</label>
                        <div class="add-additional-bx">
                          <div class="select">
                            <div class="selectBtn" data-type="firstOption"></div>
                            <div class="selectDropdown">
                              <div class="option" data-type="firstOption">LGP Type 1</div>
                              <div class="option" data-type="secondOption">LGP Type 2</div>
                              <div class="option" data-type="thirdOption">LGP Type 3</div>
                              <div class="option" data-type="thirdOption">LGP Type 4</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="lgp-detlas-input-box">
                        <label>Quantity</label>
                        <input type="text" placeholder="0.0" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="lgp-detlas-input-box">
                        <label>Weight</label>
                        <input type="text" placeholder="0.0" />
                      </div>
                    </div>
                    <div class="col-md-4"> </div>
                    <div class="col-md-4"> </div>
                  </div>
                </div>
                <div class="add-additional-documents"> <span>Add Additional Documents</span>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <div class="selectBtn" data-type="firstOption">Packing List</div>
                          <div class="selectDropdown">
                            <div class="option" data-type="firstOption">Packing List 1</div>
                            <div class="option" data-type="secondOption">Packing List 2</div>
                            <div class="option" data-type="thirdOption">Packing List 3</div>
                            <div class="option" data-type="thirdOption">Packing List 4</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <div class="selectBtn" data-type="firstOption">Invoice</div>
                          <div class="selectDropdown">
                            <div class="option" data-type="firstOption">Invoice 1</div>
                            <div class="option" data-type="secondOption">Invoice 2</div>
                            <div class="option" data-type="thirdOption">Invoice 3</div>
                            <div class="option" data-type="thirdOption">Invoice 4</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <div class="selectBtn" data-type="firstOption">Document Type</div>
                          <div class="selectDropdown">
                            <div class="option" data-type="firstOption">Document Type</div>
                            <div class="option" data-type="secondOption">Document Type</div>
                            <div class="option" data-type="thirdOption">Document Type</div>
                            <div class="option" data-type="thirdOption">Document Type</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="save-data">
                  <button>Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--three-poup-->
  <div id="PrimaryModalalert2" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog ungroup-popup">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> </div>
        <div class="modal-body">
          <div class="ungroup-popup-box">
            <img src="{{ asset('public/assets/img/logo/qustion.svg') }}">
            <h3>Are you sure you want to ungroup the selected?</h3>
            <p>Selected transactions will be moved back to <br>
              “Non Reconciled” tab.</p>
            <div class="butto-ungroup">
              <button class="un-cancel">Cancel</button>
              <button class="un-yes">Yes, ungroup</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(function () {
      var countFiles = 1,
        $body = $('body'),
        typeFileArea = ['txt', 'doc', 'docx', 'ods'],
        coutnTypeFiles = typeFileArea.length;
      $body.on('click', '.files-wr label', function () {
        var wrapFiles = $('.files-wr'),
          newFileInput;

        countFiles = wrapFiles.data('count-files') + 1;
        wrapFiles.data('count-files', countFiles);
      });
      $body.on('change', 'input[type="file"]', function () {
        var $this = $(this),
          valText = $this.val(),
          fileName = valText.split(/(\\|\/)/g).pop(),
          fileItem = $this.siblings('.file-item'),
          beginSlice = fileName.lastIndexOf('.') + 1,
          typeFile = fileName.slice(beginSlice);

        fileItem.find('.file-name').text(fileName);
        if (valText != '') {
          fileItem.removeClass('hide-btn');

          for (var i = 0; i < coutnTypeFiles; i++) {

            if (typeFile == typeFileArea[i]) {
              $this.parent().addClass('has-mach');
            }
          }
        } else {
          fileItem.addClass('hide-btn');
        }

        if (!$this.parent().hasClass('has-mach')) {
          $this.parent().addClass('error');
        }
      });
      $body.on('click', '.btn-del-file', function () {
        var elem = $(this).closest('.one-file');
        elem.fadeOut(400);
        setTimeout(function () {
          elem.remove();
        }, 400);
      });
    });
  </script>
  <script>
    let index = 1;

    const on = (listener, query, fn) => {
      document.querySelectorAll(query).forEach(item => {
        item.addEventListener(listener, el => {
          fn(el);
        })
      })
    }

    on('click', '.selectBtn', item => {
      const next = item.target.nextElementSibling;
      next.classList.toggle('toggle');
      next.style.zIndex = index++;
    });
    on('click', '.option', item => {
      item.target.parentElement.classList.remove('toggle');

      const parent = item.target.closest('.select').children[0];
      parent.setAttribute('data-type', item.target.getAttribute('data-type'));
      parent.innerText = item.target.innerText;
    })
  </script>
  <script>
    $(document).ready(function (e) {
      $('.tabs-stage .tabcontent').hide();
      $('.tabs-stage .tabcontent:first').show();
      $('.tabs-nav li:first').addClass('tab-active');
      $('.tabs-nav a').on('click', function (event) {
        event.preventDefault();
        $('.tabs-nav li').removeClass('tab-active');
        $(this).parent().addClass('tab-active');
        $('.tabs-stage .tabcontent').hide();
        $($(this).attr('href')).show();
      });
    });
  </script>
  <script
    src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
  <script>
    $('#example1').calendar();
    $('#example2').calendar({
      type: 'date'
    });

    var today = new Date();
    $('#example11').calendar({
      minDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() - 5),
      maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 5)
    });
  </script>

  <script>
    $(document).ready(function () {
      $(".accordion-toggle").click(function () {

        $(".accordion-toggle").removeClass("green-locak");

        $(this).addClass("green-locak");
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.accordion-toggle').click(function () {
        $(this).next('.accordian-body').slideToggle();
      });

      $('.open-child-row').click(function (event) {
        event.stopPropagation();
      });

    });
  </script>
  <script>
    $('.dropdown').click(function () {
      $('.dropdown').removeClass('red');
      $(this).addClass('red');
    });

    $('.materialdesign').click(function () {
      $('.dropdown').not(this).removeClass('red');
    });
  </script>
  <script>
    $(".r-r-inner-table").click(function () {
      $('input:checkbox').not(this).prop('checked', this.checked);
      $('input:checkbox').each(function () {
        if ($(this).is(":checked")) {
          $(this).parents('tr').addClass("checkbox_checked_row");
        }
        else {
          $(this).parents('tr').removeClass("checkbox_checked_row");
        }

      });;
    });
    $('.r-r-inner-table').on('change', function () {
      if ($(this).is(":checked")) {
        $(this).parents('tr').addClass("checkbox_checked_row");
      }
      else {
        $(this).parents('tr').removeClass("checkbox_checked_row");
      }
    });
  </script>
  <script>
    $('input:checkbox').change(function () {

      var all_checked_checkbox = $('input[type="checkbox"]').filter(':checked').length;
      if (all_checked_checkbox == 0) {
        $('.box-open').removeClass("menuitemshow");
      } else {
        $('.box-open').addClass("menuitemshow");
      }
    });
    $('.clos-row').click(function () {
      $('.box-open').removeClass("menuitemshow");
    });
  </script>
@endsection
