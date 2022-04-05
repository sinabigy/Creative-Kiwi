<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        return view('livewire.services-component')->layout('layouts.withouthero');
    }
}
