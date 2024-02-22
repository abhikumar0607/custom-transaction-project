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
                <h2>Customs Declaration Details</h2>
                <p>View the details and supporting documents of the customs declaration.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- welcome Project, sale area start-->

      <div class="container-fluid">
        <div class="cedit-declartion">
          <h2>Customs Declaration Details</h2>
          <form>
            <div class="row">
              <div class="col-md-3">
                <div class="cedit-declartion-box active">
                  <label>Reference</label>
                  <input type="text" placeholder="P09802122" value="{{ $custom_declaration_edit[0]['refrence_number'] }}"  readonly/>
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Declaration Number</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['declaration_number'] }}" placeholder="15987654365" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Declaration Type</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['dec_type'] }}" placeholder="Declaration Type" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Declaration Date</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['dec_date'] }}" placeholder="Declaration Date" readonly />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Direction</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['direction'] }}" placeholder="Direction" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Consignee/Exporter</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['consignee_exporter'] }}" placeholder="Consignee/Exporter" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Exporter</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['exporter'] }}" placeholder="Exporter" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Exporter Code</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['exporter_code'] }}" placeholder="Exporter Code" readonly />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Importer Code</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['consignee_import_code'] }}" placeholder="Importer Code" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Clearing Agent</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['clearing_agent'] }}" placeholder="Clearing Agent" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Clearing Agent Code</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['clearing_agent_code'] }}" placeholder="Clearing Agent Code" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Declaration Pages</label>
                  <input type="text" value="{{ $custom_declaration_edit[0]['no_of_pages'] }}" placeholder="Declaration Pages" readonly />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Uploaded by</label>
                  <input type="text" value="{{ $user_name }}"placeholder="Uploaded by" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Date Uploaded</label>
                  <input type="text" value="{{ Carbon\Carbon::parse($custom_declaration_edit[0]['created_at'])->format('m/d/Y'); }}" placeholder="Date Uploaded" readonly />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="box-three-dashboard customs-table editecustomes">
        <div class="container-fluid">
          <div class="table-row cust-declartion" style="padding-bottom:0;">
            <h2>Transaction Details</h2>
            <div class="edit-bution"><a href="{{ url('customer/declaration-edit', $custom_declaration_edit[0]['refrence_number']) }}"><img src="{{ asset('public/assets/img/logo/editicon.svg') }}">Edit</a></div>
            <div class="table-sacroll">
              <div class="table-inner">
                <div class="card-body">
                  <table class="scroll">
                    <thead>
                      <tr class="sticky">
                        <th><span class="th-heding">GROUP REF.</span>
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
                        <th><span class="th-heding">PKG TYPE</span>
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
                      </tr>
                    </thead>
                    <tbody>
                    @php
                        $total_value_aed = 0;
                        $total_duty_aed = 0;
                        $total_weight = 0;
                        $total_quantity = 0;
                      @endphp
                      @foreach($custom_declaration_edit[0]['transaction_history'] as $trans_history)
                          @php
                              //calculate value AED
                              $total_value_aed +=  (int)$trans_history['cif_value_aed'];
                              //calculate total duty
                              $total_duty_aed +=  (int)$trans_history['total_duty'];
                              //calculate total weight
                              $total_weight +=  (int)$trans_history['weight'];
                              //calculate total quantity
                              $total_quantity +=  (int)$trans_history['qty'];
                      @endphp
                      <tr>
                        @if($trans_history['group_ref_no'])
                          <td class="green-text">{{ $trans_history['group_ref_no'] }}</td>
                        @else
                          <td class="orange-text">Not reconciled</td>
                        @endif 
                        <td>{{ $trans_history['goods_descriptions'] }}</td>
                        <td>{{ $trans_history['origin'] }}</td>
                        <td>{{ $trans_history['hs_code'] }}</td>
                        <td class="green-text">{{ $trans_history['pkg_type'] ?? '-' }}</td>
                        <td class="green-text">{{ $trans_history['qty'] ?? '-' }}</td>
                        <td class="green-text">{{ $trans_history['weight'] ?? '-' }}</td>
                        <td>{{ number_format((int)$trans_history['cif_forigen_value'], 2) }}</td>
                        <td>{{ number_format((int)$trans_history['total_duty'], 2) }}</td>
                      </tr>
                      @endforeach
                      <tfoot>
                      <tr class="totle-row sticky">
                        <td style="border-bottom:none;"></td>
                        <td style="border-bottom:none;"></td>
                        <td style="border-bottom:none;"></td>
                        <td style="border-bottom:none;"></td>
                        <td style="border-bottom:none; font-weight:700;">TOTAL</td>
                        <td style="border-bottom:none; font-weight:500;">{{ number_format($total_quantity, 2) }}</td>
                        <td style="border-bottom:none; font-weight:500;">{{ number_format($total_weight, 2) }}</td>
                        <td style="border-bottom:none; font-weight:500;">{{ number_format($total_value_aed, 2)}}</td>
                        <td style="border-bottom:none; font-weight:500;">{{ number_format($total_duty_aed, 2)}}</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="documents-remark">
          <div class="row">
            <div class="col-md-6">
              <div class="documents-remark-left">
              <div id="invoice_message"></div>
              <div id="invoice_delete"></div>
                <h2>Documents</h2>
                <table>
                  <tbody>
                  @php
                        $type = ['packaging_list','invoice','other','awl_bl','local_good_pass']; // Set the type you want to display
                        $invoice = collect($declaration_attachment)->whereNotIn('type', $type)->first();
                    @endphp
                    <tr>
                    <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">custom_declaration_doc.pdf</td>
                    <td class="green-text">{{ $invoice->file_path }}</td>
                    <td>{{ round($invoice->size, 1) }} MB</td>
                    <td>{{ \Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y') }}</td>
                    
                    </tr>
                    @php
                        $type = 'invoice'; // Set the type you want to display
                        $invoice = collect($declaration_attachment)->where('type', $type)->first();
                    @endphp

                    @if($invoice)
                         <tr>
                            <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Invoice</td>
                            <td class="green-text">{{ $invoice->file_path }}</td>
                            <td>{{ round($invoice->size, 1) }} MB</td>
                            <td>{{ \Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y') }}</td>
                            <td>
                                <div class="file-up">
                                <p class="Primary mg-b-10 delete-invoice" href="#" data-attachment_id="{{ $invoice->id }}">
                                  <label for="real_file" id="custom_button"><img style="cursor: pointer;" src="{{ asset('public/assets/img/logo/del-svg.svg') }}"></label>
                                </p>
                                </div>
                            </td>
                          </tr>
                    @else
                        <tr>
                            <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Invoice</td>
                            <td>No Document</td>
                            <td></td>
                            <td></td>
                            <td> 
                                <div class="file-up">                             
                                    <input type="file" id="real_file" hidden="hidden" data-refrence_id = "{{ $custom_declaration_edit[0]['refrence_number'] }}"
                                    data-transaction_id = "{{ $custom_declaration_edit[0]['id'] }}" data-type = "invoice">
                                    <label for="real_file" id="custom_button"><img src="{{ asset('public/assets/img/logo/plus-svg.svg') }}"></label>
                                </div>
                            </td>
                          </tr>
                    @endif
                    
                    @php
                        $packaging_list = 'packaging_list'; // Set the type you want to display
                        $packaging = collect($declaration_attachment)->where('type', $packaging_list)->first();
                    @endphp

                    @if($packaging)
                         <tr>
                            <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Packing List</td>
                            <td class="green-text">{{ $packaging->file_path }}</td>
                            <td>{{ round($packaging->size, 1) }} MB</td>
                            <td>{{ \Carbon\Carbon::parse($packaging->created_at)->format('d/m/Y') }}</td>
                            <td>
                                <div class="file-up">
                                <p class="Primary mg-b-10 delete-invoice" href="#" data-attachment_id="{{ $packaging->id }}">
                                  <label for="real_file" id="custom_button"><img style="cursor: pointer;" src="{{ asset('public/assets/img/logo/del-svg.svg') }}"></label>
                                </p>
                                </div>
                            </td>
                          </tr>
                    @else
                        <tr>
                          <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Packing List</td>
                          <td>No Document</td>
                          <td></td>
                          <td></td>
                          <td> 
                                  <div class="file-up">                             
                                      <input type="file" id="real_file" hidden="hidden" data-refrence_id = "{{ $custom_declaration_edit[0]['refrence_number'] }}"
                                      data-transaction_id = "{{ $custom_declaration_edit[0]['id'] }}" data-type = "packaging_list">
                                      <label for="real_file" id="custom_button"><img src="{{ asset('public/assets/img/logo/plus-svg.svg') }}"></label>
                                  </div>
                              </td>
                      </tr>
                    @endif  

                    @php
                        $awl_bl = 'awl_bl'; // Set the type you want to display
                        $awl_bl_data = collect($declaration_attachment)->where('type', $awl_bl)->first();
                    @endphp

                    @if($awl_bl_data)
                         <tr>
                            <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">AWB/BL</td>
                            <td class="green-text">{{ $awl_bl_data->file_path }}</td>
                            <td>{{ round($awl_bl_data->size, 1) }} MB</td>
                            <td>{{ \Carbon\Carbon::parse($awl_bl_data->created_at)->format('d/m/Y') }}</td>
                            <td>
                                <div class="file-up">
                                <p class="Primary mg-b-10 delete-invoice" href="#" data-attachment_id="{{ $awl_bl_data->id }}">
                                  <label for="real_file" id="custom_button"><img style="cursor: pointer;" src="{{ asset('public/assets/img/logo/del-svg.svg') }}"></label>
                                </p>
                                </div>
                            </td>
                          </tr>
                    @else
                        <tr>
                          <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">AWB/BL</td>
                          <td>No Document</td>
                          <td></td>
                          <td></td>
                          <td> 
                                  <div class="file-up">                             
                                      <input type="file" id="real_file" hidden="hidden" data-refrence_id = "{{ $custom_declaration_edit[0]['refrence_number'] }}"
                                      data-transaction_id = "{{ $custom_declaration_edit[0]['id'] }}" data-type = "awl_bl">
                                      <label for="real_file" id="custom_button"><img src="{{ asset('public/assets/img/logo/plus-svg.svg') }}"></label>
                                  </div>
                              </td>
                        </tr>
                      @endif


                  @php
                        $local_good_pass = 'local_good_pass'; // Set the type you want to display
                        $local_good = collect($declaration_attachment)->where('type', $local_good_pass)->first();
                  @endphp

                    @if($local_good)
                         <tr>
                            <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Local Goods Pass</td>
                            <td class="green-text">{{ $local_good->file_path }}</td>
                            <td>{{ round($local_good->size, 1) }} MB</td>
                            <td>{{ \Carbon\Carbon::parse($local_good->created_at)->format('d/m/Y') }}</td>
                            <td>
                                <div class="file-up">
                                <p class="Primary mg-b-10 delete-invoice" href="#" data-attachment_id="{{ $local_good->id }}">
                                  <label for="real_file" id="custom_button"><img style="cursor: pointer;" src="{{ asset('public/assets/img/logo/del-svg.svg') }}"></label>
                                </p>
                                </div>
                            </td>
                          </tr>
                    @else
                          <tr>
                              <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Local Goods Pass</td>
                              <td>No Document</td>
                              <td></td>
                              <td></td>
                              <td> 
                                  <div class="file-up">                             
                                      <input type="file" id="real_file" hidden="hidden" data-refrence_id = "{{ $custom_declaration_edit[0]['refrence_number'] }}"
                                      data-transaction_id = "{{ $custom_declaration_edit[0]['id'] }}" data-type = "local_good_pass">
                                      <label for="real_file" id="custom_button"><img src="{{ asset('public/assets/img/logo/plus-svg.svg') }}"></label>
                                  </div>
                              </td>
                          </tr>
                      @endif 
                      
                   @php
                        $other = 'other'; // Set the type you want to display
                        $other_data = collect($declaration_attachment)->where('type', $other)->first();
                  @endphp

                    @if($other_data)
                         <tr>
                            <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Other Documents</td>
                            <td class="green-text">{{ $other_data->file_path }}</td>
                            <td>{{ round($other_data->size, 1) }} MB</td>
                            <td>{{ \Carbon\Carbon::parse($other_data->created_at)->format('d/m/Y') }}</td>
                            <td>
                                <div class="file-up">
                                <p class="Primary mg-b-10 delete-invoice" href="#" data-attachment_id="{{ $other_data->id }}">
                                  <label for="real_file" id="custom_button"><img style="cursor: pointer;" src="{{ asset('public/assets/img/logo/del-svg.svg') }}"></label>
                                </p>
                                </div>
                            </td>
                          </tr>
                     @else
                          <tr>
                              <td class="one-cust"><img src="{{ asset('public/assets/img/logo/doc-round.png') }}">Other Documents</td>
                              <td>No Document</td>
                              <td></td>
                              <td></td>
                              <td> 
                                  <div class="file-up">                             
                                      <input type="file" id="real_file" hidden="hidden" data-refrence_id = "{{ $custom_declaration_edit[0]['refrence_number'] }}"
                                      data-transaction_id = "{{ $custom_declaration_edit[0]['id'] }}" data-type = "other">
                                      <label for="real_file" id="custom_button"><img src="{{ asset('public/assets/img/logo/plus-svg.svg') }}"></label>
                                  </div>
                              </td>
                          </tr>
                     @endif     
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="documents-remark-left">
                <h2>Notes & Remarks</h2>
                <div class="box-remark"><textarea
                    placeholder="Type here any notes or remarks related to this customs declaration.." class="reamrk"
                    spellcheck="false"></textarea></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="PrimaryModalalert1" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog are-you-suer-all">
      <div class="modal-content">
        <div class="modal-close-area modal-close-df"> <a class="close" data-dismiss="modal" href="#"><i
              class="fa fa-close"></i></a> </div>
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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
//script to delete files 
  $(document).ready(function () {
        $('body').on('click', '.delete-invoice', function (e) {
            e.preventDefault();
            var attachmentId = $(this).data('attachment_id');
            // Send AJAX request to delete the record
            $.ajax({
                url: base_url + '/attachment-delete-popup',
                type: 'POST',
                data: {
                    attachment_id: attachmentId,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                  $('#PrimaryModalalert1').modal('show');
                    $('.modal-body').html(response); 
                }
            });
        });
  });
</script>

<script>
$(document).ready(function() {
      $("body").on("change", "#real_file", function() {
        var formData = new FormData();
        var fileInput = $(this)[0].files[0]; // Get the selected file
        // Check if a file is selected
        if (fileInput) {
            formData.append('file', fileInput);
            formData.append('refrence_number', $(this).data("refrence_id"));
            formData.append('transaction_id', $(this).data("transaction_id"));
            formData.append('document_type', $(this).data("type"));
            formData.append('file_size', fileInput.size); // Add file size to FormData
           
            //ajax request
            $.ajax({
                url: base_url + '/invoice-upload',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                mimeType: 'multipart/form-data',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(response) {
                    // Display the response message in a div
                    $('#invoice_message').html(response);

                    // Reload the page after a short delay (adjust as needed)
                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                },
            });
        }
    });
});
</script>



<script>
//script to delete files 
  $(document).ready(function () {
        $('body').on('click', '.attachment-remove', function (e) {
            e.preventDefault();
            var attachmentId = $(this).data('attachment_id');
            // Send AJAX request to delete the record
            $.ajax({
                url: base_url + '/attachment-delete',
                type: 'POST',
                data: {
                    attachment_id: attachmentId,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                  $('.success_msg').html(response);
                    // Reload the page after a short delay (adjust as needed)
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                }
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
@endsection
