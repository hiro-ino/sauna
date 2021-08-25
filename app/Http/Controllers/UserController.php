<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;

class UserController extends Controller
{
      function mypage()
    {
        $user = Auth::user();
        return view('mypage', ['user' =>$user]);
    }
}
