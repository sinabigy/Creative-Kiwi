<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq;
use Illuminate\Support\Str;

class AdminAddFaqcomponent extends Component
{

    public $saveSuccess = false;
    public $post;

    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
    ];

    public function mount(){
        $this->post = new Faq();
    }

    public function savePost(){
        $this->post->user_id = 1;
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        $this->saveSuccess = true;
    }
    public function render()
    {
        return view('livewire.admin.admin-add-faqcomponent')->layout('layouts.dashboardlayout');
    }
}
