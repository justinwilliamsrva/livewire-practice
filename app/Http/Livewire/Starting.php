<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Starting extends Component
{
    public $name = "Jelly";
    public $loud = false;
    public $greeting = "Hello";

    public function resetName($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.starting');
    }
}
