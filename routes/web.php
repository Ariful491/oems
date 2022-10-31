<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware(['auth','verified'])->group(function (){
    /*=== Student Routes  ==*/
    Route::middleware(['student'])->group(function(){
        Route::get('/student',[StudentController::class,'index'])->name('student');
    });

    /*=== Teacher Routes  ==*/
  Route::middleware(['teacher'])->group(function(){
    /*=== Student Routes  ==*/
        Route::get('/teacher',[TeacherController::class,'index'])->name('teacher');

  });



/*

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/

});



require __DIR__.'/auth.php';
