<?php

use App\Http\Controllers\CompanyController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'companies'], function(){
    Route::get('', [CompanyController::class, 'index'])->name('company.index');
    Route::get('edit/{company}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('update/{company}', [CompanyController::class, 'update'])->name('company.update');

});
