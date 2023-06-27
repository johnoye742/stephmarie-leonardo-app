<?php

namespace App\Http\Livewire;

use App\Models\CompletedLessons;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NextLesson extends Component
{
    public $data;
   
    public function render()
    {
        return view('livewire.next-lesson');
    }

    public function mount() {
        $name = $this -> data['url'];
        Log::debug($name);
    }

    public function next() {
        Log::debug($this -> data);
        $lesson_id = $this -> data['lesson_id'];
        $url = $this -> data['url']; 
        $name = $this -> data['name'];
        
        $username = Auth::getUser() -> username;
        $date = date('d-m-yyyy');
        $less = new CompletedLessons([
            'lesson_id' => $lesson_id,
            'username' => $username,
            'date' => $date
        ]);

        $finalUrl = strtolower(str_replace(' ', '-', $url));

        if($less -> save()) {
            return redirect() -> route('lesson', ['name' => $name, 'title' => $finalUrl]);
        }
        
    }
}
