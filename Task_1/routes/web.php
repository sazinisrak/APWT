<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;

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
Route::get('/',[PagesController::class, 'home'])->name('home');
Route::get('/news',[NewsController::class, 'all_news'])->name('news');
Route::get('/feature',[FeaturesController::class, 'feature'])->name('feature');
Route::get('/team',[TeamController::class, 'team'])->name('team');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');