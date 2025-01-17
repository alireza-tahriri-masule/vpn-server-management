<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $buttonText;
    public $buttonClass;

    public function mount($buttonClass = '', $buttonText = '')
    {
        $this->buttonText = $buttonText;
        $this->buttonClass = $buttonClass;
    }

    public function render()
    {
        return view('livewire.button');
    }
}
