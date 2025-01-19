<?php

namespace App\Livewire\C;

use Livewire\Component;

class Btn extends Component
{
    // Define the types of the properties for better clarity
    public string $buttonText;
    public string $buttonClass;

    /**
     * Mount the component with optional button class and text
     *
     * @param string $buttonClass
     * @param string $buttonText
     */
    public function mount(string $buttonClass = '', string $buttonText = ''): void
    {
        // Assign the provided values to the component's properties
        $this->buttonText = $buttonText;
        $this->buttonClass = $buttonClass;
    }

    /**
     * Render the component and pass data to the view
     */
    public function render()
    {
        // Return the view and pass buttonText and buttonClass to it
        return view('livewire.c.btn', [
            'buttonText' => $this->buttonText,
            'buttonClass' => $this->buttonClass
        ]);
    }
}
