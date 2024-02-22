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
              <li class="{{ request()->is('customer/custom-reconcilation') || request()->is('customer/search-non-reconcilation') ? 'tab-active' : '' }}"><a href="{{ url('customer/custom-reconcilation') }}" class="first-tab" >Non Reconciled <span>
             
              @foreach($transaction as $data)
              @foreach($data->transaction_history as $history)
                @php
                $count_tansactions[] = $data->transaction_history;
               @endphp
              @endforeach
              @endforeach
              {{ count($count_tansactions ?? []) }}
              </span></a></li>
              <li class="{{ request()->is('customer/reconciled')  ? 'tab-active' : '' }}"><a href="{{ url('customer/reconciled') }}" class="scnd-tab">Reconciled <span>{{ count($groups_detail) ?? '0' }}</span></a></li>
              <li class="{{ request()->is('customer/assets')  ? 'tab-active' : '' }}"><a href="{{ url('customer/assets') }}" class="three-tab">Assets <span>{{ count($assests_data_count) ?? '0' }}</span></a></li>
            </ul>
            <div class="search-upload-box-right">
              <div class="upload-beo"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                  data-target="#PrimaryModalalert"><img src="{{ asset('public/assets/img/logo/icon-svg2.svg') }}"> Upload BOE</a> </div>
              <div class="upload-lgp"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                  data-target="#PrimaryModalalert1"><img src="{{ asset('public/assets/img/logo/icon-svg3.svg') }}"> Upload LGP</a> </div>
            </div>
            <div class="tabs-stage">           
               @if(count($transaction) > 0)
              <div class="tabcontent" id="tab-1">
                <div class="search-upload-saction">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="search-upload-box">
                        <div class="search">
                          <input type="text" class="searchTerm" placeholder="Search">
                          <button type="submit" class="searchButton"><img src="{{ asset('public/assets/img/logo/search-svg.svg') }}"></button>
                        </div>
                        <div class="filter-btn">
                          <div class="btn-group dropdown-filter">
                            <button type="button" class="btn btn-default dropdown-toggle clear-flt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="{{ asset('public/assets/img/logo/filler-con-svg.svg') }}">
                            </button>
                            <ul class="dropdown-menu">
                        <form class="from-filter" action="{{ route('customer.search.non.reconiled.transaction') }}" method="get">
                        <h4>DATE</h4>
                        <div class="date-left">
                          <div class="ui calendar" id="rangestart">
                            <div class="ui input left icon">
                              <input type="text" placeholder="From" name="start_date" value="" autocomplete="off">
                            </div>
                          </div>
                          <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                        </div>
                        <div class="date-right">
                          <div class="ui calendar" id="rangeend">
                            <div class="ui input left icon">
                              <input type="text" placeholder="To" name="end_date" value="" autocomplete="off">
                            </div>
                          </div>
                          <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                        </div>
                        <div class="direction-bx">
                          <h4>DIRECTION</h4>
                        </div>
                        <div class="dci-type">
                          <div class='tabs'>
                            <input type="radio" name="tab" id="tab1" role="tab" value="all" checked>
                            <label for="tab1" id="tab1-label">All</label>
                            <section aria-labelledby="tab1-label">
                              <h4>DEC TYPE</h4>
                              <div class="form-group">
                                <input type="checkbox" id="import" value="IMPORT" name="dec_type[]">
                                <label for="import">Import</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="export" value="Export" name="dec_type[]">
                                <label for="export">Export</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transfer" value="TRANSFER" name="dec_type[]">
                                <label for="transfer">Transfer</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transit" value="transit" name="dec_type[]">
                                <label for="transit">Transit</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="temp" value="temp" name="dec_type[]">
                                <label for="temp">Temp. Admission</label>
                              </div>
                            </section>
                            <!-- Tab 2 & Content -->
                            <input type="radio" name="tab" id="tab2" role="tab" value="inbound">
                            <label for="tab2" id="tab2-label">Inbound</label>
                            <section aria-labelledby="tab2-label">
                              <h4>DEC TYPE</h4>
                              <div class="form-group">
                                <input type="checkbox" id="import1" value="IMPORT" name="dec_type[]">
                                <label for="import1">Import</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="export2" value="Export" name="dec_type[]">
                                <label for="export2">Export</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transfer3" value="TRANSFER" name="dec_type[]">
                                <label for="transfer3">Transfer</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transit4" value="transit" name="dec_type[]">
                                <label for="transit4">Transit</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="temp5" value="temp" name="dec_type[]">
                                <label for="temp5">Temp. Admission</label>
                              </div>
                            </section>
                            <!-- Tab 3 & Content -->
                            <input type="radio" name="tab" id="tab3" role="tab" value="outbound">
                            <label for="tab3" id="tab3-label">Outbound</label>
                            <section aria-labelledby="tab3-label">
                              <h4>DEC TYPE</h4>
                              <div class="form-group">
                                <input type="checkbox" id="import6" value="IMPORT" name="dec_type[]">
                                <label for="import6">Import</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="export7" value="Export" name="dec_type[]">
                                <label for="export7">Export</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transfer8" value="TRANSFER" name="dec_type[]">
                                <label for="transfer8">Transfer</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transit9" value="transit" name="dec_type[]">
                                <label for="transit9">Transit</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="temp10" value="temp" name="dec_type[]">
                                <label for="temp10">Temp. Admission</label>
                              </div>
                            </section>
                          </div>
                        </div>
                          <div class="buton-cancel-apply">
                          <button class="canc-btn">Cancel</button>
                          <button  type="submit" class="apply-btn">Apply Filter</button>
                        </div>
                      </form>
                           
                            </ul>
                          </div>
                        </div>
                        <div class="celer-btn"><button>Clear All</button></div>
                      </div>
                    </div>
                    <div class="col-md-6"> </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-sacroll">
                    <div class="table-inner">
                      <div id="sticky_box" class="box-open">
                        <ul>
                          <li class="select-li" id="group-detail-selected"></li>
                          <li><a class="clcik-box" href="#">New Reconciliation</a></li>
                          @if($groups_detail->count() >= 1)
                           <li class="add-to-exist" style="cursor: pointer;">Add to Existing</li>
                          @endif
                          <li><button id="assign_asset" class="assign-asset">Assign as Asset</button></li>
                        </ul>
                        <div class="clos-row-btn">
                          <button class="clos-row"><em>x</em> <br>
                            Close</button>
                        </div>
                        
                        <div class="popup-dropdown">
                          <p>Reference</p>
                          <input type="text" id="group" placeholder="" />
                          <div class="success_msg"></div>
                          <div class="error-msg"></div>
                          <div class="footer"> <a class="close" href="#">Skip</a>
                            <button id="btn-id">Reconcile</button>
                            </div>
                        </div>
                        
                      </div>
                      <table class="customs-transactions table-1" id="customDataTable">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-group">
                                <input type="checkbox" id="selectAll" class="select-check1">
                                <label for="selectAll"></label>
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
                       
                         @foreach($transaction as $data)
                           @foreach($data->transaction_history as $history)                           
                         
                          <tr>
                            <td>
                              <div class="form-group">
                                <input type="checkbox" data-type = "{{ $data->direction }}" data-is_sealed="unlock" data-refrence="{{ $data->refrence_number }}" data-id="{{ $history->id }}" data-transaction="{{ $history->transaction_id }}" id="html<?php echo $history->id ?>" class="check-box">
                                <label for="html<?php echo $history->id ?>"></label>
                              </div>
                            </td>
                            <td>{{ $history->id }}</td>
                            <td>{{ $data->refrence_number }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</td>
                            <td>{{ $data->declaration_number }}</td>
                            @if($data->direction == 'Inbound')
                             <td><span class="in-text">IN</span></td>
                            @elseif($data->direction == 'Outbound')
                             <td><span class="out-text">OUT</span></td>
                            @endif
                            <td>{{ $history->goods_descriptions }}</td>
                            <td>{{ $history->origin }}</td>
                            <td>{{ $history->hs_code }}</td>
                            <td>{{ $history['qty'] }}</td>
                            <td>{{ number_format($history['weight'], 2) }}</td>
                            <td>{{ number_format((int)$history->total_duty, 2) }}</td>
                            <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                <li>
                                  <div class="dropdown">
                                    <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                    <ul class="dropdown-content">
                                      <li><a href="{{ url('customer/custom-declaration-detail/'. $data->refrence_number) }}"><img src="{{ asset('public/assets/img/logo/ico-1.png') }}">View Declaration</a></li>
                                      <!--<li><a href="#"><img src="img/logo/ico-2.png">Download</a></li>
                              <li><a href="#"><img src="img/logo/ico-3.png">Upload Docs</a></li>
                              <li><a href="#"><img src="img/logo/ico-4.png">Edit</a></li>
                              <li><a href="#"><img src="img/logo/ico-5.png">Delete</a></li>-->
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
                    </div>
                    <div class="paginaction">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="paginaction-left">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="paginaction-right">
                            <!-- Display pagination links -->
                            </div>
                        </div>
                        </div>
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

  <!--one-poup-boe-->
  <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> <a class="close" data-dismiss="modal" href="#">
        <i class="fa fa-close"></i></a> </div>
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
                    <div class="upload-docfile-image">
                    <img src="{{ asset('public/assets/img/logo/upload-icon.svg') }}">
                    </div>
                    <div class="upload-docfile-text">
                    <p class="drag">Drag & Drop BOE or <span>Browse</span></p>
                    <span class="only-pdf">only PDF format</span>
                    </div>
                    
                  </label>
                  <input type="file" name="file" id="file_uploader">
                </div>
                
                  <div class="file-upload-name"> <span class="file-name" id="file-name" style="width:100%"></span> <span
                    class="uploding" id="uploding">Uploading: <em id="progress-label">0%</em></span>
                    <div id="progress-bar-container">
                    <div class="progrss-upload" id="progress" style="width: 0;"></div>
                  </div>
                  <span class="file-size" id="file-size-label"></span>
                </div>
                <div class="add-additional-documents"> <span>Add Additional Documents</span>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <select class="selectOptions" id="boe_add_doc" name="selectOptions">
                            <option value="packaging_list">Packing List 1</option>
                            <option value="packaging_list">Packing List 2</option>
                            <option value="packaging_list">Packing List 3</option>
                          </select>
                          <img src="{{ asset('public/assets/img/logo/packicon.svg') }}" class="pack-icon">
                        </div>
                      </div>
                      <div class="file-container">
                      <label class="upload-doc-label">
                        <input type="file" class="file-input" id="boe_file_packing" onChange="handleFileChange(0)" />
                        <div class="progress-container">
                        <span class="progress-text"></span>
                            <progress class="progress-bar-new" value="0" max="100"></progress>
                        </div>
                        <div class="file-info"></div>
                        <div class="file-size-info"></div>
                        <div class="delete-btn" onClick="deleteFile(0)"><img src="{{ asset('public/assets/img/logo/up-delt.svg') }}"></div>
                        <span class="upload-text"><img src="{{ asset('public/assets/img/logo/upload-icon.svg') }}">Upload Document</span>
                        </label>
                    </div>
                    @error('boe_file_packing')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <select class="selectOptions" id="boe_add_doc_one" name="selectOptions">
                            <option value="invoice">Invoice 1</option>
                            <option value="invoice">Invoice 2</option>
                            <option value="invoice">Invoice 3</option>
                          </select>
                          <img src="{{ asset('public/assets/img/logo/packicon.svg') }}" class="pack-icon">
                        </div>
                      </div>
                      <div class="file-container">
                      <label class="upload-doc-label">
                        <input type="file" class="file-input" id="boe_file_invoice"  onchange="handleFileChange(1)" />
                        <div class="progress-container">
                            <progress class="progress-bar-new" value="0" max="100"></progress>
                        </div>
                        <div class="file-info"></div>
                        <div class="file-size-info"></div>
                        <div class="delete-btn" onClick="deleteFile(1)"><img src="{{ asset('public/assets/img/logo/up-delt.svg') }}"></div>
                        <span class="upload-text"><img src="{{ asset('public/assets/img/logo/upload-icon.svg') }}">Upload Document</span>
                        </label>
                    </div>
                    @error('boe_file_invoice')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx add-last">
                        <div class="select">
                          <select class="selectOptions" id="boe_add_doc_two" name="selectOptions">
                            <option value="other">Document Type</option>
                            <option value="other">Document Type 2</option>
                            <option value="other">Document Type 3</option>
                          </select>
                        </div>
                        @error('boe_file_doctp')
                            <div class="alert alert-danger">{{ $message[0] }}</div>
                        @enderror
                      </div>
                      <div class="file-container">
                      <label class="upload-doc-label">
                        <input type="file" class="file-input" id="boe_file_doctp" onChange="handleFileChange(2)" />
                        <div class="progress-container">
                            <progress class="progress-bar-new" value="0" max="100"></progress>
                        </div>
                        <div class="file-info"></div>
                        <div class="file-size-info"></div>
                        <div class="delete-btn" onClick="deleteFile(2)"><img src="{{ asset('public/assets/img/logo/up-delt.svg') }}"></div>
                        <span class="upload-text"><img src="{{ asset('public/assets/img/logo/upload-icon.svg') }}">Upload Document</span>
                        </label>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="save-data">
            <input type="submit" class="att-dis" value="Save">
          </form>
                </div>
            <div class="success_msg"></div>
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
  <script>
    $(document).ready(function() {
        // Check if the checkbox is checked in local storage and update the UI accordingly
        var isChecked = localStorage.getItem('clearFilterChecked');
        if (isChecked === 'true') {
            $('.celer-btn').addClass('new-class');
            $('.celer-btn').show();
        }

        // Add a click event listener to the checkbox inside elements with the "clear-flt" class
        $('.tabs input[type="checkbox"]').click(function() {
            // Check if the checkbox is checked
            if ($(this).is(':checked')) {
                // Add the new class to the element
                $('.celer-btn').addClass('new-class');
                // Show the element with the "celer-btn" class
                $('.celer-btn').show();
                // Store the checked state in local storage
                localStorage.setItem('clearFilterChecked', 'true');
            } else {
                // Remove the new class from the element
                $('.celer-btn').removeClass('new-class');
                // Hide the element with the "celer-btn" class
                $('.celer-btn').hide();
                // Remove the checked state from local storage
                localStorage.removeItem('clearFilterChecked');
            }
        });

          $('.tabs input[type="radio"]').change(function() {
            // Check if the radio button is checked
            if ($(this).is(':checked')) {
                // Add the new class to the element
                $('.celer-btn').addClass('new-class');
                // Show the element with the "celer-btn" class
                $('.celer-btn').show();
                // Store the checked state in local storage
                localStorage.setItem('clearFilterChecked', 'true');
            } else {
                // Remove the new class from the element
                $('.celer-btn').removeClass('new-class');
                // Hide the element with the "celer-btn" class
                $('.celer-btn').hide();
                // Remove the checked state from local storage
                localStorage.removeItem('clearFilterChecked');
            }
        });
        // Add a click event listener to elements with the "new-class"
        $('.new-class').click(function() {
            // Remove the "new-class" from the element
            $(this).removeClass('new-class');
            // Remove the checked state from local storage
            localStorage.removeItem('clearFilterChecked');
            // Redirect after 3 seconds
            setTimeout(function() {
                var redirectUrl = base_url + '/custom-reconcilation';
                window.location.href = redirectUrl;
            });
        });
    });
</script>
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
    $(document).ready(function () {
        // Add a click event listener to elements with the "clear-flt" class
        $('.clear-flt').click(function () {
            // Add the new class to the element
            $('.celer-btn').addClass('new-class');
            // Show the element with the "celer-btn" class
            $('.celer-btn').show();
        });
    });
</script>
<script>
    //upload pdf
    //set limit for reference number input
    var inputElement = document.getElementById('reference_number');
    var errorMessageElement = document.getElementById('error-message');
    var maxLimit = 18;
    inputElement.addEventListener('keydown', function (event) {
        var inputLength = this.value.length;
        // Allow backspace (8) and arrow keys (37-40) for editing within the limit
        if (event.keyCode !== 8 && (event.keyCode < 37 || event.keyCode > 40) && inputLength >= maxLimit) {
            event.preventDefault();
        }
    });
//cehck email and update  password
$("#uploadForm").validate({
  rules: {
            reference_number: {
                required: true,
            },
            file: {
                required: true,
                extension: "pdf|jpeg|jpg",
                
            }
        },
        messages: {
            file: {
                extension: "Please select a PDF, JPEG, or JPG file.",
            }
        },
       
    submitHandler: function (form,e) {
      e.preventDefault();
      $(".att-dis").attr("disabled", true);
      // Validate file size before submitting
      var fileInput = $('#file_uploader')[0];
    if (fileInput.files.length > 0) {
        var fileSize = fileInput.files[0].size;
        if (fileSize > 3 * 1024 * 1024) { // 3MB limit
            $('#error-message').text("File size should be less than 3MB.");
            return;
        }
    }

    var formData = new FormData($(form)[0]);
      //Ajax call
      var reference_number = jQuery('#reference_number').val();
      var packing_doc = jQuery('#boe_add_doc').val();
      var invoice_doc = jQuery('#boe_add_doc_one').val();
      var other_doc = jQuery('#boe_add_doc_two').val();
      var file_uploader = $('#file_uploader')[0].files[0];
      var boe_file_packing = $('#boe_file_packing')[0].files[0];
      var boe_file_invoice = $('#boe_file_invoice')[0].files[0];
      var boe_file_doctp = $('#boe_file_doctp')[0].files[0];
      var formData = new FormData();
      // Create an array of file objects
      var files = [boe_file_packing, boe_file_invoice, boe_file_doctp, ];

      // Iterate through the files and append their sizes to FormData
      files.forEach(function(file, index) {
          if (file) {
              // Get the file size
              var fileSize = file.size;

              // Append file size to FormData with a unique key
              formData.append('file_size_' + index, fileSize);
          }
      });
      formData.append('reference_number', reference_number);
      formData.append('file_uploader', file_uploader);
      formData.append('boe_file_packing', boe_file_packing);
      formData.append('packing_doc', packing_doc);
      formData.append('boe_file_invoice', boe_file_invoice);
      formData.append('invoice_doc', invoice_doc);
      formData.append('boe_file_doctp', boe_file_doctp);
      formData.append('other_doc', other_doc);
      jQuery.ajax({  
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 
        url: base_url+'/submit-boe-pdf-file', 
        data:formData,
        processData: false,
        contentType: false, 
        mimeType: "multipart/form-data",
        success: function(response) {
          //alert(response);
          $('.success_msg').html(response);
         // Hide the response after 5 seconds
         if (response === "File Submitted Successfully.") {
            setTimeout(function() {
              var redirectUrl = base_url + '/declaration-edit/' + reference_number;
                  window.location.href = redirectUrl;
            }, 3000);
        }

          //enable attribute
          $(".att-dis").prop("disabled", false);
        }
      });
    }
  });

// for file upload  
const fileUploader = document.getElementById('file_uploader');
const feedback = document.getElementById('feedback');
const progress = document.getElementById('progress');
const fileSizeLabel = document.getElementById('file-size-label');
const progressBarContainer = document.getElementById('progress-bar-container');
const fileNameLabel = document.getElementById('file-name'); 
const uploding = document.getElementById('uploding'); 

const reader = new FileReader();

fileUploader.addEventListener('change', (event) => {
  const files = event.target.files;
  const file = files[0];

  // Display file size
  const fileSizeMB = file.size / (1024 * 1024);
  fileSizeLabel.innerText = `File Size: ${fileSizeMB.toFixed(2)} MB`;
  fileNameLabel.innerText = `File Name: ${file.name}`; 
  reader.readAsDataURL(file);

  reader.addEventListener('progress', (event) => {
    if (event.loaded && event.total) {
      const percent = (event.loaded / event.total) * 100;
      // Update the width property for a div to simulate progress
      progress.style.width = percent + '%';

      document.getElementById('progress-label').innerHTML = Math.round(percent) + '%';

      if (percent === 100) {
        uploding.style.display = 'inline-block';
        setTimeout(() => {
              uploding.style.display = 'none';
              progress.style.width = '0%';
              document.getElementById('progress-label').innerHTML = '';
            }, 2000); // Adjust the delay as needed

      } else {
        uploding.style.display = 'inline-block';
      }
    }
  });
});

const fileInputs = document.querySelectorAll('.file-input');
    const progressBars = document.querySelectorAll('.progress-bar-new');
    const fileInfos = document.querySelectorAll('.file-info');
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const uploadTexts = document.querySelectorAll('.upload-text');
    const fileSizeInfos = document.querySelectorAll('.file-size-info');

    const files = [null, null, null];

    function handleFileChange(index) {
        const fileInput = fileInputs[index];
        const selectedFile = fileInput.files[0];
        files[index] = selectedFile;

        const progressContainer = progressBars[index].parentNode;
        const fileInfo = fileInfos[index];
        const deleteButton = deleteButtons[index];
        const uploadText = uploadTexts[index];
        const fileSizeInfo = fileSizeInfos[index];

        fileInfo.textContent = ` ${selectedFile.name}`;
        fileSizeInfo.textContent = ` ${formatBytes(selectedFile.size)}`;
        deleteButton.style.display = 'block';
        progressContainer.style.display = 'block';

        progressBars[index].value = 0;

        simulateFileUpload(index, uploadText);
    }

    function simulateFileUpload(index, uploadText) {
        const progressBar = progressBars[index];

        let progress = 0;
        const interval = setInterval(() => {
            progress += 10;
            progressBar.value = progress;

            if (progress >= 100) {
                clearInterval(interval);
                // Hide the progress bar, upload-text, and remove upload-doc-label class
                const progressContainer = progressBar.parentNode;
                progressContainer.style.display = 'none';
                uploadText.style.display = 'none';
            }
        }, 500);
    }

    function deleteFile(index) {
        const fileInput = fileInputs[index];
        fileInput.value = '';
        files[index] = null;

        const deleteButton = deleteButtons[index];
        const progressContainer = progressBars[index].parentNode;
        const fileInfo = fileInfos[index];
        const uploadText = uploadTexts[index];
        const fileSizeInfo = fileSizeInfos[index];

        deleteButton.style.display = 'none';
        progressContainer.style.display = 'none';
        fileInfo.textContent = '';
        fileSizeInfo.textContent = '';
        // Show the upload-text again when a file is deleted
        uploadText.style.display = 'block';
    }

    // Helper function to format file size in bytes to MB
    function formatBytes(bytes) {
        const megabytes = bytes / (1024 * 1024);
        return megabytes.toFixed(2) + ' MB';
    }  
</script>

  <!-- check group is sealed -->  
<script>
$(document).ready(function() {
    $('.sealed').click(function (){
        var is_Sealed = $(this).data('is_sealed');
        var group_id = $(this).data('group_id');
        if (is_Sealed === 'locked') {
            // AJAX request for locked case
            $.ajax({
               type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/is-group-sealed',
                data: {is_Sealed: is_Sealed,group_id:group_id},
                success: function(data) {
                  setTimeout(function () {
                        location.reload();
                    }, 2000);
                },
            });
        } else if (is_Sealed === 'unlock') {
            // AJAX request for unlocked case
            $.ajax({
               type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/is-group-sealed',
                data: {is_Sealed:is_Sealed,group_id:group_id},
                success: function(data) {
                  setTimeout(function () {
                        location.reload();
                    }, 2000);
                },
            });
        }
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
   //set limit for reference number input
   var inputElement = document.getElementById('reference_number');
    var errorMessageElement = document.getElementById('error-message');
    var maxLimit = 18;
    inputElement.addEventListener('keydown', function (event) {
        var inputLength = this.value.length;
        // Allow backspace (8) and arrow keys (37-40) for editing within the limit
        if (event.keyCode !== 8 && (event.keyCode < 37 || event.keyCode > 40) && inputLength >= maxLimit) {
            event.preventDefault();
        }
    });
  //submit form
 $("#uploadForm").validate({
  rules: {
            reference_number: {
                required: true,
            },
            file: {
                required: true,
                
            }
        },
       
    submitHandler: function (form,e) {
      e.preventDefault();
      $(".att-dis").attr("disabled", true);
      //Ajax call
      var reference_number = jQuery('#reference_number').val();
      var packing_doc = jQuery('#boe_add_doc').val();
      var invoice_doc = jQuery('#boe_add_doc_one').val();
      var other_doc = jQuery('#boe_add_doc_two').val();
      var file_uploader = $('#file_uploader')[0].files[0];
      var boe_file_packing = $('#boe_file_packing')[0].files[0];
      var boe_file_invoice = $('#boe_file_invoice')[0].files[0];
      var boe_file_doctp = $('#boe_file_doctp')[0].files[0];
      var formData = new FormData();
      // Create an array of file objects
      var files = [boe_file_packing, boe_file_invoice, boe_file_doctp];

      // Iterate through the files and append their sizes to FormData
      files.forEach(function(file, index) {
          if (file) {
              // Get the file size
              var fileSize = file.size;

              // Append file size to FormData with a unique key
              formData.append('file_size_' + index, fileSize);
          }
      });
      formData.append('reference_number', reference_number);
      formData.append('file_uploader', file_uploader);
      formData.append('boe_file_packing', boe_file_packing);
      formData.append('packing_doc', packing_doc);
      formData.append('boe_file_invoice', boe_file_invoice);
      formData.append('invoice_doc', invoice_doc);
      formData.append('boe_file_doctp', boe_file_doctp);
      formData.append('other_doc', other_doc);
      //ajax request
      jQuery.ajax({  
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 
        url: base_url+'/submit-boe-pdf-file', 
        data:formData,
        processData: false,
        contentType: false, 
        mimeType: "multipart/form-data",
        success: function(response) {
          //alert(response);
          $('.success_msg').html(response);
          // Check if the response contains the success message
          if (response.includes("File Submitted Successfully.")) {
                // Display success message
                $('.success_msg').html(response);

                // Hide the response after 5 seconds
                setTimeout(function() {
                    $('.success_msg').empty();
                }, 5000);

                // Redirect after 3 seconds
                setTimeout(function() {
                    var redirectUrl = base_url + '/declaration-edit/' + reference_number;
                    window.location.href = redirectUrl;
                }, 3000);
            } else {
              $('.error_msg').html(response);
            }
        }
      });
    }
  });


  $(document).ready(function() {
    $('tr[data-status="draft"]').addClass('disabled-draft-row');
          // Disable links within rows with the class 'disabled-row'
          $('tr.disabled-row a').on('click', function(e) {
              e.preventDefault();
          });
 
// for file upload  
const fileUploader = document.getElementById('file_uploader');
const feedback = document.getElementById('feedback');
const progress = document.getElementById('progress');
const fileSizeLabel = document.getElementById('file-size-label');
const progressBarContainer = document.getElementById('progress-bar-container');
const fileNameLabel = document.getElementById('file-name'); 
const uploding = document.getElementById('uploding'); 

const reader = new FileReader();

fileUploader.addEventListener('change', (event) => {
  const files = event.target.files;
  const file = files[0];

  // Display file size
  const fileSizeMB = file.size / (1024 * 1024);
  fileSizeLabel.innerText = `File Size: ${fileSizeMB.toFixed(2)} MB`;
  fileNameLabel.innerText = `File Name: ${file.name}`; 
  reader.readAsDataURL(file);

  reader.addEventListener('progress', (event) => {
    if (event.loaded && event.total) {
      const percent = (event.loaded / event.total) * 100;
      // Update the width property for a div to simulate progress
      progress.style.width = percent + '%';

      document.getElementById('progress-label').innerHTML = Math.round(percent) + '%';

      if (percent === 100) {
        uploding.style.display = 'inline-block';
        setTimeout(() => {
              uploding.style.display = 'none';
              progress.style.width = '0%';
              document.getElementById('progress-label').innerHTML = '';
            }, 2000); // Adjust the delay as needed

      } else {
        uploding.style.display = 'inline-block';
      }
    }
  });
});
});
</script>
<script>
    const fileInputs = document.querySelectorAll('.file-input');
    const progressBars = document.querySelectorAll('.progress-bar-new');
    const fileInfos = document.querySelectorAll('.file-info');
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const uploadTexts = document.querySelectorAll('.upload-text');
    const fileSizeInfos = document.querySelectorAll('.file-size-info');

    const files = [null, null, null];

    function handleFileChange(index) {
        const fileInput = fileInputs[index];
        const selectedFile = fileInput.files[0];
        files[index] = selectedFile;

        const progressContainer = progressBars[index].parentNode;
        const fileInfo = fileInfos[index];
        const deleteButton = deleteButtons[index];
        const uploadText = uploadTexts[index];
        const fileSizeInfo = fileSizeInfos[index];

        fileInfo.textContent = ` ${selectedFile.name}`;
        fileSizeInfo.textContent = ` ${formatBytes(selectedFile.size)}`;
        deleteButton.style.display = 'block';
        progressContainer.style.display = 'block';

        progressBars[index].value = 0;

        simulateFileUpload(index, uploadText);
    }

    function simulateFileUpload(index, uploadText) {
        const progressBar = progressBars[index];

        let progress = 0;
        const interval = setInterval(() => {
            progress += 10;
            progressBar.value = progress;

            if (progress >= 100) {
                clearInterval(interval);
                // Hide the progress bar, upload-text, and remove upload-doc-label class
                const progressContainer = progressBar.parentNode;
                progressContainer.style.display = 'none';
                uploadText.style.display = 'none';
            }
        }, 500);
    }

    function deleteFile(index) {
        const fileInput = fileInputs[index];
        fileInput.value = '';
        files[index] = null;

        const deleteButton = deleteButtons[index];
        const progressContainer = progressBars[index].parentNode;
        const fileInfo = fileInfos[index];
        const uploadText = uploadTexts[index];
        const fileSizeInfo = fileSizeInfos[index];

        deleteButton.style.display = 'none';
        progressContainer.style.display = 'none';
        fileInfo.textContent = '';
        fileSizeInfo.textContent = '';
        // Show the upload-text again when a file is deleted
        uploadText.style.display = 'block';
    }

    // Helper function to format file size in bytes to MB
    function formatBytes(bytes) {
        const megabytes = bytes / (1024 * 1024);
        return megabytes.toFixed(2) + ' MB';
    }
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
  <!-- <script>
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
  </script> -->
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
  <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
  <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("sticky_box");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

  <!-- <script>
    // Show the first tab and hide the rest
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    // Click function
    $('#tabs-nav li').click(function () {
      $('#tabs-nav li').removeClass('active');
      $(this).addClass('active');
      $('.tab-content').hide();

      var activeTab = $(this).find('a').attr('href');
      $(activeTab).fadeIn();
      return false;
    });
  </script> -->
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


<!--create group with ajax -->
<script>
$(document).ready(function () {
    var dataAttributes = []; // Define an array to store data attributes
    var typeAttr = []; // Define an array to store 'type' attribute
    var firstCheckedData = null; // Store the data attributes of the first checked checkbox
    var firstCheckedType = null; // Store the 'type' attribute of the first checked checkbox

    // Listen for checkbox changes
    $('body').on('change', '.check-box', function () {
        var checkbox = $(this);
        var dataAttrObject = checkbox.data();
        var type = checkbox.data('type'); // Assuming type is directly attached to checkbox

        if (checkbox.prop("checked")) {
            if (!firstCheckedData) {
                // Store the data attributes of the first checked checkbox
                firstCheckedData = dataAttrObject;
                firstCheckedType = type;
            } else {
                // Add data attributes to the arrays
                dataAttributes.push(dataAttrObject);
                typeAttr.push(type);
            }
        } else {
            // Remove data attributes from the arrays if the checkbox is unchecked
            var index = dataAttributes.findIndex(function(item) {
                return JSON.stringify(item) === JSON.stringify(dataAttrObject);
            });
            if (index !== -1) {
                dataAttributes.splice(index, 1);
                typeAttr.splice(index, 1);
            }
        }
    });

    // Listen for button click
    $('#btn-id').click(function (e) {
        e.preventDefault();
        $(".att-dis").attr("disabled", true);
        //get group id
        var groupData = $('#group').val();

        // Add the data attributes of the first checked checkbox to the beginning of the arrays
        if (firstCheckedData) {
            dataAttributes.unshift(firstCheckedData);
            typeAttr.unshift(firstCheckedType);
        }

        // Log the array of data attributes
        console.log("Data Attributes:", dataAttributes);
        console.log("Type Attributes:", typeAttr);

        // Now you can use dataAttributes in your AJAX request or any other logic
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url + '/submit-group',
            data: { checkboxData: dataAttributes, groupData: groupData, type: typeAttr },
            success: function (response) {
                // Handle the response from the controller
                $('.modal-body').html(response);
                $("#PrimaryModalalert7").modal('show');
            },
            error: function (error) {
                // Handle the error
                console.error(error);
            }
        });
    });
});
</script>

<!--Sending request using ajax for Assets creation-->
<script>
    $(document).ready(function () {
        // DataTable initialization
        var dataTable = $('#customDataTable').DataTable();

        // Checkbox handling and AJAX request
        var dataAttributes = [];
        var typeAttr = [];

        // Function to get data attributes of checked checkboxes
        function getDataAttributes() {
            dataAttributes = [];
            typeAttr = [];
            // Iterate through all pages
            dataTable.rows().every(function (index, element) {
                // Get the data for the current row
                var rowData = this.data();

                // Find the checkbox within the row
                var checkbox = $(".check-box", this.node());

                // Check if the checkbox is checked
                if (checkbox.prop("checked")) {
                    var dataAttrObject = checkbox.data();
                    var type = checkbox.data('type'); // Assuming type is directly attached to checkbox
                    dataAttributes.push(dataAttrObject);
                    typeAttr.push(type);
                }
            });
        }

        // Listen for checkbox changes
        $('body').on('change', '.check-box', function () {
            getDataAttributes();
        });

        // Listen for button click
        $('#assign_asset').click(function (e) {
            e.preventDefault();
            $(".att-dis").attr("disabled", true);

            getDataAttributes();
            console.log(dataAttributes);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: base_url + '/submit-assets',
                data: { checkboxData: dataAttributes, type: typeAttr },
                success: function (response) {
                    $('.modal-body').html(response);
                    $("#PrimaryModalalert7").modal('show');
                    // $('.modal-body').html(response);                    
                },
            });
        });
    });
</script>

<!----remove goup---->
<script>
    $(document).ready(function () {
        var ungroup_id = []; 
        // Function to get data attributes of checked checkboxes
        function removeDataAttributes() {
            ungroup_id = []; // Clear the array
            // Loop through checked checkboxes
            $('.remove-check-box:checked').each(function () {
                // Get the data attributes of the checked checkbox
                var removedataAttributes = $(this).data('id');
                ungroup_id.push(removedataAttributes);
            });
        }

        // Listen for checkbox changes
        $('.remove-check-box').change(function () {
           var selectedCount = $(".remove-check-box:checked").length;
            $("#groups-selected").text(selectedCount);
            $("#groups-selected").text(selectedCount + " selected");
            removeDataAttributes(); // Call the function on checkbox change
        });

        // Listen for button click
        $('#delete-group').click(function (e) {
            e.preventDefault();
            $("#delete-group").attr("disabled", true);
            removeDataAttributes(); // Call the function to update dataAttributes
            console.log(ungroup_id);
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/delete-group',
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

<!---check how many check box is checked to create group-->
<script>
   $(document).ready(function() {
        // Initialize DataTable
        var dataTable = $('#customDataTable').DataTable();
        $('body').on('change', '.check-box', function() {
            var selectedValues = [];

            // Iterate through all pages
            dataTable.rows().every(function(index, element) {
                // Get the data for the current row
                var rowData = this.data();

                // Find the checkbox within the row
                var checkbox = $(".check-box", this.node());

                // Check if the checkbox is checked
                if (checkbox.prop("checked")) {
                    var id = checkbox.data("id");

                    // Add the extracted data to the array
                    selectedValues.push({
                        id: id,
                    });
                }
            });
            var selectedCount = selectedValues.length;
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
        var ungroup_id = []; 
        // Function to get data attributes of checked checkboxes
        function removeDataAttributes() {
            ungroup_id = []; // Clear the array
            // Loop through checked checkboxes
            $('.remove-asset:checked').each(function () {
                // Get the data attributes of the checked checkbox
                var removedataAttributes = $(this).data('id');
                ungroup_id.push(removedataAttributes);
            });
        }

        // Listen for checkbox changes
        $('.remove-asset').change(function () {
           var selectedCount = $(".remove-asset:checked").length;
            $("#assest-group").text(selectedCount);
            $("#assest-group").text(selectedCount + " selected");
            removeDataAttributes(); // Call the function on checkbox change
        });

        // Listen for button click
        $('#delete-assest').click(function (e) {
            e.preventDefault();
            $("#delete-assest").attr("disabled", true);
            removeDataAttributes(); // Call the function to update dataAttributes
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

<!----add transaction  to already exist grouped--->
  <script>
    $(document).ready(function () {
        // DataTable initialization
        var dataTable = $('#customDataTable').DataTable();

        var dataAttributes = []; // Define an array to store data attributes

        // Function to get data attributes of checked checkboxes
        function getDataAttributes() {
            dataAttributes = []; // Clear the array
            // Iterate through all pages
            dataTable.rows().every(function (index, element) {
                // Get the data for the current row
                var rowData = this.data();

                // Find the checkbox within the row
                var checkbox = $(".check-box", this.node());

                // Check if the checkbox is checked
                if (checkbox.prop("checked")) {
                    var dataAttrObject = checkbox.data();
                    dataAttributes.push(dataAttrObject);
                }
            });
        }

        // Listen for checkbox changes
        $('body').on('change', '.check-box', function () {
            getDataAttributes(); // Call the function on checkbox change
        });

        // Listen for button click
        $('.add-to-exist').click(function (e) {
            e.preventDefault();
            $(".add-to-exist").attr("disabled", true);
            getDataAttributes();
            console.log(dataAttributes);

            // Now you can use dataAttributes in your AJAX request or any other logic
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: base_url + '/add-session',
                data: { dataAttributes: dataAttributes },
                success: function (response) {
                    // Hide the response after 5 seconds
                    setTimeout(function () {
                        var redirectUrl = base_url + '/add-to-existing-group';
                        window.location.href = redirectUrl;
                        // $('.success_msg').empty(); // or use $('.success_msg').hide();
                    }, 1000);
                }
            });
        });
    });
</script>


<!-----open pop up for remove group ----->
<script>
    $(document).ready(function () {
      $('.open-group-popup').click(function (e) {
          e.preventDefault();
          var grp_id = $(this).data('grp_id');
          $.ajax({ 
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/group-pop-up',
                data: {grp_id: grp_id},
                success: function(response) {
                  $("#PrimaryModalalert8").modal('show');
                    $('.modal-body').html(response);
              }
            });

        });   
    });
</script>      

<script>
  // calenar
  $('#example1').calendar();
  $('#example2').calendar({
    type: 'date'
  });
  $('#example3').calendar({
    type: 'time'
  });
  $('#rangestart').calendar({
    type: 'date',
    endCalendar: $('#rangeend')
  });
  $('#rangeend').calendar({
    type: 'date',
    startCalendar: $('#rangestart')
  });
  $('#example4').calendar({
    startMode: 'year'
  });
  $('#example5').calendar();
  $('#example6').calendar({
    ampm: false,
    type: 'time'
  });
  $('#example7').calendar({
    type: 'month'
  });
  $('#example8').calendar({
    type: 'year'
  });
  $('#example9').calendar();
  $('#example10').calendar({
    on: 'hover'
  });
  var today = new Date();
  $('#example11').calendar({
    minDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() - 5),
    maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 5)
  });
  $('#example12').calendar({
    monthFirst: false
  });
  $('#example13').calendar({
    monthFirst: false,
    formatter: {
      date: function (date, settings) {
        if (!date) return '';
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        return day + '/' + month + '/' + year;
      }
    }
  });
  $('#example14').calendar({
    inline: true
  });
  $('#example15').calendar();
  </script>

<script>
// toggle
$(document).ready(function () {
    // Toggle dropdown when clicking the button
    $('.btn-group .dropdown-toggle').on('click', function (e) {
        e.stopPropagation(); // Prevents the event from reaching document click handler
        $(this).parent().toggleClass('open');
    });

    // Prevent dropdown from closing when clicking on the dropdown menu
    $('.btn-group .dropdown-menu').on('click', function (e) {
        e.stopPropagation();
    });

    // Close the dropdown when clicking outside, excluding the button and dropdown menu
    $(document).on('click', function (e) {
        var target = $(e.target);
        if (!target.is('.btn-group, .btn-group *')) {
            $('.btn-group').removeClass('open');
        }
    });
});

//reset form
$(document).ready(function () {
    $('#clearFilterBtn').click(function () {
        // Reset the form
        $('.from-filter')[0].reset();
        // Additional code if needed
    });
});
</script>

@endsection

