<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class DevServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.services.dev-service-component')->layout("layouts.withouthero");
    }
}
