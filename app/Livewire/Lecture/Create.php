<?php

namespace App\Livewire\Lecture;

use App\Models\LectureReminder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{

    public $name, $datetime, $venue;

    // protected $listeners = ['close-modal' => 'render'];

    protected $rules = [
        'name' => ['required', 'string'],
        'datetime' => ['required', 'date', 'after:now'],
        'venue' => ['required', 'string'],
    ];

    public function messages()
    {
        return [
            'datetime.after' => 'The selected date and time must be in the future.',
        ];
    }


    public function create()
    {
        $newReminder = $this->validate();


        $newReminder['datetime'] = Carbon::parse($this->datetime);

        $newReminder['user_id'] = Auth::id();

        LectureReminder::create($newReminder);

        $this->redirectRoute('lectures.index');

        session()->flash('message', 'Reminder set successfully');
    }
    public function render()
    {
        return view('livewire.lecture.create');
    }
}
