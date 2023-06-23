<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter2 extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter2');
    }
}
