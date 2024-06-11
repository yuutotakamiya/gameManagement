<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\gameManagement;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


//管理画面を表示する
Route::get('accounts/gameManagement',[gameManagement::class,'index']);
//ログイン画面を表示する
Route::get('accounts/login',[LoginController::class,'dologin']);
//ログインする
Route::post('accounts/login',[LoginController::class,'dologin']);

//ログアウトする
Route::post('accounts/gameManagement',[LoginController::class,'dologout']);

