<?php
include('../layout/topBar.php');
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Change <span class="font-weight-normal">Password</span>
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Contact Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="profileView">
    <div class="container">
        <div class="notification-section p-3">
            <div class="row shadow p-sm-5 p-3 rounded-15 my-3">
                <div class="col-md-3 text-center">
                    <div class="position-relative">
                        <figure class="mb-0">
                            <img src="../../images/profileIcon.png" alt="Profile" class="mw-100">
                        </figure>
                        <label for="uploadProfile">
                            <p class="border-0 uploadPro"><i class="bi bi-camera-fill"></i></p>
                            <input type="file" id="uploadProfile" style="display: none;">
                        </label>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="">
                        <div class="d-flex flex-wrap">
                            <div class="col-md-8">
                                <div class="input-group mb-3 rounded-pill overflow-hidden border">
                                    <div class="input-group-prepend border-0">
                                        <span class="input-group-text border-0" id="basic-addon1"><i
                                                class="bi bi-lock-fill"></i></span>
                                    </div>
                                    <div class="passwordWrapper position-relative w-90">
                                        <input class="form-control w-100 border-0 bg-transparent pr-4" type="password" placeholder="Enter Current Password">
                                        <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="input-group mb-3 rounded-pill overflow-hidden border">
                                    <div class="input-group-prepend border-0">
                                        <span class="input-group-text border-0" id="basic-addon1"><i
                                                class="bi bi-lock-fill"></i></span>
                                    </div>
                                    <div class="passwordWrapper position-relative w-90">
                                        <input class="form-control w-100 border-0 bg-transparent pr-4" type="password" placeholder="Enter New Password">
                                        <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="input-group mb-3 rounded-pill overflow-hidden border">
                                    <div class="input-group-prepend border-0">
                                        <span class="input-group-text border-0" id="basic-addon1"><i
                                                class="bi bi-lock-fill"></i></span>
                                    </div>
                                    <div class="passwordWrapper position-relative w-90">
                                        <input class="form-control w-100 border-0 bg-transparent pr-4" type="password" placeholder="Re-Enter New Password">
                                        <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="rounded-pill bg-gradient border-0 px-5 py-2 text-white"
                                    role="button" data-bs-toggle="button" aria-pressed="true">Update</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</section>

<div class="modal fade" id="passUpdated" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/question.png" alt="Icon">
                </figure>
                <p class="achivpFont">Changes Updated!</p>
            </div>
            <div class="modal-footers text-center py-3">
                <button type="button" class="px-5 py-3 btn bg-theme-primary text-white" data-dismiss="modal"
                    data-toggle="modal" data-target="#approved">Ok</button>
            </div>
        </div>
    </div>


    <?php
include('../layout/footer.php');
?>