<div class="modal fade" id="Forgotpass" tabindex="-1" aria-labelledby="Forgotpass" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Forgotpass">Forgot Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">+91</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Mobile Number" maxlength="10">
                    </div>
                    <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#OTPFP">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Send One Time Password</button>
                        </div>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="OTPFP" tabindex="-1" aria-labelledby="OTPFP" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="OTPFP">OTP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-container text-center">
                    <input type="text" class="inputotp text-center" maxlength="1">
                    <input type="text" class="inputotp text-center" maxlength="1">
                    <input type="text" class="inputotp text-center" maxlength="1">
                    <input type="text" class="inputotp text-center" maxlength="1">
                    <input type="text" class="inputotp text-center" maxlength="1">
                    <input type="text" class="inputotp text-center" maxlength="1">
                </div>
                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#ResetPass">
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-outline-primary" type="button">Verify</button>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>