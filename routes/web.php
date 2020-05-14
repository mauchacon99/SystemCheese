<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//producers 
Route::get('/producers', 'ProducersController@index')->name('producers.index');

Route::get('/producers/create', 'ProducersController@create')->name('producers.create');

Route::post('/producers/create', 'ProducersController@insertStore')->name('producers.create');

Route::get('/producers/edit/{producer}', 'ProducersController@update')->name('producers.update');

Route::put('/producers/edit/{producer}', 'ProducersController@updateStore')->name('producers.updateStore');

Route::delete('/producers/delete/{producer}', 'ProducersController@destroyStore')->name('producers.destroyStore');

//Rates
Route::get('/producers/rate/{producer}', 'RateController@index')->name('rate.index');

Route::get('/producers/rate/update/{rateMilk}', 'RateController@create')->name('rate.create');

Route::post('/producers/rate/update/', 'RateController@createStore')->name('rate.createStore');

// production 

Route::get('/producer/home', 'ProductionController@home')->name('production.home');

Route::get('/producer/{producer}/production', 'ProductionController@index')->name('production.index');

Route::post('/production/create/{producer}', 'ProductionController@insertStore')->name('production.create');


//Expenses

Route::get('/expenses', 'ExpensesController@index')->name('expenses.index');

Route::get('/expenses/create', 'ExpensesController@create')->name('expenses.create');

Route::post('/expenses/create', 'ExpensesController@storeCreate')->name('expenses.storeCreate');

// foreing exchange

Route::get('/foreign-exchange/update', 'ForeignExchangeController@create')->name('ForeingExchange.create');

Route::post('/foreign-exchange/update', 'ForeignExchangeController@createStore')->name('ForeingExchange.createStore');

// WareHouse

Route::get('/warehouse', 'WareHouseHistoryController@index')->name('warehouseentry.index');

Route::get('/warehouse/create', 'WareHouseEntryController@create')->name('warehouseentry.create');

Route::post('/warehouse/create', 'WareHouseEntryController@createStore')->name('warehouseentry.createStore');

//Commoditys

Route::get('/commoditys', 'CommoditysController@index')->name('commoditys.index');

Route::post('/commoditys/create', 'CommoditysController@createStore')->name('commoditys.createStore');

//customers

Route::get('/customers', 'CustomersController@index')->name('customers.index');

Route::get('/customers/create', 'CustomersController@create')->name('customers.create');

Route::post('/customers/create', 'CustomersController@createStore')->name('customers.createStore');

Route::get('/customers/edit/{customers}', 'CustomersController@update')->name('customers.update');

Route::put('/customers/edit/{customers}', 'CustomersController@updateStore')->name('customers.updateStore');

Route::delete('/customers/delete/{customers}', 'CustomersController@destroyStore')->name('customers.destroyStore');

//accountsBank

Route::get('/accounts-bank', 'AccountsBankController@index')->name('AccountsBank.index');
