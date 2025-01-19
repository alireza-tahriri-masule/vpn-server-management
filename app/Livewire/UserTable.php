<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $users;

    public function mount() {
        $this->users = User::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.user-table');
    }
}
