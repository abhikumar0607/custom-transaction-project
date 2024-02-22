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
            <li><a href="{{ url('customer/custom-reconcilation') }}" class="first-tab">Non Reconciled <span>
             
             @foreach($transaction as $data)
             @foreach($data->transaction_history as $history)
               @php
               $count_tansactions[] = $data->transaction_history;
              @endphp
             @endforeach
             @endforeach
             {{ count($count_tansactions ?? []) }}
             </span></a></li>
             <li><a href="{{ url('customer/reconciled') }}" class="scnd-tab">Reconciled <span>{{ count($groups_detail) ?? '0' }}</span></a></li>
             <li class="{{ request()->is('customer/assets') ? 'tab-active' : ''}}"><a href="{{ url('customer/assets') }}" class="three-tab">Assets <span>{{ count($assests_data_count) ?? '0' }}</span></a></li>
            </ul>
            <div class="tabs-stage">           
               @if(count($transaction) > 0)

              <div class="tabcontent" id="tab-3">
                <div class="search-upload-saction r-r-dashboard">
                  <div class="row r-r-search-box">
                    <div class="col-md-6">
                      <div class="search-upload-box">
                        <div class="search">
                          <input type="text" class="searchTerm" placeholder="Search">
                          <button type="submit" class="searchButton"><img src="{{ asset('public/assets/img/logo/search-svg.svg') }}"></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6"> </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-sacroll">
                    <div class="table-inner">
                      <div class="box-open">
                        <ul>
                          <li class="select-li" id="assest-group">2 Selected</li>
                          <li><a class="Primary mg-b-10" href="#" data-toggle="modal"
                              data-target="#PrimaryModalalert6">X Remove from Assets</a></li>
                        </ul>
                        <div class="clos-row-btn">
                          <button class="clos-row"><em>x</em> <br>
                            Close</button>
                        </div>
                      </div>
                      @if($assests_data->count() >= 1)
                      <table class="customs-transactions table-3" id="customDataTable">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-group">
                                <input type="checkbox" id="selectAllthree" class="select-check2">
                                <label for="selectAllthree"></label>
                              </div>
                            </th>
                            <th><span class="th-heding">ID</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">REFERENCE</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">BOE DATE</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">DECLARATION</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th> <span class="th-heding">TYPE</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">DESCRIPTION</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">COO</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">HSCODE</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">QTY</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">WEIGHT</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding">DUTY (AED)</span>
                              <div class="btn-right">
                                <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                                <br>
                                <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                              </div>
                            </th>
                            <th><span class="th-heding"></span></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($assests_data as $trans_detail)
                          @foreach($trans_detail->assests_detail as $detail)
                          <tr>
                            <td>
                              <div class="form-group">
                                <input type="checkbox" id="html<?php echo $detail['id'] ?>" data-id="{{ $detail['id'] }}" class="check-box-three remove-asset">
                                <label for="html<?php echo $detail['id'] ?>"></label>
                              </div>
                            </td>
                            <?php
                            $detail_id = str_pad($detail->id, 5, '0', STR_PAD_LEFT);
                            ?>
                            <td>{{ $detail_id }}</td>
                            <td>{{ $trans_detail['refrence_number'] }}</td>
                            <td>{{ $detail['transactions']['dec_date'] }}</td>
                            <td>{{ $detail['transactions']['declaration_number'] }}</td>
                            <?php if($detail['transactions']['direction'] == 'Inbound'){ ?>
                                <td><span class="in-text">IN</span></td>
                           <?php } elseif($detail['transactions']['direction'] == 'Outbound') { ?>
                                <td><span class="out-text">OUT</span></td>
                           <?php  } ?> 
                            <td>{{ $detail['goods_descriptions'] }}</td>
                            <td>{{ $detail['origin'] }}</td>
                            <td>{{ $detail['hs_code'] }}</td>
                            <td>{{ $detail['qty'] }}</td>
                            <td>{{ number_format($detail['weight'], 2) }}</td>
                            <td>{{ number_format($detail['cif_forigen_value'], 2) }}</td>
                            <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                <li>
                                  <div class="dropdown">
                                    <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                    <ul class="dropdown-content">
                                      <li><a href="{{ url('customer/custom-declaration-detail/'. $trans_detail['refrence_number']) }}"><img src="{{ asset('public/assets/img/logo/ico-1.png') }}">View Declaration</a></li>
                                    </ul>
                                  </div>
                                </li>
                              </ul>
                            </td>
                          </tr>
                          @endforeach
                        @endforeach
                        </tbody>
                      </table>
                      @else
                      <div class="no-record-found"><img src="{{ asset('public/assets/img/logo/Group-1120.png') }}"></div>
                      @endif
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
            </div>
          @else
          <div class="no-record-found"><img src="{{ asset('public/assets/img/logo/Group-1120.png') }}"></div>
          @endif
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
            <form id="uploadForm"  enctype="multipart/form-data">
            @csrf
            <div class="refrencs">
              <label>Reference</label>
              <input type="text" name="reference_number" id="reference_number" placeholder="Example: PO10001" />
              @error('reference_number')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="file-uploding">
              <div class="files-wr" data-count-files="1">
                <div class="one-file">
                  <label for="file-1">
                    <img src="{{ asset('public/assets/img/logo/upload-icon.svg') }}">
                    <p class="drag">Drag & Drop BOE or <span>Browse</span></p>
                    <span class="only-pdf">only PDF format</span>
                  </label>
                  <input type="file" name="file" id="file_uploader">
                </div>
                
                  <div class="file-upload-name"> <span class="file-name" id="file-name" style="width:100%"></span> <span
                    class="uploding">Uploading: <em id="progress-label">0%</em></span>
                    <div id="progress-bar-container">
                    <div class="progrss-upload" id="progress" style="width: 0;"></div>
                  </div>
                  <span class="file-size" id="file-size-label">File Size:</span>
                </div>
                <div class="add-additional-documents"> <span>Add Additional Documents</span>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <div class="selectBtn" data-type="firstOption">Select Document</div>
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
                          <div class="selectBtn" data-type="firstOption">Select Document</div>
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
                          <div class="selectBtn" data-type="firstOption">Select Document</div>
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
              </div>
            </div>
            <div class="save-data">
                    <input type="submit" class="att-dis" value="Save">
                </div>
                <div class="success_msg"></div>
            </form>
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
                    <img src="img/logo/upload-icon.svg">
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
                              <div class="option" data-type="firstOption">Inbound</div>
                              <div class="option" data-type="secondOption">Outbound</div>
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
                          <div class="selectBtn" data-type="firstOption">Select Document</div>
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
                          <div class="selectBtn" data-type="firstOption">Select Document</div>
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
                          <div class="selectBtn" data-type="firstOption">Select Document</div>
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
                  <a href="customs-declaration-details.html">Save</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="PrimaryModalalert3" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog calss-table-popup">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> </div>
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div>

  <div id="PrimaryModalalert5" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
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
              <button id="delete-group" class="un-yes">Yes, ungroup</button>
              <div class="success_msg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="PrimaryModalalert6" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog ungroup-popup">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> </div>
        <div class="modal-body">
          <div class="ungroup-popup-box">
            <img src="{{ asset('public/assets/img/logo/qustion.svg') }}">
            <h3>Are you sure you want to remove the selected<br> transactions from Assets?</h3>
            <p>Selected transactions will be moved back to <br>
              “Non Reconciled” tab.</p>
            <div class="butto-ungroup">
              <button class="un-cancel">Cancel</button>
              <button class="un-yes" id="delete-assest">Yes, remove from Assets</button>
              <div class="success_msg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="PrimaryModalalert7" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog ungroup-popup">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> </div>
         <div class="modal-body">
         </div>
      </div>
    </div>
  </div>
  </div>

  <div id="PrimaryModalalert8" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog ungroup-popup">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> </div>
         <div class="modal-body">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
   <!-- Include DataTables CSS -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
   <!-- Include DataTables JS -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <!-- check group is sealed -->  
  <script>
  $(document).ready(function () {
    // Initialize DataTable
    var dataTable = $('#customDataTable').DataTable();

    // Trigger search on input change
    $('.searchTerm').on('input', function () {
      // Perform search on DataTable
      dataTable.search(this.value).draw();
    });
  });
</script>
<script>
        // Your DataTables initialization script goes here
        $(document).ready(function() {
            $('#customDataTable').DataTable();
        });
  </script>
 
<script>
    $('.accordian-body').on('show.bs.collapse', function () {
      $(this).closest("table")
        .find(".collapse.in")
        .not(this)
        .collapse('toggle')
    })
  </script>
  <script>
    $(document).ready(function () {
      $('.accordion-toggle').click(function () {
        $(this).toggleClass('grown');
        $('.accordion-toggle').not(this).removeClass('grown');
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
    $(".customs-transactions").click(function () {
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
    $('.customs-transactions').on('change', function () {
      if ($(this).is(":checked")) {
        $(this).parents('tr').addClass("checkbox_checked_row");
      }
      else {
        $(this).parents('tr').removeClass("checkbox_checked_row");
      }
    });
  </script>
  <script>
    $(function () {
      $('.clos-row').on('click', function () {
        $('.form-group input:checkbox').prop('checked', false);
        $('.table-1').find('tr').removeClass("checkbox_checked_row");
        $('.table-2').find('tr').removeClass("checkbox_checked_row");
        $('.table-3').find('tr').removeClass("checkbox_checked_row");
      });
    });
  </script>
  <script>
       //for all selected
    // Event handler for the "Select All" checkbox
    $('#selectAll').change(function () {
      //alert('yes');return false;
      var isChecked = $(this).prop('checked');
      var all_check = $('.table-1 input[type=checkbox').prop('checked', isChecked);
      //var all_checked_checkbox = $('.table-1 input[type=checkbox:checked').length;
      //alert(isChecked);return false;
      if (isChecked == false) {
        $('.box-open').removeClass("menuitemshow");
        $('tr').removeClass('checkbox_checked_row');
      } else {
        $('.box-open').addClass("menuitemshow");
        $('tr').addClass('checkbox_checked_row');
      }
    });

    //for all selected
    // Event handler for the "Select All" checkbox
    $('#selectAllthree').change(function () {
      //alert('yes');return false;
      var isChecked = $(this).prop('checked');
      var all_check = $('.table-3 input[type=checkbox').prop('checked', isChecked);
      //var all_checked_checkbox = $('.table-1 input[type=checkbox:checked').length;
      //alert(isChecked);return false;
      if (isChecked == false) {
        $('.box-open').removeClass("menuitemshow");
        $('tr').removeClass('checkbox_checked_row');
      } else {
        $('.box-open').addClass("menuitemshow");
        $('tr').addClass('checkbox_checked_row');
      }
    });
  </script>

  <script>
     $(document).on('click', '.dropdown-menu label', function (e) {
        e.stopPropagation();
    });
  </script>
  
  <script>
  $(document).ready(function() {
    $('.lock-butn').click(function() {
      var container = $(this).closest('.open-child-row');
      var locks = container.find('.green-lock, .blck-lock');
      locks.toggle();
    });
  });
</script>

<script>
 $(".clcik-box").click(function(){
  $('body').addClass('changeCursor');
  $(".popup-dropdown").show();
}); 
$(".close").click(function(){
  $('body').removeClass('changeCursor');
  $(".popup-dropdown").hide();
});
</script>

<!---check how many check box is checked to create group-->
<script>
   $(document).ready(function() {
        $(".check-box").change(function() {
            var selectedCount = $(".check-box:checked").length;
            $("#group-detail-selected").text(selectedCount);
            $("#group-detail-selected").text(selectedCount + " selected");
        });
    });
</script>  
<!---check how many check box is checked to remove group-->
<script>
   $(document).ready(function() {
        $(".remove-check-box").change(function() {
            var selectedCount = $(".remove-check-box:checked").length;
            $("#groups-selected").text(selectedCount);
            $("#groups-selected").text(selectedCount + " selected");
        });
    });
</script>

<!---delete assest----->
<script>
    $(document).ready(function () {
    var dataTable = $('#customDataTable').DataTable(); // Initialize DataTable

    var ungroup_id = []; 

    // Function to get data attributes of checked checkboxes
    function getDataAttributes() {
        ungroup_id = []; // Clear the array
        // Iterate through all pages
        dataTable.rows().every(function (index, element) {
            // Get the data for the current row
            var rowData = this.data();

            // Find the checkbox within the row
            var checkbox = $(".remove-asset", this.node());

            // Check if the checkbox is checked
            if (checkbox.prop("checked")) {
                var removedataAttributes = checkbox.data('id');
                ungroup_id.push(removedataAttributes);
            }
        });
    }

    // Listen for checkbox changes
    $('body').on('change', '.remove-asset', function () {
        var selectedCount = $(".remove-asset:checked").length;
        $("#assest-group").text(selectedCount + " selected");
        getDataAttributes(); // Call the function to update dataAttributes
    });

    // Listen for button click
    $('#delete-assest').click(function (e) {
        e.preventDefault();
        $(this).attr("disabled", true);
        getDataAttributes(); // Call the function to update dataAttributes
        console.log(ungroup_id);
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            url: base_url+'/remove-assest',
            data: {ungroup_id: ungroup_id},
            success: function(response) {
                // Handle the response from the controller
                $('.success_msg').html(response);
                setTimeout(function () {
                    location.reload();
                }, 5000);
            },
            error: function(error) {
                // Handle the error
                console.error(error);
            }
        });
    });
});

</script>  
<script>  
    //for first tab  
    $('.check-box').change(function () {
      var checkboxId = $(this).attr('id');
      var all_checked_checkbox = $('.table-1 input[type="checkbox"]:checked').length;
      //alert(checkboxId);return false;
      if (all_checked_checkbox == 0 || all_checked_checkbox == 15) {
        $('.box-open').removeClass("menuitemshow");
      } else {
        $('.box-open').addClass("menuitemshow");
      }
    });
    $('.clos-row').click(function () {
      $('.box-open').removeClass("menuitemshow");
    });

    //click on first tab
    $('.first-tab').click(function () {
      var all_checked_checkbox = $('.table-1 input[type="checkbox"]:checked').length;
      if (all_checked_checkbox == 0 || all_checked_checkbox == 15) {
        $('.box-open').removeClass("menuitemshow");
      } else {
        $('.box-open').addClass("menuitemshow");
      }
    });
    //click on 2ndtab
    $('.scnd-tab').click(function () {
      var all_checked_checkbox = $('.table-2 input[type="checkbox"]:checked').length;
      if (all_checked_checkbox == 0 || all_checked_checkbox == 15) {
        $('.box-open').removeClass("menuitemshow");
      } else {
        $('.box-open').addClass("menuitemshow");
      }
    });
    //for second tab
    $('.tab-tog').change(function () {
      var all_checked_checkbox = $('.table-2 input[type="checkbox"]:checked').length;
      if (all_checked_checkbox == 0 || all_checked_checkbox == 15) {
        $('.box-open').removeClass("menuitemshow");
      } else {
        $('.box-open').addClass("menuitemshow");
      }
    });

    //for three tab  
    $('.check-box-three').change(function () {
      var checkboxId = $(this).attr('id');
      var all_checked_checkbox = $('.table-3 input[type="checkbox"]:checked').length;
      //alert(checkboxId);return false;

      if (all_checked_checkbox == 0 || all_checked_checkbox == 15) {
        $('.box-open').removeClass("menuitemshow");
      } else {
        $('.box-open').addClass("menuitemshow");
      }
    });

    //click on first tab
    $('.three-tab').click(function () {
      var all_checked_checkbox = $('.table-3 input[type="checkbox"]:checked').length;
      if (all_checked_checkbox == 0 || all_checked_checkbox == 15) {
        $('.box-open').removeClass("menuitemshow");
      } else {
        $('.box-open').addClass("menuitemshow");
      }
    });

    //for all selected
    // Event handler for the "Select All" checkbox
    $('#selectAll').change(function () {
      //alert('yes');return false;
      var isChecked = $(this).prop('checked');
      var all_check = $('.table-1 input[type=checkbox').prop('checked', isChecked);
      //var all_checked_checkbox = $('.table-1 input[type=checkbox:checked').length;
      //alert(isChecked);return false;
      if (isChecked == false) {
        $('.box-open').removeClass("menuitemshow");
        $('tr').removeClass('checkbox_checked_row');
      } else {
        $('.box-open').addClass("menuitemshow");
        $('tr').addClass('checkbox_checked_row');
      }
    });

    //for all selected
    // Event handler for the "Select All" checkbox
    $('#selectAllthree').change(function () {
      //alert('yes');return false;
      var isChecked = $(this).prop('checked');
      var all_check = $('.table-3 input[type=checkbox').prop('checked', isChecked);
      //var all_checked_checkbox = $('.table-1 input[type=checkbox:checked').length;
      //alert(isChecked);return false;
      if (isChecked == false) {
        $('.box-open').removeClass("menuitemshow");
        $('tr').removeClass('checkbox_checked_row');
      } else {
        $('.box-open').addClass("menuitemshow");
        $('tr').addClass('checkbox_checked_row');
      }
    });
  
</script>     
@endsection

