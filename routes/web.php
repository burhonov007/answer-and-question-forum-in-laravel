<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', [App\Http\Controllers\QuestionController::class, 'index'])->name('home');
Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('profile');
Route::get('/logout',[\App\Http\Controllers\UserController::class, 'logout'])->name('logout');



Route::get('/questions/add-question',[\App\Http\Controllers\QuestionController::class, 'create'])->name('add-question');
Route::post('/questions/store-question',[\App\Http\Controllers\QuestionController::class, 'store'])->name('store-question');
Route::get('questions/{question}', [\App\Http\Controllers\QuestionController::class, 'show'])->name('show-question');
Route::get('/questions/answer/{question}', [\App\Http\Controllers\QuestionController::class, 'answer'])->name('answer-to-question');




Route::post('/answers/store-answer', [\App\Http\Controllers\AnswerController::class, 'store'])->name('store-answer');
Route::post('/answers/{id}/like', 'LikeController@like')->name('answers-like');
Route::post('/answers/{id}/dislike', 'DislikeController@dislike')->name('answers-dislike');

//Route::get('/', [QuestionsController::class, 'index'])->name('main');
//Route::post('questions/comment/{question}', [QuestionsController::class, 'comment']);
//Route::get('questions/user/{user}', [QuestionsController::class, 'user']);
//Route::get('questions/answer/{question}/{answer}', [QuestionsController::class, 'test']);
//Route::post('answers/comment/{answer}', [AnswersController::class, 'comment']);

