<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Homecontroller extends Controller
{
    public function dashboard()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype =='0') {
                return view('user.home');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

 public function index()
 {
    return view('user.home');
 }
} 

