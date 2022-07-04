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

<!-- Vendor List -->

<section class="vendorListItems pb-5">
    <div class="container">
        <!-- filter -->
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-md-4">
                <p class="mb-0">We have <span class="theme-primary-text font-weight-bold">780</span> vendors now</p>
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
        <!-- vendor items -->

        <div class="row">
            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/obaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/oaio.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/trendBaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/trend.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">TRIDENT STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/pamBaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/pam.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">PAM STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/obaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/oaio.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/trendBaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/trend.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">TRIDENT STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/pamBaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/pam.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">PAM STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/obaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/oaio.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">OAIO STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/trendBaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/trend.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">TRIDENT STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="vendor-banner shadow">
                    <div class="vendor-thumbnail-list">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/pamBaner.png" alt="banner" class="w-100">
                        </figure>
                    </div>
                    <div class="vender-content position-relative text-center">
                        <div class="logoBox">
                            <img draggable="false" src="../../images/pam.png" alt="">
                        </div>
                        <div class="vendorCardDetails px-4 text-left">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="vendorTitle text-left">
                                    <p class="mb-0 text-secondary font-13">Since 2012</p>
                                    <h4 class="font-weight-bold">PAM STORE</h4>
                                    <div class="rating font-13">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="count text-secondary font-13">(4.0)</span>
                                    </div>
                                </div>
                                <div class="vendorProducts">
                                    <p class="mb-0"><a href="#" class="totalProductsVendor">27 Products</a></p>
                                </div>
                            </div>
                            <div class="vendorContent text-secondary">
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-geo-alt"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                            Kent, Utah 53127 United States</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                                    <div class="vendorIcon">
                                        <i class="theme-primary-text bi bi-headphones"></i>
                                    </div>
                                    <div class="vendorText">
                                        <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                                class="text-secondary">(+91) - 540-025-124553</a></p>
                                    </div>
                                </div>
                                <div class="vendorLink pt-3">
                                    <a
                                        class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-4 py-2 text-white">View
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pagination -->

        <div class="row justify-content-between align-items-center pt-2">
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