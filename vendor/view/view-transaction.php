<?php
$title = "Transaction";
$pg = "payment-logs";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-transaction" class="view-transaction-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="payment-logs.php"><i class="fas fa-arrow-left"></i></a> Transaction</h2>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-3 col-xxl-2 text-sm-start text-center">
                <img src="../assets/images/user-avatar.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 col-lg-9 col-xxl-10 mt-xl-0 mt-4 text-sm-start text-center">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <h5 class="fs-20 fw-bold text-black">Store ID:</h5>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <h6 class="fs-20 fw-regular text-black">001</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <h5 class="fs-20 fw-bold text-black">Vendor Name:</h5>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <h6 class="fs-20 fw-regular text-black">Joshua Rozario</h6>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2 class="fs-30">View Transaction</h2>
            </div>
        </div>
    </div>

    <div class="content-body rounded-10 shadow-none">
        <div class="dataTables_wrapper">
            <div class="user-listing-top bg-transparent">
                <div class="row">
                    <div class="col-12 col-md-6 col-xxl-4 mt-2 mt-md-0 align-self-xl-end">
                        <div class="dataTables_length order_select d-block d-md-flex align-items-center mb-lg-0 mb-4">
                            <label class="d-inline-md-block d-block me-4">Show</label>
                            <div class="d-block d-md-flex">
                                <div class="select-wrapper  d-block d-inline-md-block w-auto">
                                    <select class="form-control d-inline-block">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <label class="d-inline-md-block d-block ms-md-4 ms-0">Entries</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xxl-4 align-items-center">
                        <div class="d-block d-md-flex align-items-center mb-md-0 mb-4">
                            <label class="d-inline-md-block d-block me-4 mb-0 flex-shrink-0 fs-14 fw-bold text-black">Enter Order ID:</label>
                            <div class="dataTables_filter d-flex justify-content-start flex-shrink-1 w-100">
                                <div class="search-wrap flex-grow-1">
                                    <input type="search" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xxl-4 align-items-center">
                        <div class="dataTables_filter d-flex justify-content-start flex-shrink-1">
                            <div class="search-wrap flex-grow-1">
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-tabble table-responsive mx-n2">
                <table class="table table-borderless dataTable px-2">
                    <thead>
                        <tr>
                            <th class="sorting">S.No</th>
                            <th class="sorting">Order ID</th>
                            <th class="sorting">Order Date</th>
                            <th class="sorting">No. of Products</th>
                            <th class="sorting">Total Paid</th>
                            <th class="sorting">My Commission</th>
                            <th class="sorting">Amount for Vendors</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>001</td>
                            <td>mm/dd/yyyy</td>
                            <td>6</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>$123</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>002</td>
                            <td>mm/dd/yyyy</td>
                            <td>9</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>$123</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>003</td>
                            <td>mm/dd/yyyy</td>
                            <td>8</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>$123</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>004</td>
                            <td>mm/dd/yyyy</td>
                            <td>4</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>$123</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>005</td>
                            <td>mm/dd/yyyy</td>
                            <td>12</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>$123</td>
                        </tr>
                    </tbody>
                </table>
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-sm-12 col-xxl-5 align-self-center text-center text-xxl-start">
                            <div class="dataTables_info pl-2">Showing 1 to 3 of 3 entries</div>
                        </div>
                        <div class="col-sm-12 col-xxl-7 d-flex justify-content-center justify-content-xxl-end">
                            <div class="dataTables_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next disabled" i=""><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>