<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function store(){
        $user = $this->validate();

        if(Auth::attempt($user)){
            session()->regenerate();

            return redirect('/');
        }else{
            $this->addError('email', 'Wrong Email or password entered');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
