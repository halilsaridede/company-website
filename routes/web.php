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

Route::get('/', 'HomepageController@index')->name('get.home');
Route::get('/tr', 'HomepageController@tr')->name('get.home.tr');
Route::get('/en', 'HomepageController@en')->name('get.home.en');
Route::post('/contact', 'HomepageController@contact')->name('post.home.contact');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('get.admin.index');

    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', 'AdminController@slider')->name('get.admin.slider');
        Route::post('/update', 'AdminController@sliderUpdate')->name('post.admin.slider');
    });
    
    Route::group(['prefix' => 'message'], function () {
        Route::get('/', 'AdminController@sliderMessage')->name('get.admin.message');
        Route::post('/update', 'AdminController@sliderMessageUpdate')->name('post.admin.message');
    });
    
    Route::group(['prefix' => 'section'], function () {
        Route::get('/{typeId}', 'AdminController@section')->name('get.admin.section');
        Route::post('/update', 'AdminController@sectionUpdate')->name('post.admin.section');
    });
    Route::group(['prefix' => 'team-members'], function () {
        Route::get('/', 'AdminController@teamMembers')->name('get.admin.team-members');
        Route::post('/update', 'AdminController@teamMembersUpdate')->name('post.admin.team-members');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', 'AdminController@contact')->name('get.admin.contact');
        Route::get('/delete/{id}', 'AdminController@contactDelete')->name('get.admin.contact.delete');
        // Route::post('/update', 'AdminController@teamMembersUpdate')->name('post.admin.team-members');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
