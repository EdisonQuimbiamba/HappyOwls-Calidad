<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use App\Models\User;

class Index extends Component
{
    public function render()
    {
        $events = Event::all();
 
        return view('livewire.index', compact('events'));
    }
}
