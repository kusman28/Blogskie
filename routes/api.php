<?php

use App\Http\Controllers\API\Posts\PostController;
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

Route::group(['namespace' => 'Posts', 'prefix' => 'posts'], function() {
    Route::get('/', [PostController::class, 'index']);
    Route::get('/{slug}', [PostController::class, 'getArticle']);
    Route::post('/create', [PostController::class, 'store']);
});