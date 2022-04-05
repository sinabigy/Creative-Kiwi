<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class WritingServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.services.writing-service-component')->layout("layouts.withouthero");
    }
}
