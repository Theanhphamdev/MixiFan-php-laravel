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

Route::get('/' , 'HomeController@index')->name('home.index');
Route::get('/about' , 'HomeController@about');
Route::get('/contact' , 'HomeController@contact');
Route::get('/shop' , 'HomeController@shop')->name('shop.index');
Route::get('/shop/{id}' , 'HomeController@shop');
Route::get('/detail/{id}' , 'HomeController@detail')->name('detail.index');
Route::post('/detail/{id}' , 'HomeController@saveComment');
Route::get('/login', 'LoginController@loginForm')->name('user.login');
Route::post('/login', 'LoginController@authLogin');
Route::get('/register', 'LoginController@registerForm')->name('user.register');
Route::post('/register', 'LoginController@save');
Route::get('/logout', 'LoginController@authLogout');
Route::group(['prefix' => 'admin'], function (){
    Route::get('/dashboards', 'admin\HomeController@home')->name('admin.dash');
    Route::group(['prefix' => 'products'], function (){
        Route::get('/', 'admin\ProductController@index')->name('products.index');
        Route::get('/delete/{id}', 'admin\ProductController@delete')->name('products.delete');
        Route::get('/create', 'admin\ProductController@create')->middleware('permission:add product')->name('products.create');
        Route::post('/create', 'admin\ProductController@save');
        Route::get('/change/{id}', 'admin\ProductController@change')->name('products.change');
        Route::post('/change/{id}', 'admin\ProductController@saveChange');
    });
    Route::group(['prefix' => 'categories'], function (){
        Route::get('/', 'admin\CategoryController@index')->name('category.index');
        Route::get('/delete/{id}', 'admin\CategoryController@delete')->name('category.delete');
        Route::get('/create', 'admin\CategoryController@create')->name('category.create');
        Route::post('/create', 'admin\CategoryController@save');
        Route::get('/change/{id}', 'admin\CategoryController@change')->name('category.change');
        Route::post('/change/{id}', 'admin\CategoryController@saveChange');
    });
    Route::group(['prefix' => 'banner'], function (){
        Route::get('/', 'admin\BannerController@index')->name('banner.index');
        Route::get('/delete/{id}', 'admin\BannerController@delete')->name('banner.delete');
        Route::get('/create', 'admin\BannerController@create')->name('banner.create');
        Route::post('/create', 'admin\BannerController@save');
        Route::get('/change/{id}', 'admin\BannerController@change')->name('banner.change');
        Route::post('/change/{id}', 'admin\BannerController@saveChange');
    });
});
Route::get('/test', function (){
   echo \Illuminate\Support\Facades\Hash::make('112233');
    die();
});
Route::get('demo-phan-quyen', function(){
    $admin = \App\User::find(1);
    $test = \App\User::find(2);

    $admin->givePermissionTo('show product');
    $admin->givePermissionTo('add product');
    $admin->givePermissionTo('edit product');
    $admin->givePermissionTo('remove product');
    $test->givePermissionTo('show product');
    $test->givePermissionTo('remove user');
});

