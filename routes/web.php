<?php
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'QuestionController@index')->name('home');
Route::get('/profile', 'UserController@index')->name('profile');
Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/become-an-expert','UserController@becomeExpert')->name('become-an-expert');
Route::post('/user/become-an-expert','UserController@storeToBecomeExpert')->name('store-to-become-expert');


Route::get('/questions/add-question','QuestionController@create')->name('add-question');
Route::post('/questions/store-question','QuestionController@store')->name('store-question');
Route::get('/questions/{question}', 'QuestionController@show')->name('show-question');
Route::get('/questions/answer/{question}', 'QuestionController@answer')->name('answer-to-question');

Route::post('/questions/answers/store-answer', 'AnswerController@store')->name('store-answer');
Route::post('/questions/answers/{id}/like', 'LikeController@like')->name('answers-like');
Route::post('/questions/answers/{id}/dislike', 'DislikeController@dislike')->name('answers-dislike');

Route::get('/questions/answer/{answer}/show-comments', 'CommentController@show')->name('show-comments');

Route::post('/questions/answer/store-comment', 'CommentController@store')->name('store-comment');

Route::post('/questions/answers/comment/{id}/like', 'CommentLikesController@like')->name('comments-like');
Route::post('/questions/answers/comment/{id}/dislike', 'CommentDislikesController@dislike')->name('comments-dislike');
