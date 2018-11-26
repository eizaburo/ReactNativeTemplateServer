<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function isMailExist(Request $request)
    {
        $user = \App\User::where('email',$request->email)->get();
        if(count($user)){
            $res['exist'] = true;
            return $res;
        }else{
            $res['exist'] = false;
            return $res;
        }
    }
}
