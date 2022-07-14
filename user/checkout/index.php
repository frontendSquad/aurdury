<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Checkout
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
            <div class="col-md-9">
                <!-- coupon alert -->
                <div class="couponAlert bg-theme-blue rounded-15 p-3 mb-3">
                    <div class="d-flex align-items-center gap-15">
                        <div class="saleBadge">
                            <img src="../../images/sale.png" alt="">
                        </div>
                        <div class="saleContent">
                            <p class="mb-0">Have A Coupon? Click Here To Enter Your Code</p>
                        </div>
                    </div>
                </div>
                <div class="checkoutForm">
                    <form action="">
                        <div class="titleBox">
                            <h3 class="font-weight-bold mb-0 text-dark">Personal <span
                                    class="font-weight-normal">Information</span></h3>
                        </div>
                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-6">
                                <input type="email" name="email" placeholder="Email Address*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" name="phone" placeholder="Phone Number*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                        </div>
                        <!-- Billing details  -->
                        <div class="titleBox">
                            <h3 class="font-weight-bold mb-0 text-dark">Billing <span
                                    class="font-weight-normal">Details</span></h3>
                        </div>

                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" placeholder="First Name*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="lname" placeholder="Last Name*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                        </div>

                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-6">
                                <input type="text" name="company" placeholder="Company Name (Optional)*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control border shadow rounded-pill pl-4" name="country" id="">
                                    <option value="1">Country / Region*</option>
                                </select>
                            </div>
                        </div>

                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-12">
                                <input type="text" name="address" placeholder="Street Address*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                        </div>

                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-6">
                                <input type="text" name="city" placeholder="Town / City*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control border shadow rounded-pill pl-4" name="state" id="">
                                    <option value="1">State*</option>
                                </select>
                            </div>
                        </div>

                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-6">
                                <input type="number" name="zip" placeholder="ZIP*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" name="phone" placeholder="Phone Number*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                        </div>

                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-12">
                                <input type="email" name="billingEmail" placeholder="Email Address*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="shipping" id="ship" value="option1">
                            <label class="form-check-label" for="ship">
                                Ship To A Different Address?
                            </label>
                        </div>
                        <!-- shipping details -->
                        <div class="shippingDetails" style="display: none;">
                            <div class="row align-items-center py-3">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" placeholder="First Name*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="lname" placeholder="Last Name*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                            </div>

                            <div class="row align-items-center py-3">
                                <div class="form-group col-md-6">
                                    <input type="text" name="company" placeholder="Company Name (Optional)*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control border shadow rounded-pill pl-4" name="country" id="">
                                        <option value="1">Country / Region*</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center py-3">
                                <div class="form-group col-md-12">
                                    <input type="text" name="address" placeholder="Street Address*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                            </div>

                            <div class="row align-items-center py-3">
                                <div class="form-group col-md-6">
                                    <input type="text" name="city" placeholder="Town / City*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control border shadow rounded-pill pl-4" name="state" id="">
                                        <option value="1">State*</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center py-3">
                                <div class="form-group col-md-6">
                                    <input type="number" name="zip" placeholder="ZIP*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="number" name="phone" placeholder="Phone Number*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                            </div>

                            <div class="row align-items-center py-3">
                                <div class="form-group col-md-12">
                                    <input type="email" name="billingEmail" placeholder="Email Address*"
                                        class="form-control border shadow rounded-pill pl-4">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center py-3">
                            <div class="form-group col-md-12">
                                <textarea name="billingEmail" placeholder="Order Notes (Optional)"
                                    class="form-control border shadow rounded-15 p-4" rows="8" cols="30"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <!-- order summary -->
                <div class="checkoutTotalBox shadow rounded-15 p-3">
                    <div class="titleBox pt-3">
                        <h4 class="font-weight-bold mb-5">Your Order</h4>
                        <div class="cartBox mb-3">
                            <div class="titleBox border-bottom mb-3">
                                <h6 class="font-weight-bold pb-2">Product</h6>
                            </div>
                            <div class="d-flex justify-content-between flex-md-mowrap flex-md-nowrap mb-4">
                                <div class="leftContent">
                                    <p class="mb-0">Palm Print Jacket x 1</p>
                                </div>
                                <div class="rightCartContent flex-shrink-0">
                                    <p class="mb-0">$40.00</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-md-mowrap flex-wrap mb-4">
                                <div class="leftContent">
                                    <p class="mb-0">Brown Backpack x 1</p>
                                </div>
                                <div class="rightCartContent flex-shrink-0">
                                    <p class="mb-0">$60.00</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-md-mowrap flex-wrap mb-4">
                                <div class="leftContent">
                                    <p class="mb-0 font-weight-bold theme-primary-text">Subtotal</p>
                                </div>
                                <div class="rightCartContent flex-shrink-0">
                                    <p class="mb-0 theme-primary-text font-weight-bold">$100.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="cartBox">
                            <div class="titleBox border-bottom my-3">
                                <h6 class="font-weight-bold pb-2">Product</h6>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="shipping"
                                    value="option1" checked>
                                <label class="form-check-label" for="shipping">
                                    Free Shipping
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="pickup"
                                    value="option1" checked>
                                <label class="form-check-label" for="pickup">
                                    Local Pickup
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="flatRate"
                                    value="option1" checked>
                                <label class="form-check-label" for="flatRate">
                                    Free Shipping
                                </label>
                            </div>
                            <div
                                class="d-flex justify-content-between flex-md-mowrap flex-wrap my-4 border-top border-bottom py-2">
                                <div class="leftContent">
                                    <p class="mb-0 font-weight-bold theme-primary-text">Total</p>
                                </div>
                                <div class="rightCartContent flex-shrink-0">
                                    <p class="mb-0 theme-primary-text font-weight-bold">$100.00</p>
                                </div>
                            </div>
                        </div>
                        <!-- payment -->

                        <div class="cartBox mt-5">
                            <div class="titleBox border-bottom my-3">
                                <h6 class="font-weight-bold pb-2">Payment Menthods</h6>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment" id="bank" value="option1"
                                    checked>
                                <label class="form-check-label" for="bank">
                                    Direct Bank Transfer
                                    <p class="pt-2">Make Your Payment Directly Into Our
                                        Bank Account. Please Use Your Order ID
                                        As The Payment Reference. Your Order
                                        Will Not Be Shipped Until The Funds Have
                                        Cleared In Our Account.</p>
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment" id="payments"
                                    value="option1" checked>
                                <label class="form-check-label" for="payments">
                                    Check Payments
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment" id="delivery"
                                    value="option1" checked>
                                <label class="form-check-label" for="delivery">
                                    Cash On Delivery
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment" id="paypal" value="option1"
                                    checked>
                                <label class="form-check-label" for="paypal">
                                    Paypal
                                </label>
                            </div>
                        </div>

                        <!-- form -->

                        <div class="cartBox mt-5">
                            <div class="titleBox border-bottom my-3">
                                <h6 class="font-weight-bold pb-2">Billing Details</h6>
                            </div>
                            <div class="form-group">
                                <input type="number" name="card" placeholder="Card Holder Name**"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group">
                                <input type="number" name="cardNumber" placeholder="Card Number*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group">
                                <input type="number" name="cvv" placeholder="CVV Number*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                            <div class="form-group">
                                <input type="number" name="card" placeholder="Expiry Date*"
                                    class="form-control border shadow rounded-pill pl-4">
                            </div>
                        </div>

                        <div class="text-center mt-4 pt-2">
                            <a data-toggle="modal" data-target="#cart"
                                class="bg-gradient font-weight-bold d-block rounded-pill border-0 py-2 text-white">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="policy mb-4">
    <div class="container bg-theme-grey py-4 rounded-10">
        <div class="row">
            <div class="col-md-3">
                <div class="icon-box">
                    <div class="d-flex flex-wrap align-items-center gap-15">
                        <div class="icon">
                            <img draggable="false" src="../../images/free.png" alt="FREE DELIVERY" class="mw-100">
                        </div>
                        <div class="keyContent">
                            <h6 class="font-weight-bold mb-0">FREE DELIVERY</h6>
                            <p class="mb-0 font-13">When ordering from $500.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box">
                    <div class="d-flex flex-wrap align-items-center gap-15">
                        <div class="icon">
                            <img draggable="false" src="../../images/return.png" alt="FREE DELIVERY" class="mw-100">
                        </div>
                        <div class="keyContent">
                            <h6 class="font-weight-bold mb-0">90 DAY RETURN</h6>
                            <p class="mb-0 font-13">When ordering from $500.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box">
                    <div class="d-flex flex-wrap align-items-center gap-15">
                        <div class="icon">
                            <img draggable="false" src="../../images/secure.png" alt="SECURE PAYMENT" class="mw-100">
                        </div>
                        <div class="keyContent">
                            <h6 class="font-weight-bold mb-0">SECURE PAYMENT</h6>
                            <p class="mb-0 font-13">When ordering from $500.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box">
                    <div class="d-flex flex-wrap align-items-center gap-15">
                        <div class="icon">
                            <img draggable="false" src="../../images//support.png" alt="24/7 SUPPORT" class="mw-100">
                        </div>
                        <div class="keyContent">
                            <h6 class="font-weight-bold mb-0">24/7 SUPPORT</h6>
                            <p class="mb-0 font-13">When ordering from $500.</p>
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