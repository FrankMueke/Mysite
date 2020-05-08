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

Route::group(['middleware' => ['web']], function () {
Route::auth();

    Route::get('/home', 'HomeController@index')->name('home');
//auth routes
// Route::get('login', ['as' => 'login', 'uses' =>'Auth\LoginController@showLoginForm']);
// Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// //Registration routes
// Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
// Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

//Passwords reset
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.update');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::get('blog/{slug}', ['as' =>'blog.single','uses' => 'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
    Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('/', 'PagesController@getIndex');
    Route::get('about', 'PagesController@getAbout');
    Route::get('contact', 'PagesController@getContact');
    Route::resource('posts', 'PostController');  
});
