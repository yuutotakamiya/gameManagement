<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //アカウント一覧を表示する
    public function index(Request $request){

        if(!$request->session()->exists('login')){
            return redirect('accounts/login');
        }
        else{
            $data = [[
                'name'=>'テスト',
                'password'=>'kadai2',
            ],[
                'name'=>'<h1>jobi</h1>',
                'password'=>'kadai3'
            ]];
            return view('accounts/index',['accounts'=>$data]);
        }
        //return view('accounts/index',['title'=>$title]);

        //セッションに指定のキーで値を保存
        //$request->session()->put('account_key',1);

        //セッションから指定のキーの値を取得
        //$value = $request->session()->get('account_key');

        //指定したデータをセッションから削除
        //$request->session()->forget('account_key');

        //セッションのすべてのデータを削除
        //$request->session()->flush();

        //  セッションに指定したキーが存在するかどうか判定
        //if($request->session()->exists('account_key')){
            //Debugbar::info($value);
        //}

        //デバッグ方法
        //dd($value);
        //Debugbar::info($value);
        //Debugbar::error('エラー');


    }
}
