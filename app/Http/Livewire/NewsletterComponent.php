<?php

namespace App\Http\Livewire;

use App\Mail\Newsletter as MailNewsletter;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;


class NewsletterComponent extends Component
{
    public $email;
    public $ip;

    public function addEmail()
    {
        if (Newsletter::where('email', $this->email)->first()) {
            session()->flash('message', 'Your email already exist in the database');
        } else {
            $product = new Newsletter();
            $product->email = $this->email;
            $product->ip = request()->ip();
            $product->save();
            Mail::to('oudadaemail@test.com')->send(new MailNewsletter($this->email));
            session()->flash('message', 'You have been added to the newsletter!');
        }   
    }


    public function render()
    {
        return view('livewire.newsletter-component')->layout('layouts.withouthero');
    }
}
