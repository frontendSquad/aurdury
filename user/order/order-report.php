<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Report <span class="font-weight-normal">Order</span>
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Contact Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- report Banner -->

<section class="main my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="mainComtent">
                    <div class="productBanner position-relative">
                        <img draggable="false" src="../../images/main.png" alt="main" class="mw-100 w-100">
                        <div class="bannerContent">
                            <h2 class="achivpFont text-dark font-weight-400">New Lifestyle <br>
                                Collection</h2>
                            <pre>Starting at</pre>
                            <h4 class="rounded-pill bg-danger border-0 px-5 py-2 text-white d-inline-block mb-4">
                                $150.00</h4>
                            <h4 class="text-dark">$139.99</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="productBanner mb-3 position-relative">
                    <img draggable="false" src="../../images/top.png" alt="" class="mw-100 h-100">
                    <div class="rightContent">
                        <p class="text-white achivpFont mb-0">New In</p>
                        <h4 class="font-weight-bold text-white achivpFont mb-4">Smartwatch</h4>
                        <p class="mb-0"><a href="../products/" class="text-white">Shop Now <i
                                    class="bi bi-arrow-right pl-3"></i></a></p>
                    </div>
                </div>
                <div class="productBanner position-relative">
                    <img draggable="false" src="../../images/bottom.png" alt="" class="mw-100 h-100">
                    <div class="rightContent top-adjust">
                        <p class="text-dark achivpFont mb-0 font-weight-bold">Get Up <span
                                class="text-danger">50%Off</span></p>
                        <h4 class="font-weight-bold text-dark achivpFont mb-4">Skate Shoes</h4>
                        <p class="mb-0"><a href="../products/" class="text-dark font-weight-normal">Shop Now <i
                                    class="bi bi-arrow-right pl-3"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- report form -->

<section class="reportForm py-4">
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <input type="text" name="name" placeholder="Enter Your Full Name*"
                        class="form-control border shadow rounded-pill pl-4">
                </div>
                <div class="col-md-6 mb-4">
                    <input type="email" name="email" placeholder="Email Address*"
                        class="form-control border shadow rounded-pill pl-4">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="upload" class="w-100 uploadBtn">
                        <div class="d-flex justify-content-center align-items-center gap-15">
                            <div class="uploadIcon">
                                <i class="bi bi-upload"></i>
                            </div>
                            <div class="uploadText">
                                <p class="mb-0">Image JPEG 5MP</p>
                            </div>
                        </div>
                        <input type="file" id="upload" style="display: none;">
                    </label>
                </div>
                <div class="mb-4 col-md-12">
                    <textarea name="issue" placeholder="Issue Description*"
                        class="form-control border shadow rounded-15 p-4" rows="8" cols="30"></textarea>
                </div>
                <div class="col-md-12 mb-4">
                    <button type="submit" class="rounded-pill bg-gradient border-0 px-5 py-2 text-white">Report</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php
include '../layout/footer.php';
?>o