<?php

namespace App\Http\Livewire\Admin;

use App\Models\Portfolio;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPortfolioComponent extends Component
{
    use WithPagination;
    public function deletePortfolio($id)
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio->image) {
            unlink('assets/images/portfolios'.'/'.$portfolio->image);
        }
        $portfolio->delete();
        session()->flash('message', 'Product has been deleted successfully');
    }
    public function render()
    {
        $portfolios = Portfolio::paginate(10);
        return view('livewire.admin.admin-portfolio-component', ['portfolios'=>$portfolios])->layout('layouts.dashboardlayout');
    }
}
