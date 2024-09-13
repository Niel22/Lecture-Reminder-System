<?php

namespace App\Livewire\Components;

use App\Models\Notification as ModelsNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{

    public function notificationStatus(){
        $notifications = ModelsNotification::where('email', Auth::user()->email)->orderBy('created_at', 'DESC')->get();

        foreach($notifications as $notification){
            $notification->update([
                'status' => 1
            ]);
        }
    }

    public function render()
    {
        $notifications = ModelsNotification::where('email', Auth::user()->email)->orderBy('created_at', 'DESC')->get();
        $notificationCount = ModelsNotification::where('status', 0)->count();



        return view('livewire.components.notification', [
            'notifications' => $notifications,
            'notificationCount' => $notificationCount
        ]);
    }
}
