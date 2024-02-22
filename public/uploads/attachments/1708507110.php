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
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <img src="{{ asset('public/assets/img/logo/filler-con-svg.svg') }}">
                    </button>
                    <ul class="dropdown-menu">
                      <form class="from-filter">
                        <h4>DATE</h4>
                        <div class="date-left">
                          <div class="ui calendar" id="rangestart">
                            <div class="ui input left icon">
                              <input type="text" placeholder="From">
                            </div>
                          </div>
                          <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                        </div>
                        <div class="date-right">
                          <div class="ui calendar" id="rangeend">
                            <div class="ui input left icon">
                              <input type="text" placeholder="To">
                            </div>
                          </div>
                          <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                        </div>
                        <div class="direction-bx">
                          <h4>DIRECTION</h4>
                        </div>
                        <div class="dci-type">
                          <div class='tabs'>
                            <input type="radio" name="tab" id="tab1" role="tab" checked>
                            <label for="tab1" id="tab1-label">All</label>
                            <section aria-labelledby="tab1-label">
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
                            </section>
                            <!-- Tab 2 & Content -->
                            <input type="radio" name="tab" id="tab2" role="tab">
                            <label for="tab2" id="tab2-label">Inbound</label>
                            <section aria-labelledby="tab2-label">
                              <h4>DEC TYPE</h4>
                              <div class="form-group">
                                <input type="checkbox" id="import1">
                                <label for="import1">Import</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="export2">
                                <label for="export2">Export</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transfer3">
                                <label for="transfer3">Transfer</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transit4">
                                <label for="transit4">Transit</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="temp5">
                                <label for="temp5">Temp. Admission</label>
                              </div>
                            </section>
                            <!-- Tab 3 & Content -->
                            <input type="radio" name="tab" id="tab3" role="tab">
                            <label for="tab3" id="tab3-label">Outbound</label>
                            <section aria-labelledby="tab3-label">
                              <h4>DEC TYPE</h4>
                              <div class="form-group">
                                <input type="checkbox" id="import6">
                                <label for="import6">Import</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="export7">
                                <label for="export7">Export</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transfer8">
                                <label for="transfer8">Transfer</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="transit9">
                                <label for="transit9">Transit</label>
                              </div>
                              <div class="form-group">
                                <input type="checkbox" id="temp10">
                                <label for="temp10">Temp. Admission</label>
                              </div>
                            </section>
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
                <div class="celer-btn"><button>Clear All</button></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="search-upload-box-right">
                <div class="button-draft">
                  <button><img src="{{ asset('public/assets/img/logo/icon-svg1.svg') }}">Draft - <em>3</em></button>
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
                    <tr data-toggle="collapse" data-target="#demo<?php echo $data['id']?>" class="accordion-toggle" data-status="{{ $data['status'] }}"  @if($data['status'] === 'draft') class="disabled-row" @endif >
                      <td><img src="{{ asset('public/assets/img/logo/gryicon-svg.svg') }}" class="don-icon"><img src="{{ asset('public/assets/img/logo/green-svg.svg') }}"
                          class="up-icon"></td>
                      <td>{{ $data['id'] }}</td>
                      <td>{{ $data['refrence_number'] }}</td>
                      <td>{{ $data['dec_date'] }}</td>
                      <td>{{ $data['declaration_number'] }}</td>
                      <td><span class="inbound-tow">Inbound</span></td>
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
                                <li><a href="#"><img src="{{ asset('public/assets/img/logo/ico-2.png') }}">Download</a></li>
                                <li><a href="#"><img src="{{ asset('public/assets/img/logo/ico-3.png') }}">Upload Docs</a></li>
                                <li><a href="{{ url('customer/declaration-edit', $data['refrence_number']) }}"><img src="{{ asset('public/assets/img/logo/ico-4.png') }}">Edit</a></li>
                                
                                
                    <li><div class="Click-here"><img src="{{ asset('public/assets/img/logo/ico-5.png') }}">Delete</div></li>        
                    <!-- <div class="custom-model-main">
                      <div class="custom-model-inner">        
                      <div class="close-btn">×</div>
                        <div class="custom-model-wrap">
                          <div class="pop-up-content-wrap">
                            <div class="content-popup">
                              <img src="{{ asset('public/assets/img/delet.svg') }}">
                              <p>Selected transaction(s) can’t be deleted as they are <br>reconciled with other declarations.</p>
                              <button>Ok</button>
                              </div>
                          </div>
                        </div>  
                      </div>  
                      <div class="bg-overlay"></div>
                    </div>  -->

 
                                  
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="13" style="padding:0 !important;" class="hiddenRow">
                        <div class="accordian-body collapse" id="demo<?php echo $data['id']?>">
                          <div class="card-body inner-scroll">
                            <table class="scroll">
                              <thead>
                                <tr class="sticky">
                                  <th class="one-th"></th>
                                  <th class="three-th">GROUP REF.</th>
                                  <th class="four-th">DESCRIPTION</th>
                                  <th class="five-th">COO</th>
                                  <th class="six-th">HSCODE</th>
                                  <th class="saven-th">PKG TYPE</th>
                                  <th class="eight-th">QTY</th>
                                  <th class="nine-th">WEIGHT</th>
                                  <th class="ten-th">VALUE (AED)</th>
                                  <th class="elven-th">DUTY (AED)</th>
                                  <th class="tblb-th"></th>
                                  <th class="thrten-th"></th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($data['transaction_history'] as $history)
                                <tr>
                                  <td></td>
                                  <td class="first-color">G50002</td>
                                  <td>{{ $history['goods_descriptions'] }}</td>
                                  <td>{{ $history['origin'] }}</td>
                                  <td>{{ $history['hs_code'] }}</td>
                                  <td>-</td>
                                  <td>{{ $history['qty'] }}</td>
                                  <td>{{ number_format($history['weight'], 2) }}</td>
                                  <td>{{ number_format((int)$history['cif_value_aed'], 2) }}</td>
                                  <td>{{ number_format((int)$history['total_duty'], 2) }}</td>
                                  <td></td>
                                  <td></td>
                                </tr>
                               @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </td>
                    </tr>
               
                   @endforeach
                  </tbody>
                </table>
                @else
                  <h2>No Records Found</h2>
                @endif
              </div>
              <div class="paginaction">
                <div class="row">
                  <div class="col-md-6">
                    <div class="paginaction-left">
                      <p>Showing 1 to 4 of 20 entries</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="paginaction-right">
                    <!-- Display pagination links -->
                    {{ $transaction->links() }}
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
                          <select class="selectOptions" id="boe_add_doc" name="selectOptions">
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
                          <select class="selectOptions" id="boe_add_doc_one" name="selectOptions">
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
                          <select class="selectOptions" id="boe_add_doc_two" name="selectOptions">
                            <option value="option1">Document Type</option>
                            <option value="option2">Document Type 2</option>
                            <option value="option3">Document Type 3</option>
                          </select>
                          <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
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
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">-->
<!-- Include DataTables JS -->
<!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->


<!-- <script>
  // Your DataTables initialization script goes here
  $(document).ready(function() {
      $('#declaration_table').DataTable();
  });
</script> -->
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
  //cehck email and update  password
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
      var file_uploader = $('#file_uploader')[0].files[0];

      var formData = new FormData();
      formData.append('reference_number', reference_number);
      formData.append('file_uploader', file_uploader);
      //alert(file_uploader);
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
          // setTimeout(function() {
          //   var redirectUrl = base_url + '/declaration-edit/' + reference_number;
          //       window.location.href = redirectUrl;
          //    // $('.success_msg').empty(); // or use $('.success_msg').hide();
          // }, 5000);

          //enable attribute
          $(".att-dis").prop("disabled", false);
        }
      });
    }
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
$(document).ready(function() {
    $('.dropdown').on('click', function() {
        // Remove 'red' class from all dropdowns
        $('.dropdown').removeClass('red');

        // Add 'red' class to the clicked dropdown
        $(this).addClass('red');
    });

    $('.materialdesign').click(function () {
      $('.dropdown').not(this).removeClass('red');
    });
});


  </script>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  $(document).ready(function() {
      // Trigger file input click when any option is chosen
      $('#boe_add_doc').change(function() {
        $('#fileUpload').click();
      });
      // Trigger file input click when any option is chosen
      $('#boe_add_doc_one').change(function() {
        $('#fileUpload').click();
      });

      // Trigger file input click when any option is chosen
      $('#boe_add_doc_two').change(function() {
        $('#fileUpload').click();
      });

      // Trigger file input click when any option is chosen
      $('#lgp_add_doc').change(function() {
        $('#fileUpload').click();
      });

      // Trigger file input click when any option is chosen
      $('#lgp_add_doc_one').change(function() {
        $('#fileUpload').click();
      });

      // Trigger file input click when any option is chosen
      $('#lgp_add_doc_two').change(function() {
        $('#fileUpload').click();
      });

      // Trigger file input click when any option is chosen
      $('#lgp_mod_doc').change(function() {
        $('#fileUpload').click();
      });

      // Trigger file input click when any option is chosen
      $('#lgp_mod_doc_one').change(function() {
        $('#fileUpload').click();
      });

      // Trigger file input click when any option is chosen
      $('#lgp_mod_doc_two').change(function() {
        $('#fileUpload').click();
      });
  });
// Add the class 'disabled-row' to rows with data-status'draft'
  $(document).ready(function() {
    $('tr[data-status="draft"]').addClass('disabled-draft-row');
          // Disable links within rows with the class 'disabled-row'
          $('tr.disabled-row a').on('click', function(e) {
              e.preventDefault();
          });
  });
  
const fileUploader = document.getElementById('file_uploader');
const feedback = document.getElementById('feedback');
const progress = document.getElementById('progress');
const fileSizeLabel = document.getElementById('file-size-label');
const progressBarContainer = document.getElementById('progress-bar-container');
const fileNameLabel = document.getElementById('file-name'); 

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
        let msg = `<span style="color:green;">File <u><b>${file.name}</b></u> has been uploaded successfully.</span>`;
        feedback.innerHTML = msg;

        // Display the progress bar container after upload is complete
        progressBarContainer.style.display = 'block !important';
      }
    }
  });
});

</script>


<script>
//   $('body').on('click', '.Click-here', function() {
//     $(".custom-model-main").addClass('model-open');
//   });
//   $('body').on('click', '.close-btn, .bg-overlay', function() {
//     $(".custom-model-main").removeClass('model-open');
//  });














// TAB
// $(document).on('click', '.tab-wrap ul li a', function (e) {
//     var curTabContentId = $(this).attr('href');
//     $(this).parents('.tab-wrap').find('ul li').removeClass('active');
//     $(this).parents('li').addClass('active');
//     $(this).parents('.tab-wrap').find('.tab-content-id').removeClass('active');
//     $(curTabContentId).addClass("active");
//     e.preventDefault();
// });
</script>

@endsection
