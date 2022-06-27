<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="d-flex justify-content-between mt-4 mb-4" >
        <div class="titleBox my-3">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Profile Information</h3>
        </div>
    </div>
    <div class="row shadow p-sm-5 p-3 align-items-center rounded-15 my-3">
        <div class="col-md-3 text-center">
            <figure class="mb-0">
                <img src="../images/circle-icon.png" width="200px" alt="Profile" class="mw-100">
            </figure>
        </div>
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Full Name</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Abc</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Email:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">sammy@sample.com</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Phone Number:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">0000-000-0000000</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center mt-3">
            <a href="./change-password.php" class="theme-primary-text">Change Password</a>
        </div>
        <div class="col-md-9 mt-4">
            <p class="mb-0"><a href="./edit.php" class="btn bg-theme-primary text-white px-4 py-3" role="button" data-bs-toggle="button" aria-pressed="true">Edit Profile Information</a></p>
        </div>
    </div>

</div>


<?php
include('../layout/footer.php');
?>