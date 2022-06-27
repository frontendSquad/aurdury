<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="d-flex justify-content-between mt-4 mb-4">
        <div class="titleBox my-3">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Signup</h3>
        </div>
    </div>
    <form action="">
        <div class="row my-3">
            <div class="col-md-4 offset-2 m-0">
                <div class="d-flex flex-wrap">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Name<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Enter Name">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Phone Number<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="tel" value="" placeholder="Enter Phone Number">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-3">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Education Level<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Select Education Leve">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-3">
                    <div class="form-controls flex-grow-1 mb-4 position-relative">
                        <label for="" class="w-100">
                            Confirm Password<span class="text-danger">*</span>
                            <input type="password" class="mt-2 form-control border-0 shadow passInput" id="password" placeholder="Enter Confirm Password">
                            <i class="mt-3 bi bi-eye-slash enter-icon right-icon position-absolute toggle-password" aria-hidden="true"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-2 m-0">
                <div class="d-flex flex-wrap">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                        Email Address<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="email" value="" placeholder="Enter Email Address">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Age<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="number" value="" placeholder="Enter Age">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-3">
                    <div class="form-controls flex-grow-1 mb-4 position-relative">
                        <label for="" class="w-100">
                        Password<span class="text-danger">*</span>
                            <input type="password" class="mt-2 form-control border-0 shadow passInput" id="password" placeholder="Enter New Password">
                            <i class="mt-3 bi bi-eye-slash enter-icon right-icon position-absolute toggle-password" aria-hidden="true"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4 d-sm-flex d-block">
                <button class="btn bg-theme-primary text-white px-5 py-3" aria-label=".form-select-sm example" type="button" data-toggle="modal" data-target="#stuReg">Signup </button>
            </div>
        </div>
    </form>

</div>


<?php
include('../studentManagement/studentPopups.php');
include('../layout/footer.php');
?>