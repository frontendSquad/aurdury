<!-- checkout -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-4 pt-3">
            <div class="modal-headers border-0 pr-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle text-danger"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <figure>
                    <img src="../../images/popupIcon.png" alt="" draggable="false">
                </figure>
                <h5 class="font-weight-bold text-dark">Checkout</h5>
                <p class="mb-0">You Have To Login Before Proceeding To Checkout.</p>
            </div>
            <div class="modal-footers text-center border-0">
                <button type="button" class="rounded-pill bg-theme-primary border-0 px-5 py-2 text-white mb-3"
                    data-dismiss="modal" data-toggle="modal" data-target="#login">Login</button>
            </div>
        </div>
    </div>
</div>

<!-- sign in -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-4 pt-3">
            <div class="modal-headers border-0 pr-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle text-danger"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <h3 class="font-weight-bold text-dark">Sign In</h3>
                <p>Don't Have Account? <a href="#" class="theme-primary-text font-weight-bold" data-dismiss="modal" data-target="#register" data-toggle="modal">Sign Up For Free</a></p>
                <form action="">
                    <div class="form-group py-2">
                        <input type="email" name="loginEmail" placeholder="Enter Email Address"
                            class="form-control border-0 shadow rounded-pill">
                    </div>
                    <div class="form-group py-2 position-relative">
                        <div class="passwordWrapper position-relative">
                            <input type="password" class="form-control border-0 shadow rounded-pill passInput"
                                id="password" placeholder="Enter New Password">
                            <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password"
                                aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between flex-wrap mb-4">
                        <p class="mb-0"><input type="radio"><span class="pl-2 font-13">Stay Signed In</span></p>
                        <p class="mb-0"><a data-toggle="modal" data-target="#passrecovery" data-dismiss="modal"
                                class="theme-secondary-text">Forgot Password?</a></p>
                    </div>
                    <div class="form-group">
                        <input type="button" value="Sign In"
                            class="form-control text-white bg-theme-primary rounded-pill">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- password recovery -->
<div class="modal fade" id="passrecovery" tabindex="-1" role="dialog" aria-labelledby="passrecoveryTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-4 pt-3">
            <div class="modal-headers border-0 pr-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle text-danger"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <h3 class="font-weight-bold text-dark">Password <span class="font-weight-normal">Recovery</span></h3>
                <p>Enter Your Email Address To Proceed</p>
                <form action="">
                    <div class="form-group py-2">
                        <input type="email" name="loginEmail" placeholder="Enter Email Address"
                            class="form-control border-0 shadow rounded-pill">
                    </div>
                    <div class="form-group">
                        <input type="button" value="Continue" data-toggle="modal" data-target="#passrecoveryCode"
                            data-dismiss="modal" class="form-control text-white bg-theme-primary rounded-pill">
                    </div>
                    <div class="backBtn text-center">
                        <a data-toggle="modal" data-target="#login" data-dismiss="modal"
                            class="text-black font-weight-bold">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- password recovery code -->
<div class="modal fade" id="passrecoveryCode" tabindex="-1" role="dialog" aria-labelledby="passrecoveryCodeTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-4 pt-3">
            <div class="modal-headers border-0 pr-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle text-danger"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <h3 class="font-weight-bold text-dark">Password <span class="font-weight-normal">Recovery</span></h3>
                <p>Please Check Your Email For Code. Your Code Is 6 Characters In Length.</p>
                <form action="">
                    <div class="form-group py-2 mb-0">
                        <input type="number" name="loginEmailCode" placeholder="Enter Code*"
                            class="form-control border-0 shadow rounded-pill">
                    </div>
                    <div class="getCode text-right mb-3">
                        <a href="#" class="theme-primary-text">Didn't Get A Code?</a>
                    </div>
                    <div class="form-group">
                        <input type="button" value="Continue" data-toggle="modal" data-target="#passrecoveryfinal"
                            data-dismiss="modal" class="form-control text-white bg-theme-primary rounded-pill">
                    </div>
                    <div class="backBtn text-center">
                        <a data-toggle="modal" data-target="#login" data-dismiss="modal"
                            class="text-black font-weight-bold">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- password recovery -->
<div class="modal fade" id="passrecoveryfinal" tabindex="-1" role="dialog" aria-labelledby="passrecoveryfinalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-0 pt-3">
            <div class="modal-headers border-0 pr-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle text-danger"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <h3 class="font-weight-bold text-dark">Password <span class="font-weight-normal">Recovery</span></h3>
                <p>Enter Your Email Address To Proceed</p>
                <form action="">
                    <div class="form-group py-2">
                        <input type="email" name="loginEmail" placeholder="Enter Email Address"
                            class="form-control border-0 shadow rounded-pill">
                    </div>
                    <div class="form-group d-flex gap-15">
                        <button type="button" data-toggle="modal" data-target="#update" data-dismiss="modal"
                            class="form-control text-white bg-theme-primary rounded-pill">Continue</button>
                        <button type="button" data-dismiss="modal"
                            class="form-control text-white bg-dark rounded-pill">Cancel</button>
                    </div>
                    <div class="backBtn text-center">
                        <a data-toggle="modal" data-target="#login" data-dismiss="modal"
                            class="text-black font-weight-bold">Resend Verification Code</a>
                    </div>
                </form>
            </div>
            <div class="modal-footers text-center border-0 dangerFooter position-relative">
                <p class="mb-0 text-white">The Number You've Entered Does Not Match Your Code. <strong>Please Try
                        Again!</strong></p>
                <i class="bi bi-exclamation-circle"></i>
            </div>
        </div>
    </div>
</div>

<!-- confirm Password -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="updateTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-4 pt-3">
            <div class="modal-headers border-0 pr-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle text-danger"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <h3 class="font-weight-bold text-dark">Password <span class="font-weight-normal">Recovery</span></h3>
                <p>Type In Your New Password</p>
                <form action="">
                    <div class="form-group py-2 position-relative">
                        <div class="passwordWrapper position-relative">
                            <input type="password" class="form-control border-0 shadow rounded-pill passInput"
                                id="password" placeholder="Enter Password*">
                            <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password"
                                aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group py-2 position-relative">
                        <div class="passwordWrapper position-relative">
                            <input type="password" class="form-control border-0 shadow rounded-pill passInput"
                                id="password" placeholder="Retype Password*">
                            <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password"
                                aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" value="Update"
                            class="form-control text-white bg-theme-primary rounded-pill">
                    </div>
                </form>
                <div class="backBtn text-center">
                    <a data-toggle="modal" data-target="#login" data-dismiss="modal"
                        class="text-black font-weight-bold">Back To Login</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Sign Up -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-4 pt-3">
            <div class="modal-headers border-0 pr-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle text-danger"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <h3 class="font-weight-bold text-dark">Password <span class="font-weight-normal">Recovery</span></h3>
                <p>Already Have An Account? <a href="#" class="theme-primary-text font-weight-bold" data-toggle="modal" data-target="#login" data-dismiss="modal">Log In</a></p>
                <form action="">
                    <div class="form-group py-2">
                        <input type="text" name="signupname" placeholder="Your Full Name*"
                            class="form-control border-0 shadow rounded-pill">
                    </div>
                    <div class="form-group py-2">
                        <input type="email" name="signupEmail" placeholder="Your Email Address*"
                            class="form-control border-0 shadow rounded-pill">
                    </div>
                    <div class="form-group py-2">
                        <input type="tel" name="signupphone" placeholder="Your Phone Number*"
                            class="form-control border-0 shadow rounded-pill">
                    </div>
                    <div class="form-group py-2 position-relative">
                        <div class="passwordWrapper position-relative">
                            <input type="password" class="form-control border-0 shadow rounded-pill passInput"
                                id="password" placeholder="Your Password*">
                            <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password"
                                aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <input type="button" value="Sign Up"
                        data-dismiss="modal"
                            class="form-control text-white bg-theme-primary rounded-pill">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>