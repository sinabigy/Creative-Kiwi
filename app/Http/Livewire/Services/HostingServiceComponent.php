<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class HostingServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.services.hosting-service-component')->layout("layouts.withouthero");
    }
}
