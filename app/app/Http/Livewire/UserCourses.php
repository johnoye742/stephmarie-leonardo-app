<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use App\Models\UsersCourses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class UserCourses extends Component
{
    public $gcourse;
    public $courses = [];
    public function render()
    {
        $username = Auth::user() -> username;
        $this -> gcourse = UsersCourses::all() -> where('username', null, $username);
        
        foreach($this -> gcourse as $gcou) {
               
            $cou = Courses::find($gcou -> course_id);
            array_push($this -> courses, $cou);
        }

        return view('livewire.user-courses');
        
    }
}
