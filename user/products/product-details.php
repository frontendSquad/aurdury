<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Product <span class="font-weight-normal">Details</span>
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
        <!-- filter -->
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-md-4">
                <p class="mb-0">We have <span class="theme-primary-text font-weight-bold">780</span> products now</p>
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
        <!-- product items -->

        <div class="row">
            <!-- product side filter -->
            <div class="col-md-3">
                <div class="product-filter shadow py-3 rounded-15 mb-4">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#electronic" aria-expanded="false"
                                    aria-controls="electronic">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/electronic.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Electronics
                                    </div>
                                </button>
                            </div>
                            <div id="electronic" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#fashion" aria-expanded="false"
                                    aria-controls="fashion">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/fashion.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Fashion
                                    </div>
                                </button>
                            </div>
                            <div id="fashion" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#footWear" aria-expanded="false"
                                    aria-controls="footWear">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/foot.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Foot Wear
                                    </div>
                                </button>
                            </div>
                            <div id="footWear" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#bags" aria-expanded="false"
                                    aria-controls="bags">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/bag.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Bags
                                    </div>
                                </button>
                            </div>
                            <div id="bags" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#music" aria-expanded="false"
                                    aria-controls="music">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/music.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Music
                                    </div>
                                </button>
                            </div>
                            <div id="music" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#books" aria-expanded="false"
                                    aria-controls="books">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/book.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Books
                                    </div>
                                </button>
                            </div>
                            <div id="books" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#wigs" aria-expanded="false"
                                    aria-controls="wigs">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/wig.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Wigs
                                    </div>
                                </button>
                            </div>
                            <div id="wigs" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#hats" aria-expanded="false"
                                    aria-controls="hats">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/hat.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Hats
                                    </div>
                                </button>
                            </div>
                            <div id="hats" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex gap-15 w-100 collapsed border-0 bg-transparent" type="button"
                                    data-toggle="collapse" data-target="#jewelries" aria-expanded="false"
                                    aria-controls="jewelries">
                                    <div class="megaIcon">
                                        <img draggable="false" src="../../images/jeweller.png" alt="Electronic">
                                    </div>
                                    <div class="megaOption">
                                        Jewelries
                                    </div>
                                </button>
                            </div>
                            <div id="jewelries" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- price by filter -->
                <div class="price-filter shadow py-3 rounded-15 mb-4">
                    <div class="filterTitle px-4">
                        <h5 class="font-weight-bold mb-2 text-dark">Filter <span class="font-weight-normal">By
                                Price</span>
                        </h5>
                        <div class="rangeSlider">
                            <div class="form-group">
                                <input type="range" class="form-control-range" id="formControlRange">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="minPrice">
                                    <p class="mb-0 font-weight-bold">From: <span
                                            class="theme-primary-text font-weight-normal">$500</span></p>
                                </div>
                                <div class="minPrice">
                                    <p class="mb-0 font-weight-bold">To: <span
                                            class="theme-primary-text font-weight-normal">$1,000</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- color Option -->
                        <div class="colorBox font-14">
                            <div class="varaiationTitle pt-4 pb-2">
                                <h6 class="text-secondary">Color</h6>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="red"
                                    value="option1" checked>
                                <label class="form-check-label" for="red">
                                    Red (56)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="green"
                                    value="option2">
                                <label class="form-check-label" for="green">
                                    Green (78)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="blue"
                                    value="option2">
                                <label class="form-check-label" for="blue">
                                    Blue (54)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="pink"
                                    value="option2">
                                <label class="form-check-label" for="pink">
                                    Pink (78)
                                </label>
                            </div>
                        </div>
                        <!-- item Condition -->
                        <div class="condition font-14">
                            <div class="varaiationTitle pt-4 pb-2">
                                <h6 class="text-secondary">Item Conditions</h6>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="condition" id="new" value="option1"
                                    checked>
                                <label class="form-check-label" for="new">
                                    New (1506)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="condition" id="refurbished"
                                    value="option2">
                                <label class="form-check-label" for="refurbished">
                                    Refurbished (27)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="condition" id="used" value="option2">
                                <label class="form-check-label" for="used">
                                    Used (45)
                                </label>
                            </div>
                        </div>
                        <!-- filter btn -->
                        <div class="filterBtn text-center pt-4">
                            <button
                                class="gradient-btn rounded-pill bg-theme-primary border-0 px-5 py-2 text-white">Filter</button>
                        </div>
                    </div>
                </div>
                <!-- serach by rating -->
                <div class="price-filter shadow py-3 rounded-15 px-4">
                    <div class="filterTitle">
                        <h5 class="font-weight-bold mb-2 text-dark">Search <span class="font-weight-normal">By
                                Rating</span>
                        </h5>
                    </div>
                    <div class="rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
            </div>
            <!-- shop products -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4">
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