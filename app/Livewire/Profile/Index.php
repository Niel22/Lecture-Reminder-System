<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Index extends Component
{
    public $first_name, $last_name, $password, $old_password, $new_password, $new_password_confirmation;

    protected $rules = [
        'first_name' => ['required', 'string'],
        'last_name' => ['required', 'string'],
    ];

    public function changePassword(){

        $validatedData = $this->validate([
            'old_password' => 'required|string|min:8',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (Hash::check($validatedData['old_password'], Auth::user()->password)) {
            Auth::user()->update([
                'password' => Hash::make($validatedData['new_password']),
            ]);

            session()->flash('message', 'Password changed successfully.');
        } else {
            session()->flash('error', 'Old password is incorrect.');
        }
    }

    public function store(){
        $data = $this->validate();

        $user = Auth::user();

        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ]);

        session()->flash('message', 'Profile Updated Successfully');
    }

    public function render()
    {

        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;

        return view('livewire.profile.index');
    }
}
