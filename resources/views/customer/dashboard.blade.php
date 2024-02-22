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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
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
                <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-one-dashboard">
                            <div class="heder-content-left">
                                <h2>Good Morning, Ryan Taylor!</h2>
                                <p>Your current dashboard today</p>
                            </div>
                            <div class="heder-icon-left">
                                <img src="{{ asset('public/assets/img/logo/star.png') }}">
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-one-dashboard-right">
                            <div class="box-date">
                                <img src="{{ asset('public/assets/img/logo/calendar.png') }}" class="clander">
                                <input name='range' placeholder="fdhjk" id='cal' />
                                <ul id='ranges'>
                                </ul>
                                <img src="{{ asset('public/assets/img/logo/calendar-drop.png') }}" class="clander-drop"> 
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- welcome Project, sale area start-->
                <div class="box-two-dashboard">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="right-two-dashboard">
                            <h3>Available Stock</h3>
                            <p>Available stock for the selected period</p>
                            <div class="box-al-dash">
                                <div class="box-tow-right" style="background-color:#C8D4D2;"> <span class="nbr">{{ number_format($qty, 2) }}</span> <span class="nbr-content">Quantity</span> </div>
                                <div class="box-tow-right" style="background-color:#D9CDC4;"> <span class="nbr">{{ number_format($weight, 2) }}</span> <span class="nbr-content">Weight (KG)</span> </div>
                                <div class="box-tow-right" style="background-color:#C4D1D5;"> <span class="nbr">{{ number_format($cif_value_aed, 2) }}</span> <span class="nbr-content">Value (AED)</span> </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="left-two-dashboard">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="inner-two-dashboard">
                                        <div class="box-tow-divid"> <span class="icon-span"><img src="{{ asset('public/assets/img/logo/ico-11.png') }}"></span> <span class="content-span">Customs Declarations</span> </div>
                                        <div class="box-tow-divid">
                                        <h2 class="h1-content">2,305</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inner-two-dashboard">
                                        <div class="box-tow-divid"> <span class="icon-span"><img src="{{ asset('public/assets/img/logo/ico-22.png') }}"></span> <span class="content-span">Inbound Volumes (KG)</span> </div>
                                        <div class="box-tow-divid">
                                        <h2 class="h1-content">8,675.0</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inner-two-dashboard">
                                        <div class="box-tow-divid"> <span class="icon-span"><img src="{{ asset('public/assets/img/logo/ico-33.png') }}"></span> <span class="content-span">Inbound Value (AED)</span> </div>
                                        <div class="box-tow-divid">
                                        <h2 class="h1-content">5,302.00</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="inner-two-dashboard">
                                        <div class="box-tow-divid"> <span class="icon-span"><img src="{{ asset('public/assets/img/logo/ico-44.png') }}"></span> <span class="content-span">Customs Duty (AED)</span> </div>
                                        <div class="box-tow-divid">
                                        <h2 class="h1-content">1,500.00</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inner-two-dashboard">
                                        <div class="box-tow-divid"> <span class="icon-span"><img src="{{ asset('public/assets/img/logo/ico-55.png') }}"></span> <span class="content-span">Draft</span> </div>
                                        <div class="box-tow-divid">
                                        <h2 class="h1-content">129</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inner-two-dashboard">
                                        <div class="box-tow-divid"> <span class="icon-span"><img src="{{ asset('public/assets/img/logo/ico-66.png') }}"></span> <span class="content-span">Unassigned Declarations</span> </div>
                                        <div class="box-tow-divid">
                                        <h2 class="h1-content">268</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="pai-chart-graph-dashboard">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="chart-graph-box">
                            <h3>Count of Inbound & Outbound Declarations</h3>
                            <div id="piechart" style="width: 545px; height: 320px;"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-graph-box">
                            <h3>Count of Declarations by Type</h3>
                            <div id="app">
                                <div id="chart">
                                    <svg></svg>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-graph-box">
                            <h3>Reconciled vs. Non Reconciled Transactions</h3>
                            <div id="piechart-tow" style="width: 545px; height: 320px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="box-three-dashboard">
                <div class="container-fluid">
                    <div class="table-row">
                        <span class="table-heading">Last 5 Declarations </span>
                        <div class="table-sacroll dash-sacroll">
                            <div class="table-inner">
                            <table>
                            <thead>
                          <tr>
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
                          </tr>
                        </thead>
                            <tbody>
                        @foreach($last_transactions as $data)
                           @foreach($data->transaction_history as $history)                      
                          <tr>  
                          <?php
                            $history_id = str_pad($history->id, 5, '0', STR_PAD_LEFT);
                            ?>                          
                            <td>{{ $history_id }}</td>
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
                          </tr>
                          @endforeach                       
                          @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

  <!---script start here-->
  <!-- -->
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
  <script src="{{ asset('public/assets/js/charts/rounded-chart.js') }}"></script> 
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
var dates = [];
$(document).ready(function() {
  $("#cal").daterangepicker();
  $("#cal").on('apply.daterangepicker', function(e, picker) {
    e.preventDefault();
    const obj = {
      "key": dates.length + 1,
      "start": picker.startDate.format('MM/DD/YYYY'),
      "end": picker.endDate.format('MM/DD/YYYY')
    }
    dates.push(obj);
    showDates();
  })
  $(".remove").on('click', function() {
    removeDate($(this).attr('key'));
  })
})
function showDates() {
  $("#ranges").html("");
  $.each(dates, function() {
    const el = "<li>" + this.start + "-" + this.end + "<button class='remove' onClick='removeDate(" + this.key + ")'>-</button></li>";
    $("#ranges").append(el);
  })
}
function removeDate(i) {
  dates = dates.filter(function(o) {
    return o.key !== i;
  })
  showDates();
}
</script>

<script type="text/javascript" src="{{ asset('public/assets/js/chart-ne.js') }}"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Total Inbound',   <?php echo $transaction_inbound; ?>],
          ['Total Outbound',  <?php echo $transaction_Outbound; ?>]
        ]);

        var options = {
          slices: {
            0: { color: '#2A9D8F' },
            1: { color: '#FF8E53' }
          }
        };


        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Reconciled',     <?php echo $reconciled_count; ?>],
          ['Non Reconciled Transactions',  <?php echo $non_reconciled_count; ?>]
        ]);

        var options = {
          slices: {
            0: { color: '#2A9D8F' },
            1: { color: '#FF8E53' }
          }
        };


        var chart = new google.visualization.PieChart(document.getElementById('piechart-tow'));

        chart.draw(data, options);
      }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-scale/1.0.7/d3-scale.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-axis/1.0.10/d3-axis.min.js"></script>
<script>
const myData = [
  { id: 1, region: 'Import', value: <?php echo $import_count; ?> },
  { id: 2, region: 'Export', value: <?php echo $export_count; ?> },
  { id: 3, region: 'Transfer', value: <?php echo $transfer_count; ?> },
  { id: 4, region: 'Transit', value: 8 },
  { id: 5, region: 'Temp. Admission', value: 20 }
];

const margins = { horizontal: 20, vertical: 20 };
const chartWidth = 536 - (margins.horizontal * 1);
const chartHeight = 275 - (margins.vertical * 1);

const chartContainer = d3
    .select('svg')
    .attr('width', chartWidth + (margins.horizontal * 2))
    .attr('height', chartHeight + (margins.vertical * 2));

const chart = chartContainer.append('g');

function renderChart(chartData) {
  const x = d3
    .scaleBand()
    .rangeRound([margins.horizontal * 2, chartWidth])
    .padding(0.1)
    .domain(chartData.map(d => d.region));
  const y = d3
    .scaleLinear()
    .range([chartHeight, 0])
    .domain([0, d3.max(chartData, d => d.value) + 3]);
    
  chart.selectAll('g').remove();
  
  chart
    .append('g')
    .call(d3.axisBottom(x).tickSizeOuter(0))
    .attr('transform', `translate(0, ${chartHeight + margins.vertical})`)
    .attr('color', '#464646');
  chart
    .append('g')
    .call(d3.axisLeft(y).tickSizeOuter(0))
    .attr('transform', `translate(${margins.horizontal}, 0)`)
    .attr('color', '#464646');
  chart.selectAll('.bar').remove();

  chart
    .selectAll('.bar')
    .data(chartData, d => d.id)
    .enter()
    .append('rect')
    .classed('bar', true)
    .attr('width', x.bandwidth())
    .attr('height', d => chartHeight - y(d.value))
    .attr('x', d => x(d.region))
    .attr('y', d => y(d.value));
 

  chart.selectAll('.label').remove();
  
  chart
    .selectAll('.label')
    .data(chartData, d => d.id)
    .enter()
    .append('text')
    .text(d => d.value)
    .attr('x', d => x(d.region) + x.bandwidth() / 2)
    .attr('y', d => y(d.value) - 20)
    .attr('text-anchor', 'middle')
    .classed('label', true);
}

let unselectedIds = [];

const listItems = d3
  .select('#data')
  .select('ul')
  .selectAll('li')
  .data(myData)
  .enter()
  .append('li');

listItems
  .append('span')
  .text(d => d.region);

listItems
  .append('input')
  .attr('type', 'checkbox')
  .attr('checked', true)
  .on('change', (data) => {
    if (unselectedIds.indexOf(data.id) === -1) {
      unselectedIds.push(data.id);
    } else {
      unselectedIds = unselectedIds.filter(id => id !== data.id);
    }
  
    const newData = myData.filter(d => !unselectedIds.includes(d.id));
  
    renderChart(newData);
  });

renderChart(myData);
</script>

@endsection
