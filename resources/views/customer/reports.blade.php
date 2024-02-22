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
<h2>Reports</h2>
<p>Generate detailed reports of customs declarations and inventory stock</p>
</div>
</div>
</div>                   
</div>
</div>
<!-- welcome Project, sale area start-->


<div class="report-type-saction">
<div class="container-fluid">
<div class="report-type-inner">
<form>
<div class="box-div-input report-sec-bx">
<div class="add-additional-bx">
<label>Report Type</label>
  <div class="select">
    <select class="report_rtype" id="type">
      <option value="">Select Report</option>
      <option value="custom_declaration">Customs Declarations</option>
      <option value="custom_tranaction">Customs Transactions (Detailed Report)</option>
      <option value="stock">Available Stock</option>
    </select>
</div>
</div>
<div class="box-div-input">
<label>Report Period</label>
<div class="date-left">
  <div class="ui calendar" id="rangestart">
    <div class="ui input left icon">
      <input type="text" placeholder="From Date" value="" id="start_date" autocomplete="off">
    </div>
  </div>
  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg"></div>
<div class="date-right">
  <div class="ui calendar" id="rangeend">
    <div class="ui input left icon">
      <input type="text" placeholder="To Date" value="" id="end_date"  autocomplete="off">
    </div>
  </div>
  <img src="{{ asset('public/assets/img/logo/calendar-svg.svg') }}" class="cl-svg"></div>
</div>
<div class="box-div-button">
<button type="button" class="generate">Generate Report</button>
</div>
</form>
</div>
</div>
</div>


<div class="box-three-dashboard table-three-cls">
<div class="container-fluid">
<div class="table-row">
<div class="table-sacroll">
<div class="table-inner append-data">
<h2>No Record Found</h2>
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

 

 <!-- Include jQuery, DataTables CSS and JS -->


 <script src= "https://code.jquery.com/jquery-3.7.0.js"></script>
 <script src= "https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
 <script src= "https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
 <script src= "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
 <script src= "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src= "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src= "https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
 <script src= "https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>







<!-- <script>
$(document).ready(function() {
    // Initialize DataTable
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        // Add your other DataTables configuration options here
    });
});
</script> -->

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

<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
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



<script>
  //generate report by ajax 
    $('body').on('click', '.generate', function() {
      var type = $("#type").val();
      var start_date = $("#start_date").val();
      var end_date = $("#end_date").val();

       // Show AJAX loader
      var loader = $('<div class="ajax-loader"><img src="<?php echo asset('public/assets/img/loader.svg'); ?>"></div>').appendTo('body');
      
      //Ajax Call
      $.ajax({
          type: "GET",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }, 
          url: base_url+'/generate-reports', 
          data: {
            type: type,
            start_date: start_date,
            end_date: end_date,
          },
          success: function(response) {
              // Hide AJAX loader
              loader.remove();
              // Clear previous HTML content
              $('.append-data').empty();
              $('.append-data').html(response);

                // Destroy existing DataTable instance if it exists
              if ($.fn.DataTable.isDataTable('#example')) {
                  $('#example').DataTable().destroy();
              }

              // Initialize DataTables on the table
              $('#example').DataTable({
                  // ... other options
                  dom: 'Bfrtip',
                  buttons: [
                      'csv',
                      {
                          extend: 'pdf',
                          orientation: 'landscape',
                          pageSize: 'A4',
                          customize: function(doc) {
                              // Apply custom styles to the exported PDF
                              doc.styles.tableHeader.fontSize = 8;
                              doc.styles.tableBodyEven.fontSize = 6;
                              doc.styles.tableBodyOdd.fontSize = 6;
                          },
                          exportOptions: {
                              columns: ':visible',
                              modifier: {
                                  page: 'all'
                              }
                          }
                      },
                  ]
              });
          },
          error: function() {
              // Hide AJAX loader in case of error
              loader.remove();
          }
    }); 
    });
</script>  


</body>
@endsection