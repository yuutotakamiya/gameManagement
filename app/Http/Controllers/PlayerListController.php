<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerListController extends Controller
{
    public function PlayerList(Request $request){
        if(!$request->session()->exists('login')){
            return redirect('accounts/login');
        }else {
            $playerList = [[
                    'id' => 1,
                    'name' => 'jobi',
                    'level' => 20,
                    'EXP' => 100,
                    'life' => 30
                ],[
                    'id' => 2,
                    'name' => 'yoshida',
                    'level' => 30,
                    'EXP' => 110,
                    'life' => 40

            ]];
            return view('accounts/playerList', ['accounts' => $playerList]);
        }
    }
}
