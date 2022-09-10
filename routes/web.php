<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class,'index'])->name('home');
Route::get('/student-course', [StudentController::class,'addCourse'])->name('student.course');
Route::get('/student-me', [StudentController::class,'manage'])->name('student.me');
Route::get('/student-edit/{id}', [StudentController::class,'update'])->name('student.edit');
Route::post('/add-course', [StudentController::class, 'create'])->name('student.new' );
Route::post('/update-course/{id}', [StudentController::class, 'edit'])->name('student.update' );
Route::get('/delete-course/{id}', [StudentController::class, 'delete'])->name('student.delete' );

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
