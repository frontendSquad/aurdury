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
            <figure class="mb-0 avatar-upload" >
                <img src="../images/circle-icon.png" width="200px" alt="Profile" class="mw-100">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
            </figure>
        </div>
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-4">
                    <p class="text-secondary">Full Name</p>
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="text" value=" Elsa Robert">
                </div>
            </div>
            <div class="d-flex flex-wrap mt-4">
                <div class="col-md-4">
                    <p class="text-secondary">Email:</p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary">sammy@sample.com</p>
                </div>
            </div>
            <div class="d-flex flex-wrap mt-3">
                <div class="col-md-4">
                    <p class="text-secondary">Phone Number:</p>
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="text" value="0000-000-0000000">
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center mt-3">
            <a href="./change-password.php" class="theme-primary-text">Change Password</a>
        </div>
        <div class="col-md-9 mt-4 d-sm-flex d-block">
            <p class="mb-0"><button class="btn bg-theme-primary text-white px-4 py-3" data-toggle="modal" data-target="#save">Save Changes</button></p>
            <p class="mb-0 pl-3"><a href="./view.php" class="btn border-btn text-white px-5 py-3 mt-sm-0 mt-3" role="button" data-bs-toggle="button" aria-pressed="true">Cancel</a></p>
        </div>
    </div>
</div>

<!-- Updated -->

<div class="modal fade" id="save" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/check.png" alt="Icon">
                </figure>
                <p class="achivpFont">Changes Updated!</p>
            </div>
            <div class="modal-footers text-center py-3">
                <button type="button" class="px-5 btn bg-theme-primary text-white" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>


<?php
include('../layout/footer.php');
?>