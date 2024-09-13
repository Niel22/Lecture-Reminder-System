<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header p-5">
            <a href="{{ url('/') }}" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                {{-- <img src="assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo" /> --}}
                <h2 class="logo-lg text-bold">LRS</h2>
                <span class="badge bg-light-success rounded-pill ms-2 theme-version">Lecture Reminder</span>
            </a>
        </div>

        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image"
                                class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h6>
                            <small class="text-capitalize">{{ Auth::user()->role }}</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                            href="#pc_sidebar_userlink"><svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="{{ route('account') }}"><i class="ti ti-user"></i> <span>My Account Settings</span>
                            </a>
                            <a onclick="document.getElementById('logout').submit()" style="cursor: pointer"><i
                                    class="ti ti-power"></i> <span>Logout</span></a>
                            <form action="{{ route('logout') }}" method="post" id="logout">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                {{-- Users --}}
                <li class="pc-item">
                    <a href="{{ url('/') }}" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-status-up"></use>
                            </svg> </span><span class="pc-mtext">Dashboard</span></a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('lectures.index') }}" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-calendar-1"></use>
                            </svg> </span><span class="pc-mtext">Lecture Reminders</span>
                        @if (Auth::user()->remindersCount() > 0)
                            <span class="pc-badge">{{ Auth::user()->remindersCount() }}</span>
                        @endif
                    </a>
                </li>

                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'SuperAdmin')
                    {{-- Maintenance --}}

                    <li class="pc-item pc-caption">
                        <label>Maintenance</label>
                        <svg class="pc-icon">
                            <use xlink:href="#custom-presentation-chart"></use>
                        </svg>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('users.index') }}" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-user-square"></use></svg> </span>
                                    <use xlink:href="#custom-story"></use>
                                </svg> </span><span class="pc-mtext">Users</span></a>
                    </li>
                    {{-- <li class="pc-item">
                        <a href="../widget/w_data.html" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-fatrows"></use>
                                </svg> </span><span class="pc-mtext">System Information</span></a>
                    </li> --}}
                @endif
            </ul>
        </div>
    </div>
</nav>
