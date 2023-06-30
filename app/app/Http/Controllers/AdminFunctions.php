<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class AdminFunctions extends Controller
{
    //

    public function createCourse(Request $request) {
        $data = $request -> only(['name', 'teacher', 'category']);
        $course = new Courses([
            "name" => $data['name'],
            "teacher" => $data['teacher'],
            "category" => $data['category'],
            "cover_image" => " "
        ]);

        $course -> save();

        return redirect() -> back();
    }
}
