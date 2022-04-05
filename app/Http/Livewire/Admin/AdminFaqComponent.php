<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;


class AdminFaqComponent extends Component
{
    use WithPagination;

    public function deleteFaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        session()->flash('message', 'Faq has been deleted successfully');
    }

    public function render()
    {
        $faqs = Faq::paginate(10);
        return view('livewire.admin.admin-faq-component', ['faqs'=>$faqs])->layout('layouts.dashboardlayout');
    }
}
