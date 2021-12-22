<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Models\AnswersRepository;
use App\Models\Question;
use App\Models\QuestionRepository;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
Route::get('/test',function(){
 
return view('test') ;
}) ;


Route::get('/', function () {
    return view('welcome');

})->name('welcome');
Route::get('/checkactive', function () {
    return view('errors.NotActive');
})->name('checkactive');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home',[HomeController::class,'index'])->name('home') ;


Route::get('/cours.index',[CourseController::class,'index'])->name('indexcours') ;

Route::get('/cours.create',[CourseController::class,'create'])->name('createcours') ;
Route::post('/cours.create',[CourseController::class,'store'])->name('storecours') ;
Route::get('/cours.show/{id}',[CourseController::class,'show'])->name('showcourse') ;



Route::get('/exam.index',[ExamController::class,'index'])->name('indexexam') ;

Route::get('/exam.create',[ExamController::class,'create'])->name('createexam') ;
Route::post('/exam.store',[ExamController::class,'store'])->name('storeexam') ;

Route::get('/exam.edit/{id}',[ExamController::class,'edit'])->name('editexam') ;
Route::post('/exam.update',[ExamController::class,'update'])->name('updateexam') ;

Route::get('/exam.destroy/{id}',[ExamController::class,'destroy'])->name('destroyexam') ;




Route::get('/question.index',[QuestionController::class,'index'])->name('indexquestion') ;

Route::get('/question.create',[QuestionController::class,'create'])->name('createquestion') ;
Route::post('/question.store',[QuestionController::class,'store'])->name('storequestion') ;

Route::get('/exam.edit/{id}',[ExamController::class,'edit'])->name('editexam') ;
Route::post('/exam.update',[ExamController::class,'update'])->name('updateexam') ;

Route::get('/exam.destroy/{id}',[ExamController::class,'destroy'])->name('destroyexam') ;