<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Commin Route Start
Route::get('/', function () { return view('welcome'); });
//Commin Route End

Route::group(['middleware' => 'auth'], function(){
    //Super Admin Only
    Route::group(['middleware' => 'admin'], function(){
        Route::get('admin/dashboard','App\Http\Controllers\Admin\DashboardController@index');
    });

    //Admin 1 Only
    Route::group(['middleware' => 'customer'], function(){
        Route::get('customer/dashboard','App\Http\Controllers\Customer\DashboardController@index');
        Route::get('customer/upload-testing','App\Http\Controllers\Customer\DashboardController@upload_testing');
        Route::post('customer/submit-boe-pdf-file', 'App\Http\Controllers\Customer\DashboardController@submit_boe_pdf_file')->name('customer.submit.boe.pdf.file');
        Route::get('customer/transaction-listing','App\Http\Controllers\Customer\TransactionController@view_custom_transaction_listing');      
        Route::get('customer/get-main-pdf/{id}','App\Http\Controllers\Customer\TransactionController@get_main_pdf');  
        Route::get('customer/transaction-nested-records','App\Http\Controllers\Customer\TransactionController@transaction_nested_records');        
        Route::get('customer/draft-transaction-listing','App\Http\Controllers\Customer\TransactionController@view_draft_listing');
        Route::get('customer/draft-nested-records','App\Http\Controllers\Customer\TransactionController@draft_nested_records');  
        Route::get('customer/reconcilation-groups','App\Http\Controllers\Customer\ReconcilationController@index');
        Route::get('customer/custom-reconcilation','App\Http\Controllers\Customer\ReconcilationController@custom_reconcilation');
        Route::get('customer/reconciled/{group_ref_no?}', 'App\Http\Controllers\Customer\ReconcilationController@reconciled')
        ->where('group_ref_no', '.*');

        Route::get('customer/reconciled-new','App\Http\Controllers\Customer\ReconcilationController@reconciled_new');
        Route::get('customer/reconciled-nested-records','App\Http\Controllers\Customer\ReconcilationController@reconciled_nested_records');
        Route::get('customer/assets','App\Http\Controllers\Customer\ReconcilationController@assets');
        Route::post('customer/submit-group','App\Http\Controllers\Customer\ReconcilationController@submit_group_data');
        Route::post('customer/group-pop-up','App\Http\Controllers\Customer\ReconcilationController@open_pop_up_delete_group');
        Route::post('customer/delete-group','App\Http\Controllers\Customer\ReconcilationController@delete_group_data');
        Route::get('customer/declaration-edit/{id}','App\Http\Controllers\Customer\TransactionController@custom_declaration_edit');
        //open pop up 
        Route::get('customer/open-pop-up','App\Http\Controllers\Customer\TransactionController@open_pop_up');
        Route::get('customer/delete-transaction-listing','App\Http\Controllers\Customer\TransactionController@delete_declaration');
        Route::post('customer/update-declaration','App\Http\Controllers\Customer\TransactionController@update_declaration_detail');
        Route::get('customer/custom-declaration-detail/{id}','App\Http\Controllers\Customer\TransactionController@custom_declaration_detail');
        Route::post('customer/submit-customer-declaration-detail', 'App\Http\Controllers\Customer\TransactionController@add_custom_detail');
        Route::post('customer/submit-assets','App\Http\Controllers\Customer\AssetsController@submit_assets_data');
        Route::get('customer/remove-group/{id}','App\Http\Controllers\Customer\ReconcilationController@delete_group');
        Route::post('customer/remove-assest','App\Http\Controllers\Customer\AssetsController@delete_assest_data');
        Route::post('customer/add-session','App\Http\Controllers\Customer\ReconcilationController@store_data_in_session');
        Route::get('customer/add-to-existing-group','App\Http\Controllers\Customer\ReconcilationController@view_add_to_existing');
        Route::get('customer/existing-nested-records','App\Http\Controllers\Customer\ReconcilationController@existing_nested_records');
        Route::post('customer/submit-to-existing-group','App\Http\Controllers\Customer\ReconcilationController@submit_to_existed_group');
        Route::post('customer/invoice-upload', 'App\Http\Controllers\Customer\TransactionController@additional_file_upload');
        Route::post('customer/attachment-delete-popup', 'App\Http\Controllers\Customer\TransactionController@open_pop_attachment');
        Route::post('customer/attachment-delete', 'App\Http\Controllers\Customer\TransactionController@confirm_attachment_delete');
        Route::post('customer/lgp-upload', 'App\Http\Controllers\Customer\TransactionController@lgp_upload');
        Route::post('customer/lgp-delete', 'App\Http\Controllers\Customer\TransactionController@lgp_delete');


        //group sealed
        Route::get('customer/is-group-sealed','App\Http\Controllers\Customer\ReconcilationController@is_sealed');

        //users
        Route::get('customer/user-profile', 'App\Http\Controllers\Customer\UserController@index');
        Route::get('customer/edit-profile', 'App\Http\Controllers\Customer\UserController@edit_user');
        Route::post('customer/update-profile', 'App\Http\Controllers\Customer\UserController@update_user')->name('customer.update.profile');

        //search
        Route::get('customer/search-transaction', 'App\Http\Controllers\Customer\TransactionController@search_transaction')->name('customer.search.transaction');
        Route::get('customer/search-non-reconcilation', 'App\Http\Controllers\Customer\ReconcilationController@search_non_reconciled_transaction')->name('customer.search.non.reconiled.transaction');
        Route::get('customer/search-draft-transaction', 'App\Http\Controllers\Customer\TransactionController@search_draft_transaction')->name('customer.search.draft.transaction');

        //report
        Route::get('customer/reports', 'App\Http\Controllers\Customer\ReportController@index');
        Route::get('customer/generate-reports', 'App\Http\Controllers\Customer\ReportController@generate_report');
    });

});  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
