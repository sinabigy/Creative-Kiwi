<?php

namespace App\Http\Livewire\User;

use App\Models\Appraisal;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddAppraisalComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $description;
    public $asking_price;
    public $isDisabled;
    public $image;

    public function mount()
    {
        $this->asking_price = '0';

    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function addAppraisal()
    {
        $appraisal = new Appraisal();
        $appraisal->name = $this->name;
        $appraisal->email = $this->email;
        $appraisal->phone = $this->phone;
        $appraisal->subject = $this->subject;
        $appraisal->description = $this->description;
        $appraisal->asking_price = $this->asking_price;
        
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('appraisal', $imageName);
        $appraisal->image = $imageName;
        $appraisal->save();
        session()->flash('message', 'Appraisal has been sent successfully!');
    }

    public function render()
    {
        if (empty($this->email)) {
            $this->isDisabled = true;
        } else {
            $this->isDisabled = false;
        }
        return view('livewire.user.add-appraisal-component')->layout('layouts.withouthero');
    }
}
