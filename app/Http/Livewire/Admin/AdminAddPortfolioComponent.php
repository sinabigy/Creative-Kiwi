<?php

namespace App\Http\Livewire\Admin;

use App\Models\Portfolio;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddPortfolioComponent extends Component
{
    use WithFileUploads;
    public $portfolio_id;
    public $title;
    public $slug;
    public $description;
    public $link;
    public $type;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->title,'-');
    }


    public function addPortfolio()
    {
        $portfolio = new Portfolio();
        $portfolio->title = $this->title;
        $portfolio->slug = $this->slug;
        $portfolio->description = $this->description;
        $portfolio->link = $this->link;
        $portfolio->type = $this->type;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('portfolios', $imageName);
        $portfolio->image = $imageName;
        $portfolio->save();
        session()->flash('message', 'Portfolio has been created successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-portfolio-component')->layout('layouts.dashboardlayout');
    }
}
