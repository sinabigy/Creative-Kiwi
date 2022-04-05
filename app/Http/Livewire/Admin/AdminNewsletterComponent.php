<?php

namespace App\Http\Livewire\Admin;

use App\Models\Newsletter;
use Livewire\WithPagination;

use Livewire\Component;

class AdminNewsletterComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $newsletters = Newsletter::paginate(10);
        return view('livewire.admin.admin-newsletter-component', ['newsletters'=>$newsletters])->layout('layouts.dashboardlayout');
    }
}
