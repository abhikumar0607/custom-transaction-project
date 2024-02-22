<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Transaction;
use App\Models\TransactionHistory;
use App\Models\Group;
use App\Models\Asset;


class AssetsController extends Controller
{
    //function for Submit Assets 
    public function submit_assets_data(Request $request){
        $check_box_data = $request->checkboxData;
        $type = $request->type;
        //echo"<pre>"; print_r($type);exit;
        //check outbound or inbound
        if (array_reduce($type, function ($carry, $item) {
            return $carry && ($item === 'Inbound');
        }, true)) {
        foreach ($check_box_data as $data) {
           $insert_assest = Asset::create([
                'transaction_id' => $data['transaction'],
                'transaction_history_id' => $data['id'],
                'refrence_number' => $data['refrence'],
                // Add other columns as needed
            ]);

            if($insert_assest){
                $insert = TransactionHistory::where('id', $data['id'])->update([
                                             'is_assest' => 'yes',
                ]);
            }
        }

            echo '<div class="ungroup-popup-box">
                    <img src="'.asset('public/assets/img/logo/Group-1060.png').'">
                    <h2 style="margin-top:20px;font-size:15px;">Declarations assigned as assets Successfully.</h2>
                    <div class="butto-ungroup">
                    <button class="un-yes">OK</button>
                    </div>
                </div>'; 
                echo '<script>setTimeout(function() {
                    var redirectUrl = base_url + "/assets";
                        window.location.href = redirectUrl;
                       $(".success_msg").empty(); 
                  }, 3000);</script>';
      } else {
        echo '<div class="ungroup-popup-box">
                <img src="'.asset('public/assets/img/logo/Group-1060.png').'">
                <h2 style="margin-top:20px;font-size:15px;">Only inbound declarations can be assigned as assets.</h2>
                <div class="butto-ungroup">
                <button class="un-yes">OK</button>
                </div>
            </div>'; 
            echo '<script>setTimeout(function () {
                location.reload();
            }, 3000);</script>';
      }
    }

    //delete assest
    public function delete_assest_data(Request $request){
        $ungroup_id = $request->ungroup_id;
        $delete_group = Asset::whereIn('transaction_history_id', $ungroup_id)->delete();

        if($delete_group){
            $remove_group = TransactionHistory::whereIn('id', $ungroup_id)->update([
                                                'is_assest' => 'no',
            ]);
            //check group is deleted or not
            if($remove_group){
                echo '<p style="color:green;">Assest Data Deleted Successfully. </p>'; 
            } else {
                echo  'Oops something wrong!';
            }
        } else {
            echo  'Oops something wrong!';
        }
        
    }
}
