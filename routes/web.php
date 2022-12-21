<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\landing\LoginController;
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\ContactController;
use App\http\Controllers\landing\BlogController;
use App\http\Controllers\landing\ServiceController;
use App\http\Controllers\landing\TeamController;
use App\http\Controllers\landing\PortofolioController;
use App\http\Controllers\landing\AboutController;
use App\http\Controllers\landing\CareerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/career', [CareerController::class, 'index'])->name('career.index');
