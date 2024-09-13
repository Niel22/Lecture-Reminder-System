<li class="dropdown pc-h-item" wire:poll.30s>
    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="" role="button"
        aria-haspopup="false" aria-expanded="false"><svg class="pc-icon">
            <use xlink:href="#custom-notification"></use>
        </svg>
        @if($notificationCount > 0)
        <span class="badge bg-success pc-h-badge">{{ $notificationCount }}</span>
        @endif
    </a>
    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
            <h5 class="m-0">Notifications</h5>
        </div>
        @if($notifications->count() > 0)
        <div class="dropdown-body text-wrap header-notification-scroll position-relative"
            style="max-height: calc(100vh - 215px)">
            {{-- <p class="text-span">Today</p> --}}
            @foreach ($notifications as $notification)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg class="pc-icon text-primary">
                                    <use xlink:href="#custom-layer"></use>
                                </svg>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <span
                                    class="float-end text-sm text-muted">{{ $notification->created_at->diffForHumans() }}</span>
                                <h5 class="text-body mb-2">{{ $notification->heading }}</h5>
                                <p class="mb-0">
                                    {{ $notification->message }}
                                </p>
                                <p class="mb-0">
                                    Time: <b>{{ \Carbon\Carbon::parse($notification->time)->format('h:i A') }}</b>
                                </p>
                                <p class="mb-0">
                                    Venue: <b>{{ $notification->venue }}</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @else
        <div class="alert alert-secondary text-center">No Notification</div>
        @endif
        {{-- @if($notificationCount > 0)
        <div class="text-center py-2">
            <a href="#!" class="link-danger">View all Notifications</a>
        </div>
        @endif --}}
    </div>
</li>
