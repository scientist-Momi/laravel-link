<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){
    Route::get('/links', [App\Http\Controllers\LinkController::class, 'index']);
    Route::post('/links/new', [App\Http\Controllers\LinkController::class, 'store']);
    Route::get('/links/new', [App\Http\Controllers\LinkController::class, 'create']);
    Route::get('/links/{link}', [App\Http\Controllers\LinkController::class, 'edit']);
    Route::post('/links/{link}', [App\Http\Controllers\LinkController::class, 'update']);
    Route::delete('/links/{link}', [App\Http\Controllers\LinkController::class, 'destroy']);

    Route::get('/settings', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/settings', [App\Http\Controllers\UserController::class, 'update']);
});

Route::post('/visit/{link}', [App\Http\Controllers\VisitController::class, 'store']);

Route::get('/{user}', [App\Http\Controllers\UserController::class, 'show']);




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
