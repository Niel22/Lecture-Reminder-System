<?php

namespace App\Console\Commands;

use App\Mail\LectureReminderEmail;
use App\Mail\OtpEmail;
use App\Models\LectureReminder;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-reminder-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        Log::info('SendReminderEmails command started.');

        $todayReminders = LectureReminder::all();

        $AlltodayRemindersEmail = [];
        $AlltodayRemindersTime = [];
        $AlltodayRemindersVenue = [];
        $AlltodayRemindersCourse = [];

        foreach ($todayReminders as $todayReminder) {
            if (Carbon::parse($todayReminder['datetime'])->format('Y m d') == Carbon::now()->format('Y m d')) {
                if (Carbon::parse($todayReminder['datetime'])->format('H:i') > Carbon::now()->format('H:i')) {
                    if (Carbon::parse($todayReminder['datetime'])->diffInMinutes(Carbon::now(), true) < 420 && Carbon::parse($todayReminder['datetime'])->diffInMinutes(Carbon::now(), true) > 60) {
                        if (!$todayReminder['notification']) {
                            $todayReminder->update([
                                'notification' => 1
                            ]);
                            // dd("Within 7 hours ");
                            $AlltodayRemindersEmail[] = $todayReminder->user->email;
                            $AlltodayRemindersTime[] = Carbon::parse($todayReminder['datetime']);
                            $AlltodayRemindersVenue[] = $todayReminder['venue'];
                            $AlltodayRemindersCourse[] = $todayReminder['name'];
                        }
                    }
                    if (Carbon::parse($todayReminder['datetime'])->diffInMinutes(Carbon::now(), true) < 60) {
                        // dd("Within 1 hours ");
                            $AlltodayRemindersEmail[] = $todayReminder->user->email;
                            $AlltodayRemindersTime[] = Carbon::parse($todayReminder['datetime']);
                            $AlltodayRemindersVenue[] = $todayReminder['venue'];
                            $AlltodayRemindersCourse[] = $todayReminder['name'];
                    }
                }
            }
        }


        foreach ($AlltodayRemindersEmail as $index => $email) {
            Mail::to($email)->send(new LectureReminderEmail($AlltodayRemindersTime[$index], $AlltodayRemindersVenue[$index], $AlltodayRemindersCourse[$index]));

            Notification::create([
                'heading' => 'Reminder for ' . $AlltodayRemindersCourse[$index],
                'message' => 'You have a lecture today scheduled at ' . Carbon::parse($AlltodayRemindersTime[$index])->format('h:i A') . ' which is ' .Carbon::parse($AlltodayRemindersTime[$index])->diffForHumans() . '.',
                'time' => $AlltodayRemindersTime[$index],
                'venue' => $AlltodayRemindersVenue[$index],
                'email' => $email
            ]);
        }
    }
}
