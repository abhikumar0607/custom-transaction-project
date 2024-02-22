<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionHistory;
use App\Models\Group;
use App\Models\Asset;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ReconcilationController extends Controller
{
     //Function for Show recoloition page
     public function index(){
        $view =  view('customer.reconcilation');
        return $view;
    }

     //Function for Show custom recoloition page
     public function custom_reconcilation(){
         // Eager load transactions with history
         $transaction = Transaction::where('status', 'publish')->with(['transaction_history' => function ($query) {
            $query->where('is_group', '=', 'no')
            ->where('is_assest', '=', 'no')
            ->where('status', '=', 'publish');
        }])->orderBy('created_at', 'DESC')
        ->whereHas('transaction_history', function ($query) {
            $query->where('is_group', '=', 'no')
            ->where('is_assest', '=', 'no')
            ->where('status', '=', 'publish');
        })
        ->get();

        //get group
        $groups_detail = Group::orderBy('id','DESC')->with('group_detail.transactions')->get()->groupBy('group_id');
         //get assests
        $assests_data = Asset::orderBy('id','ASC')->with('assests_detail.transactions')->paginate(5);
        //echo "<pre>";print_r($assests_data);exit; 
        //assest data count 
        $assests_data_count = Asset::orderBy('id','DESC')->with('assests_detail.transactions')->get();

        $view =  view('customer.custom-reconcilation',compact('transaction','groups_detail','assests_data','assests_data_count'));
        return $view;
    }

     //Function for Show custom reconciled page
     public function reconciled(Request $request, $group_ref_no = null){
         // Eager load transactions with history
         $transaction = Transaction::where('status', 'publish')->with(['transaction_history' => function ($query) {
            $query->where('is_group', '=', 'no')
            ->where('is_assest', '=', 'no')
            ->where('status', '=', 'publish');
        }])
        ->whereHas('transaction_history', function ($query) {
            $query->where('is_group', '=', 'no')
            ->where('is_assest', '=', 'no')
            ->where('status', '=', 'publish');
        })
        ->get();
        //get group
        $groups_detail = Group::orderBy('id','DESC')->with('group_detail.transactions')->get()->groupBy('group_id')->toArray();
       // echo "<pre>";print_r($groups_detail);exit; 
        //assest data count 
        $assests_data_count = Asset::orderBy('id','DESC')->with('assests_detail.transactions')->get();

        $view =  view('customer.reconciled',compact('transaction','groups_detail','assests_data_count','group_ref_no'));
        return $view;
    }
    //Function for Show custom reconciled New page
    public function reconciled_new(){
        // Eager load transactions with history
        $transaction = Transaction::where('status', 'publish')->with(['transaction_history' => function ($query) {
           $query->where('is_group', '=', 'no')
           ->where('is_assest', '=', 'no')
           ->where('status', '=', 'publish');
       }])
       ->whereHas('transaction_history', function ($query) {
           $query->where('is_group', '=', 'no')
           ->where('is_assest', '=', 'no')
           ->where('status', '=', 'publish');
       })
       ->get();
       //get group
       $groups_detail = Group::orderBy('id','DESC')->with('group_detail.transactions')->get()->groupBy('group_id')->toArray();
       //get assests
       $assests_data = Asset::orderBy('id','ASC')->with('assests_detail.transactions')->paginate(5);
      // echo "<pre>";print_r($groups_detail);exit; 
       //assest data count 
       $assests_data_count = Asset::orderBy('id','DESC')->with('assests_detail.transactions')->get();

       $view =  view('customer.reconciled-new',compact('transaction','groups_detail','assests_data','assests_data_count'));
       return $view;
   }

    //Function for Show custom reconciled nested records
    public function reconciled_nested_records(Request $request){
        //Get Request
        $group_id = $request->group_id;
        $row_count = $request->row_count;
        
        //Get Group details according to group id
        $groupData = Group::orderBy('id','ASC')->Where('group_id', $group_id)->with('group_detail.transactions')->get()->toArray();
        ?>
        <tr class="nested-table" data-exclude="true">
            <td colspan="13<?php echo $row_count; ?>" style="padding:0 !important;" class="hiddenRow r-r-inner-table">
                <div id="demo<?php echo $row_count; ?>" class="accordian-body collapse<?php echo $row_count ?> collapse ">
                <div class="card-body inner-scroll">
                    <table class="scroll no-datatables">
                    <thead>
                        <tr class="sticky">
                        <th class="space-empty-one"></th>
                        <th>ID
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>REFERCENCE
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>BOE DATE
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>DECLARATION
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>TYPE
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>DESCRIPTION
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>COO
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>HSCODE
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg') ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>QTY
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>WEIGHT
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th>VALUE (AED)
                            <div class="btn-right">
                            <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                            <br>
                            <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                            </div>
                        </th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>                       
                        <?php foreach($groupData as $trans_detail) {
                            foreach($trans_detail['group_detail'] as $detail) { ?>
                            <tr>
                            <td>
                                <?php if($groupData[0]['is_sealed'] !== 'locked'){ ?>
                                    <div class="form-group">
                                    <input type="checkbox" id="new-<?php echo $detail['id'] ?>" data-id="<?php echo $detail['id']; ?>" class="tab-tog check-box">
                                    <label for="new-<?php echo $detail['id'] ?>"></label>
                                    </div>
                                <?php } ?>    
                            </td>
                            <td><?php echo $trans_detail['transaction_history_id']; ?></td>
                            <td><?php echo $trans_detail['refrence_number']; ?></td>
                            <td><?php echo $detail['transactions']['dec_date']; ?></td>
                            <td><?php echo $detail['transactions']['declaration_number']; ?></td>
                            <?php if($detail['transactions']['direction'] == 'Inbound'){ ?>
                                <td><span class="in-text">IN</span></td>
                           <?php } elseif($detail['transactions']['direction'] == 'Outbound') { ?>
                                <td><span class="out-text">OUT</span></td>
                           <?php  } ?>                    
                            <td><?php echo $detail['goods_descriptions']; ?></td>
                            <td><?php echo $detail['origin']; ?></td>
                            <td><?php echo $detail['hs_code']; ?></td>
                            <td><?php echo $detail['qty']; ?></td>
                            <td><?php echo number_format($detail['weight'], 2); ?></td>
                            <td><?php echo number_format($detail['cif_value_aed'], 2); ?></td>
                            <td class="dot open-child-row r-r-group-table" data-row_id="1">
                                <ul class="my-nav">
                                <li>
                                    <div class="dropdown">
                                    <div class="open-imeg"><img src="<?php echo asset('public/assets/img/logo/dot-image.png'); ?>"></div>
                                    <ul class="dropdown-content">
                                        <li><a href="#"><img src="<?php echo asset('public/assets/img/logo/ico-1.png'); ?>">View Declaration</a>
                                        </li>
                                    </ul>
                                    </div>
                                </li>
                                </ul>
                            </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </td>
        </tr>
        <?php
    }

     //Function for Show custom Assets page
     public function assets(){
         // Eager load transactions with history
         $transaction = Transaction::where('status', 'publish')->with(['transaction_history' => function ($query) {
            $query->where('is_group', '=', 'no')
            ->where('is_assest', '=', 'no')
            ->where('status', '=', 'publish');
        }])
        ->whereHas('transaction_history', function ($query) {
            $query->where('is_group', '=', 'no')
            ->where('is_assest', '=', 'no')
            ->where('status', '=', 'publish');
        })
        ->get();
        //get group
        $groups_detail = Group::orderBy('id','DESC')->with('group_detail.transactions')->get()->groupBy('group_id');
        //get assests
        $assests_data = Asset::orderBy('id','ASC')->with('assests_detail.transactions')->get();
        //echo "<pre>";print_r($assests_data);exit; 
        //assest data count 
        $assests_data_count = Asset::orderBy('id','DESC')->with('assests_detail.transactions')->get();

        $view =  view('customer.assets',compact('transaction','groups_detail','assests_data','assests_data_count'));
        return $view;
    }

    //submit groups
    public function submit_group_data(Request $request){
        $group_no = $request->groupData;
        $check_box_data = $request->checkboxData;
        $type = $request->type;
        //echo "<pre>";print_r($type);exit;
       // Create custom group id
      $latestGroup = Group::latest('id')->first();

      if ($latestGroup) {
          $lastIdNumeric = (int) substr($latestGroup->group_id, 1);
          $nextIdNumeric = $lastIdNumeric + 1;
      } else {
          // If no group is created, start with 1
          $nextIdNumeric = 1;
      }

      // Generate custom group ID with leading zeros
      $customGroupId = 'G' . str_pad($nextIdNumeric, 5, '0', STR_PAD_LEFT);


      //check outbound or inbound or which is first inbound or outbound
      if($type[0] == 'Inbound'){
        if (in_array('Outbound', $type) && in_array('Inbound', $type)) {
            //insert group data
            foreach($check_box_data as $data){
                $insert_group = Group::create([
                                    'group_id' => $customGroupId,
                                    'group_refrence_no' => $group_no, 
                                    'transaction_id' => $data['transaction'],
                                    'refrence_number' => $data['refrence'], 
                                    'is_sealed' => $data['is_sealed'],
                                    'transaction_history_id' => $data['id'], 
                ]);

                if($insert_group){
                    $insert = TransactionHistory::where('id', $data['id'])->update([
                                                'is_group' => 'yes',
                                                'group_ref_no' => $customGroupId,
                    ]);
                }
        }

        //check data is inserted or not
            if($insert_group){
                echo '<div class="ungroup-popup-box">
                        <img src="'.asset('public/assets/img/logo/Group -116.png').'">
                        <p style="margin-top:5px;">Reconciliation Group Created</p>
                        <h2 style="color:#2A9D8F;font-size:15px;font-weight:700;margin-top: 5px;">'.$customGroupId .'</h2>
                        <div class="butto-ungroup">
                            <button class="un-yes">OK</button>
                        </div>
                    </div>'; 

                    echo '<script>setTimeout(function() {
                           var redirectUrl = base_url + "/reconciled";
                               window.location.href = redirectUrl;
                              $(".success_msg").empty(); 
                         }, 3000);</script>';
                } else {
                    echo  'Oops something wrong!';
            }
        } else {
            echo '<div class="ungroup-popup-box">
                    <img src="'.asset('public/assets/img/logo/Group-1060.png').'">
                    <h2 style="margin-top:20px;font-size:15px;">At least one inbound and one outbound should be selected.</h2>
                    <div class="butto-ungroup">
                        <button class="un-yes">OK</button>
                    </div>
                </div>'; 

                echo '<script>setTimeout(function () {
                    location.reload();
                }, 3000);</script>';
        }
    } else {
        echo '<div class="ungroup-popup-box">
                <img src="'.asset('public/assets/img/logo/Group-1060.png').'">
                <h2 style="margin-top:20px;font-size:15px;">The inbound BOE date should be prior to the outbound BOE date.</h2>
                <div class="butto-ungroup">
                    <button class="un-yes">OK</button>
                </div>
            </div>'; 
            echo '<script>setTimeout(function () {
                location.reload();
            }, 3000);</script>';
    }

}

//delete groups
public function delete_group_data(Request $request){
    $ungroup_id = $request->ungroup_id;
    $delete_group = Group::whereIn('transaction_history_id', $ungroup_id)->delete();
        if($delete_group){
            $remove_group = TransactionHistory::whereIn('id', $ungroup_id)->update(['is_group' => 'no',]);
            //check group is deleted or not
            if($remove_group){
                echo '<p style="color:green;">Group Data Deleted Successfully. </p>'; 
            } else {
                echo  'Oops something wrong!';
            }
        } else {
            echo  'Oops something wrong!';
            }
      
}

 //function for open pop for delete group
public function open_pop_up_delete_group(Request $request){     
        $group_id = $request->grp_id;
        echo '<div class="ungroup-popup-box">
            <img src="'.asset('public/assets/img/logo/Group-1060.png').'">
            <h2 style="color:#2A9D8F;font-size:15px;font-weight:700;margin-top: 5px;">Are you sure you want to ungroup the selected?</h2>
            <p style="margin-top:10px;">Selected transactions will be moved back to  
            “Non Reconciled” tab.</p>
            <div class="butto-ungroup">
            <button class="un-cancel">Cancel</button>
            <div class="un-yes"> <a href="'.url('customer/remove-group',$group_id).'">Yes, ungroup</a></div>
            </div>
            <div class="success_msg"></div>
       </div>'; 

}

//delete whole group
 public function delete_group($id){
        $delete_group = Group::where('group_id', $id)->delete();
        //check group is deleted or not
        if($delete_group) {  
            $remove_group_from_transaction = TransactionHistory::where('group_ref_no', $id)->update([
                                                               'group_ref_no' => null,
                                                               'is_group' => 'no',
           ]); 
            return back()->with('success', 'Group Deleted successfully.');
        } else {
            return back()->with('unsuccess', 'Oops Something wrong. Please try Again.');
        }
}

//function for store data in session
    public function store_data_in_session(Request $request){
        $check_box_data = $request->dataAttributes;
        Session::put('check_box_data', $check_box_data);
}

//function for add transaction into already group
    public function view_add_to_existing(Request $request){
       // Retrieve session data
      $groups_detail = Group::orderBy('id','DESC')->where('is_sealed','unlock')->with('group_detail.transactions')->get()->groupBy('group_id');  
      $view =  view('customer.add-to-existing',compact('groups_detail'));
      return $view;
}
    //Function for Show custom add to existing nested records
    public function existing_nested_records(Request $request){
        //Get Request
        $group_id = $request->group_id;
        $row_count = $request->row_count;
        $groupData = Group::orderBy('id','ASC')->Where('group_id', $group_id)->with('group_detail.transactions')->get()->toArray();
        //echo"<pre>"; print_r($groupData); exit; ?>
        <tr class="nested-table" data-exclude="true">
            <td colspan="13<?php echo $row_count; ?>" style="padding:0 !important;" class="hiddenRow r-r-inner-table">
                <div id="demo<?php echo $row_count; ?>" class="accordian-body collapse<?php echo $row_count ?> collapse ">
            <div class="card-body inner-scroll">
            <table class="scroll">
                <thead>
                <tr class="sticky">
                    <th class="space-empty-one"></th>
                    <th>ID
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>REFERCENCE
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>BOE DATE
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>DECLARATION
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>TYPE
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>DESCRIPTION
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>COO
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>HSCODE
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>QTY
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>WEIGHT
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th>VALUE (AED)
                    <div class="btn-right">
                        <button class="btn-up"><img src="<?php echo asset('public/assets/img/logo/up-svgg.svg'); ?>"></button>
                        <br>
                        <button class="btn-down"><img src="<?php echo asset('public/assets/img/logo/down-svgg.svg'); ?>"></button>
                    </div>
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
             <?php 
             foreach($groupData as $trans_detail){
             foreach($trans_detail['group_detail'] as $detail){ ?>
                <tr>
                    <td></td>
                    <td><?php echo $trans_detail['transaction_history_id']; ?></td>
                    <td><?php echo $trans_detail['refrence_number']; ?></td>
                    <td><?php echo $detail['transactions']['dec_date']; ?></td>
                    <td><?php echo $detail['transactions']['declaration_number']; ?></td>
                    <?php if($detail['transactions']['direction'] == 'Inbound'){ ?>
                    <td><span class="in-text">IN</span></td>
                    <?php } elseif($detail['transactions']['direction'] == 'Outbound') { ?>
                    <td><span class="out-text">OUT</span></td>
                     <?php  } ?>  
                    <td><?php echo $detail['goods_descriptions']; ?></td>
                    <td><?php echo $detail['origin']; ?></td>
                    <td><?php echo $detail['hs_code']; ?></td>
                    <td><?php echo $detail['qty']; ?></td>
                    <td><?php echo number_format($detail['weight'], 2); ?></td>
                    <td><?php echo number_format($detail['cif_value_aed'], 2); ?></td>
                    <td></td>
                </tr>
                <?php }} ?>
                </tbody>
            </table>
            </div>
        </div>
        </td>
    </tr>   
  <?php } 
 //function for submit transaction history to already existed group
public function submit_to_existed_group(Request $request){
        $group_id = $request->group_id;
        $group_reference = $request->group_reference;
        $check_box_data = Session::get('check_box_data');

         //insert group data
         foreach($check_box_data as $data){
            $insert_group = Group::create([
                                'group_id' => $group_id,
                                'group_refrence_no' => $group_reference, 
                                'transaction_id' => $data['transaction'],
                                'refrence_number' => $data['refrence'], 
                                'is_sealed' => $data['is_sealed'],
                                'transaction_history_id' => $data['id'], 
            ]);

            if($insert_group){
                $insert = TransactionHistory::where('id', $data['id'])->update([
                                             'is_group' => 'yes',
                                             'group_ref_no' => $group_id,
                ]);
            }
       }


       if($insert_group){
         echo '<p style="color:green;">Transaction  Added To Group Successfully.</p>'; 
         // Destroy the 'check_box_data' session variable
          Session::forget('check_box_data');
       } else {
        echo  'Oops something wrong!';
       }
}

// function for check group is sealed or not
 public function is_sealed(Request $request){
      $group_id = $request->group_id;
      $is_Sealed = $request->is_Sealed;
      $is_group = Group::where('group_id', $group_id)->update([
                         'is_sealed' => $is_Sealed,
                        ]);
        //check group is deleted or not
        if($is_group) {  
           echo "yes";
        } else {
          echo "no";
        }
}

//function for search non reconciled transaction
public function search_non_reconciled_transaction(Request $request){
        //get parameter
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');
        //echo $start_date;exit;
        // Convert the date strings to the expected format (Y-m-d)
         //check if date is not empty
        if(!empty($start_date)){
            $start_date_formatted = Carbon::createFromFormat('F j, Y', $start_date)->startOfDay();
        }

        if(!empty($end_date)){
            $end_date_formatted = Carbon::createFromFormat('F j, Y', $end_date)->endOfDay();
        }

        $direction = $request->get('tab'); 
        $dec_types = $request->get('dec_type'); 

        if(!empty($start_date) && !empty($end_date) && $direction == 'all'){
            $transaction = Transaction::where('status', 'publish')->whereBetween('created_at',[$start_date_formatted . ' 00:00:00', $end_date_formatted . ' 23:59:59'])->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            })
            ->get();    
        }  elseif($direction == 'all' && $dec_types !== null){
            $transaction = Transaction::where('status', 'publish')->whereIn('dec_type',$dec_types)->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            })
            ->get();  
        } elseif($direction == 'inbound' && $dec_types !== null){
            $transaction = Transaction::where('status', 'publish')->where('direction','inbound')->whereIn('dec_type',$dec_types)->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            })
            ->get(); 
        } elseif($direction == 'inbound'){
            $transaction = Transaction::where('status', 'publish')->where('direction','inbound')->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            })
            ->get(); 
        } elseif($direction == 'outbound' && $dec_types !== null){
            $transaction = Transaction::where('status', 'publish')->where('direction','outbound')->whereIn('dec_type',$dec_types)->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            })
            ->get();

        } elseif($direction == 'outbound'){
            $transaction = Transaction::where('status', 'publish')->where('direction','outbound')->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            })
            ->get(); 
        } else{
            $transaction = Transaction::where('status', 'publish')->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
            })
            ->get(); 
        }

        //get group
        $groups_detail = Group::orderBy('id','DESC')->with('group_detail.transactions')->get()->groupBy('group_id');
        //assest data count 
        $assests_data_count = Asset::orderBy('id','DESC')->with('assests_detail.transactions')->get();

        $view =  view('customer.custom-reconcilation',compact('transaction','groups_detail','assests_data_count'));
        return $view;
    }
}
