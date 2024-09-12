<?php

use App\Http\Controllers\FrontentController;
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


    Route::get('/',[FrontentController::class,'index'])->name('homepage');
    // Route::get('/home',[FrontentController::class,'home'])->name('home');
    Route::get('/About-us',[FrontentController::class,'about'])->name('about');
    Route::get('/Course',[FrontentController::class,'course'])->name('course');
    Route::get('/contact-us',[FrontentController::class,'contact'])->name('contact');
    Route::get('/logIn',[FrontentController::class,'logIn'])->name('logIn');
    Route::get('/signIn',[FrontentController::class,'signIn'])->name('signIn');
    Route::get('/signIn',[FrontentController::class,'signIn'])->name('signIn');

Route::prefix('user')->group(function()

{
    Route::get('/controlPanel',[FrontentController::class,'controlPanel'])->name('controlPanel');
    Route::get('/studentstable',[FrontentController::class,'studentstable'])->name('studentstable');
    Route::get('/addStudents',[FrontentController::class,'addStudents'])->name('addStudents');
    Route::post('save-student',[FrontentController::class,'saveStudent'])->name('saveStudent');
    Route::get('edit-student/{id}',[FrontentController::class,'editStudent'])->name('editStudent');
    Route::post('update-student',[FrontentController::class,'updateStudent'])->name('updateStudent');
    Route::get('delete-student',[FrontentController::class,'deleteStudent'])->name('deleteStudent');
    Route::get('view-student',[FrontentController::class,'viewStudent'])->name('viewStudent');




}  
);

