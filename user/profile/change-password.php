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
        <div class="col-md-9">
            <div class="d-flex align-items-center flex-wrap">
                <div class="col-md-4">
                    <p class="text-secondary">Current Password*</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group py-2 position-relative">
                        <div class="passwordWrapper position-relative">
                        <input class="form-control" type="text" value=" Elsa Robert">
                        <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password" aria-hidden="true"></i>
                        </div>
                    </div>
                    <!-- <input class="form-control" type="text" value=" Elsa Robert"> -->
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <div class="col-md-4">
                    <p class="text-secondary">New Password*</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group py-2 position-relative">
                        <div class="passwordWrapper position-relative">
                            <input class="form-control" type="text" value=" Elsa Robert">
                            <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <div class="col-md-4">
                    <p class="text-secondary">Confirm Password*:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group py-2 position-relative">
                        <div class="passwordWrapper position-relative">
                            <input class="form-control" type="text" value="0000-000-0000000">
                            <i class="bi bi-eye-slash enter-icon right-icon position-absolute toggle-password" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 mt-4 d-flex">
            <p class="mb-0"><a data-toggle="modal" data-target="#passUpdated" class="btn bg-theme-primary text-white px-5 py-3" role="button" data-bs-toggle="button" aria-pressed="true">Update</a></p>
        </div>
    </div>

</div>

<div class="modal fade" id="passUpdated" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <button type="button" class="px-5 py-3 btn bg-theme-primary text-white" data-dismiss="modal" data-toggle="modal" data-target="#approved">Ok</button>
            </div>
        </div>
    </div>


<?php
include('../layout/footer.php');
?>