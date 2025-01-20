<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Ramsey\Uuid\Guid\Guid;

class Crt extends Component
{
    public string $uuid;
    public string $n;
    public string $e;
    public string $p;
    public string $ph;
    public string $r;
    public string $pl;
    public ?string $t_e = null;
    public ?string $s_s = null;
    public ?string $s_e = null;

    /**
     * Initialize the component and set the initial UUID value.
     *
     * @return void
     */
    public function mount(): void
    {
        // Generate a default UUID and assign it to the uuid property when the component is initialized
        $this->uuid = Guid::uuid4()->toString();
    }

    /**
     * Define validation rules for the user data.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'uuid' => 'required|string',
            'n' => 'required|string|max:255',  // Full name
            'e' => 'required|email|max:255',  // Email address
            'p' => 'required|string|min:6|max:32',  // Password
            'ph' => 'required|string|max:15',  // Phone number
            'r' => 'required|string|max:255|in:user,admin',  // Role
            'pl' => 'required|string|max:255',  // Place of birth (Example)
            't_e' => 'nullable|date',  // Date of birth (Example)
            's_s' => 'nullable|string|max:255',  // Subscription Status
            's_e' => 'nullable|date',  // Subscription Expiry Date
        ];
    }

    /**
     * Generates a new UUID when requested.
     *
     * @return void
     */
    public function generateUuid(): void
    {
        // Generate a new UUID (v4) and assign it to the uuid property
        $this->uuid = Guid::uuid4()->toString();
    }

    /**
     * Saves the validated user data and redirects to the home page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save()
    {
        // Validate the user input
        $validated = $this->validate();

        // Handle 'r' and 'pl' attributes correctly
        $validated['r'] = $validated['r'][0];  // Ensure single character for role
        $validated['pl'] = $validated['pl'][0];  // Ensure single character for place

        // Create a new user with the validated data
        User::create($validated);

        // Reset the component's state
        $this->reset();
    }

    /**
     * Renders the Livewire component view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        // Return the view for creating a new user
        return view('livewire.users.crt');
    }
}
