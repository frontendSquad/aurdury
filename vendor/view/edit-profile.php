<?php
$title = "Edit Profile";
$pg = "edit-profile";
include('../include/header.php');
?>
<!-- Basic form layout section start -->
<section id="protfolio_edit_page" class="profile-edit-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h2><a href="profile.php"><i class="fa fa-chevron-left"></i></a> Edit Profile Information</h2>
            </div>
        </div>
    </div>
    <div class="content-body shadow-sm bg-white rounded-10 p-4 p-lg-5">
        <div class="detail-block media d-lg-flex d-block">
            <div class="media-left flex-shrink-0 mb-5 mb-lg-0">
                <div class="profile-img text-center m-auto m-md-0">
                    <div class="attached">
                        <img src="../assets/images/avatar.png" class="img-fluid ml-0" alt="">
                        <button name="file" class="btn camera-btn" onclick="document.getElementById('upload').click()">
                            <i class="fa fa-camera"></i></button>
                        <input type="file" id="upload" name="file">
                    </div>
                </div>
            </div>
            <div class="media-body flex-grow-1 ps-0 ps-lg-5 ms-0 ms-lg-3">
                <form action="">
                    <div class="row form-group">
                        <div class="col-12 col-lg-4 col-xl-3 col-xxl-3 align-self-center">
                            <label class="fw-light">First Name<span class="text-black">*</span></label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <input type="text" class="form-control" value="Adams">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-4 col-xl-3 col-xxl-3 align-self-center">
                            <label class="fw-light">Last Name<span class="text-black">*</span></label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <input type="text" class="form-control" value="Adams">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-4 col-xl-3 col-xxl-3 align-self-center">
                            <label class="fw-light">Email Address<span class="text-black">*</span></label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <input type="email" class="form-control" Value="test@email.co" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-4 col-xl-3 col-xxl-3 align-self-center">
                            <label class="fw-light">Phone No<span class="text-black">*</span></label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <input type="email" class="form-control" Value="+35699859200">
                        </div>
                    </div>
                    <div class="row detail-row">
                        <div class="col-12 mt-3">
                            <a href="profile.php" class="btn btn-blue px-5 me-3">Save Changes</a>
                            <a href="profile.php" class="btn btn-secondary px-5">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>