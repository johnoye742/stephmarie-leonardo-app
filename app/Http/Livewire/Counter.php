<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public $users;
    public $count = 0;

    public function increment() {
        $this->count++;
    }

    public function render()
    {
        $this -> users = User::all() -> where('username', '', 'johnoye742');
        return view('livewire.counter');
    }
}

?>