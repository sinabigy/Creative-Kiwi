<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Str;

class ArticleEditComponent extends Component
{
    public $article_slug;
    public $article_id;
    public $title;
    public $slug;
    public $body;

    public function mount($article_slug)
    {
        $this->article_slug = $article_slug;
        $article = Article::where('slug', $article_slug)->first();
        $this->article_id = $article->id;
        $this->title = $article->title;
        $this->slug = $article->slug;
        $this->body = $article->body;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updateArticle()
    {
        $article = Article::find($this->article_id);
        $article->title = $this->title;
        $article->slug = $this->slug;
        $article->body = $this->body;
        $article->save();
        session()->flash('message', 'Article has ben updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.article-edit-component')->layout('layouts.dashboardlayout');
    }
}
