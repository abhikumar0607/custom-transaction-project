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
             <li><a href="{{ url('customer/assets') }}" class="three-tab">Assets <span>{{ count($assests_data_count) ?? '0' }}</span></a></li>
            </ul>
            <div class="search-upload-box-right">
              <div class="upload-beo"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                  data-target="#PrimaryModalalert"><img src="{{ asset('public/assets/img/logo/icon-svg2.svg') }}"> Upload BOE</a> </div>
              <div class="upload-lgp"> <a class="Primary mg-b-10" href="#" data-toggle="modal"
                  data-target="#PrimaryModalalert1"><img src="{{ asset('public/assets/img/logo/icon-svg3.svg') }}"> Upload LGP</a> </div>
            </div>
            <div class="tabs-stage">           
               @if(count($transaction) > 0)

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
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="{{ asset('public/assets/img/logo/filler-con-svg.svg') }}">
                            </button>
                            <ul class="dropdown-menu">
                              <form class="from-filter">
                                <h4>DATE</h4>
                                <div class="date-left">
                                  <div class="ui calendar" id="rangestart2">
                                    <div class="ui input left icon">
                                      <input type="text" placeholder="From">
                                    </div>
                                  </div>
                                  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg">
                                </div>
                                <div class="date-right">
                                  <div class="ui calendar" id="rangeend2">
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
                                    <input type="radio" name="tab" id="tab4" role="tab" checked>
                                    <label for="tab4" id="tab4-label">All</label>
                                    <section aria-labelledby="tab4-label">
                                      <h4>DEC TYPE</h4>
                                      <div class="form-group">
                                        <input type="checkbox" id="import11" checked>
                                        <label for="import11">Import</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="export12" checked>
                                        <label for="export12">Export</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="transfer12" checked>
                                        <label for="transfer12">Transfer</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="transit13" checked>
                                        <label for="transit13">Transit</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="temp14" checked>
                                        <label for="temp14">Temp. Admission</label>
                                      </div>
                                    </section>
                                    <!-- Tab 2 & Content -->
                                    <input type="radio" name="tab" id="tab5" role="tab">
                                    <label for="tab5" id="tab5-label">Inbound</label>
                                    <section aria-labelledby="tab5-label">
                                      <h4>DEC TYPE</h4>
                                      <div class="form-group">
                                        <input type="checkbox" id="import15" checked>
                                        <label for="import15">Import</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="export16" checked>
                                        <label for="export16">Export</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="transfer17" checked>
                                        <label for="transfer17">Transfer</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="transit18" checked>
                                        <label for="transit18">Transit</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="temp5" checked>
                                        <label for="temp5">Temp. Admission</label>
                                      </div>
                                    </section>
                                    <!-- Tab 3 & Content -->
                                    <input type="radio" name="tab" id="tab6" role="tab">
                                    <label for="tab6" id="tab6-label">Outbound</label>
                                    <section aria-labelledby="tab6-label">
                                      <h4>DEC TYPE</h4>
                                      <div class="form-group">
                                        <input type="checkbox" id="import19" checked>
                                        <label for="import19">Import</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="export20" checked>
                                        <label for="export20">Export</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="transfer21" checked>
                                        <label for="transfer21">Transfer</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="transit22" checked>
                                        <label for="transit22">Transit</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="temp23" checked>
                                        <label for="temp24">Temp. Admission</label>
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
                          <li class="select-li" id="groups-selected">2 Selected</li>
                          <li><a class="Primary mg-b-10" href="#" data-toggle="modal"
                              data-target="#PrimaryModalalert5">X Ungroup Transaction</a></li>
                        </ul>
                        <div class="clos-row-btn">
                          <button class="clos-row"><em>x</em> <br>
                            Close</button>
                        </div>
                      </div>
                      <table id="customDataTable" class="dataTable no-footer">
                        <thead>
                          <tr>
                            <th></th>
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
                            <th><span class="th-heding"></span></th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                         $count = 1; 
                        @endphp 
                          @foreach($groups_detail as $detail => $groupData) 
                            <tr class="nested_main_tr accordion-toggle" data-group_id="{{ $detail }}" data-row_count="<?php echo $count ?>" data-toggle="collapse" data-target="#demo<?php echo $count ?>" aria-expanded="false">
                                <td><img src="{{ asset('public/assets/img/logo/gryicon-svg.svg') }}" class="don-icon"><img src="{{ asset('public/assets/img/logo/green-svg.svg') }}"
                                class="up-icon"></td>
                                <td class="green-text">{{ $detail }}</td>
                                <td>{{ $groupData[0]['group_refrence_no'] }}</td>
                                <td>17/11/2022</td>
                                <td><em>750</em>/900</td>
                                <td><em>5000</em>/8000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="dot open-child-row r-r-group-table" data-row_id="1">
                                 @if($groupData[0]['is_sealed'] == 'locked')
                                  <div class ="tooltip" style="float:left;">
                                      <img src="{{ asset('public/assets/img/logo/secured-lock.svg') }}" class="blck-lock sealed" data-is_sealed="unlock" data-group_id = "{{ $detail }}"> 
                                      <span class="tooltiptext">You can’t add more transactions to locked groups</span> 
                                  </div>    
                                  @else    
                                      <img src="{{ asset('public/assets/img/logo/padlock-unlock.svg') }}" class="blck-lock sealed" data-is_sealed="locked" data-group_id = "{{ $detail }}">
                                  @endif    
                                <ul class="my-nav">
                                    <li>
                                    <div class="dropdown">
                                        <div class="open-imeg"><img src="{{ asset('public/assets/img/logo/dot-image.png') }}"></div>
                                        <ul class="dropdown-content">
                                        <li class="open-group-popup" data-grp_id = "{{ $detail }}" >Ungroup</li>
                                        </ul>
                                    </div>
                                    </li>
                                </ul>
                                </td>
                            </tr>
                           <?php $count++; ?>
                          @endforeach
                        </tbody>
                      </table>
                    <div class="paginaction">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="paginaction-left">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="paginaction-right">
                             
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
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <!-- check group is sealed --> 
<script>
$(document).ready(function() {
    $('body').on('click', '.nested_main_tr', function() {
        var group_id = $(this).data('group_id');
        var row_count = $(this).data('row_count');
        var currentRow = $(this);

        // Check if the nested details container is already loaded
        var nestedDetails = currentRow.next('.nested-details');
        var isOpen = nestedDetails.length > 0 && nestedDetails.is(':visible');

        // Close all other open rows
        $('.nested_main_tr').not(currentRow).next('.nested-details').hide();
      
        //Ajax Call
        $.ajax({
          type: "GET",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }, 
          url: base_url+'/reconciled-nested-records', 
          data: {
                  group_id: group_id,
                  row_count: row_count,
                },
          success: function(response) {
            // Check if the current row is already open
            var isOpen = currentRow.next('.nested-details').hasClass('show');

            // Close all other open rows
            $('.nested_main_tr').not(currentRow).next('.nested-details').removeClass('show');

            // Append the response to the current row
            currentRow.after(response);

            // Toggle the collapse state based on its previous state
            if (isOpen) {
                currentRow.next('.nested-details').removeClass('show');
            } else {
                currentRow.next('.nested-details').addClass('show');
            }
            // Remove the nested_main_tr class after successful response
            currentRow.removeClass('nested_main_tr');
          }
      });
    });

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
  $(document).ready(function() {
    // Initialize DataTable
    var table = $('#customDataTable').DataTable();

    // Handle click event on main table row
    $('.accordion-toggle').click(function() {
      // Toggle the visibility of rows with id "nt"
      $('#nt').toggle();

      // Remove existing row with id "nt"
      table.row('#nt').remove();

      // If row with id "nt" is visible, append it to the DataTable
      if ($('#nt').is(':visible')) {
        table.row.add($('#nt').clone().removeAttr('style')).draw();
      }
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
          //Hide the response after 5 seconds
          setTimeout(function() {
            var redirectUrl = base_url + '/declaration-edit/' + reference_number;
                window.location.href = redirectUrl;
             // $('.success_msg').empty(); // or use $('.success_msg').hide();
          }, 5000);

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
    $('.dropdown').click(function () {
      $('.dropdown').removeClass('red');
      $(this).addClass('red');
    });

    $('.materialdesign').click(function () {
      $('.dropdown').not(this).removeClass('red');
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

    $('#rangestart2').calendar({
      type: 'date',
      endCalendar: $('#rangeend2')
    });
    $('#rangeend2').calendar({
      type: 'date',
      startCalendar: $('#rangestart2')
    });

    $('#rangestart3').calendar({
      type: 'date',
      endCalendar: $('#rangeend3')
    });
    $('#rangeend3').calendar({
      type: 'date',
      startCalendar: $('#rangestart3')
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

        // Function to get data attributes of checked checkboxes
        function getDataAttributes() {
            dataAttributes = []; // Clear the array
            typeAttr = [];
            // Loop through checked checkboxes
            $('.check-box:checked').each(function () {
                // Get the data attributes of the checked checkbox
                var dataAttrObject = $(this).data();
                var type = $(this).data('type');
                // Push the data attributes to the array
                dataAttributes.push(dataAttrObject);
                typeAttr.push(type);
            });
        }

        // Listen for checkbox changes
        $('.check-box').change(function () {
            getDataAttributes(); // Call the function on checkbox change
        });

        // Listen for button click
        $('#btn-id').click(function (e) {
            e.preventDefault();
            $(".att-dis").attr("disabled", true);
            //get group id
            var groupData = $('#group').val();

            getDataAttributes(); // Call the function to update dataAttributes

            // Log the array of data attributes
            console.log(dataAttributes);

            // Now you can use dataAttributes in your AJAX request or any other logic
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/submit-group',
                data: {checkboxData: dataAttributes, groupData: groupData,type:typeAttr},
                success: function(response) {
                    // Handle the response from the controller
                    $("#PrimaryModalalert7").modal('show');
                    $('.modal-body').html(response);
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
<!--Sending request using ajax for Assets creation-->
<script>
    $(document).ready(function () {
        var dataAttributes = []; // Define an array to store data attributes

        // Function to get data attributes of checked checkboxes
        function getDataAttributes() {
            dataAttributes = []; // Clear the array
            typeAttr = [];
            // Loop through checked checkboxes
            $('.check-box:checked').each(function () {
                // Get the data attributes of the checked checkbox
                var dataAttrObject = $(this).data();

                var type = $(this).data('type');
                // Push the data attributes to the array
                dataAttributes.push(dataAttrObject);
                typeAttr.push(type);
            });
        }

        // Listen for checkbox changes
        $('.check-box').change(function () {
            getDataAttributes(); // Call the function on checkbox change
        });

        // Listen for button click
        $('#assign_asset').click(function (e) {
          e.preventDefault();
            $(".att-dis").attr("disabled", true);
            //get group id
            //var groupData = $('#group').val();

            getDataAttributes(); // Call the function to update dataAttributes

            // Log the array of data attributes
            console.log(dataAttributes);
           // Now you can use dataAttributes in your AJAX request or any other logic
            $.ajax({
               
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/submit-assets',
                data: {checkboxData: dataAttributes,type:typeAttr},
                success: function(response) {
                  $("#PrimaryModalalert7").modal('show');
                    $('.modal-body').html(response);
                    //$('.success_msg').html(response);
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
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
<!-- <script>
  $(document).ready(function () {
    // Handle click event for accordion-toggle elements
    $('.accordion-toggle').click(function () {
      // Check if 'grown' class is already added
      var isGrown = $(this).hasClass('grown');

      // Remove 'grown' class from all accordion-toggle elements
      $('.accordion-toggle').removeClass('grown');
      $('.accordion-toggle').addClass('collapsed');
      $('.accordion-toggle').attr('aria-expanded', 'false');

      // Toggle 'grown' class on the clicked element
      $(this).toggleClass('grown', !isGrown);
      $(this).attr('aria-expanded', !isGrown ? 'true' : 'false');
    });

    // Manually trigger click on elements with class 'collapsed'
    $('.accordion-toggle.collapsed').each(function() {
      // Check the initial state
      console.log('Element is collapsed:', this);
      
      // Triggering a click event
      $(this).trigger('click');

      // Check the updated state
      console.log('Element is now:', $(this).hasClass('grown') ? 'grown' : 'collapsed');
    });
  });
</script> -->

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
        var dataAttributes = []; // Define an array to store data attributes
        function getDataAttributes() {
            dataAttributes = []; // Clear the array
            $('.check-box:checked').each(function () {
                var dataAttrObject = $(this).data();
                dataAttributes.push(dataAttrObject);
            });
        }

        // Listen for checkbox changes
        $('.check-box').change(function () {
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
                url: base_url+'/add-session',
                data: {dataAttributes: dataAttributes},
                success: function(response) {
                // Hide the response after 5 seconds
                setTimeout(function() {
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
@endsection

