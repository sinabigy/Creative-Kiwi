<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminEditFaqcomponent extends Component
{
    public $faq_slug;
    public $faq_id;
    public $title;
    public $slug;
    public $body;

    public function mount($faq_slug)
    {
        $this->faq_slug = $faq_slug;
        $faq = Faq::where('slug', $faq_slug)->first();
        $this->faq_id = $faq->id;
        $this->title = $faq->title;
        $this->slug = $faq->slug;
        $this->body = $faq->body;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updateArticle()
    {
        $faq = Faq::find($this->faq_id);
        $faq->title = $this->title;
        $faq->slug = $this->slug;
        $faq->body = $this->body;
        $faq->save();
        session()->flash('message', 'Faq has ben updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-faqcomponent')->layout('layouts.dashboardlayout');
    }
}
