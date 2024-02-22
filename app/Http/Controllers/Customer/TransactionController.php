<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use File;

use App\Models\Transaction;
use App\Models\User;
use App\Models\TransactionHistory;
use App\Models\Attachment;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class TransactionController extends Controller
{

     //Function for Show custom transcation listing
     public function view_custom_transaction_listing(){
        $transaction = Transaction::orderBy('id','ASC')->with('transaction_history')->get();
        $draft_transaction = Transaction::where('status', 'draft')->orderBy('id','ASC')->with('transaction_history')->get()->count();
        $view =  view('customer.customs-transactions-listing',compact('transaction','draft_transaction'));
        return $view;
    }
    //function to get main uploaded pdf
    public function get_main_pdf(Request $request,$id){
        $declaration_attachment = Attachment::where('transaction_id',$id)->where('type', 'main_pdf')->first();
        if ($declaration_attachment) {
        // Assuming your file is stored in the 'public/uploads/attachments' directory
        $filePath = public_path('uploads/attachments/'. $declaration_attachment->file_path);
                
        // Now $fileLink contains the URL to your file
        return response()->download($filePath, $declaration_attachment->file_path);
    } else {
        // Handle case where attachment is not found
        return 'Attachment not found';
    }
        //echo $declaration_attachment;exit;  
    }  
    //Function to show custom search nested transcation listing
    public function transaction_nested_records(Request $request){
        //Get Request
        $group_id = $request->group_id;
        $row_count = $request->row_count;

       // $transaction = Transaction::orderBy('id','ASC')->with('transaction_history')->get()->toArray()->paginate(5);
        $transaction = Transaction::orderBy('id','ASC')->Where('id', $group_id)->with('transaction_history')->get(); ?>        
            <tr class="nested-table" data-exclude="true">
                <td colspan="13<?php echo $row_count; ?>" style="padding:0 !important;" class="hiddenRow">
                <div id="demo<?php echo $group_id?>" class="accordian-body collapse<?php echo $row_count ?> " >
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
                        <?php foreach($transaction as $data){ 
                        foreach($data['transaction_history'] as $history){ ?>
                        <tr>
                            <td></td>
                        <?php if(isset($history['group_ref_no'])){ ?>
                            <td class="first-color">
                                <a href="<?php echo url('customer/reconciled/' . $history['group_ref_no']); ?>">
                                    <?php echo $history['group_ref_no']; ?>
                                </a>
                            </td>
                        <?php } else{ ?>
                            <td class="first-color">-</td>
                            <?php } ?>
                            <td><?php echo $history['goods_descriptions']; ?></td>
                            <td><?php echo $history['origin']; ?></td>
                            <td><?php echo $history['hs_code']; ?></td>
                            <td><?php echo $history['pkg_type']; ?></td>
                            <td><?php echo $history['qty']; ?></td>
                            <td><?php echo number_format($history['weight'], 2); ?></td>
                            <td><?php echo number_format((int)$history['cif_value_aed'], 2); ?></td>
                            <td><?php echo number_format((int)$history['total_duty'], 2); ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php }  } ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } 

    //Function for Show custom draft transcation listing
    public function view_draft_listing(){
        $transaction = Transaction::where('status', 'draft')->orderBy('id','ASC')->with('transaction_history')->get();
        $view =  view('customer.custom-draft-transactions-listing',compact('transaction'));
        return $view;
    }

    //Function to show draft search nested transcation listing
    public function draft_nested_records(Request $request){
        //Get Request
        $group_id = $request->group_id;
        $row_count = $request->row_count; 
        $transaction = Transaction::where('status', 'draft')->orderBy('id','ASC')->Where('id', $group_id)->with('transaction_history')->get()->toArray();
         //echo "<pre>"; print_r($transaction); exit;
         ?>
        <tr class="nested-table">
            <td colspan="13<?php echo $row_count; ?>" style="padding:0 !important;" class="hiddenRow">
                <div class="accordian-body collapse<?php echo $row_count ?> collapse" id="demo<?php echo $group_id?>">
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
                            <?php 
                            foreach($transaction as $data){
                            foreach($data['transaction_history'] as $history){ ?>
                            <tr>
                                <td></td>
                                <td class="first-color">-</td>
                                <td><?php echo $history['goods_descriptions']; ?></td>
                                <td><?php echo $history['origin']; ?></td>
                                <td><?php echo $history['hs_code']; ?></td>
                                <td>-</td>
                                <td><?php echo $history['qty']; ?></td>
                                <td><?php echo number_format($history['weight'], 2); ?></td>
                                <td><?php echo number_format((int)$history['cif_value_aed'], 2); ?></td>
                                <td><?php echo number_format((int)$history['total_duty'], 2); ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </td>
        </tr>   
   <?php }

    //Function for Show dashboard page
    public function custom_declaration_edit(Request $request,$id){
        $custom_declaration_edit = Transaction::where('refrence_number',$id)->with('transaction_history')->get()->toArray();
        //echo "<pre>";print_r($custom_declaration_edit);exit;
        $view =  view('customer.custom-declaration-edit',compact('custom_declaration_edit'));
        return $view;
    }

    //Function for Show dashboard page
    public function custom_declaration_detail(Request $request,$id){
        $custom_declaration_edit = Transaction::where('refrence_number',$id)->with('transaction_history')->get()->toArray();
        $declaration_attachment = Attachment::where('refrence_number',$id)->get();
        //get user name
        $user_id = $custom_declaration_edit[0]['user_id'];
        $user_detail = User::where('id',$user_id)->first();
        $user_name = $user_detail->name;
        $view =  view('customer.custom-declaration-detail',compact('custom_declaration_edit','declaration_attachment','user_name'));
        return $view;
    }

    //Function for add custom-detail
    public function add_custom_detail(Request $request){
        $insert = TransactionHistory::create([
            'pkg_type' => $request->pkg_type,
            'qty' => $request->qty,
            'weight' => $request->weight,
        ]);
        return response()->json(['message' => 'Data saved successfully']);
    }

    //function for update detail
    public function update_declaration_detail(Request $request){
      //get all data  
      $referenceId = $request->referenceId;
      $qty = $request->qty;
      $packages_type = $request->packages;
      $weight = $request->weight;
      $status = $request->status;
      $update_status = Transaction::where('refrence_number',$referenceId)->update(['status' => $status]);
     
      //update quantity
      foreach($qty as $qty_detail){
        $id = $qty_detail['id'];
        $qty = $qty_detail['all_qty'];
        $update_quantity = TransactionHistory::where('id', $id)->update(['qty' => $qty, 'status' => $status]);
      }
     
      //update weight
      foreach($weight as $weight_detail){
            $id = $weight_detail['id'];
            $weight = $weight_detail['all_weight'];
            $update_weight = TransactionHistory::where('id', $id)->update(['weight' => $weight, 'status' => $status]);
      }
    
      //update package
      foreach($packages_type as $packages_detail){
        $id = $packages_detail['id'];
        $pkg_type = $packages_detail['pkg_type'];
        $update_pkg_type = TransactionHistory::where('id', $id)->update(['pkg_type' => $pkg_type, 'status' => $status]);
      }

      echo '<p style="color:green;">Data Updated Succesfully</p>'; 

    }

    //function for open pop up to delete declaration
    public function open_pop_up(Request $request){     
        $transaction_id = $request->id;
        //get transaction
        $transaction_detail = TransactionHistory::orderBy('id','ASC')->Where('transaction_id', $transaction_id)->get()->toArray();
        $is_group_no = false;

        foreach ($transaction_detail as $detail) {
            if ($detail['is_group'] === 'yes') {
                $is_group_no = true;
                break;
            }
        }
        
        if ($is_group_no) {
            echo '<div class="ungroup-popup-box">
                    <img src="'.asset('public/assets/img/logo/Group-1060.png').'">
                    <p style="margin-top:10px;">Selected transaction(s) can’t be deleted as they are reconciled with other declarations.</p>
                    <h2 style="color:#2A9D8F;font-size:15px;font-weight:700;margin-top: 5px;"></h2>
                    <div class="butto-ungroup">
                        <div class="un-yes">OK</div>
                    </div>
                    <div class="success_msg"></div>
                </div>';
                echo '<script>setTimeout(function () {
                    location.reload();
                    }, 5000)</script>';
        } else {
            echo '<div class="ungroup-popup-box">
                <img src="'.asset('public/assets/img/logo/Group-1060.png').'">
                <p style="margin-top:10px;">Delete Transaction Permanantely.</p>
                <h2 style="color:#2A9D8F;font-size:15px;font-weight:700;margin-top: 5px;"></h2>
                <div class="butto-ungroup">
                    <button class="un-yes delete-approved" data-transction_id="'.$transaction_id.'">OK</button>
                </div>
                <div class="success_msg"></div>
                </div>';
        }
    }
    //fuction for delete declaration 
    public function  delete_declaration(Request $request){
        $id = $request->id;
        // Find the transaction record
        $transaction = Transaction::find($id);
        // Check if the transaction exists
        if ($transaction) {
            TransactionHistory::where('transaction_id', $id)->delete();
            $attachmentIds = Attachment::where('transaction_id', $id)->get();
            // Delete the transaction record
            $transaction->delete();
            // Delete the corresponding files from storage (assuming file_path is stored in Attachment model)
            foreach ($attachmentIds as $attachmentId) {
                // Delete the attachment records
                Attachment::where('transaction_id', $id)->delete();
                $filename = $attachmentId->file_path;
                $filePath = public_path('uploads/attachments/' . $filename);
    
                if (File::exists($filePath)) {
                    
                    File::delete($filePath);
                }
            }
            echo '<p style="color:green;">Transaction and associated records deleted successfully. </p>'; 
        }
          
    }

    // function to save declaration invoice document
    public function additional_file_upload(Request $request){
        // Get additional data from the request
        $refrenceNumber = $request->input('refrence_number');
        $declarationId = $request->input('transaction_id');
        $documentType = $request->input('document_type');
        $userId = Auth::id();

        // Handle file upload
            $imageName = "";
            $fileSize = 0;
            if ($request->hasFile('file') && $request->file('file')->isValid()) {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $imageName = $filename;
                $file->move('public/uploads/attachments', $imageName);
                $fileSize = $request->input('file_size'); 
                
                // Convert file size to kilobytes
                $fileSizeInKB = $fileSize / 1024;

                // Convert file size to megabytes
                $fileSizeInMB = $fileSizeInKB / 1024;
                // Save data to the database
                $is_created = Attachment::create([
                    'refrence_number' => $refrenceNumber,
                    'transaction_id' => $declarationId,
                    'type' => $documentType,
                    'user_id' => $userId, 
                    'file_path' => $imageName,
                    'size' => $fileSizeInMB,
                ]);

                if($is_created){
                    echo '<p style="color:green;">File Uploaded Successfully. </p>';   
                } else {
                    echo  'Oops something wrong!'; 
                }
            }
    }

    // Function to delete invoice record
    public function open_pop_attachment(Request $request){
        $attachmentId = $request->input('attachment_id');

        echo '<div class="are-you-suer" style="text-align: center;">
            <img src="'.asset('public/assets/img/logo/red-dalet.svg').'">
            <h3>Are you sure?</h3>
            <p>Selected document will be deleted permanently.
              This process cannot be undone.</p>
              <div class="button"><button class="are-you-cancel">Cancel</button> <button class="are-you-delete attachment-remove" data-attachment_id = '. $attachmentId .'><img src="'.asset('public/assets/img/logo/del-new.svg').'">Delete</button></div>
           </div>
           <div class="success_msg" style="text-align: center;"></div>
       </div>';      
    }

    //function for confirm attachmnet delete
    public function confirm_attachment_delete(Request $request){
        $attachmentId = $request->input('attachment_id');
        //Get file path from the database
        $attachment = Attachment::find($attachmentId);
        $filePath = $attachment->file_path;
        // Delete record from the database
        Attachment::where('id', $attachmentId)->delete();
        // Delete file from the storage folder
        if ($filePath) {
            File::delete('public/uploads/attachments/' . $filePath);
            echo '<p style="color:green;">Record And File Deleted successfully. </p>'; 
        }
    }

    //function for serach transaction
    public function search_transaction(Request $request){
        //get parameter
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');

        // Convert the date strings to the expected format (Y-m-d)
        //check if date is not empty
        if(!empty($start_date)){
            $start_date_formatted = Carbon::createFromFormat('F j, Y', $start_date)->startOfDay();
        }

        if(!empty($end_date)){
        $end_date_formatted = Carbon::createFromFormat('F j, Y', $end_date)->endOfDay();
        }
        //echo $start_date_formatted;exit;
        $direction = $request->get('tab'); 
        $dec_types = $request->get('dec_type'); 

        if(!empty($start_date) && !empty($end_date) && $direction == 'all'){
            $transaction = Transaction::orderBy('id','ASC')->whereBetween('created_at', [$start_date_formatted . ' 00:00:00', $end_date_formatted . ' 23:59:59'])->with('transaction_history')->get();    
        }  elseif($direction == 'all' && $dec_types !== null){
            $transaction = Transaction::orderBy('id','ASC')->whereIn('dec_type',$dec_types)->with('transaction_history')->get();  
        } elseif($direction == 'inbound' && $dec_types !== null){
            $transaction = Transaction::orderBy('id','ASC')->where('direction','inbound')->whereIn('dec_type',$dec_types)->with('transaction_history')->get(); 
        } elseif($direction == 'inbound'){
            $transaction = Transaction::orderBy('id','ASC')->where('direction','inbound')->with('transaction_history')->get(); 
        } elseif($direction == 'outbound' && $dec_types !== null){
            $transaction = Transaction::orderBy('id','ASC')->where('direction','outbound')->whereIn('dec_type',$dec_types)->with('transaction_history')->get();
        } elseif($direction == 'outbound'){
            $transaction = Transaction::orderBy('id','ASC')->where('direction','outbound')->with('transaction_history')->get(); 
        } else {
            $transaction = Transaction::orderBy('id','ASC')->with('transaction_history')->get(); 
        }

       $draft_transaction = Transaction::where('status', 'draft')->orderBy('id','ASC')->with('transaction_history')->get()->count();
       $view =  view('customer.customs-transactions-listing',compact('transaction','direction','draft_transaction'));
       return $view;
    }

    //function for search draft transaction
    public function search_draft_transaction(Request $request){
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
            $transaction = Transaction::orderBy('id','ASC')->where('status', 'draft')->whereBetween('created_at',[$start_date_formatted . ' 00:00:00', $end_date_formatted . ' 23:59:59'])->with('transaction_history')->get();    
        }  elseif($direction == 'all' && $dec_types !== null){
            $transaction = Transaction::orderBy('id','ASC')->where('status', 'draft')->whereIn('dec_type',$dec_types)->with('transaction_history')->get();  
        } elseif($direction == 'inbound' && $dec_types !== null){
            $transaction = Transaction::orderBy('id','ASC')->where('status', 'draft')->where('direction','inbound')->whereIn('dec_type',$dec_types)->with('transaction_history')->get(); 
        } elseif($direction == 'inbound'){
            $transaction = Transaction::orderBy('id','ASC')->where('status', 'draft')->where('direction','inbound')->with('transaction_history')->get(); 
        } elseif($direction == 'outbound' && $dec_types !== null){
            $transaction = Transaction::orderBy('id','ASC')->where('status', 'draft')->where('direction','outbound')->whereIn('dec_type',$dec_types)->with('transaction_history')->get();
        } elseif($direction == 'outbound'){
            $transaction = Transaction::orderBy('id','ASC')->where('status', 'draft')->where('direction','outbound')->with('transaction_history')->get(); 
        } else {
            $transaction = Transaction::orderBy('id','ASC')->where('status', 'draft')->with('transaction_history')->get(); 
        } 

        $view =  view('customer.custom-draft-transactions-listing',compact('transaction'));
        return $view;
    }
}
