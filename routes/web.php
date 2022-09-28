<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function(){
    return view('tasks');
});

Route::post('/saveTask', [TaskController::class, 'store']);

/* 'saveTask' is route for sending data by post request (it is action of a form)
store is a method of Taskcontroller for storing data to database  */