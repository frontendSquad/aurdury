<?php
include '../layout/topBar.php';
?>

<section class="breadcurm bg-theme-blue py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 py-4">
                <div class="titleBox text-center">
                    <h1 class="font-weight-bold mb-2 text-dark">Order <span class="font-weight-normal">Logs</span>
                    </h1>
                    <p class="text-black mb-0"><a href="../home" class="breacumText">Home</a> <i
                            class="bi bi-chevron-right"></i> <span>Contact Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- product List -->

<section class="vendorListItems py-5">
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
        <!-- Order Log -->

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive orderLogs">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">No. of Products</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td class="text-uppercase status">pending</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i class="bi bi-eye pr-2"></i> View Order</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-x-lg pr-2"></i> Report Order</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>02</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td class="text-uppercase status">DELIVERED</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i class="bi bi-eye pr-2"></i> View Order</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-x-lg pr-2"></i> Report Order</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>03</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td class="text-uppercase status">DELIVERED</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i class="bi bi-eye pr-2"></i> View Order</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-x-lg pr-2"></i> Report Order</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>04</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td class="text-uppercase status">INPROCESS</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i class="bi bi-eye pr-2"></i> View Order</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-x-lg pr-2"></i> Report Order</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>05</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td class="text-uppercase status">rEFUNDED</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i class="bi bi-eye pr-2"></i> View Order</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-x-lg pr-2"></i> Report Order</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- pagination -->

        <div class="row justify-content-between align-items-center">
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