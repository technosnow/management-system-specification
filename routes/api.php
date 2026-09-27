<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\DB;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('projects')->group(function(){
    Route::get('/',[ProjectsController::class, 'index']);
    Route::POST('/',[ProjectsController::class, 'store']);

});

Route::prefix('comments')->group(function(){
    Route::get('/{id}',[ProjectsController::class, 'destroy']);
    Route::POST('/{name}',[ProjectsController::class, 'Index_task']);
    Route::delete('/',[ProjectsController::class, 'store_task']);


});

// Route::delete('/{id}',function ($id,Request $request){
//     DB::table('products')->where('id',$id)->delete();
//     return'deleted';

// });

