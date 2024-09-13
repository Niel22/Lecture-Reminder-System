<?php

namespace App\Livewire\Lecture;

use App\Models\LectureReminder;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $name, $datetime, $venue;


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

    public function update(){
        $reminder = LectureReminder::where('id', $this->id)->first();

        $updatedData = $this->validate();

        $reminder->update($updatedData);

        $this->redirectRoute('lectures.index');

        session()->flash('message', 'Updated!');
    }

    public function render()
    {

        $reminder = LectureReminder::where('id', $this->id)->first();

        $reminder['datetime'] = Carbon::parse($reminder['datetime']);

        $this->name = $reminder['name'];
        $this->datetime = $reminder['datetime']->format('Y-m-d H:i');
        $this->venue = $reminder['venue'];

        return view('livewire.lecture.edit', [
            'reminder' => $reminder
        ]);
    }
}
