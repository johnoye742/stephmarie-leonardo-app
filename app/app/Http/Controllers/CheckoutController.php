<?php

namespace App\Http\Controllers;

use App\Models\UsersCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //
    public function free(Request $request) {
        $validatedData = $request -> validate([
            'cart' => 'required|array'
        ]);

        $cart = $validatedData['cart'];
        foreach($cart as $item) {
            $it = explode(',', $item);
            $id = $it[0];
            $name = $it[1];
            $category = $it[2];
            $username = Auth::getUser() -> username;

            $course = new UsersCourses([
                'course_id' => $id,
                'username' => $username
            ]);

            if($course -> save()) {
                return redirect() -> intended('dashboard');
            }

            
        }
    }
}
