<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Mail;
use Smalot\PdfParser\Parser;

use App\Models\User;
use App\Models\Transaction;
use App\Models\Group;
use App\Models\Attachment;
use App\Models\TransactionHistory;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //Function for Show dashboard page
    public function index(){
        //function to count Inbound transaction
        $transaction_inbound = Transaction::where('direction', 'Inbound')->count();

        //function to count Outbound transaction
        $transaction_Outbound = Transaction::where('direction', 'Outbound')->count();
      
        //function to count non reconciled group
        $non_reconciled_count = Transaction::where('status', 'publish')
        ->withCount(['transaction_history as non_reconciled_count' => function ($query) {
            $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
        }])->whereHas('transaction_history', function ($query) {
            $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish');
        })->get()->sum('non_reconciled_count');

        //function to count reconciled group
        $reconciled_count = Group::orderBy('id','DESC')->with('group_detail.transactions')->get()->groupBy('group_id')->count();

        //function to coount all transation quantity
        $transaction_records_value = TransactionHistory::select('qty', 'weight', 'cif_value_aed')->get()->toArray();
        //echo"<pre>"; print_r($transaction_quantity); exit;
        $qty = 0;
        $weight = 0;
        $cif_value_aed = 0;
        foreach($transaction_records_value as $value){
            $qty += $value['qty'];
            $weight += $value['weight'];
            $cif_value_aed += $value['cif_value_aed'];
        }
   
        // Get the last 5 transactions along with their transaction history
        $last_transactions = Transaction::where('status', 'publish')
            ->with(['transaction_history' => function ($query) {
                $query->where('is_group', '=', 'no')
                    ->where('is_assest', '=', 'no')
                    ->where('status', '=', 'publish')
                    ->orderBy('created_at', 'desc') // Order by timestamp in descending order
                    ->limit(5); // Limit to 5 records
            }])
            ->whereHas('transaction_history', function ($query) {
                $query->where('is_group', '=', 'no')
                    ->where('is_assest', '=', 'no')
                    ->where('status', '=', 'publish');
            })
            ->orderBy('created_at', 'desc') // Order by transaction timestamp in descending order
            ->limit(5) // Limit to 5 records
            ->get();

        // Alternatively, if you want to get the last 5 transaction history records for each transaction,
        // you can use the load method after fetching the transactions
        $last_transactions->load(['transaction_history' => function ($query) {
            $query->where('is_group', '=', 'no')
                ->where('is_assest', '=', 'no')
                ->where('status', '=', 'publish')
                ->orderBy('created_at', 'desc') // Order by timestamp in descending order
                ->limit(5); // Limit to 5 records
        }]);

        //function to get IMPORT
        $import_count= Transaction::where('status', 'publish')->where('dec_type', 'Import')->count(); 
        $export_count= Transaction::where('status', 'publish')->where('dec_type', 'Export')->count(); 
        $transfer_count= Transaction::where('status', 'publish')->where('dec_type', 'Transfer')->count(); 
       // echo"<pre>"; print_r($import_count); exit;
        
        $view =  view('customer.dashboard', compact('transaction_inbound','import_count','transfer_count','export_count','transaction_Outbound','reconciled_count', 'non_reconciled_count','qty','weight','cif_value_aed','last_transactions'));
        return $view;
    }

    //Function for Show upload_testing page
    public function upload_testing(){
        $view =  view('customer.upload-testing');
        return $view;
    }
    
    //Function for submit boe pdf file
    public function submit_boe_pdf_file(Request $request){
        //refrence number
        $reference_number = $request->input('reference_number');

        //check refrence number
        if (strlen($reference_number) > 18) {
            echo "Reference number should not be more than 18 digits.";exit;
        }
       //check for boe file validation rules for packing 
       $boe_file_packing = $request->hasFile('boe_file_packing');
        if ($boe_file_packing) {
            $allowedExtensions = ['pdf', 'jpeg', 'jpg'];
            $maxFileSize = 3 * 1024 * 1024; // 3 MB in bytes

            if (!in_array(strtolower($boe_file_packing->getClientOriginalExtension()), $allowedExtensions)) {
                echo "File must have a PDF jpeg jpg extension.";exit;
            }

            if ($boe_file_packing->getSize() > $maxFileSize) {
                echo "File size should not exceed 3 MB.";exit;
            }
        } 
        //check for boe file validation rules for document type
        $boe_file_doctp = $request->hasFile('boe_file_doctp');
        if ($boe_file_doctp) {
            $allowedExtensions = ['pdf', 'jpeg', 'jpg'];
            $maxFileSize = 3 * 1024 * 1024; // 3 MB in bytes

            if (!in_array(strtolower($boe_file_doctp->getClientOriginalExtension()), $allowedExtensions)) {
                echo "File must have a PDF jpeg jpg extension.";exit;
            }

            if ($boe_file_doctp->getSize() > $maxFileSize) {
                echo "File size should not exceed 3 MB.";exit;
            }
        } 
        //check for boe file validation rules for invoice
        $boe_file_invoice = $request->hasFile('boe_file_invoice');
        if ($boe_file_invoice) {
            $allowedExtensions = ['pdf', 'jpeg', 'jpg'];
            $maxFileSize = 3 * 1024 * 1024; // 3 MB in bytes

            if (!in_array(strtolower($boe_file_invoice->getClientOriginalExtension()), $allowedExtensions)) {
                echo "File must have a PDF jpeg jpg extension.";exit;
            }

            if ($boe_file_invoice->getSize() > $maxFileSize) {
                echo "File size should not exceed 3 MB.";exit;
            }
        } 
        //pdf file
        $pdfFile = $request->file_uploader;
        // Check file size and extension
        if ($pdfFile) {
            $allowedExtensions = ['pdf'];
            $maxFileSize = 3 * 1024 * 1024; // 3 MB in bytes

            if (!in_array(strtolower($pdfFile->getClientOriginalExtension()), $allowedExtensions)) {
                echo "File must have a PDF extension.";exit;
            }

            if ($pdfFile->getSize() > $maxFileSize) {
                echo "File size should not exceed 3 MB.";exit;
            }
        } 
      
        $pdf_type = $pdfFile->getClientOriginalName();
        //check pdf type
        if($pdf_type == 'Format4.pdf'){
            // Create a PDF parser
            $parser = new Parser();
            // Parse the PDF file
            $pdf = $parser->parseFile($pdfFile);
            // Extract text from the PDF
            $pageContents = [];
            foreach ($pdf->getPages() as $pageIndex => $page) {
                $text = $page->getText();
                $textArray = explode("\t", $text);
                $pageContents[$pageIndex] = $textArray;
            } 

            //check the transaction type is inbound or outbound
            $inbound = ['Import to Local from Row','Import Statistical Declaration','Import to CW from ROW','Import to CW from Local (After Temporary Admission)','Export from Local to FZ','Temporary Export from Local to FZ','Re Export to FZ (After Import for Re Export)','Return to FZ After Temporary Admission','FZ Transit In',
            'FZ Transit In from GCC and other Emirates FZ and GCC Local Market','Temporary Admission from ROW to Local','Freezone Bill Of Entry']; 

            $outbound = ['Import to Local from FZ','Import to Local from CW','Import for Re Export To Local from FZ','Import for Re-Export To Local from CW',
                        'Import To Local After Temporary Admission','Export from Local to ROW','Export Statistical Declaration','Temporary Export from Local to ROW','Export from CW to ROW','Re Export to ROW (After Import for Re Export)','Return to ROW After Temporary Admission','FZ Transit Out','Temporary Admission from FZ to Local','Temporary Admission from CW to Local','Ex-Freezone Export',
                        'Ex-Freezone Import','Ex-Freezone Temporary Admission','Ex-Freezone Import for Re-Export','Goods Consumption Within FZ'];

            $in_out = ['Import to CW from FZ','Export from CW to FZ','FZ Transit Between Dubai based FZ','Transfer of Cargo by Dubai Based CW',
                        'Transfer within a FZ','Freezone Internal Transfer'];
        
            //get exporter code
            $get_custom_declaration =  explode("\n", $pageContents[0][6]);
            $custom_dec = trim($get_custom_declaration[1]);
            $exporter_code = $pageContents[0][11];
            $importer_code = Auth::user()->importer_code;

            //check in out both
            if (in_array(strtolower($custom_dec), array_map('strtolower', $inbound))) {
                $type =  'Inbound';
            } elseif (in_array(strtolower($custom_dec), array_map('strtolower', $outbound))) {
                $type =  'Outbound';
            } 
            
            //check in out both with exporter code
            if (in_array(strtolower($custom_dec), array_map('strtolower', $in_out)) && $exporter_code == $importer_code) {
              $type =  'Outbound';
            } else {
              $type =  'Inbound';
            }
              //echo "<pre>";print_r($pageContents);exit;
             //count how ,any pages in pdf
            if(count($pageContents) >= 1){
                $dec_type = explode("\n", $pageContents[0][6]);
                $declaration_number = explode("\n", $pageContents[0][32]);
                $custom_declaration = explode("\n", $pageContents[0][6]);

                $clearing_agent = explode("\n", $pageContents[0][26]);
                //$Export = explode(' - ', $pageContents[0][11]);
                $consignee = explode(' - ', $pageContents[0][9]);
               
                // get number of page
                $no_of_pages = $pageContents[0][3];
                // Explode the string using "of" as the delimiter
                $parts = explode('of', $no_of_pages);             
                // Get the last part of the exploded array and trim any whitespace
                $pageNumber = trim(end($parts));
                //echo $pageNumber;
                //insert transactions
                $insert_transaction = Transaction::create([
                                                        'user_id' => auth()->user()->id, 
                                                        'refrence_number' => $reference_number,
                                                        'port_type' => trim($pageContents[0][5]), 
                                                        'dec_type' => trim($dec_type[0]),
                                                        'dec_date' => trim($pageContents[0][7]), 
                                                        'boe_number' => trim($declaration_number[1]), 
                                                        'custom_declaration' => trim($custom_declaration[1]),  
                                                        'declaration_number' => $pageContents[0][8],
                                                        'net_weight' => trim($pageContents[0][10]), 
                                                        'gross_weight' => '', 
                                                        'measurement' => '', 
                                                        'no_of_pages' => $pageNumber, 
                                                        'marks_number' => '', 
                                                        'intercessor' =>'', 
                                                        'commercial_reg_num' => '', 
                                                        'exporter' => '',
                                                        'exporter_code' =>  $pageContents[0][11],
                                                        'port_of_loading' => '', 
                                                        'port_of_discharge' => '', 
                                                        'destination' => '', 
                                                        'delevery_order_number' => '', 
                                                        'car_capt' => '', 
                                                        'carrier_name' => '', 
                                                        'voyage_no' => '', 
                                                        'manifast' => '', 
                                                        'transaction_type' => 'boe4', 
                                                        'clearing_agent' => trim($clearing_agent[2]),
                                                        'clearing_agent_code' => trim($clearing_agent[1]),
                                                        'intercessor_code' => '',
                                                        'consignee_import_code' => trim($consignee[0]),
                                                        'consignee_exporter' => $consignee[1] . ' ' . $consignee[2],
                                                        'direction' => $type,
                                                    ]);

            //foreach for insert data into database
            foreach ($pageContents as $data) {
                //check transaction data is inserted or not
                if($insert_transaction){
                        //total duty
                        $total_duty_string = $data[13];
                        $total_duty_array = explode("\n", $total_duty_string);
                        $total_duty_array = array_filter($total_duty_array, 'strlen');

                        //income type
                        $income_type_string = $data[14];
                        $income_type_array = explode("\n", $income_type_string);
                        $income_type_array = array_filter($income_type_array, 'strlen');

                        //duty rate
                        $duty_rate_string = $data[14];
                        $duty_rate_array = explode("\n", $duty_rate_string);
                        $duty_rate_array = array_filter($duty_rate_array, 'strlen');

                        //cif local value aed
                        $cif_local_value_string = $data[15];
                        $cif_local_value_string_array = explode("\n", $cif_local_value_string);
                        $cif_local_value_string_array = array_filter($cif_local_value_string_array, 'strlen');

                        //currency rate
                        $currency_rate_string = $data[16];
                        $currency_rate_string_array = explode("\n", $currency_rate_string);
                        $currency_rate_string_array = array_filter($currency_rate_string_array, 'strlen');

                        //currency type
                        $currency_type_string = $data[17];
                        $currency_type_string_array = explode("\n", $currency_type_string);
                        $currency_type_string_array = array_filter($currency_type_string_array, 'strlen');

                        //cif forigen value
                        $cif_forigen_value_string = $data[18];
                        $cif_forigen_value_string_array = explode("\n", $cif_forigen_value_string);
                        $cif_forigen_value_string_array = array_filter($cif_forigen_value_string_array, 'strlen');

                        //origin string
                        $origin_string = $data[19];
                        $origin_string_array = explode("\n", $origin_string);
                        $origin_string_array = array_filter($origin_string_array, 'strlen');

                        //goods descriptions
                        $goods_descriptions_string = $data[20];
                        $goods_descriptions_array = explode("\n", $goods_descriptions_string);
                        $goods_descriptions_array = array_filter($goods_descriptions_array, 'strlen');

                        //hs code
                        $hs_code_string = $data[21];
                        $hs_code_array = explode("\n", $hs_code_string);
                        $hs_code_array = array_filter($hs_code_array, 'strlen');

                        foreach($total_duty_array as $key => $total_duty) {
                            //insert transaction history
                            $insert_transaction_history = TransactionHistory::create([
                                                                                'transaction_id' => $insert_transaction->id, 
                                                                                'total_duty' =>  $total_duty_array[$key] ?? '',
                                                                                'income_type' =>  $income_type_array[$key] ?? '',
                                                                                'duty_rate' =>  $duty_rate_array[$key] ?? '',
                                                                                'currency_rate' => $currency_rate_string_array[$key] ?? '', 
                                                                                'currency_type' =>  $currency_type_string_array[$key] ?? '', 
                                                                                'cif_forigen_value' =>  $cif_forigen_value_string_array[$key] ?? '', 
                                                                                'origin' =>  $origin_string_array[$key] ?? '', 
                                                                                'goods_descriptions' =>  $goods_descriptions_array[$key] ?? '', 
                                                                                'hs_code' =>  $hs_code_array[$key] ?? '',
                                                                                'cif_value_aed' =>  $cif_local_value_string_array[$key] ?? '',
                                                                            ]);
                        }              
                    }  else {
                        echo  'Oops something wrong!';
                    }
                } 

                //check data is inserted or not
                if($insert_transaction_history){
                    echo '<p style="color:green;">File Submitted Successfully.</p>'; 
                } else {
                    echo  'Oops something wrong!';
                }
             }     
            } elseif($pdf_type == 'Format5.pdf'){
                // Create a PDF parser
                $parser = new Parser();
                // Parse the PDF file
                $pdf = $parser->parseFile($pdfFile);
            
                // Extract text from the PDF
                $pageContents = [];
                foreach ($pdf->getPages() as $pageIndex => $page) {
                    $text = $page->getText();
                    $textArray = explode("\t", $text);
                    $pageContents[$pageIndex] = $textArray;
                }       
                
                //check the transaction type is inbound or outbound
                $inbound = ['Import to Local from Row','Import Statistical Declaration','Import to CW from ROW','Import to CW from Local (After Temporary Admission)','Export from Local to FZ','Temporary Export from Local to FZ','Re Export to FZ (After Import for Re Export)','Return to FZ After Temporary Admission','FZ Transit In',
                'FZ Transit In from GCC and other Emirates FZ and GCC Local Market','Temporary Admission from ROW to Local','Freezone Bill Of Entry']; 

                $outbound = ['Import to Local from FZ','Import to Local from CW','Import for Re Export To Local from FZ','Import for Re-Export To Local from CW',
                            'Import To Local After Temporary Admission','Export from Local to ROW','Export Statistical Declaration','Temporary Export from Local to ROW','Export from CW to ROW','Re Export to ROW (After Import for Re Export)','Return to ROW After Temporary Admission','FZ Transit Out','Temporary Admission from FZ to Local','Temporary Admission from CW to Local','Ex-Freezone Export',
                            'Ex-Freezone Import','Ex-Freezone Temporary Admission','Ex-Freezone Import for Re-Export','Goods Consumption Within FZ'];

                $in_out = ['Import to CW from FZ','Export from CW to FZ','FZ Transit Between Dubai based FZ','Transfer of Cargo by Dubai Based CW',
                            'Transfer within a FZ','Freezone Internal Transfer'];
            
                //get exporter code
                $get_custom_declaration =  explode("\n", $pageContents[0][5]);
                $custom_dec = trim($get_custom_declaration[1]);
                $exporter_code = '';
                $importer_code = Auth::user()->importer_code;

                //check in out both
                if (in_array(strtolower($custom_dec), array_map('strtolower', $inbound))) {
                    $type =  'Inbound';
                } elseif (in_array(strtolower($custom_dec), array_map('strtolower', $outbound))) {
                    $type =  'Outbound';
                } 
                
                //check in out both with exporter code
                if (in_array(strtolower($custom_dec), array_map('strtolower', $in_out)) && $exporter_code == $importer_code) {
                  $type =  'Outbound';
                } else {
                  $type =  'Inbound';
                }

                // echo "<pre>";print_r($pageContents);exit;
                //count how ,any pages in pdf
                if(count($pageContents) >= 1){
                    $dec_type = explode("\n", $pageContents[0][5]);
                    $declaration_number = explode("\n", $pageContents[0][41]);
                    $custom_declaration = explode("\n", $pageContents[0][5]);

                    $clearing_agent_code = explode("\n", $pageContents[0][34]);
                    $clearing_agent = explode("\n", $pageContents[0][34]);

                    
                    $intercessor =  $pageContents[0][11];
                    $lines = explode(PHP_EOL, $intercessor);
                    $intercessor_detail = explode(' - ', $lines[0]);
                    //echo "<pre>";print_r($intercessor_detail);exit;

                    $consignee = explode(' - ', $pageContents[0][9]);

                    // get number of page
                    $no_of_pages = $pageContents[0][2];
                    // Explode the string using "of" as the delimiter
                    $parts = explode('of', $no_of_pages);             
                    // Get the last part of the exploded array and trim any whitespace
                    $pageNumber = trim(end($parts));
                    //insert transactions
                    $insert_transaction = Transaction::create([
                                                            'user_id' => auth()->user()->id, 
                                                            'refrence_number' => $reference_number,
                                                            'port_type' => trim($pageContents[0][4]), 
                                                            'dec_type' => trim($dec_type[0]),
                                                            'dec_date' => trim($pageContents[0][6]), 
                                                            'boe_number' => trim($declaration_number[1]), 
                                                            'custom_declaration' => trim($custom_declaration[1]),  
                                                            'declaration_number' => trim($pageContents[0][7]),
                                                            'net_weight' => trim($pageContents[0][8]), 
                                                            'gross_weight' => '', 
                                                            'measurement' => '', 
                                                            'no_of_pages' => $pageNumber, 
                                                            'marks_number' => '', 
                                                            //'exporter' => trim($pageContents[0][9]), 
                                                            'intercessor' => $intercessor_detail[1], 
                                                            'intercessor_code' => $intercessor_detail[0],
                                                            'commercial_reg_num' => '', 
                                                            'port_of_loading' => '', 
                                                            'port_of_discharge' => '', 
                                                            'destination' => '', 
                                                            'delevery_order_number' => '', 
                                                            'car_capt' => '', 
                                                            'carrier_name' => '', 
                                                            'voyage_no' => '', 
                                                            'manifast' => '', 
                                                            'transaction_type' => 'boe5', 
                                                            'clearing_agent' => trim($clearing_agent[2]),
                                                            'clearing_agent_code' => trim($clearing_agent_code[1]),
                                                            'intercessor_code' => '',
                                                            'consignee_import_code' => trim($consignee[0]),
                                                            'consignee_exporter' => $consignee[1] . ' ' . $consignee[2],
                                                            'direction' => $type,
                                                        ]);

                //foreach for insert data into database
                foreach ($pageContents as $data) {
                    //check transaction data is inserted or not
                    if($insert_transaction){
                            //total duty
                            $total_duty_string = $data[18];
                            $total_duty_array = explode("\n", $total_duty_string);
                            $total_duty_array = array_filter($total_duty_array, 'strlen');

                            //income type
                            $income_type_string = $data[19];
                            $income_type_array = explode("\n", $income_type_string);
                            $income_type_array = array_filter($income_type_array, 'strlen');

                            //duty rate
                            $duty_rate_string = $data[20];
                            $duty_rate_array = explode("\n", $duty_rate_string);
                            $duty_rate_array = array_filter($duty_rate_array, 'strlen');

                            //cif local value aed
                            $cif_local_value_string = $data[21];
                            $cif_local_value_string_array = explode("\n", $cif_local_value_string);
                            $cif_local_value_string_array = array_filter($cif_local_value_string_array, 'strlen');

                            //currency rate
                            $currency_rate_string = $data[22];
                            $currency_rate_string_array = explode("\n", $currency_rate_string);
                            $currency_rate_string_array = array_filter($currency_rate_string_array, 'strlen');

                            //currency type
                            $currency_type_string = $data[23];
                            $currency_type_string_array = explode("\n", $currency_type_string);
                            $currency_type_string_array = array_filter($currency_type_string_array, 'strlen');

                            //cif forigen value
                            $cif_forigen_value_string = $data[24];
                            $cif_forigen_value_string_array = explode("\n", $cif_forigen_value_string);
                            $cif_forigen_value_string_array = array_filter($cif_forigen_value_string_array, 'strlen');

                            //origin string
                            $origin_string = $data[25];
                            $origin_string_array = explode("\n", $origin_string);
                            $origin_string_array = array_filter($origin_string_array, 'strlen');

                            //goods descriptions
                            $goods_descriptions_string = $data[26];
                            $goods_descriptions_array = explode("\n", $goods_descriptions_string);
                            $goods_descriptions_array = array_filter($goods_descriptions_array, 'strlen');

                            //hs code
                            $hs_code_string = $data[27];
                            $hs_code_array = explode("\n", $hs_code_string);
                            $hs_code_array = array_filter($hs_code_array, 'strlen');

                            foreach($total_duty_array as $key => $total_duty) {
                                //insert transaction history
                                $insert_transaction_history = TransactionHistory::create([
                                                                                    'transaction_id' => $insert_transaction->id, 
                                                                                    'total_duty' =>  $total_duty_array[$key] ?? '',
                                                                                    'income_type' =>  $income_type_array[$key] ?? '',
                                                                                    'duty_rate' =>  $duty_rate_array[$key] ?? '',
                                                                                    'currency_rate' => $currency_rate_string_array[$key] ?? '', 
                                                                                    'currency_type' =>  $currency_type_string_array[$key] ?? '', 
                                                                                    'cif_forigen_value' =>  $cif_forigen_value_string_array[$key] ?? '', 
                                                                                    'origin' =>  $origin_string_array[$key] ?? '', 
                                                                                    'goods_descriptions' =>  $goods_descriptions_array[$key] ?? '', 
                                                                                    'hs_code' =>  $hs_code_array[$key] ?? '',
                                                                                    'cif_value_aed' =>  $cif_local_value_string_array[$key] ?? '',
                                                                                ]);
                            } 

                        }  else {
                            echo  'Oops something wrong!';
                        }
                    } 
                             
                    //check data is inserted or not
                    if($insert_transaction_history){
                       // function to get Additional Documents type and upload Additional Documents
                        $file_uploader = $request->file_uploader;
                        $boe_file_packing = $request->boe_file_packing;
                        $boe_add_doc = $request->packing_doc;
                        $boe_file_invoice = $request->boe_file_invoice;
                        $boe_add_doc_one = $request->invoice_doc;
                        $boe_file_doctp = $request->boe_file_doctp;
                        $boe_add_doc_two = $request->other_doc;
                        $userId = Auth::id();
                        $fileUploaderType = 'main_pdf';
                        // Define an array of file inputs and corresponding document types
                        $files = [
                            'boe_file_packing' => $boe_add_doc,
                            'boe_file_invoice' => $boe_add_doc_one,
                            'boe_file_doctp' => $boe_add_doc_two,
                            'file_uploader' => $fileUploaderType,
                        ];
                        
                        // Handle file upload
                        //$documentType == 'main';
                        foreach ($files as $fileInputName => $documentType) {
                            if ($request->hasFile($fileInputName) && $request->file($fileInputName)->isValid()) {
                                $file = $request->file($fileInputName);
                                $extension = $file->getClientOriginalExtension();
                                $fileSize = $file->getSize();
                                $filename = time() . '.' . $extension;
                                $imageName = $filename;
                                $file->move('public/uploads/attachments', $imageName);

                                // Get file size using SplFileInfo
                                $fileSizeInKB = $fileSize / 1024;
                                $fileSizeInMB = $fileSizeInKB / 1024;
                                // echo $documentType; exit;
                                // Save data into the database
                                Attachment::create([
                                    'refrence_number' => $reference_number,
                                    'transaction_id' => $insert_transaction->id,
                                    'type' => $documentType,
                                    'user_id' => $userId,
                                    'file_path' => $imageName,
                                    'size' => $fileSizeInMB,
                                ]);
                             }

                            //else{
                            //     return redirect()->back()->withErrors([$fileInputName => 'File must have pdf,jpeg,jpg and size 3MB']);
                            // }
                        }

                        echo '<p style="color:green;">File Submitted Successfully.</p>';
                    } else {
                        echo  'Oops something wrong!';
                    }

                }
                
                } else {
                    echo  'Oops something wrong!';
                }
            }
       // echo "<pre>";print_r($custom_declaration);exit;  
}
