<?php

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
Route::post('/slugify', ['as' => 'api.slugify', 'uses' => 'Api\BackendController@slugify']);
Route::post('/upload', ['as' => 'api.upload', 'uses' => 'Api\FrontendController@upload']);
Route::post('/uploadImage', ['as' => 'api.uploadimage', 'uses' => 'Api\FrontendController@uploadImage']);
Route::post('/delete_image', ['as' => 'api.upload', 'uses' => 'Api\FrontendController@delete_image']);
