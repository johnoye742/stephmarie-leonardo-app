<?php

namespace App\Http\Livewire;

use App\Models\CompletedLessons;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NextLesson extends Component
{
   
    public function render()
    {
        return view('livewire.next-lesson');
    }

    public function mount() {

    }

    public function next() {
        $lesson_id = $this ->componentParams;
        $url = $this -> params[1]; 
        $name = $this -> params[2];
        $username = Auth::getUser() -> username;
        $date = date('d-m-yyyy');
        $less = new CompletedLessons([
            'lesson_id' => $lesson_id,
            'username' => $username,
            'date' => $date
        ]);

        $finalUrl = strtolower(str_replace(' ', '-', $url));

        if($less -> save()) {
            return redirect() -> to('lesson', ['name' => $name, 'title' => $finalUrl]);
        }
        
    }
}
