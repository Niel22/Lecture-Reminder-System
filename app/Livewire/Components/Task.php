<?php

namespace App\Livewire\Components;

use App\Models\LectureReminder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Task extends Component
{
    public function render()
    {
        $upcomingReminders = LectureReminder::where('user_id', Auth::id())->where('datetime', '>', Carbon::now())->get();

        $upComingReminders = [];
        $upComingRemindersCount = 0;

        foreach ($upcomingReminders as $upcomingReminder) {
            if (Carbon::parse($upcomingReminder['datetime'])->format('Y m d') == Carbon::now()->format('Y m d') && Carbon::parse($upcomingReminder['datetime'])->format('H:i') > Carbon::now()->format('H:i')) {
                $upComingReminders[] = $upcomingReminder;
                $upComingRemindersCount += 1;
            }
        }

        return view('livewire.components.task', [
            'upComingReminders' => $upComingReminders,
            'upComingRemindersCount' => $upComingRemindersCount,
        ]);
    }
}
