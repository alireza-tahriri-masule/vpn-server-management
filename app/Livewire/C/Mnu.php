<?php

namespace App\Livewire\C;

use Livewire\Component;

class Mnu extends Component
{
    // Define the type of the property for better clarity
    public array $menuItems;

    /**
     * Mount the component with the provided menu items
     *
     * @param array $menuItems
     */
    public function mount(array $menuItems): void
    {
        // Assign the passed menu items to the component's property
        $this->menuItems = $menuItems;
    }

    /**
     * Render the component and pass data to the view
     */
    public function render()
    {
        // Return the view and pass the menuItems data
        return view('livewire.c.mnu', [
            'menuItems' => $this->menuItems
        ]);
    }
}
