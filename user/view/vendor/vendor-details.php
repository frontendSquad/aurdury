<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">OAIO STORE
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

<!-- product List -->

<section class="vendorListItems pb-5">
    <div class="container">
        <!-- vendor banner -->
        <div class="row">
            <div class="col-md-3 bg-dark-theme d-flex align-items-center justify-content-center">
                <div class="vendorBox-details">
                    <div class="vendorLogo">
                        <img src="../../images/oaio.png" alt="" class="mb-3">
                        <h3 class="text-white font-weight-bold">Vendor 1</h3>
                    </div>
                    <div class="vendorContent text-white">
                        <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                            <div class="vendorIcon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="vendorText">
                                <p class="mb-0 font-14">Address: 5171 W Campbell Ave undefined
                                    Kent, Utah 53127 United States</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                            <div class="vendorIcon">
                                <i class="bi bi-headphones"></i>
                            </div>
                            <div class="vendorText">
                                <p class="mb-0 font-14">Call Us: <a href="tel: (+91) - 540-025-124553"
                                        class="text-white">(+91) - 540-025-124553</a></p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                            <div class="vendorIcon">
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="vendorText">
                                <p class="mb-0 font-14">4.33 rating from 3 reviews</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap flex-md-nowrap gap-15 pt-3">
                            <div class="vendorIcon">
                                <i class="bi bi-shop-window"></i>
                            </div>
                            <div class="vendorText">
                                <p class="mb-0 font-14">Store Open</p>
                            </div>
                        </div>
                    </div>
                    <div class="socialIcons mt-4">
                        <a href="#" class="text-white pr-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white pr-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white pr-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white pr-2"><i class="bi bi-linkedin"></i></a>
                    </div>
                    <!-- button -->
                    <div class="vendorLink pt-3">
                        <a
                            data-toggle="modal" data-target="#seller"
                            class="bg-gradient d-inline-block rounded-pill bg-theme-primary border-0 px-5 py-2 text-white">View
                            Seller</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 p-0">
                <figure class="mb-0">
                    <img src="../../images/vendorBanner.png" alt="Banner" class="w-100" draggable="false">
                </figure>
            </div>
        </div>
        <!-- products -->
        <div class="row">
            <div class="col-12">
                <div class="titleBox py-3">
                    <h3 class="font-weight-bold mb-0 text-dark">Related Products
                    </h3>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-box">
                    <div class="product-thumnail">
                        <figure class="mb-0">
                            <img draggable="false" src="../../images/shirt.png" alt="Watch">
                        </figure>
                    </div>
                    <div class="product-content">
                        <p class="text-secondary mb-0">Fashion</p>
                        <h5 class="text-dark font-weight-bold">Polo Shirt</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary font-13">(4.0)</span>
                        </div>
                        <div class="price d-flex align-items-center gap-15 mt-3">
                            <h3 class="text-dark font-weight-bold">$48.45</h3>
                            <h5 class="salePrice text-decoration-line-through font-weight-bold">$58.45</h5>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="text-white">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="filterBtn text-center pt-4">
            <button
                class="gradient-btn rounded-pill bg-theme-primary border-0 px-5 py-2 text-white text-capitalize">View
                More</button>
        </div>
    </div>
</section>

<?php
include './vendor-popup.php';
include '../layout/footer.php';
?>