<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/users',[AuthController::class,'index'])->name('home');
Route::get('/users/{id}',[AuthController::class,'single_user'])->name('single_user');
Route::get('/users_delete/{id}',[AuthController::class,'delete_user'])->name('delete_user');
Route::post('/users_input',[AuthController::class,'users_input'])->name('users_input');
