<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTestimonialComponent extends Component
{
    use WithPagination;
    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial->image) {
            unlink('assets/images/testimonials'.'/'.$testimonial->image);
        }
        $testimonial->delete();
        session()->flash('message', 'Product has been deleted successfully');
    }
    public function render()
    {
        $testimonials = Testimonial::paginate(10);
        return view('livewire.admin.admin-testimonial-component', ['testimonials'=>$testimonials])->layout('layouts.dashboardlayout');
    }
}
