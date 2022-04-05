<?php

namespace App\Http\Livewire\Newsletter;

use App\Models\Newsletter;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Verification extends Component
{
    public $slug;

    public function acceptOrDecline($accepted){
        Log::info($accepted);
        if ($accepted != "1") {
            Log::info("called");
            $newsletter = Newsletter::where('email', base64_decode($accepted))->where('status', 0)->first();
            if ($newsletter) {
                Log::info("1");
                $newsletter->status = 1;
                $newsletter->save();
                session()->flash('message', 'You have been added to the newsletter!');
            } elseif (Newsletter::where('email', base64_decode($accepted))->where('status', 1)->first()) {
                Log::info("2");
                session()->flash('message', 'You are already accepted to receive newsletters!');
            } else {
                Log::info("called");
                session()->flash('message', 'Wrong extension point, please click on the link you have received via email and follow the instructions properly!');
            }
        }
    }
    public function render()
    {
        return view('livewire.newsletter.verification')->layout('layouts.withouthero');
    }
}
