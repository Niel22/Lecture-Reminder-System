<div wire:poll.5s>
    <div class="d-flex justify-content-between col-md-12 mb-3">
        <div class="page-header-title">
            <h2 class="mb-0">All Users</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if ($users->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-xl">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Joined</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="text-capitalize">{{ $user->role }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                        <td>
                                            @if ($user == Auth::user())
                                            <span class="badge text-lg text-bg-info">ME</span>
                                            @else
                                                @if ($user->role == 'admin')
                                                    <a title="Cancel Admin" wire:click="cancelAdmin('{{ $user->id }}')" wire:confirm="Are you sure you want to remove this person as admin?"
                                                        class="avtar avtar-xs btn-link-danger">
                                                        <i class="ti ti-x f-20"></i>
                                                    </a>
                                                    <button type="button" wire:click="delete('{{ $user->id }}')"
                                                        wire:confirm="Are you sure you want to delete this lecture reminder?"
                                                        class="avtar avtar-xs btn-link-danger"><i
                                                            class="ti ti-trash f-20"></i>
                                                    </button>
                                                @elseif ($user->role == 'SuperAdmin')
                                                @else
                                                    <a title="Make Admin" wire:click="makeAdmin('{{ $user->id }}')"
                                                        wire:confirm="Are you sure you want to maake this lecturer an admin?"
                                                        class="avtar avtar-xs btn-link-success">
                                                        <i class="ti ti-check f-20"></i>
                                                    </a>
                                                    <button type="button" wire:click="delete('{{ $user->id }}')"
                                                        wire:confirm="Are you sure you want to delete this lecture reminder?"
                                                        class="avtar avtar-xs btn-link-danger"><i
                                                            class="ti ti-trash f-20"></i>
                                                    </button>
                                                @endif
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info text-bold text-center">
                        <p>No Users</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
