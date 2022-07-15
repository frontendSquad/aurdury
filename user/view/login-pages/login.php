<?php
include('../layout/header.php');
?>

<section class="login h-100vh align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-xl-6 leftColumn">
                <div class="loginForm col-md-10">
                    <div class="loginContent px-md-5">
                        <div class="logo">
                            <figure>
                                <a href="#"><img src="../images/logo.png" alt="logo" class="mw-100"></a>
                            </figure>
                        </div>
                        <div class="titleBox">
                            <h3>Login</h3>
                            <p>Please login to your account.</p>
                        </div>
                        <form action="">
                            <div class="form-group py-2">
                                <label for="email">
                                    Email <span class="required text-danger">*</span>
                                </label>
                                <input type="email" name="loginEmail" placeholder="Enter Email Address" class="form-control border-0 shadow">
                            </div>
                            <div class="form-group py-2 position-relative">
                                <label for="password">Password <span class="required text-danger">*</span></label>
                                <div class="passwordWrapper position-relative">
                                    <input type="password" class="form-control border-0 shadow passInput" id="password" placeholder="Enter New Password">
                                    <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end flex-wrap">
                                <p><a href="./forgot-password.php" class="theme-secondary-text">Forgot Password?</a></p>
                            </div>
                            <div class="form-group">
                                <input type="button" onclick="location.href='./../dashboard/dashboard.php'" value="Sign In" class="form-control text-white bg-theme-primary">
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

<?php include('../layout/header.php');?>