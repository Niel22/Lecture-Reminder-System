<div wire:poll.60s>
    <div class="d-flex justify-content-between col-md-12 mb-3">
        <div class="page-header-title">
            <h2 class="mb-0">Lecture Reminder Details</h2>
        </div>
        <div class="">
            <a href="{{ route('lectures.index') }}" class="btn btn-primary">
                <i class="ti ti-player-track-prev"></i> Back to List
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Lecture Details</h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 pt-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Lecture Name</p>
                            <p class="mb-0">{{ $reminder->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Lecture Date</p>
                            <p class="mb-0">{{ \Carbon\Carbon::parse($reminder->datetime)->format('D, d M Y') }}</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Lecture Time</p>
                            <p class="mb-0">{{ \Carbon\Carbon::parse($reminder->datetime)->format('h:i A') }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Venue</p>
                            <p class="mb-0">{{ $reminder->venue }}</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-2 pb-1">
                    <p class="mb-1 text-muted">Date/Time Until Reminder: <span style="font-weight: bold">{{ \Carbon\Carbon::parse($reminder->datetime)->diffForHumans() }}</span></p>
                </li>
                <li class="list-group-item px-2 pb-1">
                    <p class="mb-1 text-muted">Lecture Status: <span class="badge text-lg text-bg-{{ \Carbon\Carbon::parse($reminder->datetime) > \Carbon\Carbon::now() ? 'info' : 'success' }}">{{ \Carbon\Carbon::parse($reminder->datetime) > \Carbon\Carbon::now() ? 'Upcoming' : 'Passed' }}</span></p>
                </li>
            </ul>
        </div>
    </div>
</div>
