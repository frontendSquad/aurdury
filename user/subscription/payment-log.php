<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-3 d-sm-flex d-block justify-content-between align-items-center">
        <h3 class="mb-0 achivpFont  font-weight-bold"><a href="#" class="text-dark text-decoration-none"><i class="bi bi-arrow-left theme-primary-text"></i> Payment Screen</a></h3>
    </div>
</div>

<!-- tablesection -->

<div class="notification-section shadow p-5 rounded-15 my-4">
    <div class="row justify-content-between">
        <div class="col-xl-5 col-md-6 mb-xl-0 mb-3 mt-sm-0 mt-3">
            <div class="dateFilter mb-4">
                <div class="d-flex align-items-center gap-15 flex-md-nowrap flex-wrap">
                    <label for="" class="mb-0 flex-shrink-0">
                        Sort By Date:
                    </label>
                    <input type="date" class="form-control py-2 border">
                    -
                    <input type="date" class="form-control py-2 border">
                </div>
            </div>
            <div class="selectBox">
                <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                    <label class="mb-0 flex-shrink-0">Show Entries:</label>
                    <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                        <option selected>5</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-md-6 mb-xl-0 mb-3 d-md-flex justify-content-end">
            <div class="fieldFilter mb-3">
                <div class="d-flex align-items-baseline gap-15 flex-wrap flex-md-nowrap">
                    <label for="" class="mb-0 flex-shrink-0">Filter by Status:</label>
                    <div class="filedData">
                        <select class="form-select form-select-sm pr-5 py-2 h-100 mb-4" aria-label=".form-select-sm example">
                            <option selected>Select Status</option>
                            <option value="1">Active</option>
                            <option value="2">In Active</option>
                        </select>
                        <div class="input-group w-auto">
                            <input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary border-left-0 border bg-white" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-5 table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="table-site-headings">S.No.</th>
                        <th class="table-site-headings">Subscription  Title</th>
                        <th class="table-site-headings">Cost</th>
                        <th class="table-site-headings">Date</th>
                        <th class="table-site-headings">Status</th>
                        <th class="table-site-headings">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="payment-detail.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="payment-detail.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td> <span class="primary-status status-inactive">Inactive</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="payment-detail.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td> <span class="primary-status status-inactive">Inactive</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="payment-detail.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="payment-detail.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between flex-wrap align-items-center">
            <p class="mb-0">Showing 10 of 50 Entries</p>
            <div class="viewAll d-flex justify-content-end flex-wrap py-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php
include('../layout/footer.php');
?>