<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/skills', 'PortfolioController@skills')->name('skills');
Route::get('/experience', 'PortfolioController@experience')->name('experience');
Route::get('/projects', 'PortfolioController@projects')->name('projects');
Route::get('/about', 'PortfolioController@about')->name('about');
Route::get('/contact', 'PortfolioController@contact')->name('contact');

