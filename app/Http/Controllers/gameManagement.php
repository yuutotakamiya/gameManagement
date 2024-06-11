<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameManagement extends Controller
{
    //管理画面を表示する
    public function index(Request $request){
        return redirect('accounts/gameManagement');
    }
}
