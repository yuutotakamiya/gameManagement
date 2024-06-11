<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function dologin(Request $request){
        $request->session()->put('login',true);
        if($request['name']=='jobi'||$request['password']=='jobi'){
            return redirect('accounts/gameManagement');
        }
        else{
            return view('accounts/login');
        }
    }

    //ログアウトする
    public function dologout(Request $request)
    {
        $request->session()->forget('login');
        $request->session()->flush();
        return redirect('/');
    }
}
