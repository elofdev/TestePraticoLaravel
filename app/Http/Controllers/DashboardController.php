<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        if(Auth::user()->hasRole('administrator')){
            return view('auth.admin.dashboard');
        }elseif (Auth::user()->hasRole('user')){
            return view('auth.user.dashboard');
        }else{
            return view('home');
        }
    }
}
