<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonial;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditTestimonialComponent extends Component
{
    use WithFileUploads;
    public $testimonial_slug;
    public $testimonial_id;
    public $title;
    public $slug;
    public $description;
    public $name;
    public $image;
    public $newimage;

    public function mount($testimonial_slug)
    {
        $this->testimonial_slug = $testimonial_slug;
        $testimonial = Testimonial::where('slug', $testimonial_slug)->first();
        $this->testimonial_id = $testimonial->id;
        $this->title = $testimonial->title;
        $this->slug = $testimonial->slug;
        $this->name = $testimonial->name;
        $this->image = $testimonial->image;
        $this->newimage = $testimonial->newimage;
        $this->description = $testimonial->description;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateTestimonial()
    {
        $testimonial = Testimonial::find($this->testimonial_id);
        $testimonial->title = $this->title;
        $testimonial->slug = $this->slug;
        $testimonial->description = $this->description;
        $testimonial->name = $this->name;
        if($this->newimage)
        {
            unlink('assets/images/testimonials'.'/'.$testimonial->image);
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('testimonials', $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->save();
        session()->flash('message', 'Testimonial has ben updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-testimonial-component')->layout('layouts.dashboardlayout');
    }
}
