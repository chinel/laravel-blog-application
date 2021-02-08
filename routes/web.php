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

//FRONT END ROUTES
Route::get('/', 'BlogController@getAllBlogPosts');
Route::get('/blog/{id}','BlogController@getBlogPostById');

//DASHBOARD ROUTES
Route::group(['middleware'=>'auth'], function (){
    Route::get('/dashboard','BlogController@getBlogPostByUser');
    Route::get('/new-post',function(){
        return view('dashboard.create-post');
    });
    Route::post('/new-post','BlogController@create');
});

//AUTHENTICATION ROUTES
Route::get('auth/register', function(){
    return view('auth.register');
});
Route::post('auth/register', 'UserController@register');

Route::get('auth/login', function(){
    return view('auth.login');
});
Route::post('auth/login', 'UserController@login')->name('login');
Route::get('auth/logout', 'UserController@logout');
