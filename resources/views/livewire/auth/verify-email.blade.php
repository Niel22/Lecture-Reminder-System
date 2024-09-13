<div class="auth-main">
    <div class="auth-wrapper v2">
        <div class="auth-sidecontent"><img src="{{ asset('assets/images/authentication/img-auth-sideimg.jpg') }}" alt="images"
                class="img-fluid img-auth-side"></div>
        <div class="auth-form">
            <div class="card my-5">
                <form class="card-body" wire:submit="verify">
                    <div class="mb-4"><a href="#"><h1>LRS</h1></a>
                        <h3 class="mb-2"><b>Enter Verification Code</b></h3>
                        <p class="text-muted mb-4">We send you on mail.</p>
                        <p class="">We`ve send you code on. {{ Auth::user()->email }}</p>
                    </div>
                    <div class="row my-4 text-center">
                        <div class="col">
                            <input type="text" wire:model="otp1" maxlength="1" class="form-control text-center code-input" placeholder="0" oninput="moveToNext(this, 'otp2')">
                        </div>
                        <div class="col">
                            <input type="text" wire:model="otp2" maxlength="1" id="otp2" class="form-control text-center code-input" placeholder="0" oninput="moveToNext(this, 'otp3')">
                        </div>
                        <div class="col">
                            <input type="text" wire:model="otp3" maxlength="1" id="otp3" class="form-control text-center code-input" placeholder="0" oninput="moveToNext(this, 'otp4')">
                        </div>
                        <div class="col">
                            <input type="text" wire:model="otp4" maxlength="1" id="otp4" class="form-control text-center code-input" placeholder="0" oninput="moveToNext(this, '')">
                        </div>
                    </div>

                    <script>
                        function moveToNext(current, nextFieldID) {
                            if (current.value.length >= 1) {
                                if (nextFieldID) {
                                    document.getElementById(nextFieldID).focus();
                                }
                            }
                        }
                    </script>

                    <div class="d-grid mt-4"><button type="submit" class="btn btn-primary">
                        <span wire:loading.remove wire:target="verify">Verify</span>
                        <span wire:loading wire:target="verify">
                            <div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>
                        </span>
                        </button></div>
                    <div class="d-flex justify-content-start align-items-end mt-3">
                        <p class="mb-0">Did not receive the email?</p><a href="#"
                            class="link-primary ms-2">Resend code</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
