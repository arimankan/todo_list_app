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
// Route::resource('task', 'TaskController');
Route::get('/', 'TaskController@getTasks');
Route::get('/complete-task/{id}', 'TaskController@completeTask');
Route::get('/delete-task/{id}', 'TaskController@deleteTask');


Route::get('/create-task', function() {
    return view('task/create-task');
});

Route::get('/edit-task/{id}', 'TaskController@editTask');
Route::get('/view-task/{id}', 'TaskController@viewTask');

Route::post('/save-task', 'TaskController@saveTask');
Route::post('/update-task', 'TaskController@updateTask');
