<?php

namespace App\Livewire\Lecture;

use App\Models\LectureReminder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class View extends Component
{
    public $id;

    protected $listeners = ['refreshList' => '$refresh'];

    public function render()
    {
        $reminder = LectureReminder::where('id', $this->id)->first();

        if ($reminder && $reminder['user_id'] == Auth::id()) {

            $reminder['date'] = Carbon::parse($reminder['date']);
            $reminder['time'] = Carbon::parse($reminder['time']);

            return view('livewire.lecture.view', [
                'reminder' => $reminder
            ]);
        } else {
            abort(404);
        }
    }
}
