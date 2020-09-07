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


//1 (Gak boleh kebalik)
Route::post('/','otentikasi\OtentikasiController@login')->name('login');
//2
Route::get('/','otentikasi\OtentikasiController@index')->name('login');

// Route::group(['middleware' => 'auth'], function(){
//     Route::get('/isiData', function () {
    
//         return view('/responden/isiData');
//     });
//     Route::get('logout','otentikasi\OtentikasiController@logout')->name('logout');
// }); 
Route::group(['middleware' => 'auth'], function(){
    Route::get('/halamanAdmin', function () {
    
        return view('/admin/halamanAdmin');
    });
    Route::get('logout','otentikasi\OtentikasiController@logout')->name('logout');
}); 