<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Student Management</h3>
    </div>
    <div class="d-flex justify-content-end">
        <div class="selectBox">
            <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                <p class="mb-0 flex-shrink-0 achivpFont">Profile Status:</p>
                <div class="status d-flex align-items-center">
                    <i class="bi bi-check text-success"></i>
                    <select class="form-select form-select-sm pr-5 border-0 achivpFont">
                        <option selected>Active</option>
                        <option value="1">Inactive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row shadow p-5 rounded-15 my-3">
        <div class="col-md-3 text-center">
            <figure class="mb-0">
                <img src="../images/circle-icon.png" alt="Profile" class="mw-100">
            </figure>
        </div>
        <div class="col-md-4">
            <p class="text-secondary">Full Name</p>
            <p class="text-secondary">Email</p>
            <p class="text-secondary">Phone Number</p>
            <p class="text-secondary">Age</p>
            <p class="text-secondary">Education Level</p>
            <p class="text-secondary">Password</p>
        </div>
        <div class="col-md-4">
            <p class="text-secondary">Name Here</p>
            <p class="text-secondary">abc@example.com</p>
            <p class="text-secondary">0000-000-0000000</p>
            <p class="text-secondary">18 yrs</p>
            <p class="text-secondary">abc</p>
            <p class="text-secondary">************** <a href="#" class="pl-2">Change Password</a></p>
        </div>
    </div>

    <!-- subject -->
    <div class="titleBox my-sm-5 my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Preferred Subjects</h3>
    </div>
    <div class="d-flex shadow p-sm-5 p-2 rounded-15 my-3 justify-content-center flex-wrap subjects gap-15">
        <div class="align-items-center d-flex justify-content-center flex-grow-1 rounded-3 bg-theme-primary">
            <h3 class="font-weight-light text-white">Math</h3>
        </div>
        <div class="align-items-center d-flex justify-content-center flex-grow-1 rounded-3 bg-yellow">
            <h3 class="font-weight-light text-white">Science</h3>
        </div>
        <div class="align-items-center d-flex justify-content-center flex-grow-1 rounded-3 bg-volient">
            <h3 class="font-weight-light text-white">History</h3>
        </div>
        <div class="align-items-center d-flex justify-content-center flex-grow-1 rounded-3 bg-green">
            <h3 class="font-weight-light text-white">Computer</h3>
        </div>
        <div class="align-items-center d-flex justify-content-center flex-grow-1 rounded-3 bg-theme-primary">
            <h3 class="font-weight-light text-white">Bio</h3>
        </div>
    </div>

    <!-- post -->

    <div class="titleBox my-sm-5 my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Recent Posts</h3>
    </div>
    <div class="row shadow p-5 rounded-15 my-3">
        <!-- <h4 class="font-weight-300">Filters</h4> -->
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Select Subjects</option>
                <option value="1">Math</option>
                <option value="2">Science</option>
                <option value="3">French</option>
                <option value="4">Urdu</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Level</option>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Select Type</option>
                <option value="1">Teachers</option>
                <option value="2">In Active</option>
                <option value="3">Questions</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Sort By Status</option>
                <option value="1">Answered</option>
                <option value="3">Unclaimed</option>
            </select>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight bg-theme-green">
                <span class="text-white">Claimed</span>
            </div>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight bg-black">
                <span class="text-white">Unclaimed</span>
            </div>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight bg-success">
                <span class="text-white">Completed</span>
            </div>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight bg-black bg-theme-red">
                <span class="text-white">Rejected</span>
            </div>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>
    <div class="viewAllBtn">
        <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View All</a></p>
    </div>
</div>



<?php
include('../layout/footer.php');
?>