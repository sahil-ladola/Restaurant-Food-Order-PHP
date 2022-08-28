<div class="modal fade" id="ResetPass" tabindex="-1" aria-labelledby="ResetPass" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ResetPass">Reset Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="form-floating col-12">
                        <input type="password" class="form-control" id="NewPass" placeholder="Password">
                        <label for="NewPass">Password</label>
                    </div>
                    <div class="form-floating col-12">
                        <input type="password" class="form-control" id="ConfirmNewPass" placeholder="Password">
                        <label for="ConfirmNewPass">Confirm Password</label>
                    </div>
                    <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#Login">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Reset Password</button>
                        </div>
                    </a>

                </form>
            </div>
        </div>
    </div>
</div>