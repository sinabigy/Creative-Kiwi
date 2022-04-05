<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TOSComponent extends Component
{
    public function render()
    {
        return view('livewire.t-o-s-component')->layout('layouts.withouthero');
    }
}
