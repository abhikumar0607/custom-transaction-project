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
         <div class="tabcontent" id="tab-2">
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
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                      <table id="customDataTable" class="table table-condensed customs-transactions table-2"
                        style="border-collapse:collapse;">
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
                          $inbound_qty = 0;
                          $inbound_weight = 0;
                          $outbound_qty = 0;
                          $outbound_weight = 0;
                        @endphp 

                          @foreach($groups_detail as $detail => $groupData) 
                          @foreach($groupData as $transactions)
                           @foreach($transactions['group_detail'] as $transaction)
                              @if($transaction['transactions']['direction'] === 'Inbound')
                                  @php
                                      $inbound_qty += $transaction['qty'];
                                      $inbound_weight += $transaction['weight'];
                                  @endphp
                              @elseif($transaction['transactions']['direction'] === 'Outbound')
                                  @php
                                      $outbound_qty += $transaction['qty'];
                                      $outbound_weight += $transaction['weight'];
                                  @endphp
                              @endif
                           @endforeach
                          @endforeach
                            <tr class="accordion-toggle nested_main_tr" data-group_id="{{ $detail }}" data-row_count="<?php echo $count ?>" data-toggle="collapse" data-target="#demo<?php echo $count ?>" aria-expanded="false">
                                <td><img src="{{ asset('public/assets/img/logo/gryicon-svg.svg') }}" class="don-icon"><img src="{{ asset('public/assets/img/logo/green-svg.svg') }}"
                                class="up-icon"></td>
                                <td class="green-text">{{ $detail }}</td>
                                <td>{{ $groupData[0]['group_refrence_no'] }}</td>
                                <td>{{ Carbon\Carbon::parse($groupData[0]['created_at'])->format('m/d/Y'); }}</td>
                                <td><em>{{ $outbound_qty }}</em>/{{ $inbound_qty }}</td>
                                <td><em>{{ $outbound_weight }}</em>/{{ $inbound_weight }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="dot open-child-row r-r-group-table" data-row_id="1">  
                                <ul class="my-nav">
                                    <li>
                                      <div class="dropdown">
                                          <div class="form-group">
                                            <input type="checkbox"  data-group="{{ $detail }}"  data-group_reference = "{{ $groupData[0]['group_refrence_no'] }}" id="html{{ $detail }}" class="check-box">
                                            <label for="html{{ $detail }}"></label>
                                          </div>
                                      </div>
                                    </li>
                                </ul>
                                </td>
                            </tr>
                          <?php $count++; ?>
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
                             
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="sav-cancel-btn" style="padding-bottom:20px;">
                      <button class="ad-btn add-transaction-to-group">Add</button>
                   </div>
                   <div class="success_msg"></div>
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
          url: base_url+'/existing-nested-records', 
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
          }
      });
    });
  });
</script>
 

  <script>
    $(document).ready(function(){
        // Listen for change event on checkboxes with class "check-box"
        $('.check-box').change(function() {
            if($(this).is(':checked')) {
                // If the checkbox is checked, uncheck all other checkboxes
                $('.check-box').not(this).prop('checked', false);
            }
        });
    });
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

<!--create group with ajax -->
<script>
   $(document).ready(function () {
    // Listen for button click
    $('.add-transaction-to-group').click(function (e) {
        e.preventDefault();
        $(".add-transaction-to-group").attr("disabled", true);

        var group_id, group_reference;
        var checkboxChecked = $('.check-box:checked');
        
        // Check if any checkbox is checked
        if (checkboxChecked.length === 0) {
            // Show error message if no checkbox is checked
            $('.success_msg').html('Please select a transaction to add to a group.');
            $(".add-transaction-to-group").attr("disabled", false);
            return;
        }

        checkboxChecked.each(function () {
            // Get the data attributes of the checked checkbox
            group_id = $(this).data('group');
            group_reference = $(this).data('group_reference');
            return false; // Exit loop after first checked checkbox
        });

        // Now you can use dataAttributes in your AJAX request or any other logic
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url+'/submit-to-existing-group',
            data: {group_id: group_id, group_reference: group_reference},
            success: function(response) {
                // Handle the response from the controller
                $('.success_msg').html(response);
                setTimeout(function () {
                    location.reload();
                }, 2000);
            },
        });
    });
});
</script>
@endsection