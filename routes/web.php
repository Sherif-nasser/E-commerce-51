<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RelationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\indexController;


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

Auth::routes(['verify'=>true]);

Route::get('/user' ,[indexController::class , 'index'])->middleware('auth' ,'check.user')->name('user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login/facebook' , [App\Http\Controllers\Auth\LoginController::class , 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback' , [App\Http\Controllers\Auth\LoginController::class , 'handleFacebookCallback']);

//Route::get('/login/facebook','Auth\LoginController@redirectToFacebook')->name('login.facebook');
//Route::get('/login/facebook/callback','Auth\LoginController@handleFacebookCallback');

Route::get('/email',function(){
    Mail::to('6e7963b1048379')->send(new WelcomeMail());
    return new WelcomeMail();
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
