<?php

use App\Http\Controllers\SchoolController;
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
//     return view('index');
// });
Route::get('/', [SchoolController::class, 'index']);
Route::get('/about', [SchoolController::class, 'about']);
Route::get('/classes', [SchoolController::class, 'classes']);
Route::get('/facility', [SchoolController::class, 'facility']);
Route::get('/teacher', [SchoolController::class, 'teacher']);
Route::get('/becometeacher', [SchoolController::class, 'becometeacher']);
Route::get('/appointment', [SchoolController::class, 'appointment']);
Route::get('/testimonial', [SchoolController::class, 'testimonial']);
Route::get('/404', [SchoolController::class, 'error']);
Route::get('/contact', [SchoolController::class, 'contact']);