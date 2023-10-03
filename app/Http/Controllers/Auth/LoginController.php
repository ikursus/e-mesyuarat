<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function borangLogin() {

        return view('auth.login');

    }

    function checkLogin() {
        return 'Anda berjaya login';
    }
}
