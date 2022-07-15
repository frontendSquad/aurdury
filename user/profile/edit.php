<?php
include('../layout/topBar.php');
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Edit <span class="font-weight-normal">Information</span>
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
                            <div class="col-md-6">
                                <p class="font-weight-bold">User ID:</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-dark">12314</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="col-md-6">
                                <p class="font-weight-bold">Email:</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-dark">Joshua Rozario</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap mt-3">
                            <div class="col-md-8">
                                <div class="input-group mb-3 rounded-pill overflow-hidden border">
                                    <div class="input-group-prepend border-0">
                                        <span class="input-group-text border-0" id="basic-addon1"><i
                                                class="bi bi-person-fill"></i></span>
                                    </div>
                                    <input type="text" class="form-control border-0 bg-transparent"
                                        placeholder="Enter Full Name*" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="col-md-8">
                                <div class="input-group mb-3 rounded-pill overflow-hidden border">
                                    <div class="input-group-prepend border-0">
                                        <span class="input-group-text border-0" id="basic-addon1"><i
                                                class="bi bi-telephone-fill"></i></span>
                                    </div>
                                    <input type="number" class="form-control border-0 bg-transparent"
                                        placeholder="Enter Phone Number*" aria-label="phone"
                                        aria-describedby="basic-addon1">
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


<?php
include('../layout/footer.php');
?>