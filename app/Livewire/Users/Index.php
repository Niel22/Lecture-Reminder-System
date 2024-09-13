<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function makeAdmin($id){
        $user = User::where('id', $id)->first();

        $user->update([
            'role' => 'admin'
        ]);
    }

    public function cancelAdmin($id){
        $user = User::where('id', $id)->first();

        $user->update([
            'role' => 'lecturer'
        ]);
    }

    public function render()
    {

        $users = User::orderBy('created_at', 'DESC')->get();
        return view('livewire.users.index', [
            'users' => $users
        ]);
    }
}
