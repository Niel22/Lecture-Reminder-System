<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureReminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'datetime',
        'venue',
        'notification'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
