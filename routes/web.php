<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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
// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::option();

//Common routes naming
//index - show all data or students
//show - show a single data or student
//create - show a form to a new user
//store - store a data
//edit - show form to edit a data
//update - update a data
//destroy  - delete a data

Route::get('/',[StudentController::class, 'index']);
Route::get('/register',[UserController::class, 'register']);
Route::get('/login',[UserController::class, 'login']);
Route::post('/store',[UserController::class, 'store']);