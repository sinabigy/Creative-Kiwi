<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class SoldShopComponent extends Component
{
    use WithPagination;
	public $sorting;
	public $pagesize;
	public $sortOptions = [
		'default',
		'date',
		'price',
		'price-desc',
	];

	
	public function mount()
{
	$this->sorting = "default";
	$this->pagesize = 12;
}
	
    public function render()
    {
		Log::info("Sorting changed: " . $this->sorting);
	if ($this->sorting=='date') 
	{
		$products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
	}
	else if ($this->sorting=='price')
	{
		$products = Product::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
	}

	else if ($this->sorting=='price-desc')
        {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
	else {
		$products = Product::paginate($this->pagesize);
	}
	
	$categories = Category::all();
        return view('livewire.sold-shop-component', ['products'=> $products, 'categories'=>$categories])->layout("layouts.withouthero");
    }
}
