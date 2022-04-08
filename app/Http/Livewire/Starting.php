<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Starting extends Component
{
    public function render()
    {
        return view('livewire.starting', ['greeting'=>'Hello World']);
    }
}
