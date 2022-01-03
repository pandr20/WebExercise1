<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;
use Opis\Closure\SecurityException;
use phpDocumentor\Reflection\DocBlock\Tag;

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

Route::get('/', function() {
 //  return "Welcome to Laravel of Web Technologies E2021<br>Edit this page to get started 😄";
   return view('mainIndex');
   



});

 /* departments */
   
Route::get('/departments', [DepartmentController::class, 'index'])->name("index"); 
 Route::get('/departments/create', [DepartmentController::class, 'create']); 
 Route::post('/departments', [DepartmentController::class, 'store']);
 Route::get('/departments/{department:id}', [DepartmentController::class, 'show'])->name("show"); 
 Route::get('/departments/{department:id}/edit', [DepartmentController::class, 'edit']); 
 Route::put('/departments/{department:id}', [DepartmentController::class, 'update']);
 Route::delete('/departments/{department:id}', [DepartmentController::class, 'destroy'])->name("department.destroy");


 /* courses */
 Route::get('/courses', [CourseController::class, 'index'])->name("Course.index"); 
 Route::get('/courses/create', [CourseController::class, 'create']);
 Route::post('/courses', [CourseController::class, 'store']); 
 Route::get('/courses/{course:id}', [CourseController::class, 'show'])->name("course.show");
 Route::get('/courses/{course:id}/edit', [CourseController::class, 'edit']); 
 Route::put('/courses/{course:id}', [CourseController::class, 'update']);
 Route::delete('/courses/{course:id}', [CourseController::class, 'destroy'])->name("course.destroy");
 //Route::post('/courses/{course:id}/update', [CourseController::class, 'edit']); 
 
// Route::get('/departments', [DepartmentController::class, 'index']); 
