<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;

    public function mount(){
        $this->count = 0;
    }

    public function add(){
        $this->count++;
    }
    public function remove(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
