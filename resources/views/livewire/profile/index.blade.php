<div>

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h2 class="mb-0">Account Setting</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row"><!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body py-0">
                    <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"><a wire:ignore.self class="nav-link active" id="profile-tab-2"
                                data-bs-toggle="tab" href="#profile-2" role="tab" aria-selected="false"
                                tabindex="-1"><i class="ti ti-file-text me-2"></i>Personal Details</a></li>
                        <li class="nav-item" role="presentation"><a wire:ignore.self class="nav-link" id="profile-tab-4"
                                data-bs-toggle="tab" href="#profile-4" role="tab" aria-selected="false"
                                tabindex="-1"><i class="ti ti-lock me-2"></i>Change Password</a></li>
                        <li class="nav-item" role="presentation"><a wire:ignore.self class="nav-link" id="profile-tab-6"
                                data-bs-toggle="tab" href="#profile-6" role="tab" aria-selected="false"
                                tabindex="-1"><i class="ti ti-settings me-2"></i>Settings</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div wire:ignore.self class="tab-pane show active" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                    <div class="row">

                        <div class="col-lg-12">
                            @include('frontend.components.alert.flash-messages')
                            <form class="card" wire:submit="store">
                                <div class="card-header">
                                    <h5>Personal Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center mb-3">
                                            <div class="user-upload wid-75"><img
                                                    src="{{ asset('assets/images/user/avatar-4.jpg') }}" alt="img"
                                                    class="img-fluid"> </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input wire:model="first_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input wire:model="last_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end btn-page">
                                    <button type="submit" class="btn btn-primary">
                                        <span wire:loading.remove wire:target="store">Update Profile</span>
                                        <span wire:loading wire:target="store">
                                            <div class="spinner-border spinner-border-sm" role="status"><span
                                                    class="sr-only">Loading...</span>
                                            </div>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div wire:ignore.self class="tab-pane" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                    <form class="card" wire:submit="changePassword">
                        <div class="card-header">
                            <h5>Change Password</h5>
                        </div>
                        <div class="card-body">
                            @include('frontend.components.alert.flash-messages')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Old Password</label>
                                        <input wire:model="old_password" type="password" class="form-control">
                                        @error('old_password')
                                        <span class="text-sm text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">New Password</label>
                                        <input wire:model="new_password" type="password" class="form-control">
                                         @error('new_password')
                                         <span class="text-sm text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input wire:model="new_password_confirmation" type="password" class="form-control">
                                         @error('confirm_new_password')
                                         <span class="text-sm text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h5>New password must contain:</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i
                                                class="ti ti-circle-check text-success f-16 me-2"></i> At least 8
                                            characters</li>
                                        <li class="list-group-item"><i
                                                class="ti ti-circle-check text-success f-16 me-2"></i> At least 1 lower
                                            letter (a-z)</li>
                                        <li class="list-group-item"><i
                                                class="ti ti-circle-check text-success f-16 me-2"></i> At least 1
                                            uppercase letter(A-Z)</li>
                                        <li class="list-group-item"><i
                                                class="ti ti-circle-check text-success f-16 me-2"></i> At least 1
                                            number (0-9)</li>
                                        <li class="list-group-item"><i
                                                class="ti ti-circle-check text-success f-16 me-2"></i> At least 1
                                            special characters</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end btn-page">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="profile-6" role="tabpanel" aria-labelledby="profile-tab-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Email Settings</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-4">Setup Email Notification</h6>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Email Notification</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                </div>
                                <div class="card-footer col-12 text-end btn-page">

                                    <div class="btn btn-primary">Update Profile</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- [ sample-page ] end -->
    </div>
</div>
