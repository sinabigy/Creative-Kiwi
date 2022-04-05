<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class DesignServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.services.design-service-component')->layout("layouts.withouthero");
    }
}
