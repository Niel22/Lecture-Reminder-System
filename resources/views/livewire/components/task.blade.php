<div class="col-xl-12 col-md-12 card p-4">
    <div class="card-body d-flex justify-content-between col-md-12 mb-3">
        <div class="page-header-title">
            <h2 class="mb-0">Lectures Scheduled For Today</h2>
        </div>
    </div>
    <div class="card">
        <div class="row m-2">
            @if ($upComingRemindersCount > 0)
                @foreach ($upComingReminders as $upComingReminder)
                    <div class="col-sm-4">
                        <div class="card text-white bg-secondary">
                            <div class="card-header">{{ $upComingReminder->name }} </div>
                            <div class="card-body row">
                                <p class="card-text col-md-6">Venue: {{ $upComingReminder->venue }}</p>
                                <p class="card-text col-md-6">Time:
                                    {{ \Carbon\Carbon::parse($upComingReminder->datetime)->format('h:i A') }}
                                </p>
                                <p class="card-text col-md-6">Time Left:
                                    {{ \Carbon\Carbon::parse($upComingReminder->datetime)->diffForHumans() }}
                                </p>
                                <p class="card-text col-md-6 d-flex justify-content-end">
                                    <a href="{{ route('lectures.show', $upComingReminder->id) }}" class="btn btn-light-twitter">View</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-primary text-center">No Lectures Scheduled for today</div>
            @endif
        </div>
    </div>
</div>
