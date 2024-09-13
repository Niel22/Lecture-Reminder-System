<div wire:poll.5s>
    <div class="d-flex justify-content-between col-md-12 mb-3">
        <div class="page-header-title">
            <h2 class="mb-0">All Lecture Reminders</h2>
        </div>
        <div class="">
            <a href="{{ route('lectures.create') }}" class="btn btn-primary"><i class="ti ti-calendar-time"></i> Schedule
                Lecture</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if ($reminders->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-xl">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Time Created</th>
                                    <th>Lecture Name</th>
                                    <th>Lecture Date</th>
                                    <th>Lecture Time</th>
                                    <th>Venue</th>
                                    <th>Lecture Status</th>
                                    <th>Day/Time Until Reminder</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reminders as $index => $reminder)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \Carbon\Carbon::parse($reminder->created_at)->diffForHumans() }}</td>
                                        <td>{{ $reminder->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($reminder->datetime)->format('D, d M Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($reminder->datetime)->format('h:i A') }}</td>
                                        <td>{{ $reminder->venue }}</td>
                                        <td><span class="badge text-lg text-bg-{{ \Carbon\Carbon::parse($reminder->datetime) > \Carbon\Carbon::now() ? 'info' : 'success' }}">{{ \Carbon\Carbon::parse($reminder->datetime) > \Carbon\Carbon::now() ? 'Upcoming' : 'Passed' }}</span></td>
                                        <td>{{ \Carbon\Carbon::parse($reminder->datetime)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('lectures.show', $reminder->id) }}" class="avtar avtar-xs btn-link-success"><i class="ti ti-eye f-20"></i> </a>
                                            <a href="{{ route('lectures.edit', $reminder->id) }}" class="avtar avtar-xs btn-link-primary"><i class="ti ti-edit f-20"></i> </a>
                                            <button type="button" popovertarget="confirm" wire:click="delete('{{ $reminder->id }}')" wire:confirm="Are you sure you want to delete this lecture reminder?"
                                                class="avtar avtar-xs btn-link-danger"><i class="ti ti-trash f-20"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info text-bold text-center">
                        <p>No Lectures Scheduled</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
