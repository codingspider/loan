<?php



Route::get('/', function () {
    return view('welcome');
});

Route::resource('loans', 'LoanController');
Route::resource('loan/applications', 'LoanApplicationController');
Route::post('loan_requests/add-save', 'LoanApplicationController@store');

