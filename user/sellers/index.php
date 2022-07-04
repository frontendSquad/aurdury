<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Sellers <span class="font-weight-normal">List</span>
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Vendor List</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="vendorList py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-6 mx-auto">
                <div class="searchBox vendorSearch">
                    <div class="form-groups position-relative">
                        <input type="search" placeholder="Search Vendor"
                            class="form-control rounded-pill border-0 bg-white shadow pl-4">
                        <button class="rounded-pill bg-theme-primary border-0 px-5 py-2 text-white">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seller List -->

<section class="vendorListItems pb-5">
    <div class="container">
        <!-- filter -->
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-md-4">
                <p class="mb-0">We have <span class="theme-primary-text font-weight-bold">780</span> sellers now</p>
            </div>
            <div class="col-md-4 d-flex flex-md-nowrap flex-wrap gap-15">
                <select class="form-control rounded-pill">
                    <option>Show: 50</option>
                </select>
                <select class="form-control rounded-pill">
                    <option>Sort by: Featured</option>
                </select>
            </div>
        </div>
        <!-- sellers items -->

        <div class="row">
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s1.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s2.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s3.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s4.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s5.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s6.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s7.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s8.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="seller-banner shadow p-4 position-relative">
                    <div class="seller-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/s9.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="seller-content text-center py-4">
                        <div class="sellerCardDetails">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="sellerTitle">
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                </div>
                            </div>
                            <div class="sellerLink">
                                <a
                                    class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                    Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pagination -->

        <div class="row justify-content-between align-items-center pt-5">
            <div class="col-md-4">
                <p class="mb-0">Showing 10 out of 40 records</p>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <nav class="paginationBtns shadow">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php
include '../layout/footer.php';
?>