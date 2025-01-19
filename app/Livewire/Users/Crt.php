<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Ramsey\Uuid\Guid\Guid;

class Crt extends Component
{
    public string $uuid = '';

    /**
     * Initialize the component and set the initial UUID value.
     */
    public function mount(): void
    {
        // Generate a default UUID and assign it to the uuid property when the component is initialized
        $this->uuid = Guid::uuid4()->toString();
    }

    /**
     * Generates a new UUID when the button is clicked.
     * The generated UUID is assigned to the $uuid property.
     */
    public function generateUuid(): void
    {
        // Generate a UUID (v4) and assign it to the uuid property
        $this->uuid = Guid::uuid4()->toString();
    }

    /**
     * Renders the Livewire component view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        // Return the component's view
        return view('livewire.users.crt');
    }
}
