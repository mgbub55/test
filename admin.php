<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', UserController::class)->except('show');
	Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');
	Route::get('upgrade', function () {
		return view('admin.pages.upgrade');
	})->name('upgrade');
	Route::get('map', function () {
		return view('admin.pages.maps');
	})->name('map');
	Route::get('icons', function () {
		return view('admin.pages.icons');
	})->name('icons');
	Route::get('table-list', function () {
		return view('admin.pages.tables');
	})->name('table');
});
