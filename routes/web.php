<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
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
    return view("myhome");
});
Route::get('/myhome', function () {    
    return view("myhome");
});
Route::get('/contact', function () {     
    return view("contact");
});
Route::get('/about', function () {      
    return view("about");
});
Route::get('/myprofile', function () {      
    return view("myprofile");
});
Route::resource('/cources',CourcesController::class);
Route::get('/avaliblecource',[CourcesController::class,"getCources"]);
Route::get('/addusercorce/{cource}',[CourcesController::class,"addusercorce"])->name("user.cources");
Route::get('/deletusercorce/{cource}',[CourcesController::class,"deletusercorce"])->name("user.deletusercorce");
Route::get('/getenrollcource',[CourcesController::class,"getenrollcource"]);
Route::resource('/comments',CommentController::class);
Route::get('/loginhome', function () {    
    return view("loginhome");
});
Route::resource('/users',UserController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('loginhome');
})->name('dashboard');
