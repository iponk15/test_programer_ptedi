<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

// star routing global function select2
Route::group(['as' => 'globalfunction.', 'prefix' => 'globalfunction', 'namespace' => 'GlobalFunction'], function(){
    Route::get('getdata/{table}', 'Select2Controller@getdata')->name('getdata');
});
// end routing global function select2

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function () { return view('welcome'); });

    Route::get('home', 'HomeController@index')->name('home');

    Route::group(['as' => 'entrybiodata.'], function(){
        Route::get('bio_index', 'EntryBiodataController@index')->name('index');
        Route::post('bio_store', 'EntryBiodataController@store')->name('store');
    });

    // // start routing master data
    Route::group(['as' => 'masterdata.', 'prefix' => 'masterdata'], function(){
        // start routing manage users
        Route::group(['as' => 'manageusers.', 'prefix' => 'manageusers', 'namespace' => 'MasterData'], function(){
            // start routing user
            Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'ManageUsers'], function(){
                Route::get('index', 'UserController@index')->name('index');
                Route::post('ktable', 'UserController@ktable')->name('ktable');
                Route::get('show', 'UserController@show')->name('show');
                Route::post('store', 'UserController@store')->name('store');
                Route::get('edit/{id}', 'UserController@edit')->name('edit');
                Route::post('update/{id}', 'UserController@update')->name('update');
                route::post('changeStatus/{id?}/{status}', 'UserController@changeStatus')->name('changeStatus');
                route::post('delete/{id}', 'UserController@delete')->name('delete');
                route::post('exportExcel', 'UserController@exportExcel')->name('exportExcel');
                route::post('exportPdf', 'UserController@exportPdf')->name('exportPdf');
                route::get('detail/{id}', 'UserController@detail')->name('detail');
            });

            // Route::resource('user', 'ManageUsers\UserController');
            // end routing user
        });
        // end routing manage users
    });
});


