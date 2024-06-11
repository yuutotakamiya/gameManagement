<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerItemListController extends Controller
{
    //所持アイテム一覧を表示する
    public function Playeritem(Request $request)
    {
        if(!$request->session()->exists('login')){
            return redirect('accounts/login');

        }else{
            $Player_item=[[
                'id'=>1,
                'Player_name'=>'jobi',
                'item_name'=>'黄金の卵',
                'Quantity_in_possession'=>2,

            ],[
                'id'=>2,
                'Player_name'=>'yoshida',
                'item_name'=>'卵',
                'Quantity_in_possession'=>1,
            ]];
            return view('accounts/playeritemList',['accounts'=>$Player_item]);
        }
    }
}
