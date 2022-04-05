<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonial;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddTestimonialComponent extends Component
{

    use WithFileUploads;
    public $testimonial_id;
    public $title;
    public $slug;
    public $description;
    public $name;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name,'-');
    }


    public function addTestimonial()
    {
        $testimonial = new Testimonial();
        $testimonial->title = $this->title;
        $testimonial->slug = $this->slug;
        $testimonial->description = $this->description;
        $testimonial->name = $this->name;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('testimonials', $imageName);
        $testimonial->image = $imageName;
        $testimonial->save();
        session()->flash('message', 'Testimonial has been created successfully!');
    }
    

    public function render()
    {
        return view('livewire.admin.admin-add-testimonial-component')->layout('layouts.dashboardlayout');
    }
}
