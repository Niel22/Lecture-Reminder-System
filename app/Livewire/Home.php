<?php

namespace App\Livewire;

use App\Mail\LectureReminderEmail;
use App\Models\LectureReminder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use PHPUnit\Framework\Constraint\Count;

class Home extends Component
{
    public function render()
    {
        $allReminders = LectureReminder::where('user_id', Auth::id())->count();

        $upcomingReminders = LectureReminder::where('user_id', Auth::id())->where('datetime', '>', Carbon::now())->get();

        $upComingReminders = 0;

        foreach ($upcomingReminders as $upcomingReminder) {
            if (Carbon::parse($upcomingReminder['datetime'])->format('Y m d') == Carbon::now()->format('Y m d') && Carbon::parse($upcomingReminder['datetime'])->format('H:i') > Carbon::now()->format('H:i')) {
                $upComingReminders += 1;
            }
        }



        // $todayReminders = LectureReminder::all();

        // $AlltodayRemindersEmail = [];
        // $AlltodayRemindersTime = [];
        // $AlltodayRemindersVenue = [];
        // $AlltodayRemindersCourse = [];

        // foreach ($todayReminders as $todayReminder) {
        //     if (Carbon::parse($todayReminder['datetime'])->format('Y m d') == Carbon::now()->format('Y m d')) {
        //         if (Carbon::parse($todayReminder['datetime'])->format('H:i') > Carbon::now()->format('H:i')) {
        //             if (Carbon::parse($todayReminder['datetime'])->diffInMinutes(Carbon::now(), true) < 420 && Carbon::parse($todayReminder['datetime'])->diffInMinutes(Carbon::now(), true) > 60) {
        //                 if (!$todayReminder['notification']) {
        //                     $todayReminder->update([
        //                         'notification' => 1
        //                     ]);
        //                     // dd("Within 7 hours ");
        //                     $AlltodayRemindersEmail[] = $todayReminder->user->email;
        //                     $AlltodayRemindersTime[] = Carbon::parse($todayReminder['datetime']);
        //                     $AlltodayRemindersVenue[] = $todayReminder['venue'];
        //                     $AlltodayRemindersCourse[] = $todayReminder['name'];
        //                 }
        //             }
        //             if (Carbon::parse($todayReminder['datetime'])->diffInMinutes(Carbon::now(), true) < 60) {
        //                 // dd("Within 1 hours ");
        //                     $AlltodayRemindersEmail[] = $todayReminder->user->email;
        //                     $AlltodayRemindersTime[] = Carbon::parse($todayReminder['datetime']);
        //                     $AlltodayRemindersVenue[] = $todayReminder['venue'];
        //                     $AlltodayRemindersCourse[] = $todayReminder['name'];
        //             }
        //         }
        //     }
        // }

        // foreach ($AlltodayRemindersEmail as $index => $email) {
        //     Mail::to($email)->send(new LectureReminderEmail($AlltodayRemindersTime[$index], $AlltodayRemindersVenue[$index], $AlltodayRemindersCourse[$index]));
        // }


        return view('livewire.home', [
            'allReminders' => $allReminders,
            'upComingReminders' => $upComingReminders
        ]);
    }
}
