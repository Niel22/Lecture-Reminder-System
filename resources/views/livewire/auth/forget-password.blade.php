<div class="auth-main">
    <div class="auth-wrapper v2">
        <div class="auth-sidecontent"><img src="../assets/images/authentication/img-auth-sideimg.jpg" alt="images"
                class="img-fluid img-auth-side"></div>
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body"><a href="#"><h1>LRS</h1></a>
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <h3 class="mb-0"><b>Forgot Password</b></h3><a href="{{ route('auth.login') }}" class="link-primary">Back
                            to Login</a>
                    </div>
                    <div class="mb-3"><label class="form-label">Email Address</label> <input type="email"
                            class="form-control" id="floatingInput" placeholder="Email Address"></div>
                    <p class="mt-4 text-sm text-muted">Do not forgot to check SPAM box.</p>
                    <div class="d-grid mt-3"><button type="button" class="btn btn-primary">Send Password Reset
                            Email</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
