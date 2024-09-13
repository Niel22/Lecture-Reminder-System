<?php

namespace App\Livewire\Auth;

use App\Mail\OtpEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Register extends Component
{
    public $email, $password, $first_name, $last_name, $password_confirmation, $terms_and_condition;

    protected $rules = [
        'first_name' => ['required', 'string'],
        'last_name' => ['required', 'string'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'min:8', 'confirmed'],
        'terms_and_condition' => ['required']
    ];

    public function create(){
        $user = $this->validate();
        $user['role'] = 'lecturer';

        $user = User::create($user);

        $otp = rand(1000, 9999);

        Mail::to($user->email)->send(new OtpEmail($otp));

        session(['otp' => $otp]);

        Auth::login($user);

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
