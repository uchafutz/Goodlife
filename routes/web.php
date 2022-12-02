<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/property', [HomeController::class, 'property'])->name('home.property');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/blog', [HomeController::class, 'blog'])->name('home.blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/property', function () {
//     return view("pages.property");
// });