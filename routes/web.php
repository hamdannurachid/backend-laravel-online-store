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


Route::get('admin', 'DashboardController@index')->middleware('auth')->name('admin');

// Route::prefix('admin')->namespace('Admin')->middleware(['auth', 'admin'])->group(function () {
// Route::prefix('admin')->namespace('Admin')->group(function () {
//     Route::get('/', 'DashboardController@index')->name('dashboard');
//     Route::resource('travel-package', 'TravelPackageController');
// });

Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/{id}/gallery', 'ProductController@gallery')->name('product.gallery');

Route::resource('product', 'ProductController');
Route::resource('gallery', 'GalleryController');

Route::get('transaction/{id}/set-status', 'TransactionController@setStatus')->name('transaction.status');
Route::resource('transaction', 'TransactionController');
