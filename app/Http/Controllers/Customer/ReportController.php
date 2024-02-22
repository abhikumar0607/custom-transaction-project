<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionHistory;
use Carbon\Carbon;
class ReportController extends Controller
{
    //function for view report page
    public function index(){

        $transaction_history = Transaction::where('status', 'publish')->with(['transaction_history' => function($query) {
            $query->where('status', 'publish');
        }])->get();

        //echo "<pre>";print_r($transaction_history);exit;
        $view =  view('customer.reports',compact('transaction_history'));
        return $view;
    }

    //function for generate report
    public function generate_report(Request $request){
       $type = $request->type;
       $start_date = $request->get('start_date');
       $end_date = $request->get('end_date');
       // Convert the date strings to the expected format (Y-m-d)
       if(!empty($start_date)){
           $start_date_formatted = Carbon::createFromFormat('F j, Y', $start_date)->startOfDay();
       }

       if(!empty($end_date)){
           $end_date_formatted = Carbon::createFromFormat('F j, Y', $end_date)->endOfDay();
       }

       //check if it custom trnsaction
       if($type === "custom_tranaction"){

           if(!empty($start_date) && !empty($end_date)){
                $transaction_history = Transaction::where('status', 'publish')->whereBetween('created_at',[$start_date_formatted . ' 00:00:00', $end_date_formatted . ' 23:59:59'])->with(['transaction_history' => function($query) {
                    $query->where('status', 'publish');
                }])->get();
           } else {
                $transaction_history = Transaction::where('status', 'publish')->with(['transaction_history' => function($query) {
                    $query->where('status', 'publish');
                }])->get(); 
           }?>
            <table id="example">
            <thead>
                <tr>
                    <th><span class="th-heding">ID</span> 
                    <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?> "></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">REFERENCE</span><div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png');?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">BOE DATE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DECLARATION</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DIRECTION</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DEC TYPE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Consignee/Exporter</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Importer Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Exporter</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Exporter Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Clearing Agent</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Clearing Agent Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Description</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">COO</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">HSCODE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">PKG Type</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">QTY</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">WEIGHT</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">VALUE (AED)</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DUTY (AED)</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">GROUP REF.</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($transaction_history as $data){
            foreach($data->transaction_history as $history){ ?>
                <tr>
                    <td><?php echo $history->id ?></td>
                    <td><?php echo  $data->refrence_number ?></td>
                    <td><?php echo  \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') ?></td>
                    <td><?php echo  $data->declaration_number ?></td>
                    <?php if($data->direction == 'Inbound'){ ?>
                        <td><span class="in-text">IN</span></td>
                    <?php } elseif($data->direction == 'Outbound') { ?>
                        <td><span class="out-text">OUT</span></td>
                    <?php  } ?>   
                    <td><?php echo  $data->dec_type ?></td>
                    <td><?php echo  $data->consignee_exporter ?></td>
                    <td><?php echo  $data->consignee_import_code ?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo  $data->clearing_agent ?></td>
                    <td><?php echo  $data->clearing_agent_code ?></td>
                    <td><?php echo  $history['goods_descriptions'] ?></td>
                    <td><?php echo  $history['origin'] ?></td>
                    <td><?php echo  $history['hs_code'] ?></td>
                    <td><?php echo  $history['pkg_type'] ?></td>
                    <td><?php echo  $history['qty'] ?></td>
                    <td><?php echo number_format($history['weight'], 2) ?></td>
                    <td><?php echo number_format($history['cif_value_aed'], 2) ?></td>
                    <td><?php echo number_format($history['total_duty'], 2) ?></td>
                    <td><?php echo $history['group_ref_no'] ?></td>
                </tr>
            <?php  }
                } ?>
            </tbody>
            </table>
      <?php  } elseif($type === "custom_declaration"){

            // check if date is not empty
            if(!empty($start_date) && !empty($end_date)){
                $transaction_history = Transaction::where('status', 'publish')->whereBetween('created_at',[$start_date_formatted . ' 00:00:00', $end_date_formatted . ' 23:59:59'])->with(['transaction_history' => function($query) {
                    $query->where('status', 'publish');
                }])->get();
            } else {
                $transaction_history = Transaction::where('status', 'publish')->with(['transaction_history' => function($query) {
                    $query->where('status', 'publish');
                }])->get(); 
            } ?>
        <table id="example">
           <thead>
                <tr>
                    <th><span class="th-heding">ID</span> 
                    <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?> "></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">REFERENCE</span><div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png');?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">BOE DATE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DECLARATION</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DIRECTION</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DEC TYPE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Consignee/Exporter</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Importer Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Exporter</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Exporter Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Clearing Agent</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Clearing Agent Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">QTY</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">WEIGHT</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">VALUE (AED)</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DUTY (AED)</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($transaction_history as $data){
            foreach($data->transaction_history as $history){ ?>
                <tr>
                    <td><?php echo $history->id ?></td>
                    <td><?php echo  $data->refrence_number ?></td>
                    <td><?php echo  \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') ?></td>
                    <td><?php echo  $data->declaration_number ?></td>
                    <?php if($data->direction == 'Inbound'){ ?>
                        <td><span class="in-text">IN</span></td>
                    <?php } elseif($data->direction == 'Outbound') { ?>
                        <td><span class="out-text">OUT</span></td>
                    <?php  } ?>   
                    <td><?php echo  $data->dec_type ?></td>
                    <td><?php echo  $data->consignee_exporter ?></td>
                    <td><?php echo  $data->consignee_import_code ?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo  $data->clearing_agent ?></td>
                    <td><?php echo  $data->clearing_agent_code ?></td>
                    <td><?php echo  $history['qty'] ?></td>
                    <td><?php echo number_format($history['weight'], 2) ?></td>
                    <td><?php echo number_format($history['cif_value_aed'], 2) ?></td>
                    <td><?php echo number_format($history['total_duty'], 2) ?></td>
                </tr>
            <?php  }
                } ?>
            </tbody>
            </table>
     <?php } elseif($type === "stock"){
            // check if date is not empty
            if(!empty($start_date) && !empty($end_date)){
                $transaction_history = Transaction::where('status', 'publish')->whereIn('dec_type','IMPORT')->whereBetween('created_at',[$start_date_formatted . ' 00:00:00', $end_date_formatted . ' 23:59:59'])->with(['transaction_history' => function ($query) {
                    $query->where('is_group', '=', 'no')
                    ->where('status', '=', 'publish');
                }])
                ->whereHas('transaction_history', function ($query) {
                    $query->where('is_group', '=', 'no')
                    ->where('status', '=', 'publish');
                })
                ->get();
            } else {
                $transaction_history = Transaction::where('status', 'publish')->where('dec_type','IMPORT')->with(['transaction_history' => function ($query) {
                    $query->where('is_group', '=', 'no')
                    ->where('status', '=', 'publish');
                }])
                ->whereHas('transaction_history', function ($query) {
                    $query->where('is_group', '=', 'no')
                    ->where('status', '=', 'publish');
                })
                ->get();
            } ?>
            <table id="example">
            <thead>
                <tr>
                <th><span class="th-heding">ID</span> 
                    <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?> "></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">REFERENCE</span><div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png');?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">BOE DATE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DECLARATION</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DIRECTION</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DEC TYPE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Consignee/Exporter</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Importer Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Exporter</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Exporter Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Clearing Agent</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Clearing Agent Code</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">Description</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">COO</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">HSCODE</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">PKG Type</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">QTY</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">WEIGHT</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">VALUE (AED)</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">DUTY (AED)</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                    <th><span class="th-heding">GROUP REF.</span> <div class="btn-right"><button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-ic.png'); ?>"></button><br><button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-ic.png'); ?>"></button></div></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($transaction_history as $data){
            foreach($data->transaction_history as $history){ ?>
                <tr>
                <td><?php echo $history->id ?></td>
                    <td><?php echo  $data->refrence_number ?></td>
                    <td><?php echo  \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') ?></td>
                    <td><?php echo  $data->declaration_number ?></td>
                    <?php if($data->direction == 'Inbound'){ ?>
                        <td><span class="in-text">IN</span></td>
                    <?php } elseif($data->direction == 'Outbound') { ?>
                        <td><span class="out-text">OUT</span></td>
                    <?php  } ?>   
                    <td><?php echo  $data->dec_type ?></td>
                    <td><?php echo  $data->consignee_exporter ?></td>
                    <td><?php echo  $data->consignee_import_code ?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo  $data->clearing_agent ?></td>
                    <td><?php echo  $data->clearing_agent_code ?></td>
                    <td><?php echo  $history['goods_descriptions'] ?></td>
                    <td><?php echo  $history['origin'] ?></td>
                    <td><?php echo  $history['hs_code'] ?></td>
                    <td><?php echo  $history['pkg_type'] ?></td>
                    <td><?php echo  $history['qty'] ?></td>
                    <td><?php echo number_format($history['weight'], 2) ?></td>
                    <td><?php echo number_format($history['cif_value_aed'], 2) ?></td>
                    <td><?php echo number_format($history['total_duty'], 2) ?></td>
                    <td><?php echo $history['group_ref_no'] ?></td>
                </tr>
            <?php  }
                } ?>
            </tbody>
            </table>
        <?php }
    }
}
