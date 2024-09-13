<?php

namespace App\Livewire\Lecture;

use App\Models\LectureReminder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{

    public $reminders;

    protected $listeners = ['refreshList' => '$refresh'];

    public function delete($id){
        $reminder = LectureReminder::where('id', $id)->first();

        $reminder->delete();

        session()->flash('message', 'Deleted');
    }

    public function render()
    {

        $this->reminders = LectureReminder::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();

        return view('livewire.lecture.index', [
            'reminders' => $this->reminders,
        ]);
    }
}
