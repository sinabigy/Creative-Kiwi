<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Str;

class AddContactComponent extends Component
{
    public $saveSuccess = false;
    public $post;

    protected $rules = [
        'post.name' => 'required|min:6',
        'post.email' => 'required|min:6',
        'post.subject' => 'required|min:6',
        'post.message' => 'required|min:6',
    ];

    public function mount(){
        $this->post = new Contact();
    }

    public function savePost(){
        $this->post->save();
        $this->saveSuccess = true;
    }
    public function render()
    {
        return view('livewire.add-contact-component');
    }
}
