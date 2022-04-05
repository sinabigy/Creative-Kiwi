<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class MarketingServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.services.marketing-service-component')->layout("layouts.withouthero");
    }
}
