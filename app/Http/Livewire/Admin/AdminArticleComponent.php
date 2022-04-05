<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Article;
use Livewire\WithPagination;

class AdminArticleComponent extends Component
{

    use WithPagination;

    public function deleteArticle($id)
    {
        $article = Article::find($id);
        $article->delete();
        session()->flash('message', 'Article has been deleted successfully');
    }
    public function render()
    {
        $articles = Article::paginate(10);
        return view('livewire.admin.admin-article-component', ['articles'=>$articles])->layout('layouts.dashboardlayout');
    }
}
