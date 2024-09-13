<div class="auth-main">
    <div class="auth-wrapper v2">
        <div class="auth-sidecontent"><img src="../assets/images/authentication/img-auth-sideimg.jpg" alt="images"
                class="img-fluid img-auth-side"></div>
        <div class="auth-form">
            <div class="card my-5">
                <form class="card-body" wire:submit="create">
                    <div class="text-center"><a href="#">
                            <h1>LRS</h1>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3"><input wire:model="first_name" type="text" class="form-control" placeholder="First Name">
                            @error('first_name')
                            <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3"><input wire:model="last_name" type="text" class="form-control" placeholder="Last Name">
                            @error('last_name')
                            <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" wire:model="email" class="form-control" placeholder="Email Address">
                        @error('email')
                            <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" wire:model="password" class="form-control" placeholder="Password">
                        @error('password')
                            <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" wire:model="password_confirmation" class="form-control" placeholder="Confirm Password">
                        @error('password_confirmation')
                            <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="d-flex mt-1 justify-content-between">
                        <div class="form-check">
                            <input wire:model="terms_and_condition" class="form-check-input input-primary" type="checkbox"> <label class="form-check-label text-muted"
                                for="customCheckc1">I agree to all the Terms &amp; Condition</label>
                            </div>
                        </div>
                        @error('terms_and_condition')
                        <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    <div class="d-grid mt-4"><button type="submit" class="btn btn-primary">
                        <span wire:loading.remove wire:target="create">Register</span>
                        <span wire:loading wire:target="create">
                            <div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>
                        </span>
                    </button></div>
                    <div class="d-flex justify-content-between align-items-end mt-4">
                        <h6 class="f-w-500 mb-0">Already have an Account?</h6><a href="{{ route('login') }}"
                            class="link-primary">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
