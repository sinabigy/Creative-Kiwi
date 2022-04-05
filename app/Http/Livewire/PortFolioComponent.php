<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PortFolioComponent extends Component
{
    public function render()
    {
        return view('livewire.port-folio-component')->layout('layouts.withouthero');
    }
}
