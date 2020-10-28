<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

});

Route::get('/bill',function (){
    $data=App\billing::all();
    return view('bill')->with('bill',$data);
});

Route::get('/unavailableItems',function (){
    $data2=App\unavailableItems::all();
    return view('unavailableItems')->with('unavailableItems',$data2);
});

Route::get('/feedback',function(){
    $data=App\feedback::all();
    return view('feedback')->with('feedback',$data);
});


Route::post('/bill','billcontroller@store');

Route::get('/deleteBill/{id}','billcontroller@delBill');
Route::post('/unavailableItems','unavailableItemsController@storeUn');

Route::get('/markascompleted/{id}','unavailableItemsController@updateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','unavailableItemsController@updateTaskAsNotCompleted');

Route::get('/deleteEntry/{id}','unavailableItemsController@DeteleEntry');

Route::post('/feedback','FeedbackController@saveFeedback');

Route::get('/updateBill/{id}','billcontroller@editBill');

Route::post('/updatebill','billcontroller@updateBill');


Route::get('/menu', function(){
    return view('mainMenu');
});


Route::get('/subBillingMenu', function () {
    return view('subIndiBillingMenu');
});

Route::get('/rmenu', function () {

    return view('ReportMenu');

});
//after first evaluation
Route::get('/updateUnItems/{id}','unavailableItemsController@editUnItems');

Route::post('/UpdateUnItem','unavailableItemsController@updateItems');


//bill
Route::get('/', function () {
    return view('test');
});

Route::resource('invoices', 'InvoiceController');

Route::resource('bills', 'InvoiceController');

Route::get('Tpdf','unavailablePdfController@index');
Route::get('/Tpdf/pdf','unavailablePdfController@pdf');
Route::get('/feedbackpdf/pdf','FeedbackController@pdf');
Route::get('/billpdf/pdf','BillPdfController@pdf');

Route::get('/viewfeedback','FeedbackController@index');


Route::get('/searchUnitems','unavailableItemsController@SearchUnItems');
//Route::get('/searchUnitems','InvoiceController@SearchBillItems');

Route::get('SinglebillPDF','InvoiceController@index2');


Route::get('/dynamic_pdf_singleBill/pdf/{invoice_no}','InvoiceController@pdf_singleBill');


