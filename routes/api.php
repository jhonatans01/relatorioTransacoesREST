<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix'=>'status'], function(){
    Route::get('/', 'StatusController@index');
    Route::get('/{id}', 'StatusController@show');
    Route::post('/', 'StatusController@store');
    Route::put('/edit/{id}', 'StatusController@update');
    Route::delete('/delete/{id}', 'StatusController@delete');
});

Route::group(['prefix'=>'merchants'], function(){
    Route::get('/', 'MerchantController@index');
    Route::get('/{id}', 'MerchantController@show');
    Route::post('/', 'MerchantController@store');
    Route::put('/edit/{id}', 'MerchantController@update');
    Route::delete('/delete/{id}', 'MerchantController@delete');
});

Route::group(['prefix'=>'acquirers'], function(){
    Route::get('/', 'AcquirerController@index');
    Route::get('/{id}', 'AcquirerController@show');
    Route::post('/', 'AcquirerController@store');
    Route::put('/edit/{id}', 'AcquirerController@update');
    Route::delete('/delete/{id}', 'AcquirerController@delete');
});

Route::group(['prefix'=>'cardBrands'], function(){
    Route::get('/', 'CardBrandController@index');
    Route::get('/{id}', 'CardBrandController@show');
    Route::post('/', 'CardBrandController@store');
    Route::put('/edit/{id}', 'CardBrandController@update');
    Route::delete('/delete/{id}', 'CardBrandController@delete');
});

Route::group(['prefix'=>'acquirerCards'], function(){
    Route::get('/', 'AcquirerCardController@index');
    Route::get('/{acquirerId}/{cardBrandId}', 'AcquirerCardController@show');
    Route::post('/', 'AcquirerCardController@store');
    Route::delete('/delete/{acquirerId}/{cardBrandId}', 'AcquirerCardController@delete');
});

Route::group(['prefix'=>'paymentMethods'], function(){
    Route::get('/', 'PaymentMethodController@index');
    Route::get('/{id}', 'PaymentMethodController@show');
    Route::post('/', 'PaymentMethodController@store');
    Route::put('/edit/{id}', 'PaymentMethodController@update');
    Route::delete('/delete/{id}', 'PaymentMethodController@delete');
});

Route::group(['prefix'=>'cardPayments'], function(){
    Route::get('/', 'CardPaymentController@index');
    Route::get('/{id}', 'CardPaymentController@show');
    Route::post('/', 'CardPaymentController@store');
    Route::put('/edit/{id}', 'CardPaymentController@update');
    Route::delete('/delete/{id}', 'CardPaymentController@delete');
});

Route::group(['prefix'=>'transactions'], function(){
    Route::get('/', 'TransactionController@index');
    Route::get('/{id}', 'TransactionController@show');
    Route::post('/', 'TransactionController@store');
    Route::put('/edit/{id}', 'TransactionController@update');
    Route::delete('/delete/{id}', 'TransactionController@delete');
});
