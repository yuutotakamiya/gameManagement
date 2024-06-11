<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function dologin(Request $request){
        if($request['name']=='jobi'||$request['password']=='jobi'){
            return redirect('accounts/gameManagement');
        }
        else{
            return view('accounts/login');
        }
    }

    //ログアウトする
    public function logout()
    {
        session_start();
        session_destroy();
        $_SESSION = [];
        return redirect('accounts/login');
        //header('Location: ./index.php');
    }
}
