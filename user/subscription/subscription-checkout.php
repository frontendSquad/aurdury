<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="d-flex justify-content-between mt-4 mb-4">
        <div class="titleBox my-3">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Subscription - Checkout</h3>
        </div>
    </div>
    <form action="./payment.php">
        <div class="row my-3">
            <div class="col-md-4">
                <div class="d-flex flex-wrap">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Name<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Enter Name">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Phone Number<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="tel" value="" placeholder="Enter Phone Number">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-3">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Country<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Select Education Leve">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Town / City<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Enter Town / City">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Postcode / ZIP<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="number" value="" placeholder="Enter Postcode / ZIP">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-wrap">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Last Name <span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="number" value="" placeholder="Enter Last Name">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Email Address<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="email" value="" placeholder="Enter Email Address">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Street Address<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Enter Street Address">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            State / County<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Enter State / County">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-1 mx-auto">
                <div class="paymentBox">
                    <div class="order p-3">
                        <div class="summryTitle text-center">
                            <h3 class="achivpFont mb-0">Order Summary</h3>
                        </div>
                        <div class="d-flex justify-content-between py-3 flex-wrap border-item">
                            <div class="order-item">
                                <p class="mb-0 text-dark">Item</p>
                            </div>
                            <div class="order-price flex-shrink-0">
                                <p class="mb-0 text-dark">$20</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between py-3 flex-wrap border-item">
                            <div class="order-item">
                                <p class="mb-0 text-dark">Silver Subscription</p>
                            </div>
                            <div class="order-price flex-shrink-0">
                                <p class="mb-0 text-dark">$20</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between py-3 flex-wrap border-item">
                            <div class="order-item">
                                <p class="mb-0 text-dark">Subtotal</p>
                            </div>
                            <div class="order-price flex-shrink-0">
                                <p class="mb-0 text-dark">US $25.00</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between py-3 flex-wrap border-item">
                            <div class="order-item">
                                <p class="mb-0 text-dark">Total</p>
                            </div>
                            <div class="order-price flex-shrink-0">
                                <p class="mb-0 text-dark">US $25.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4 d-sm-flex d-block">
                <button class="btn bg-theme-primary text-white px-5 py-3" aria-label=".form-select-sm example">Proceed Now</button>
            </div>
        </div>
    </form>

</div>


<?php
include('../layout/footer.php');
?>