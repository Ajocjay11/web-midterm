<?php

use App\Http\Controllers\API\ElectionSurveyPostController;
use App\Http\Controllers\API\ElectionSurveyControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/election-survey',[\App\Http\Controllers\API\ElectionSurveyControllerAPI::class,'index']);

Route::post('login',[ElectionSurveyControllerAPI::class,'login']);
Route::post('register',[ElectionSurveyControllerAPI::class,'register']);
Route::post('reset-password',[ElectionSurveyControllerAPI::class,'reset-password']);




Route::get('get-all-posts',[ElectionSurveyPostController::class,'getAllPosts']);
Route::get('get-post',[ElectionSurveyPostController::class,'getPost']);
Route::get('search-post',[ElectionSurveyPostController::class,'searchPost']);
