<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

Route::get('/', function () {
    return redirect('/student');
});



Route::get('/farrel', function () {
    return " Selamat datang Farrel Ariq Nadhil";
});
Route::get('/student', [StudentController::class, 'index'])
    ->name('student.index');

Route::get('/student/add', [StudentController::class, 'create'])
    ->name('student.create');

Route::post('/student/add', [StudentController::class, 'store'])
    ->name('student.store');

Route::get('/student/edit/{id}', [StudentController::class, 'edit'])
    ->name('student.edit');

Route::put('/student/edit/{id}', [StudentController::class, 'update'])
    ->name('student.update');

Route:: get('/student/destroy/{id}', [StudentController::class, 'destroy'])
    ->name('student.destroy');