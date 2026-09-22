<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('projects')->group(function(){
Route::get('/',[ProjectsController::class, 'index']);
Route::POST('/',[ProjectsController::class, 'store']);

});

