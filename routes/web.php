<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Student Image CRUD

Route::get('students', [StudentController::class, 'index']);
Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);







Route::get('/', function () {
    return view('welcome');
});
