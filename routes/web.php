<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {return view('pages.home');})->name('pages.home');
Route::get('/contact', function () {return view('pages.contactUs');})->name('pages.contactUs');
Route::get('/service', [PagesController::class, 'serviceData'])->name('pages.service');
Route::get('/aboutus', function () {return view('pages.aboutUs');})->name('pages.aboutUs');
Route::get('/ourteams', function () {return view('pages.ourTeams');})->name('pages.ourTeams');