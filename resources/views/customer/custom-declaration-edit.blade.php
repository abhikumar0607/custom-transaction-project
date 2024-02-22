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
                <h2>Edit Declaration</h2>
                <p>Edit or modify the transaction details of the customs declaration</p>
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
          <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="row">
              <div class="col-md-3">
                <div class="cedit-declartion-box active">
                  <label>Reference</label>
                  <input type="text" placeholder="P09802122" id="reffernce_num" value="{{ $custom_declaration_edit[0]['refrence_number'] }}"  readonly/>
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
                  <input type="text" value="" placeholder="Direction" readonly />
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
                  <input type="text" placeholder="Uploaded by" readonly />
                </div>
              </div>
              <div class="col-md-3">
                <div class="cedit-declartion-box">
                  <label>Date Uploaded</label>
                  <input type="text" value="" placeholder="Date Uploaded" readonly />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="box-three-dashboard customs-table editecustomes">
        <div class="container-fluid">
          <div class="table-row">
            <h2>Transaction Details</h2>
            <div class="table-sacroll">
              <div class="table-inner">
                <div class="card-body">
                  <table class="scroll">
                    <thead>
                      <tr class="sticky">
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
                              $total_value_aed +=  (int)$trans_history['cif_forigen_value'];
                              //calculate total duty
                              $total_duty_aed +=  (int)$trans_history['total_duty'];
                              //calculate total weight
                              $total_weight +=  (int)$trans_history['weight'];
                              //calculate total quantity
                              $total_quantity +=  (int)$trans_history['qty'];
                          @endphp
                      <tr>
                        <td>{{ $trans_history['goods_descriptions'] }}</td>
                        <td>{{ $trans_history['origin'] }}</td>
                        <td>{{ $trans_history['hs_code'] }}</td>
                        <td>
                          <div class="select">
                              <select class="packageSelect" id="packageSelect" data-id="{{ $trans_history['id'] }}">
                                <option  value="">Select Pkg</option>
                                <option  value="PACKAGES" <?php echo ($trans_history['pkg_type'] == 'PACKAGES') ? 'selected' : ''; ?>>PACKAGES</option>
                                <option  value="PIECES" <?php echo ($trans_history['pkg_type'] == 'PIECES') ? 'selected' : ''; ?>>PIECES</option>
                                <option  value="CARTONS" <?php echo ($trans_history['pkg_type'] == 'CARTONS') ? 'selected' : ''; ?>>CARTONS</option>
                                <option  value="PALLET" <?php echo ($trans_history['pkg_type'] == 'PALLET') ? 'selected' : ''; ?>>PALLET</option>
                                <option  value="CRATES" <?php echo ($trans_history['pkg_type'] == 'CRATES') ? 'selected' : ''; ?>>CRATES</option>
                                <option  value="CASES" <?php echo ($trans_history['pkg_type'] == 'CASES') ? 'selected' : ''; ?>>CASES</option>
                                <option  value="CASKS" <?php echo ($trans_history['pkg_type'] == 'CASKS') ? 'selected' : ''; ?>>CASKS</option>
                                <option  value="CONTAINER" <?php echo ($trans_history['pkg_type'] == 'CONTAINER') ? 'selected' : ''; ?>>CONTAINER</option>
                                <option  value="CYLINDERS" <?php echo ($trans_history['pkg_type'] == 'CYLINDERS') ? 'selected' : ''; ?>>CYLINDERS</option>
                                <option  value="DRUMS" <?php echo ($trans_history['pkg_type'] == 'DRUMS') ? 'selected' : ''; ?>>DRUMS</option>
                                <option  value="PLASTIC DRUM" <?php echo ($trans_history['pkg_type'] == 'PLASTIC DRUM') ? 'selected' : ''; ?>>PLASTIC DRUM</option>
                                <option  value="PACKET" <?php echo ($trans_history['pkg_type'] == 'PACKET') ? 'selected' : ''; ?>>PACKET</option>
                                <option  value="REEL" <?php echo ($trans_history['pkg_type'] == 'REEL') ? 'selected' : ''; ?>>REEL</option>
                                <option  value="ROLL" <?php echo ($trans_history['pkg_type'] == 'ROLL') ? 'selected' : ''; ?>>ROLL</option>
                                <option  value="SACKS" <?php echo ($trans_history['pkg_type'] == 'SACKS') ? 'selected' : ''; ?>>SACKS</option>
                                <option  value="SET" <?php echo ($trans_history['pkg_type'] == 'SET') ? 'selected' : ''; ?>>SET</option>
                            </select>
                          </div>
                        </td>
                        <td> <input type="text" name="qty" class="qty" data-id="{{ $trans_history['id'] }}" value="{{ $trans_history['qty'] }}" placeholder=""  id="numericInput" oninput="validateInput(this)"/></td>
                        <td> <input type="text" name="weight" class="weight-input" data-id="{{ $trans_history['id'] }}" value="{{ number_format($trans_history['weight'], 2) }}" placeholder="" id="numericInput" oninput="formatNumber(this)"/></td>
                        <td>{{ number_format((int)$trans_history['cif_forigen_value'], 2) }}</td>
                        <td>{{ number_format((int)$trans_history['total_duty'], 2) }}</td>
                        <td><input type="hidden" class="reference-id" data-reference_id="{{ $custom_declaration_edit[0]['refrence_number'] }}"/></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr class="totle-row sticky">
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
                <div class="table-button">
                  <button class="save-draft" id="save-draft" data-status="draft">Save as Draft</button>
                  <button id="save-btn" data-status="publish">Save</button>
                  <div class="success_msg"><div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
     

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--script for update data as publish-->    
<script>
    $(document).ready(function() {
        $('#save-btn').on('click', function() {
         // Get all input elements with class "qty" and "weight-input"
        var qtyInputs = document.querySelectorAll('.qty');
        var weightInputs = document.querySelectorAll('.weight-input');
        var packageSelects = document.querySelectorAll('.packageSelect');
        var referenceId = $('.reference-id').data('reference_id');
        var status = $(this).data('status');
        // Function to check and add error class
        function checkAndAddError(element) {
          if (element.value.trim() === '' || element.value.trim() === '0.00') {
            element.classList.add('dec-error');
          } else {
            element.classList.remove('dec-error');
          }
        }
        // Iterate through quantity inputs
        qtyInputs.forEach(checkAndAddError);

        // Iterate through weight inputs
        weightInputs.forEach(checkAndAddError);

        // Iterate through package selects
        packageSelects.forEach(checkAndAddError);

   // Check if any element has 'dec-error' class
   if ($('.dec-error').length > 0) {
            return false; // Stop further execution
        }
          $("#save-btn").attr("disabled", true);
          //get quantity
          var qty_update = [];
          $('.qty').each(function() {
            var all_qty = $(this).val();
            var id = $(this).data('id');

            if (all_qty.trim() !== '') {
              qty_update.push({ id, all_qty });
            }
          });

          //get weight
          var weight = [];
          $('.weight-input').each(function() {
            var all_weight = $(this).val();
            var id = $(this).data('id');

            if (all_weight.trim() !== '') {
              weight.push({ id, all_weight });
            }
          });

          //get package
          var packages = [];
          $('.packageSelect').each(function() {
                var selectedOption = $(this).find(':selected');
                var selectedDataId = $(this).data('id');
                var selectedValue = selectedOption.val();
                if (selectedValue !== '') {
                  packages.push({
                        id: selectedDataId,
                        pkg_type: selectedValue
                    });
                }
            });

          
            $.ajax({
                url: base_url+'/update-declaration', // Replace with your Laravel route
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // If CSRF protection is enabled
                },
                data: {qty:qty_update,packages:packages,weight:weight,status:status, referenceId:referenceId},
                
                success: function(response) {
                 
                  $('.success_msg').html(response);
                      setTimeout(function () {
                        var redirectUrl = base_url + '/custom-declaration-detail/' + referenceId;
                        window.location.href = redirectUrl; 
                        //location.reload();
                    }, 5000);
                },
                error: function(xhr, status, error) {
                    console.error(error); // Log any errors
                    alert('Error occurred while saving data.');
                }
            });
        });
    });

</script>
<!--script for update data as draft-->    
<script>
    $(document).ready(function() {
        $('#save-draft').on('click', function() {
          $("#save-draft").attr("disabled", true);
          //get status
          var status = $(this).data('status');
          //get quantity
          var qty_update = [];
          $('.qty').each(function() {
            var all_qty = $(this).val();
            var id = $(this).data('id');

            if (all_qty.trim() !== '') {
              qty_update.push({ id, all_qty });
            }
          });

          //get weight
          var weight = [];
          $('.weight-input').each(function() {
            var all_weight = $(this).val();
            var id = $(this).data('id');

            if (all_weight.trim() !== '') {
              weight.push({ id, all_weight });
            }
          });

          //get package
          var packages = [];
          $('.packageSelect').each(function() {
                var selectedOption = $(this).find(':selected');
                var selectedDataId = $(this).data('id');
                var selectedValue = selectedOption.val();

                if (selectedValue !== '') {
                  packages.push({
                        id: selectedDataId,
                        pkg_type: selectedValue
                    });
                }
            });

          
            $.ajax({
                url: base_url+'/update-declaration', // Replace with your Laravel route
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // If CSRF protection is enabled
                },
                data: {qty:qty_update,packages:packages,weight:weight,status:status},
                success: function(response) {
                  $('.success_msg').html(response);
                        setTimeout(function () {
                          var redirectUrl = base_url + '/transaction-listing/';
                          window.location.href = redirectUrl; 
                          //location.reload();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    console.error(error); // Log any errors
                    alert('Error occurred while saving data.');
                }
            });
        });
    });
</script>

<!---check input field not contain decimal-->
<script>
        function validateInput(inputField) {
            let cleanedValue = inputField.value.replace(/[^0-9]/g, '').replace(/^0+/, '');
            cleanedValue = cleanedValue.slice(0, 9);
            inputField.value = cleanedValue;
        }
</script>
<!---check input field not contain decimal-->
<script>
        function formatNumber(inputField) {
            let cleanedValue = inputField.value.replace(/[^0-9]/g, '').replace(/^0+/, '');
            cleanedValue = cleanedValue.slice(0, 9);
            inputField.value = cleanedValue;
        }
</script>
@endsection
