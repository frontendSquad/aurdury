<?php
include('../layout/topBar.php');
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Profile <span class="font-weight-normal">Information</span>
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
                    <figure class="mb-0">
                        <img src="../../images/profileIcon.png" alt="Profile" class="mw-100">
                    </figure>
                </div>
                <div class="col-md-9">
                    <div class="d-flex flex-wrap">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Business Owner ID:</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-dark">Joshua Rozario</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Full Name:</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-dark">Joshua Rozario</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Contact:</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-dark">0000-000-0000000</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Email:</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-dark">sammy@sample.com</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mt-3">
                        <div class="col-md-12">
                            <p class="mb-5"><a href="./change-password.php" class="theme-primary-text">Change Password</a></p>
                            <p class="mt-0"><a href="./edit.php"
                                    class="rounded-pill bg-gradient border-0 px-5 py-2 text-white" role="button"
                                    data-bs-toggle="button" aria-pressed="true">Edit</a></p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>


<?php
include('../layout/footer.php');
?>