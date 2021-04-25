<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index']);
Route::post('/make', [PublicController::class, 'make']);

Route::get('/about', [PublicController::class, 'about']);
Route::get('/contact', [PublicController::class, 'contact']);
Route::get('/tos', [PublicController::class, 'tos']);
Route::get('/pp', [PublicController::class, 'pp']);