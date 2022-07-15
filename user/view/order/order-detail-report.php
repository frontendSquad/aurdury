<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Order <span class="font-weight-normal">Details</span>
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Contact Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- product List -->

<section class="orderDetails py-5">
    <div class="container">
        <!-- Order Details -->

        <!-- status -->
        <div class="shadow p-4 rounded-15 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <p class="font-weight-bold">Order Status:</p>
                </div>
                <div class="col-md-9">
                    <p class="status text-danger text-uppercase">Reported</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="font-weight-bold">Email Address:</p>
                </div>
                <div class="col-md-9">
                    <p>joshuarozario@email.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="font-weight-bold">Date:</p>
                </div>
                <div class="col-md-9">
                    <p>mm/dd/yyyy</p>
                </div>
            </div>

            <!-- div will be show when the status will delivered -->

            <div class="row mt-3 deliveredBtn" style="display: none;">
                <div class="col-md-12">
                    <p class="mb-0"><a href="" class="rounded-pill bg-gradient border-0 px-5 py-2 text-white">Report
                            Order</a></p>
                </div>
            </div>

        </div>

        <!-- Address -->
        <div class="shadow p-4 rounded-15 mb-4">
            <div class="row">
                <div class="col-md-3">
                    <p class="font-weight-bold">Billing Address</p>
                    <p>Rikkard Ambrose</p>
                    <p>Abc Street here</p>
                    <p>Zipcode</p>
                    <p>Country</p>
                </div>
                <div class="col-md-9">
                    <p class="font-weight-bold">Shipping Address</p>
                    <p>Rikkard Ambrose</p>
                    <p>Abc Street here</p>
                    <p>Zipcode</p>
                    <p>Country</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive orderLogs">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Commission</th>
                                <th scope="col">Product Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <th>
                                    <img src="../../images/orderImage.png" alt="">
                                </th>
                                <td>
                                    <img src="../../images/oaio.png" alt="">
                                    <p class="mb-1">Men Black Sports Shoes</p>
                                    <p class="mb-0"><a href="#" class="theme-primary-text">View Store</a></p>
                                </td>
                                <td>X1</td>
                                <td>$123</td>
                                <td>$123</td>
                                <td>$123</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- order history -->

        <div class="row">
            <div class="col-md-12">
                <div class="titleBox">
                    <h4 class="font-weight-bold">Report Detail</h4>
                </div>
                <div class="table-responsive orderLogs">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Commission</th>
                                <th scope="col">Product Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <th>
                                    <img src="../../images/orderImage.png" alt="">
                                </th>
                                <td>
                                    <img src="../../images/oaio.png" alt="">
                                    <p class="mb-1">Men Black Sports Shoes</p>
                                    <p class="mb-0"><a href="#" class="theme-primary-text">View Store</a></p>
                                </td>
                                <td>X1</td>
                                <td>$123</td>
                                <td>$123</td>
                                <td>
                                    <p>$123</p>
                                    <div class="sub-total bg-theme-blue p-3 px-4 rounded-pill mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="orderLabel">
                                                <p class="font-weight-bold mb-0">Sub Total:</p>
                                            </div>
                                            <div class="orderValue">
                                                <p class="mb-0">$123</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tax bg-theme-blue p-3 px-4 rounded-pill mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="orderLabel">
                                                <p class="font-weight-bold mb-0">Tax:</p>
                                            </div>
                                            <div class="orderValue">
                                                <p class="mb-0">$123</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shippingRates bg-theme-blue p-3 px-4 rounded-pill mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="orderLabel">
                                                <p class="font-weight-bold mb-0">Shipping Rates:</p>
                                            </div>
                                            <div class="orderValue">
                                                <p class="mb-0">$123</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="totalRates bg-white shadow p-3 px-4 rounded-pill mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="orderLabel">
                                                <p class="font-weight-bold mb-0">Total Rates:</p>
                                            </div>
                                            <div class="orderValue">
                                                <p class="mb-0">$123</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- issue desciption  -->

        <div class="shadow p-4 rounded-15 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <p class="font-weight-bold">Issue Description</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem
                        accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi
                        repudiandae minus ab deleniti totam officia id incidunt? Issue Description Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos
                        voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti
                        totam officia id incidunt? Issue Description

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include '../layout/footer.php';
?>o