<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use App\Models\Lessons;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AddLess extends Component
{
    public $courses;
    public $parents;
    public $course_id;
    public function render()
    {
        $this -> courses = Courses::all();
        Log::alert("log works");
        
        return view('livewire.add-less');
    }

    public function change() {
        Log::alert("added");
        $this -> parents = Lessons::all() -> where("course_id", null, $this -> course_id);
        Log::debug($this -> parents);
    }
}
