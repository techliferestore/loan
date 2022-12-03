<?php

namespace App\Http\Livewire;
use App\Models\postoffice;
use Livewire\Component;

class Pincode extends Component
{

    public $pincode="";

    protected $rules = [
        'pincode' => 'numeric|required|min:6',
    ];

    protected $messages = [
        'pincode.required' => 'Please enter correct pin code',
        
    ];
    public function render()
    {
        
       
        
        return view('livewire.pincode');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

}
