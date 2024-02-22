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
                  <h2>Declaration View</h2>
                  <p>Upload, view and manage your customs declarations and shipping documents.</p>
                </div>
                <div class="heder-icon-left"> <img src= "{{ asset('public/assets/img/logo/book-svg.svg') }}"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- welcome Project, sale area start-->
      <div class="container-fluid">
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
                    <button type="button" class="btn btn-default dropdown-toggle clear-flt" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <img src="{{ asset('public/assets/img/logo/filler-con-svg.svg') }}">
                    </button>
                    <ul class="dropdown-menu">
                      <form class="from-filter" action="{{ route('customer.search.transaction') }}" method="get">
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
                <div class="celer-btn"><button id="clearFilterBtn">Clear All</button></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="search-upload-box-right">
                <div class="button-draft">
                <a href="{{ url('customer/draft-transaction-listing') }}"><button><img src="{{ asset('public/assets/img/logo/icon-svg1.svg') }}">Draft - <em><?php echo $draft_transaction; ?></em></button></a>
                </div>
                <div class="upload-beo"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                    data-target="#PrimaryModalalert"><img src="{{ asset('public/assets/img/logo/icon-svg2.svg') }}"> Upload BOE</a> </div>
                <div class="upload-lgp"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                    data-target="#PrimaryModalalert1"><img src="{{ asset('public/assets/img/logo/icon-svg3.svg') }}"> Upload LGP</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box-three-dashboard customs-table">
        <div class="container-fluid">
          <div class="table-row">
            <div class="table-sacroll">
              <div class="table-inner">
                @if(count($transaction) >= 1)
                @php  $count = 1; @endphp
                <table class="table table-condensed" id="declaration_table" style="border-collapse:collapse;">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-group">
                          <input type="checkbox" id="html">
                          <label for="html"></label>
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
                      <th><span class="th-heding">DIRECTION</span>
                        <div class="btn-right">
                          <button class="btn-up"><img src="{{ asset('public/assets/img/logo/up-svgg.svg') }}"></button>
                          <br>
                          <button class="btn-down"><img src="{{ asset('public/assets/img/logo/down-svgg.svg') }}"></button>
                        </div>
                      </th>
                      <th><span class="th-heding">DEC TYPE</span>
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
                      <th><span class="th-heding">VALUE (AED)</span>
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
                      <th></th>
                      <th><span class="th-heding"></span></th>
                    </tr>
                  </thead>
                  <tbody>

                  @php
                    $total_weight = 0;
                    $total_quantity = 0;
                    $total_value_aed = 0;
                    $total_duty_aed = 0;
                  @endphp
                  @foreach($transaction as $data)
                     @foreach($data['transaction_history'] as $history)
                        @php  
                            //calculate total weight
                            $total_weight +=  (int)$history['weight'];

                            //calculate total quantity
                            $total_quantity +=  (int)$history['qty'];

                            //calculate value AED
                            $total_value_aed +=  (int)$history['cif_value_aed'];

                            // calculate total duty
                            $total_duty_aed +=  (int)$history['total_duty'];
                        @endphp
                      @endforeach
                 
                    <tr class="nested_main_tr accordion-toggle" data-group_id="{{ $data['id'] }}" data-toggle="collapse" data-target="#demo<?php echo $data['id']?>" data-row_count="<?php echo $count ?>" aria-expanded="false" data-status="{{ $data['status'] }}"  @if($data['status'] === 'draft') class="disabled-row" @endif >
                      <td><img src="{{ asset('public/assets/img/logo/gryicon-svg.svg') }}" class="don-icon"><img src="{{ asset('public/assets/img/logo/green-svg.svg') }}"
                          class="up-icon"></td>
                      <td>{{ $data['id'] }}</td>
                      <td>{{ $data['refrence_number'] }}</td>
                      <td>{{ \Carbon\Carbon::parse($data['created_at'])->format('Y-m-d') }}</td>
                      <td>{{ $data['declaration_number'] }}</td>
                      @if($data['direction'] == 'Inbound')
                        <td><span class="inbound-tow">Inbound</span></td>
                      @elseif($data['direction'] == 'Outbound')
                        <td><span class="outbound-tow">Outbound</span></td>
                      @endif
                      <td>{{ $data['dec_type'] }}</td>
                      <td>{{ $total_quantity }}</td>
                      <td>{{ number_format($total_weight, 2) }}</td>
                      <td>{{ number_format($total_value_aed, 2) }}</td>
                      <td>{{ number_format($total_duty_aed, 2) }}</td>
                      <td>@if ($data['status'] === 'draft')<img src="{{ asset('public/assets/img/logo/qustion.png') }}">@endif</td>
                      <td class="dot open-child-row" data-row_id="1">
                        <ul class="my-nav">
                          <li>
                            <div class="dropdown">
                              <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                              <ul class="dropdown-content">
                                <li><a href="{{ url('customer/custom-declaration-detail', $data['refrence_number']) }}"><img src="{{ asset('public/assets/img/logo/ico-1.png') }}">View Details</a></li>
                                <li><a href="{{ url('customer/get-main-pdf', $data['id']) }}"><img src="{{ asset('public/assets/img/logo/ico-2.png') }}">Download</a></li>
                                <li><a href="{{ url('customer/custom-declaration-detail', $data['refrence_number']) }}"><img src="{{ asset('public/assets/img/logo/ico-3.png') }}">Upload Docs</a></li>
                                <li><a href="{{ url('customer/declaration-edit', $data['refrence_number']) }}"><img src="{{ asset('public/assets/img/logo/ico-4.png') }}">Edit</a></li>
                                <li><div class="delete-declaration" data-id = "{{ $data['id'] }}"><img src="https://pixxeluclients.com/php-dev/customs-transactions-project/public/assets/img/logo/ico-5.png" alt="Delete">Delete</div></li>           
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </td>
                      <!-- <td><div class="delete-declaration" data-id = ""><img src="https://pixxeluclients.com/php-dev/customs-transactions-project/public/assets/img/logo/ico-5.png" alt="Delete"></div></td> -->
                    </tr>  
                    <?php $count++; ?>
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
  </div>
  <!--one-poup-->
  <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> <a class="close" data-dismiss="modal" href="#">
        <i class="fa fa-close"></i></a> </div>
        <div class="modal-body">
          <div class="oupload-poupbxx">
            <h3>Upload BOE and Supporting Docs</h3>
            <form id="uploadForm" action="#"  enctype="multipart/form-data">
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
            <div class="error_msg alert-danger"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--one-poup-->
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
                          <select class="selectOptions" id="lgp_add_doc" name="selectOptions">
                            <option value="option1">Packing List 1</option>
                            <option value="option2">Packing List 2</option>
                            <option value="option3">Packing List 3</option>
                          </select>
                          <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <select class="selectOptions" id="lgp_add_doc_one" name="selectOptions">
                            <option value="option1">Invoice 1</option>
                            <option value="option2">Invoice 2</option>
                            <option value="option3">Invoice 3</option>
                          </select>
                          <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <div class="select">
                          <select class="selectOptions" id="lgp_add_doc_two" name="selectOptions">
                            <option value="option1">Document Type 1</option>
                            <option value="option2">Document Type 2</option>
                            <option value="option3">Document Type 3</option>
                          </select>
                          <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
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
                        <select class="selectOptions" id="lgp_mod_doc" name="selectOptions">
                          <option value="option1">Packing List 1</option>
                          <option value="option2">Packing List 1</option>
                          <option value="option3">Packing List 1</option>
                        </select>
                        <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <select class="selectOptions" id="lgp_mod_doc_one" name="selectOptions">
                          <option value="option1">Invoice 2</option>
                          <option value="option2">Invoice 2</option>
                          <option value="option3">Invoice 2</option>
                        </select>
                        <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="add-additional-bx">
                        <select class="selectOptions" id="lgp_mod_doc_two" name="selectOptions">
                          <option value="option1">Document Type</option>
                          <option value="option2">Document Type</option>
                          <option value="option3">Document Type</option>
                        </select>
                        <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
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


  <div id="PrimaryModalalert4" class="modal modal-adminpro-general default-popup-PrimaryModal fade in" role="dialog">
    <div class="modal-dialog ungroup-popup">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> </div>
        <div class="modal-body">
     
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

  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
                var redirectUrl = base_url + '/transaction-listing';
                window.location.href = redirectUrl;
            });
        });
    });
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


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!--delete declaration-->
<script>
  (function($) {
    $(document).ready(function () {
      // Initialize DataTable
      var dataTable = $('#declaration_table').DataTable();
      // Trigger search on input change
      $('.searchTerm').on('input', function () {
        // Perform search on DataTable
        dataTable.search(this.value).draw();
      });
    });
  })(jQuery);
</script> 

<script>
  //delete transaction
  $(document).ready(function () {
     // Listen for button click
    // Listen for click on delete-declaration within dropdown
    $('.dropdown .delete-declaration').click(function(e) {
        e.preventDefault();
        e.stopPropagation();

        // Get the ID from the data attribute
        var id = $(this).data('id');

        // Disable the button to prevent multiple clicks
        $(this).attr('disabled', true);

        // Perform your AJAX request here
        $.ajax({
            type: "GET",
            url: base_url + '/open-pop-up',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Re-enable the button
                $('.dropdown .delete-declaration').attr('disabled', false);
                
                // Display the response in a modal or handle it accordingly
                $('.modal-body').html(response);
                $("#PrimaryModalalert4").modal('show');
            },
            error: function(xhr, status, error) {
                // Re-enable the button on error
                $('.dropdown .delete-declaration').attr('disabled', false);
                
                // Handle the error, if needed
                console.error(xhr.responseText);
            }
        });
    });


//delete approved or not
$('body').on('click', '.delete-approved', function(e) {
            e.preventDefault(); 
            //get id
            var id = $(this).data('transction_id');
            //alert(id);return false;
            $(".delete-approved").attr("disabled", true);
            $.ajax({
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/delete-transaction-listing',
                data: {id: id},
                success: function(response) {
                  $(".delete-approved").attr("disabled", false);
                    // Handle the response from the controller
                    $('.success_msg').html(response);
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }
            });
  });
});
</script>

<script>
  $(document).ready(function() {
    $('body').on('click', '.nested_main_tr', function() {
      var group_id = $(this).data('group_id');
        var row_count = $(this).data('row_count');
        var currentRow = $(this);

        // Show AJAX loader
        var loader = $('<div class="ajax-loader"><img src="<?php echo asset('public/assets/img/loader.svg'); ?>"></div>').appendTo('body');
      
        //Ajax Call
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            url: base_url+'/transaction-nested-records', 
            data: {
                group_id: group_id,
                row_count: row_count,
            },
            success: function(response) {
                // Hide AJAX loader
                loader.remove();

                // Check if the current row is already open
                var isOpen = currentRow.next('.nested-details').hasClass('show');

                // Close all other open rows
                $('.nested_main_tr').not(currentRow).next('.nested-details').removeClass('show');

                // Append the response to the current row
                currentRow.after(response);
                // Find the .accordian-body within the appended nested table and add 'in' class
                var newAccordianBody = currentRow.next('.nested-table').find('.accordian-body');
                newAccordianBody.addClass('in');
                // Toggle the collapse state based on its previous state
                if (isOpen) {
                    currentRow.next('.nested-details').removeClass('show');
                } else {
                    currentRow.next('.nested-details').addClass('show');
                }

                // Remove the nested_main_tr class after successful response
                currentRow.removeClass('nested_main_tr');
            },
            error: function() {
                // Hide AJAX loader in case of error
                loader.remove();
                
                // Handle error if necessary
            }
      });
    });
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
      var files = [boe_file_packing, boe_file_invoice, boe_file_doctp, file_uploader];

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

            // Enable attribute
            $(".att-dis").prop("disabled", false);
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
  $(document).ready(function () {
    // Event delegation for dynamically loaded elements
    $(document).on('click', '.accordion-toggle', function () {
        var currentAccordion = $(this);
        var currentAccordionBody = currentAccordion.next('.accordian-body');

        // Check if the clicked accordion has 'grown' class
        var isGrown = currentAccordion.hasClass('grown');

        // Close other accordions
        $('.accordion-toggle').removeClass('grown');
        $('.accordian-body').slideUp().removeClass('in');

        // Toggle the clicked accordion only if it didn't have the 'grown' class
        if (!isGrown) {
            currentAccordion.addClass('grown');
            currentAccordionBody.slideDown();
        }
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
  $(document).on('click', '.dropdown-menu label', function (e) {
    e.stopPropagation();
  });
  </script>
  <script
    src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
  <script>
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

@endsection