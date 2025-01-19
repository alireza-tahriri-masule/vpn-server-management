<?php

namespace App\Livewire\C;

use Livewire\Component;

class Hdr extends Component
{
    // Define the type of the property for better clarity
    public array $menuItems = [];

    /**
     * Set up default menu items
     */
    public function mount(): void
    {
        $this->menuItems = [
            ['title' => 'Active Accounts', 'isActive' => true],
            ['title' => 'Inactive Accounts', 'isActive' => false]
        ];
    }

    /**
     * Render the component and pass data to the view
     */
    public function render()
    {
        // Return the view and pass the menuItems data
        return view('livewire.c.hdr', [
            'menuItems' => $this->menuItems
        ]);
    }
}
