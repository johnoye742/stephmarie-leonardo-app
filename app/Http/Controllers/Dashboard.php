<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    //
    public function show() {
        $auth = Auth::getUser();
        return view('dashboard');
    }
}
