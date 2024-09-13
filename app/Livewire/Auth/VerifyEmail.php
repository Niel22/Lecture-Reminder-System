<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


use function Laravel\Prompts\error;

class VerifyEmail extends Component
{
    public $otp1, $otp2, $otp3, $otp4;


    public function verify(){
        $otp = $this->otp1.$this->otp2.$this->otp3.$this->otp4;


        $user =  Auth::user();


        if($otp == session('otp')){
            $user->email_verified_at = Carbon::now()->format('Y-m-d H:i:s');
            $user->save();

            return redirect('/');

        }else{
            session()->flash('error', 'The OTP is not correct');
        }
    }

    public function render()
    {
        return view('livewire.auth.verify-email');
    }
}
