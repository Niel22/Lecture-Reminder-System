<div class="auth-main">
    <div class="auth-wrapper v2">
        <div class="auth-sidecontent"><img src="../assets/images/authentication/img-auth-sideimg.jpg" alt="images"
                class="img-fluid img-auth-side"></div>
        <div class="auth-form">
            <div class="card my-5">
                <form class="card-body" wire:submit="store">
                    <div class="text-center"><a href="#">
                            <h1>LRS</h1>
                        </a></div>
                    <div class="mb-3"><input type="email" wire:model="email" class="form-control"
                            placeholder="Email Address">
                        @error('email')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3"><input type="password" wire:model="password" class="form-control"
                            placeholder="Password">
                        @error('password')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex mt-1 justify-content-end align-items-center">
                        <h6 class="text-secondary f-w-400 mb-0"><a href="javascrip:void(0)">Forgot
                                Password?</a>
                        </h6>
                    </div>
                    <div class="d-grid mt-4"><button type="submit" class="btn btn-primary">
                            <span wire:loading.remove wire:target="store">Login</span>
                            <span wire:loading wire:target="store">
                                <div class="spinner-border spinner-border-sm" role="status"><span
                                        class="sr-only">Loading...</span></div>
                            </span>
                        </button></div>
                    <div class="d-flex justify-content-between align-items-end mt-4">
                        <h6 class="f-w-500 mb-0">Don't have an Account?</h6><a href="{{ route('auth.register') }}"
                            class="link-primary">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
