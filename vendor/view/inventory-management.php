<?php
$title = "Store Management";
$pg = "store-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="inventory-management" class="inventory-management-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="store-listing.php"><i class="fas fa-arrow-left"></i></a> Inventory Mangement</h2>
            </div>
        </div>
    </div>
    <div class="user-listing-top bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3 mb-xl-0 mb-3">
                <div class="search-wrap flex-grow-1 search-wrap flex-grow-1 shadow-medium rounded-50 w-100">
                    <input type="search" class="form-control text-gray" placeholder="Search">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 mb-xl-0 mb-3">
                <div class="select-wrapper select-drop d-block d-inline-md-block w-100 shadow-medium rounded-50">
                    <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                        <option value="" disabled selected>All Categories</option>
                        <option value="Unblock">Category A</option>
                        <option value="Block">Category B</option>
                        <option value="Block">Category C</option>
                        <option value="Block">Category D</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 mb-xl-0 mb-3">
                <div class="select-wrapper select-drop d-block d-inline-md-block w-100 shadow-medium rounded-50">
                    <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                        <option value="" disabled selected>Available Status</option>
                        <option value="Unblock">In Stock</option>
                        <option value="Block">Sold Out</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 mb-xl-0 mb-3">
                <button class="btn btn-blue fs-18 fw-bold">Search</button>
            </div>
        </div>
    </div>
    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-3 col-xxl-2 text-sm-start text-center">
                <img src="../assets/images/user-avatar.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 col-lg-9 col-xxl-10 mt-xl-0 mt-4 text-sm-start text-center">
                <h5 class="fs-25 fw-bold text-black">Vendor Name</h5>
                <div class="mt-3">
                    <a href="edit-store-listing.php" class="btn btn-dark shadow-black fs-18">View Profile</a>
                </div>
            </div>    
        </div>
    </div>
    <div class="content-body rounded-10 shadow-none">
        <div class="dataTables_wrapper">
            <div class="user-listing-top bg-transparent">
                <div class="row">
                    <div class="col-12 col-md-6 col-xxl-9 mt-2 mt-md-0 align-self-xl-end">
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
                            <label class="d-inline-md-block d-block ms-md-4">Entries</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xxl-3 align-items-center">
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
                            <th class="sorting">Vendor Name</th>
                            <th class="sorting">Product Name</th>
                            <th class="sorting">Category</th>
                            <th class="sorting">Price</th>
                            <th class="sorting">Available Status</th>
                            <th class="sorting">Currently In Stock</th>
                            <th class="sorting">Status</th>
                            <th class="sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category A</td>
                            <td>$20</td>
                            <td class="status deliver">In Stock</td>
                            <td>50</td>
                            <td class="status deliver">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="edit-inventory.php"><i class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".store-blocked"><i class="fas fa-times"></i>Inactive</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category B</td>
                            <td>$20</td>
                            <td class="status not-paid">Sold Out</td>
                            <td>40</td>
                            <td class="status not-paid">Inactive</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="edit-inventory.php"><i class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".store-unblocked"><i class="fas fa-times"></i>Active</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category C</td>
                            <td>$20</td>
                            <td class="status deliver">In Stock</td>
                            <td>100</td>
                            <td class="status deliver">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="edit-inventory.php"><i class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".store-blocked"><i class="fas fa-times"></i>Inactive</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category D</td>
                            <td>$20</td>
                            <td class="status not-paid">Sold Out</td>
                            <td>30</td>
                            <td class="status not-paid">Inactive</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="edit-inventory.php"><i class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".store-unblocked"><i class="fas fa-times"></i>Active</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category E</td>
                            <td>$20</td>
                            <td class="status deliver">In Stock</td>
                            <td>200</td>
                            <td class="status deliver">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="edit-inventory.php"><i class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".store-blocked"><i class="fas fa-times"></i>Inactive</a>
                                    </div>
                                </div>
                            </td>
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