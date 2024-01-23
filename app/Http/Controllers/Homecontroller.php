<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Homecontroller extends Controller
{
    public function redirect()
    {dd('hey');
        if (Auth::id()) {
            if (Auth::user()->usertype =='0') {
                return view('dashboard');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    // Other methods and properties of the controller, if any
} 

