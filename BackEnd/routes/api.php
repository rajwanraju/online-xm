<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResource('/Exams','ExamController');
Route::apiResource('/Exam-Question','ExamQuestionController');
Route::apiResource('/Courses','CourseController');
Route::apiResource('/Question-Type','QuestionTypeController');
Route::group(['prefix'=>'Exam'],function(){
	Route::apiResource('/{Exam}/Questions','ExamQuestionController');
});
