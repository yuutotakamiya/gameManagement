<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameManagementController extends Controller
{
    public function gameManagement(Request $request){
        if(!$request->session()->exists('login')){
            return redirect('accounts/login');

        }else{
            return view('accounts/gameManagement');
        }
    }
}
