<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class Test extends Controller
{
    //
    public function show() {
        return view("livewire.counter");
    }

    public function req(Request $request): TestRequest {
        $validated = $request -> validated;
    }
}
