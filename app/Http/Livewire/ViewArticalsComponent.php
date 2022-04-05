<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewArticalsComponent extends Component
{
    public function render()
    {
        return view('livewire.view-articals-component')->layout('layouts.withouthero');
    }
}
