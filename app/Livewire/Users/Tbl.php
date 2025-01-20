<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Tbl extends Component
{
    // List of users loaded from the database
    public $users;

    // UUID of the user currently being edited
    public $selectedUuid;

    // Array to hold the edited fields (all user-related fields are represented here)
    public $editedUser = [
        'uuid' => '',
        'n' => '',
        'e' => '',
        'p' => '',
        'ph' => '',
        'r' => '',
        't_e' => '',
        'pl' => '',
        's_s' => '',
        's_e' => '',
    ];

    /**
     * The mount method is called when the component is initialized.
     * It loads all users from the database, ordered by UUID in descending order.
     *
     * @return void
     */
    public function mount(): void
    {
        // Fetch users ordered by UUID in descending order
        $this->loadUsers();
    }

    /**
     * Load the list of users from the database.
     *
     * @return void
     */
    public function loadUsers(): void
    {
        $this->users = User::orderBy('uuid', 'desc')->get();
    }

    /**
     * This method selects a user by their UUID and loads their information
     * into the editable fields.
     *
     * @param string $uuid The UUID of the user to be edited
     * @return void
     */
    public function edit($uuid)
    {
        // Find the user by UUID
        $user = User::where('uuid', $uuid)->first();

        if ($user) {
            // Populate the editedUser array with the user's data for editing
            $this->selectedUuid = $user->uuid;
            $this->editedUser = [
                'uuid' => $user->uuid,
                'n' => $user->n,
                'e' => $user->e,
                'p' => $user->p,
                'ph' => $user->ph,
                'r' => $user->r,
                't_e' => $user->t_e,
                'pl' => $user->pl,
                's_s' => $user->s_s,
                's_e' => $user->s_e,
            ];
        }
    }

    /**
     * This method saves the changes made to the selected user.
     * After applying the changes, the user's data is updated in the database.
     *
     * @return void
     */
    public function saveEdit()
    {
        // Only save if a user is selected
        if ($this->selectedUuid) {
            // Update the user's data in the database
            User::where('uuid', $this->selectedUuid)->update($this->editedUser);

            // Reset the editedUser fields
            $this->resetEditedUserFields();

            // Reload users after saving the data
            $this->loadUsers();
        }
    }

    /**
     * Resets the edited user fields to their default state.
     *
     * @return void
     */
    private function resetEditedUserFields()
    {
        $this->editedUser = [
            'uuid' => '',
            'n' => '',
            'e' => '',
            'p' => '',
            'ph' => '',
            'r' => '',
            't_e' => '',
            'pl' => '',
            's_s' => '',
            's_e' => '',
        ];
        $this->selectedUuid = null;
    }

    /**
     * Delete a user by UUID.
     *
     * This method ensures that the user exists before deletion by using `firstOrFail`,
     * which will throw an exception if the user is not found. Once found, the user
     * is deleted from the database.
     *
     * @param string $uuid The UUID of the user to be deleted.
     * @return void
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function delete($uuid)
    {
        // Attempt to retrieve the user by UUID and throw an exception if not found
        $user = User::where('uuid', $uuid)->first();

        // Delete the user record from the database
        $user->delete();

        // Reload users after deleting
        $this->loadUsers();
    }

    /**
     * Render method sends the user data to the view for display.
     * This method passes the list of users to the corresponding view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.users.tbl', [
            'users' => $this->users,
        ]);
    }
}
