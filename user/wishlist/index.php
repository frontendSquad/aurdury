<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Cart
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Cart</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cartDetail py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="responsive-table">
                    <table class="w-100 cartTables">
                        <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="productDetails d-flex align-items-center gap-15">
                                        <div class="productImage position-relative">
                                            <figure class="mb-0">
                                                <img src="../../images/cartPro.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="productName">
                                            <img src="../../images/oaio.png" alt="" class="mb-3">
                                            <p class="mb-0">Men Black Sports Shoes</p>
                                            <p class="mb-0"><a href="#" class="theme-primary-text">View Store</a></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="price">
                                        <p class="mb-0">$7.25</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group-field">
                                        <button type="button" class="quantity-left-minus btn btn-number"
                                            data-type="minus" data-field="">
                                            <span class="bi bi-dash"></span>
                                        </button>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control-field input-number-field" value="10" min="1" max="100">
                                        <button type="button" class="quantity-right-plus btn btn-number"
                                            data-type="plus" data-field="">
                                            <span class="bi bi-plus"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <div class="subtotal-box d-flex align-items-center gap-15">
                                        <p class="mb-0">$7.25</p>
                                        <button class="deleteProducts text-danger border-0 bg-transparent"><i
                                                class="bi bi-x-circle"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="productDetails d-flex align-items-center gap-15">
                                        <div class="productImage position-relative">
                                            <figure class="mb-0">
                                                <img src="../../images/cartPro.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="productName">
                                            <img src="../../images/oaio.png" alt="" class="mb-3">
                                            <p class="mb-0">Men Black Sports Shoes</p>
                                            <p class="mb-0"><a href="#" class="theme-primary-text">View Store</a></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="price">
                                        <p class="mb-0">$7.25</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group-field">
                                        <button type="button" class="quantity-left-minus btn btn-number"
                                            data-type="minus" data-field="">
                                            <span class="bi bi-dash"></span>
                                        </button>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control-field input-number-field" value="10" min="1" max="100">
                                        <button type="button" class="quantity-right-plus btn btn-number"
                                            data-type="plus" data-field="">
                                            <span class="bi bi-plus"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <div class="subtotal-box d-flex align-items-center gap-15">
                                        <p class="mb-0">$7.25</p>
                                        <button class="deleteProducts text-danger border-0 bg-transparent"><i
                                                class="bi bi-x-circle"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <div class="coupon vendorSearch text-center">
                    <a href="../products/" class="rounded-pill bg-dark border-0 px-5 py-2 text-white h-100">Back To Shopping</a>
                    <a href="../checkout/" class="rounded-pill bg-gradient border-0 px-5 py-2 text-white h-100">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include '../layout/footer.php';
?>