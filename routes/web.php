<?php
use Illuminate\Support\Facades\DB;

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
    return redirect('truckslist');
});


Route::get('create', [
    'uses' => 'TruckController@create',
    'as' => 'truck.create',
]);

Route::post('truckslist', [
    'uses' => 'TruckController@store',
    'as' => 'truckslist'
]);

Route::get('truckslist', 'ListController@index');


