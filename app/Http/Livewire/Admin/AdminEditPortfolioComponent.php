<?php

namespace App\Http\Livewire\Admin;

use App\Models\Portfolio;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditPortfolioComponent extends Component
{
    use WithFileUploads;
    public $portfolio_slug;
    public $portfolio_id;
    public $title;
    public $slug;
    public $description;
    public $link;
    public $type;
    public $image;
    public $newimage;

    public function mount($portfolio_slug)
    {
        $this->portfolio_slug = $portfolio_slug;
        $portfolio = Portfolio::where('slug', $portfolio_slug)->first();
        $this->portfolio_id = $portfolio->id;
        $this->title = $portfolio->title;
        $this->slug = $portfolio->slug;
        $this->type = $portfolio->type;
        $this->link = $portfolio->link;
        $this->image = $portfolio->image;
        $this->newimage = $portfolio->newimage;
        $this->description = $portfolio->description;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updatePortfolio()
    {
        $portfolio = Portfolio::find($this->portfolio_id);
        $portfolio->title = $this->title;
        $portfolio->slug = $this->slug;
        $portfolio->description = $this->description;
        $portfolio->link = $this->link;
        $portfolio->type = $this->type;
        if($this->newimage)
        {
            unlink('assets/images/portfolios'.'/'.$portfolio->image);
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('portfolios', $imageName);
            $portfolio->image = $imageName;
        }
        $portfolio->save();
        session()->flash('message', 'Portfolio has ben updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-portfolio-component')->layout('layouts.dashboardlayout');
    }
}
