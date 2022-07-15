<?php
include('../layout/header.php');
?>

<section class="login h-100vh align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-xl-6 leftColumn d-flex align-items-center">
                <div class="loginForm col-md-10">
                    <div class="loginContent px-md-5">
                        <div class="logo">
                            <figure>
                                <a href="#"><img src="../images/logo.png" alt="logo" class="mw-100"></a>
                            </figure>
                        </div>
                        <div class="titleBox">
                            <h3>Forgot Password</h3>
                            <p>Enter your email address to receive a verification code.</p>
                        </div>
                        <form action="./verification-code.php" method="POST">
                            <div class="form-group py-2 position-relative">
                                <label for="password">Password <span class="required text-danger">*</span></label>
                                <div class="passwordWrapper position-relative">
                                    <input type="password" class="form-control border-0 shadow passInput" id="password" placeholder="Enter New Password">
                                    <i class="bi bi-eye-slash enter-icon right-icon position-absolute passDisplay" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group py-2 position-relative">
                                <label for="confirmPassword">Confirm Password <span class="required text-danger">*</span></label>
                                <div class="passwordWrapper position-relative">
                                    <input type="password" class="form-control border-0 shadow passInput" id="confirmPassword" placeholder="Confirm Password">
                                    <i class="bi bi-eye-slash enter-icon right-icon position-absolute passDisplay" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group text-center py-2">
                                <input type="button" value="Update" class="form-control text-white bg-theme-primary" data-toggle="modal" data-target="#passwordReset">
                            </div>
                            <div class="backBtn text-center">
                                <p><a href="./login.php" class="text-dark d-flex justify-content-center align-items-center"><i class="bi bi-arrow-left pr-2 fa-20"></i>Back to Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex justify-content-center align-items-md-end align-items-center rightColumn">
                <figure class="w-75 mb-0">
                    <a href="#"><img src="../images/girl.png" alt="Banner" class="mw-100"></a>
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- reset password -->
<div class="modal fade" id="passwordReset" tabindex="-1" aria-labelledby="passwordResetLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bi bi-x close" data-dismiss="modal" aria-label="Close"></button>
                <div class="contentModal text-center px-md-5">
                    <i class="bi bi-check-circle theme-primary-text"></i>
                    <p>Your password has been reset.
                        Please login to continue.</p>
                </div>
                <div class="reset-footer text-center">
                    <button type="button" class="btn bg-theme-primary text-white px-4" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>