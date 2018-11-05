<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('aadhar_search_details',['as' => 'aadhar_details', 'uses'=>'HomeController@aadhar_search_details']);	
//Route::post('/datatable_final.data', array('uses' => 'TestController@display_details'));
Route::get('display_details',['as' => 'datatable_final.data', 'uses'=>'HomeController@display_details']);	
Route::post('get_district_details',['as' => 'display_district_details.data', 'uses'=>'HomeController@get_district_details']);	
//Route::get('generate_sitemap','HomeController@generate_sitemap');
Route::get('/sitemap', 'HomeController@generate_sitemap');
Route::get('/bfree_sitemap', 'HomeController@generate_sitemap_brokerage_free_in');
Route::get('uploadFile', 'HomeController@uploadFile');
Route::get('googlemap', 'HomeController@googlemap');
Route::post('showuploadFile', 'HomeController@showuploadFile');
Route::get('qr_code', 'HomeController@qr_code');
Route::get('qr_code1', 'HomeController@qr_code1');
Route::get('qr_code1', 'HomeController@qr_code1');
Route::get('qr_calander', 'HomeController@qr_calander');
Route::get('short_url', 'HomeController@short_url');
Route::get('shortner_url', 'HomeController@shortner_url');
Route::get('fastag_image_size', 'HomeController@fastag_image_size');

Route::get('fastag_details','FastagController@fastag_details');
Route::post('stored_details',['as' => 'stored_fastag_details', 'uses' =>'FastagController@stored_details']);
Route::get('fastag_pdf','FastagController@fastag_pdf');
Route::get('fastag_HDFC_pdf','FastagController@fastag_HDFC_pdf');
Route::get('fastag_SBI_pdf','FastagController@fastag_SBI_pdf');
Route::get('fastag_equitas_pdf','FastagController@fastag_equitas_pdf');
Route::get('fastag_axis_pdf','FastagController@fastag_axis_pdf');
Route::get('printLine','FastagController@printLine');
Route::get('new_pan_2018','FastagController@new_pan_2018');
Route::get('qr_code_sms','QRcodeController@qr_code_sms');
Route::get('image_color_picker','QRcodeController@image_color_picker');
Route::get('create_qr_code','QRcodeController@create_qr_code');
Route::post('qr_details',['as' => 'get_qr_details', 'uses' =>'QRcodeController@qr_details']);

Route::get('fastag_customer_details','FastagController@fastag_customer_details');
Route::get('fastag_view_details','FastagController@fastag_view_details');
Route::get('download_pdf','FastagController@download_pdf');
Route::post('fastag_stored_details',['as' => 'fastag_app_stored_details', 'uses' =>'FastagController@fastag_stored_details']);

Route::get('barchart', 'ChartController@barchart');

Route::get('search_aadhaar_details','AadhaarController@index')->name('search_aadhaar_details');	
Route::post('aadhaar_datatable_final.data','AadhaarController@display_details1')->name('aadhaar_datatable_final.data');			
Route::post('test_data','AadhaarController@test')->name('test_data');			
//Route::get('display_details1',['as' => 'aadhaar_datatable_final.data', 'uses'=>'AadhaarController@display_details1']);	
