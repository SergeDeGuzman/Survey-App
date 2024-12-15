<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/questionnaires/view', 'App\Http\Controllers\QuestionnaireController@view');
Route::get('/questionnaires/create', 'App\Http\Controllers\QuestionnaireController@create');
Route::post('/questionnaires', 'App\Http\Controllers\QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}', 'App\Http\Controllers\QuestionnaireController@show');
Route::delete('/questionnaires/{questionnaire}', 'App\Http\Controllers\QuestionnaireController@destroy');
Route::delete('/questionnaires/{questionnaire}', 'App\Http\Controllers\QuestionnaireController@reset');

Route::get('/questionnaires/{questionnaire}/questions/create', 'App\Http\Controllers\QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'App\Http\Controllers\QuestionController@store');

Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'App\Http\Controllers\QuestionController@destroy');

Route::get('/surveys/{questionnaire}-{slug}', 'App\Http\Controllers\SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}', 'App\Http\Controllers\SurveyController@store');

require __DIR__.'/auth.php';
