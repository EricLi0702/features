<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrankScriptsController;
use App\Http\Controllers\AppCategoriesController;

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

Route::get('/pranks',[PrankScriptsController::class,'getPranks'])->name('allPranks');

Route::get('/category',[AppCategoriesController::class,'getAllCategories'])->name('allCategories');
Route::get('/category/{slug}',[AppCategoriesController::class,'getBySlug'])->name('bySlug');
Route::get('/category/{slug}',[AppCategoriesController::class,'getBySlug'])->name('bySlug');
