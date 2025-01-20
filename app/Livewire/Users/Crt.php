<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Ramsey\Uuid\Guid\Guid;

class Crt extends Component
{
    // Public properties to hold user data
    public string $uuid;  // The unique identifier for the user
    public string $n;     // The user's full name
    public string $e;     // The user's email address
    public string $p;     // The user's password
    public string $ph;    // The user's phone number
    public string $r;     // The user's role (e.g., user, admin)
    public string $pl;    // The user's place of birth
    public ?string $t_e = null;  // The user's date of birth (optional)
    public ?string $s_s = null;  // The user's subscription status (optional)
    public ?string $s_e = null;  // The user's subscription expiry date (optional)

    /**
     * The mount method is called when the component is initialized.
     * It sets the initial UUID value for the user when the component is first mounted.
     *
     * @return void
     */
    public function mount(): void
    {
        // Generate a unique UUID (v4) for the user and assign it to the uuid property
        $this->uuid = Guid::uuid4()->toString();
    }

    /**
     * Define validation rules for the user data.
     *
     * This method ensures that the data entered by the user is valid
     * according to predefined rules. These rules are enforced during
     * the data saving process.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'uuid' => 'required|string',               // The UUID must be a string
            'n' => 'required|string|max:255',           // Full name must be a string with a max length of 255
            'e' => 'required|email|max:255',            // Email must be a valid email address with a max length of 255
            'p' => 'required|string|min:6|max:32',     // Password must be a string between 6 and 32 characters
            'ph' => 'required|string|max:15',           // Phone number must be a string with a max length of 15
            'r' => 'required|string|max:255|in:user,admin',  // Role must be either 'user' or 'admin'
            'pl' => 'required|string|max:255',          // Place of birth must be a string with a max length of 255
            't_e' => 'nullable|date',                   // Date of birth must be a valid date (optional)
            's_s' => 'nullable|string|max:255',         // Subscription status must be a string with a max length of 255 (optional)
            's_e' => 'nullable|date',                   // Subscription expiry date must be a valid date (optional)
        ];
    }

    /**
     * Generates a new UUID when requested.
     *
     * This method is invoked when a new UUID is needed for the user.
     * It generates a unique UUID (v4) and assigns it to the uuid property.
     *
     * @return void
     */
    public function generateUuid(): void
    {
        // Generate a new UUID (v4) and assign it to the uuid property
        $this->uuid = Guid::uuid4()->toString();
    }

    /**
     * Saves the validated user data to the database and redirects the user.
     *
     * This method validates the input data, ensures that all fields are correctly
     * processed, creates a new user in the database, and dispatches a 'userCreated' event.
     * After saving, the component's state is reset for a new entry.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save()
    {
        // Validate the user input data according to the defined rules
        $validated = $this->validate();

        // Ensure the 'r' and 'pl' attributes are properly formatted as single characters
        $validated['r'] = $validated['r'][0];  // Only first character of the role (user/admin)
        $validated['pl'] = $validated['pl'][0];  // Only first character of the place

        // Create a new user with the validated data
        User::create($validated);

        // Dispatch the 'userCreated' event to notify that a new user has been created
        $this->dispatch('userCreated');

        // Reset the component's state for a new user entry
        $this->reset();
    }

    /**
     * Renders the Livewire component view.
     *
     * This method returns the view that will be displayed to the user
     * for creating a new user. The view is responsible for handling
     * the user interface for the user creation process.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        // Return the view for creating a new user
        return view('livewire.users.crt');
    }
}
