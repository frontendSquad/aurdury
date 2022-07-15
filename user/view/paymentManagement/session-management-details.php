<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="d-sm-flex d-block justify-content-between mt-4 mb-4" >
        <div class="titleBox my-3">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Session Booking Details</h3>
        </div>
        <div class="d-flex justify-content-end">
            <div class="selectBox">
                <p class="mb-0 text-right">Amount <span class="theme-primary-text pl-3 fa-20">$00.00</span></p>
                <p class="mb-0 text-right"><a data-toggle="modal" data-target="#reject" class="pr-3">View Rejection Reason</a> Rejected By: <span class="font-weight-bold text-danger pl-1 fa-20">Teacher</span></p>
                <div class="grapSelect d-flex gap-15 align-items-center justify-content-end flex-wrap flex-lg-nowrap">
                    <p class="mb-0 flex-shrink-0 achivpFont">Session Status:</p>
                    <div class="status d-flex align-items-center">
                        <select class="form-select form-select-sm pr-5 border-0 achivpFont" aria-label=".form-select-sm example" data-toggle="modal" data-target="#status">
                            <option selected> Pending</option>
                            <option value="1">Payed</option>
                            <option value="1">Refund</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row shadow align-items-center p-sm-5 p-3 rounded-15 my-3">
        <div class="col-md-12 text-right">
            <p><a href="#" class="btn bg-theme-primary text-white px-4 py-3" role="button" data-bs-toggle="button" aria-pressed="true">View Student Profile</a></p>
        </div>
        <div class="col-md-3 text-center">
            <figure class="mb-0">
                <img src="../images/circle-icon.png" width="200px" alt="Profile" class="mw-100">
            </figure>
        </div>
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Student Name:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Abc</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Education Level:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Abc , Abc ,  Abc</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Date:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Posted</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Duration:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">1 hr</p>
                </div>
            </div>
        </div>
    </div>

    <div class="titleBox mt-5 mb-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Teacher Details</h3>
    </div>
    <div class="row shadow align-items-center p-sm-5 p-3 rounded-15 my-3">
        <div class="col-md-12 text-right">
            <p><a href="#" class="btn bg-theme-primary text-white px-4 py-3" role="button" data-bs-toggle="button" aria-pressed="true">View Teacher Profile</a></p>
        </div>
        <div class="col-md-3 text-center">
            <figure class="mb-0">
                <img src="../images/circle-icon.png" width="200px" alt="Profile" class="mw-100">
            </figure>
        </div>
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Name:</p>
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
                    <p class="text-secondary">email@gmal.com</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Education Level:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">abc</p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row shadow p-sm-5 p-3 rounded-15 my-3 mt-5">
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Subject:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary"> Abc Subject</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Level:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">ABCD Level</p>
                </div>
            </div>
        </div>
    </div>

    
    
    <div class="row shadow p-sm-5 p-3 rounded-15 mt-5 mb-5">
        <div class="col-md-9 border-right border-dark">
            <h4>Question</h4>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
            <h4 class="mt-4">Documents</h4>
            <div class="d-inline-flex mt-4">
                <img class="ml-4" width="50px" src="./../images/image-svgrepo-com.png">
                <img class="ml-4" width="50px" src="./../images/w.png">
                <img class="ml-4" width="50px" src="./../images/image-svgrepo-com.png">
            </div>
            <div class="d-inline-flex align-items-end">
                <img class="mx-4 " src="./../images/download.png">
                <p class="mb-0">To View Doc Download Them Onto Your Device</p>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="light-bg d-flex flex-column justify-content-center">
                <div class="d-flex flex-wrap justify-content-between  mb-4">
                    <p class="text-secondary">Total Amount :</p>
                    <p class="theme-primary-text fa-20 "> $00.00</p>
                </div>
                <div class="d-flex flex-wrap justify-content-between mb-4">
                    <p class="text-secondary">Teacher Amount :</p>
                    <p class="theme-primary-text fa-20 "> $00.00</p>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <p class="text-secondary">Admin Amount:</p>
                    <p class="theme-primary-text fa-20 "> $00.00</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reject" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Reason for Rejection</h4>
                <p class="achivpFont mt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit</p>
            </div>
            <div class="modal-footers text-center pb-3">
                <button type="button" class="px-5 pb-3 btn bg-theme-primary text-white" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>



<?php
include('../layout/footer.php');
?>