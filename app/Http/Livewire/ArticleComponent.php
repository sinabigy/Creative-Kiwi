<?php

namespace App\Http\Livewire;

use App\Models\Article as BlogPost;
use Livewire\Component;

class ArticleComponent extends Component
{
    public $post;

    public function mount($slug){
        $this->post = BlogPost::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.article-component')->layout('layouts.withouthero');
    }
}
