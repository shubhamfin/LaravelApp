<?php

namespace App\Http\Livewire;

use App\Models\posts;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    
    public function submitform()
    {
       
         
    }
    public function render()
    {
         
        posts::class;
        return view('livewire.contact-form');
    }

}
