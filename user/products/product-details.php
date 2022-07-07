<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Men Black <span class="font-weight-normal">Sports
                            Shoes</span>
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Vendor List</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- product Details -->
<section>
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-5">
                <figure class="mb-0">
                    <img src="../../images/pro.png" alt="" class="mw-100" draggable="false">
                </figure>
            </div>
            <div class="col-md-7">
                <div class="product-detail-box">
                    <div class="product-title">
                        <h3>Men Black Sports Shoes</h3>
                    </div>
                    <div class="product-cat-box">
                        <div class="d-flex align-items-center gap-15">
                            <div class="category-icon">
                                <figure class="mb-0">
                                    <img src="../../images/pam.png" alt="">
                                </figure>
                            </div>
                            <div class="category-title">
                                <p class="mb-1 text-secondary">Category: Electronics</p>
                                <p class="mb-0 text-secondary">SKU: MS46891340</p>
                            </div>
                        </div>
                        <div class="price d-flex gap-15 align-items-center mt-3">
                            <h4 class="font-weight-bold text-secondary text-decoration-line-through">$1,999.00</h4>
                            <h4 class="text-black">$1,699.00</h4>
                        </div>
                        <div class="rating mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="count text-secondary">(6 Review)</span>
                        </div>
                        <div class="desciptionPoint">
                            <ul>
                                <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                <li>Ultrices eros in cursus turpis massa.</li>
                                <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="variations">
                        <div class="color-variation my-4">
                            <div class="d-flex">
                                <div class="variationTitle">
                                    <h5 class="mb-0">Color:</h5>
                                </div>
                                <div class="variationValues">
                                    <span class="black"></span>
                                    <span class="grey"></span>
                                    <span class="blue"></span>
                                    <span class="red"></span>
                                    <span class="yellow"></span>
                                </div>
                            </div>
                        </div>
                        <div class="color-variation">
                            <div class="d-flex gap-30">
                                <div class="variationTitle">
                                    <h5 class="mb-0">Size:</h5>
                                </div>
                                <div class="variationValueSize">
                                    <span class="smalls border px-3 py-2 d-inline-block">Small</span>
                                    <span class="medium border px-3 py-2 d-inline-block">Medium</span>
                                    <span class="large border px-3 py-2 d-inline-block">Large</span>
                                    <span class="extraLarge border px-3 py-2 d-inline-block">Extra Large</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quantityBox d-flex gap-15 my-4">
                        <div class="input-group-field">
                            <button type="button" class="quantity-left-minus btn btn-number" data-type="minus"
                                data-field="">
                                <span class="bi bi-dash"></span>
                            </button>
                            <input type="text" id="quantity" name="quantity"
                                class="form-control-field input-number-field" value="10" min="1" max="100">
                            <button type="button" class="quantity-right-plus btn btn-number" data-type="plus"
                                data-field="">
                                <span class="bi bi-plus"></span>
                            </button>
                        </div>
                        <div class="add-to-cartBtn">
                            <button
                                class="rounded-pill bg-theme-primary border-0 px-5 py-2 text-white w-auto">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tabs -->

    <div class="containers">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <ul class="nav nav-pills mb-3 gap-15" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="text-secondary active" id="pills-home-tab" data-toggle="pill" href="#desc"
                                role="tab" aria-controls="desc" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="text-secondary" id="pills-profile-tab" data-toggle="pill" href="#spec" role="tab"
                                aria-controls="spec" aria-selected="false">Specification</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="text-secondary" id="pills-contact-tab" data-toggle="pill" href="#customer"
                                role="tab" aria-controls="customer" aria-selected="false">Customer Review (3)</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="text-secondary" id="pills-contact-tab" data-toggle="pill" href="#seller"
                                role="tab" aria-controls="seller" aria-selected="false">More From Seller</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Description -->
                    <div class="tab-pane fade" id="desc" role="tabpanel" aria-labelledby="pills-home-tab">
                        ...</div>
                    <!-- Specification -->
                    <div class="tab-pane fade" id="spec" role="tabpanel" aria-labelledby="pills-profile-tab">
                        ...</div>
                    <!-- Customer Review -->
                    <div class="tab-pane fade show active" id="customer" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="reviewsTab">
                                        <div class="reviewsBar">
                                            <div class="d-flex gap-15 flex-md-nowrap flex-wrap">
                                                <div class="reviewImage flex-shrink-0">
                                                    <figure>
                                                        <img src="../../images/jesseica.png" alt="" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="reviewContent flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-wrap mb-4">
                                                        <div class="authourName d-flex gap-15 flex-wrap">
                                                            <h5 class="text-black font-weight-bold mb-0">John Doe</h5>
                                                            <p class="text-secondary mb-0">December 4, 2022 at 3:12 pm
                                                            </p>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="reviewText">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus,
                                                            suscipit exercitationem accusantium obcaecati quos voluptate
                                                            nesciunt
                                                            facilis itaque modi commodi dignissimos sequi repudiandae
                                                            minus
                                                            ab
                                                            deleniti totam officia id incidunt? <a href="#"
                                                                class="theme-text-primary pl-2">Reply</a></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewsBar">
                                            <div class="d-flex gap-15 flex-md-nowrap flex-wrap">
                                                <div class="reviewImage flex-shrink-0">
                                                    <figure>
                                                        <img src="../../images/jesseica.png" alt="" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="reviewContent flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-wrap mb-4">
                                                        <div class="authourName d-flex gap-15 flex-wrap">
                                                            <h5 class="text-black font-weight-bold mb-0">John Doe</h5>
                                                            <p class="text-secondary mb-0">December 4, 2022 at 3:12 pm
                                                            </p>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="reviewText">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus,
                                                            suscipit exercitationem accusantium obcaecati quos voluptate
                                                            nesciunt
                                                            facilis itaque modi commodi dignissimos sequi repudiandae
                                                            minus
                                                            ab
                                                            deleniti totam officia id incidunt? <a href="#"
                                                                class="theme-text-primary pl-2">Reply</a></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewsBar">
                                            <div class="d-flex gap-15 flex-md-nowrap flex-wrap">
                                                <div class="reviewImage flex-shrink-0">
                                                    <figure>
                                                        <img src="../../images/jesseica.png" alt="" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="reviewContent flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-wrap mb-4">
                                                        <div class="authourName d-flex gap-15 flex-wrap">
                                                            <h5 class="text-black font-weight-bold mb-0">John Doe</h5>
                                                            <p class="text-secondary mb-0">December 4, 2022 at 3:12 pm
                                                            </p>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="reviewText">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus,
                                                            suscipit exercitationem accusantium obcaecati quos voluptate
                                                            nesciunt
                                                            facilis itaque modi commodi dignissimos sequi repudiandae
                                                            minus
                                                            ab
                                                            deleniti totam officia id incidunt? <a href="#"
                                                                class="theme-text-primary pl-2">Reply</a></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewsBar">
                                            <div class="d-flex gap-15 flex-md-nowrap flex-wrap">
                                                <div class="reviewImage flex-shrink-0">
                                                    <figure>
                                                        <img src="../../images/jesseica.png" alt="" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="reviewContent flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-wrap mb-4">
                                                        <div class="authourName d-flex gap-15 flex-wrap">
                                                            <h5 class="text-black font-weight-bold mb-0">John Doe</h5>
                                                            <p class="text-secondary mb-0">December 4, 2022 at 3:12 pm
                                                            </p>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="reviewText">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus,
                                                            suscipit exercitationem accusantium obcaecati quos voluptate
                                                            nesciunt
                                                            facilis itaque modi commodi dignissimos sequi repudiandae
                                                            minus
                                                            ab
                                                            deleniti totam officia id incidunt? <a href="#"
                                                                class="theme-text-primary pl-2">Reply</a></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="../../images/review.png" class="mt-4 mw-100" draggable="false" alt="">
                                    <div class="add-to-cartBtn text-center m-auto">
                                        <button
                                            class="rounded-pill bg-theme-primary border-0 px-5 py-2 text-white w-auto">Add
                                            Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- More From Seller -->
                    <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="bg-theme-blue py-5">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                        <div class="titleBox">
                                            <h3 class="font-weight-bold mb-0 text-dark">Related <span
                                                    class="font-weight-normal">Products</span></h3>
                                        </div>
                                        <div class="titleLink">
                                            <p class="mb-0"><a href="#" class="text-dark">View All</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
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
                                                    <h5 class="salePrice text-decoration-line-through font-weight-bold">
                                                        $58.45
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="text-white">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
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
                                                    <h5 class="salePrice text-decoration-line-through font-weight-bold">
                                                        $58.45
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="text-white">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
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
                                                    <h5 class="salePrice text-decoration-line-through font-weight-bold">
                                                        $58.45
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="text-white">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
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
                                                    <h5 class="salePrice text-decoration-line-through font-weight-bold">
                                                        $58.45
                                                    </h5>
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
                    </div>
                </div>
            </div>
        </div>

        <!-- ralated Products -->

        <div class="container">
            <div class="row my-4">
                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                    <div class="titleBox">
                        <h3 class="font-weight-bold mb-0 text-dark">Related <span
                                class="font-weight-normal">Products</span>
                        </h3>
                    </div>
                </div>
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
</section>


<?php
include '../layout/footer.php';
?>