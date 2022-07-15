<?php
$title = "User Management";
$pg = "user-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="edit-block-user" class="edit-block-user-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-6">
                <h2><a href="view-block-user.php"><i class="fas fa-arrow-left"></i></a> Edit Profile</h2>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-6 col-sm-4 col-xl-3 col-xxl-2 text-xl-center">
                <div class="media-left flex-shrink-0 mb-3 mb-lg-0">
                    <div class="profile-img text-center m-auto m-md-0">
                        <div class="attached user-image">
                            <img src="../assets/images/user-avatar.png" class="img-fluid ml-0" alt="">
                            <button name="file" class="btn camera-btn" onclick="document.getElementById('upload').click()">
                                <i class="fa fa-camera"></i></button>
                            <input type="file" id="upload" name="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-9 col-xxl-6 mt-xl-0 mt-4">
                <h4 class="fs-25 fw-bold text-black mb-3">User Profile</h4>
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">User ID:</h5>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fs-18 fw-regular text-black">001</h6>
                    </div>
                </div>
                <div class="row mb-4 align-items-center">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">Full Name:<span class="text-red">*</span></h5>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Full Name">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">Email Address:<span class="text-red">*</span></h5>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fs-18 fw-regular text-black">joshuarozario17@gmail.com</h6>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">Registration Date:<span class="text-red">*</span></h5>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fs-18 fw-regular text-black">mm/dd/yyyy</h6>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <button class="btn btn-blue">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>