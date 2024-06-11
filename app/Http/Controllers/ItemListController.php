<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemListController extends Controller
{
    public function ItemList(Request $request){
        if(!$request->session()->exists('login')){
            return redirect('accounts/login');
        }else{
            $itemList=[[
                'id'=>1,
                'name'=>'卵',
                'type'=>'消耗品',
                'effect_size'=>4,
                'Description'=>'何かに使うことができる'
            ],[
                'id'=>2,
                'name'=>'黄金の卵',
                'type'=>'消耗品',
                'effect_size'=>4,
                'Description'=>'少しHPを回復することができる'
            ]];

            return view('accounts/itemList',['accounts'=>$itemList]);
        }
    }
}
