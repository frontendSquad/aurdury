<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Vendors <span class="font-weight-normal">List</span>
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Vendor List</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Map-->

<section class="vendorList py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-6 mx-auto">
                <div class="searchBox vendorSearch">
                    <div class="form-groups position-relative">
                        <input type="search" placeholder="Search Vendor" class="form-control rounded-pill border-0 bg-white shadow pl-4">
                        <button class="rounded-pill bg-theme-primary border-0 px-5 py-2 text-white">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact form -->

<section class="contact py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3 class="font-weight-bold mb-4 text-dark">Leave Us A <span class="font-weight-normal">Message</span>
                </h3>
                <form action="#">
                    <div class="form-group mb-4">
                        <input class="form-control rounded-pill shadow border-0" type="text" value=""
                            placeholder="Enter Your Full Name">
                    </div>
                    <div class="form-group mb-4">
                        <input class="form-control rounded-pill shadow border-0" type="email" value=""
                            placeholder="Enter Your Email Address">
                    </div>
                    <div class="form-group mb-4">
                        <input class="form-control rounded-pill shadow border-0" type="text" value=""
                            placeholder="Enter Subject">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control rounded-15 shadow border-0" rows="5"
                            placeholder="Describe yourself here...">
                        </textarea>
                    </div>
                    <button type="button" data-toggle="modal" data-target="#confirmationPop"
                        class="rounded-pill bg-theme-primary border-0 px-5 py-2 text-white">Submit</button>
                </form>
            </div>
            <div class="col-md-6 mb-4">
                <h3 class="font-weight-bold mb-4 text-dark">Get in <span class="font-weight-normal">Touch</span></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <div class="socialInfo py-4">
                    <div class="d-flex align-items-center flex-wrap flex-md-nowrap gap-15 mb-4">
                        <div class="socialIcon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="socialContent">
                            <h5 class="font-weight-bold mb-0 text-dark">
                                Address
                            </h5>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap flex-md-nowrap gap-15 mb-4">
                        <div class="socialIcon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="socialContent">
                            <h5 class="font-weight-bold mb-0 text-dark">
                                Email Address
                            </h5>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap flex-md-nowrap gap-15 mb-4">
                        <div class="socialIcon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="socialContent">
                            <h5 class="font-weight-bold mb-0 text-dark">
                                Phone Number
                            </h5>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <h6 class="font-weight-bold mb-3 text-dark">Working Hours</h6>
                <p>Monday – Saturday: 08AM – 22PM</p>
            </div>
        </div>
    </div>
</section>

<?php
include './popup.php';
include '../layout/footer.php';
?>