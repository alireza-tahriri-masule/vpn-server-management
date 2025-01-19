<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Tbl extends Component
{
    public $users;

    public function mount() {
        $this->users = User::orderBy('uuid', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.users.tbl');
    }
}
