<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\gameManagementController;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlayerItemListController;
use App\Http\Controllers\PlayerListController;
use Illuminate\Support\Facades\Route;

//ログイン画面を表示する
Route::get('/',[LoginController::class,'dologin']);

//ログインする
Route::post('/',[LoginController::class,'dologin']);

//管理画面を表示する
Route::get('accounts/gameManagement',[gameManagementController::class,'gameManagement']);

//ユーザー一覧を表示する
Route::get('accounts/index',[AccountController::class,'index']);

//プレイヤー一覧を表示する
Route::get('accounts/playerList',[PlayerListController::class,'PlayerList']);

//アイテム一覧を表示する
Route::get('accounts/itemList',[ItemListController::class,'ItemList']);

//所持アイテム一覧を表示する
Route::get('accounts/playeritemList',[PlayerItemListController::class,'Playeritem']);

//ログアウトする
Route::post('accounts/dologout',[LoginController::class,'dologout']);

