<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Starting extends Component
{
    public $name = "Jelly";

    public function mount( $name)
    {
        $this->name = $name;
    }

    public function updatedName()
    {
        $this->name = strtoupper($this->name);

    }

    public function render()
    {
        return view('livewire.starting');
    }
}
