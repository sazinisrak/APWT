<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
   return view('Pages.Student.login');
});

Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('/team', [PageController::class, 'ourTeam'])->name('team');
Route::get('/aboutUs', [PageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [PageController::class, 'contactUs'])->name('contactUs');

Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::get('/registration', [StudentController::class, 'registration'])->name('registration');


Route::post('/registration', [StudentController::class, 'registrationSubmit'])->name('registration');
Route::post('/login', [StudentController::class, 'loginSubmit'])->name('login');

Route::get('/list', [StudentController::class, 'list'])->name('list');

Route::get('/login', [StudentController::class, 'logout'])->name('logout');




