<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Tbl extends Component
{
    /**
     * Collection of users to be displayed in the table.
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    public $users;

    /**
     * Initialize the component by fetching all users in descending order of their UUID.
     */
    public function mount(): void
    {
        $this->users = User::orderBy('uuid', 'desc')->get();
    }

    /**
     * Deletes a user by their UUID.
     *
     * @param string $uuid The UUID of the user to delete.
     * @return void
     */
    public function delete(string $uuid): void
    {
        $user = User::where('uuid', $uuid)->first();

        if ($user) {
            $user->delete();

            // Refresh the users collection to reflect the changes in the table.
            $this->users = User::orderBy('uuid', 'desc')->get();
        }
    }

    /**
     * Renders the Livewire component view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.users.tbl');
    }
}
