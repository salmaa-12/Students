<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\AbuttonController;
use App\Http\Controllers\AsecondController;
use App\Http\Controllers\StudentsController;

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

//// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ PageController::class , 'index']);
// Route::get('/', [ StudentsController::class , 'index']);
// Route::get('/students/{id}', [ StudentsController::class , 'show']);
// Route::get('/add/{subject->id}/print', [ AddController::class ])->name('addToPrint');
Route::resource('students', StudentsController::class);
Route::resource('add', AbuttonController::class);
Route::resource('second', SecondController::class);
Route::resource('ads', AsecondController::class);
// Route::get('list', [ StudentsController::class , 'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
