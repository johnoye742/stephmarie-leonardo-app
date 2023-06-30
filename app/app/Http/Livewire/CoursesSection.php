<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use Livewire\Component;

use function PHPUnit\Framework\arrayHasKey;

class CoursesSection extends Component
{
    public $courses;
    public $str;
    public $cart = [];
    public function render()
    {
        $this -> courses = Courses::all();
        return view('livewire.courses-section');
    }

    public function addToCart($id) {
        $id = ['id' => $id[0], 'name' => $id[1], 'category' => $id[2]];
        array_push($this -> cart, $id);
    }
}
