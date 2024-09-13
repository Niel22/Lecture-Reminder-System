<div class="row">
    <div class="d-flex justify-content-between col-md-12 mb-3">
        <div class="page-header-title">
            <h2 class="mb-0">Schedule A Lecture Reminders</h2>
        </div>
        <div class="">
            <a href="{{ route('lectures.index') }}" class="btn btn-primary"><i class="ti ti-player-track-prev"></i>Back</a>
        </div>
    </div>
    <form class="card col-md-12" wire:submit="update">
        <div class="card-body row">
            <!-- Lecture Name Input -->
            <div class="mb-3 col-md-6">
                <label class="form-label" for="lectureName">Course Name</label>
                <input type="text" wire:model="name" class="form-control" id="lectureName"
                    placeholder="Enter Lecture Name">
                @error('name')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Lecture Date Input -->
            <div class="mb-3 col-md-6">
                <label class="form-label" for="lectureDate">Lecture Date & Time</label>
                <input type="datetime-local" wire:model="datetime" class="form-control datepicker-input" id="lectureDate">
                @error('datetime')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>


            <!-- Venue Input -->
            <div class="mb-3 col-md-6">
                <label class="form-label" for="venue">Venue</label>
                <input type="text" wire:model="venue" class="form-control" id="venue" placeholder="Enter Venue">
                @error('venue')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="btn btn-primary shadow-2">
                <span wire:loading.remove wire:target="create">Schedule <i class="ti ti-calendar-time"></i></span>
                <span wire:loading wire:target="create">
                    <div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">Loading...</span>
                    </div>
                </span>
            </button>
        </div>
    </form>
</div>
