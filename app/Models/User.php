<?php

namespace App\Models;

use App\Models\LectureReminder;
// use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function remindersCount(){
        $upcomingReminders = LectureReminder::where('user_id', Auth::id())->where('datetime', '>', Carbon::now())->get();

        $upComingReminders = 0;

        foreach ($upcomingReminders as $upcomingReminder) {
            if (Carbon::parse($upcomingReminder['datetime'])->format('Y m d') == Carbon::now()->format('Y m d') && Carbon::parse($upcomingReminder['datetime'])->format('H:i') > Carbon::now()->format('H:i')) {
                $upComingReminders += 1;
            }
        }

        return $upComingReminders;
    }
}
