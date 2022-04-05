<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class MusicServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.services.music-service-component')->layout("layouts.withouthero");
    }
}
