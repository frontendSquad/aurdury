<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Student Management</h3>
    </div>
    <div class="row shadow p-sm-5 p-4 rounded-15">
        <h4 class="font-weight-300">Filters</h4>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Age</option>
                <option value="1">January</option>
                <option value="2">Febuary</option>
                <option value="3">March</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Education Level</option>
                <option value="1">January</option>
                <option value="2">Febuary</option>
                <option value="3">March</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Select Status</option>
                <option value="1">Active</option>
                <option value="2">In Active</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3 input-group w-auto">
            <input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary border-left-0 border bg-white" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </span>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-15 mt-5">
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-bs-toggle="button" aria-pressed="true">Filter</a></p>
            <p><a class="btn bg-theme-primary-outline text-white px-4" aria-disabled="true" role="button" data-bs-toggle="button">Reset</a></p>
        </div>
    </div>
</div>

<!-- tablesection -->

<div class="notification-section shadow p-5 rounded-15 my-4">
    <div class="row justify-content-between">
        <div class="col-xl-4 col-md-6 mb-xl-0 mb-3">
            <div class="selectBox">
                <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                    <p class="mb-0">Sorting:</p>
                    <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                        <option selected>Name - Ascending</option>
                        <option value="1">Name - Decending</option>
                        <option value="2">Country - Ascending</option>
                        <option value="3">Country - Decending</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <div class="selectBox">
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>Record Per Page</option>
                    <option value="1">10</option>
                    <option value="2">20</option>
                    <option value="3">30</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-sm-5 pt-0 table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="table-site-headings">S.No.</th>
                        <th class="table-site-headings">Student Name</th>
                        <th class="table-site-headings">Email</th>
                        <th class="table-site-headings">Age</th>
                        <th class="table-site-headings">Phone Number</th>
                        <th class="table-site-headings">Preferred Subjects</th>
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
                        <td>100</td>
                        <td>50</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="./student-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                    <a class="dropdown-item mb-1" aria-label=".form-select-sm example" data-toggle="modal" data-target="#status"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td>100</td>
                        <td>50</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="./student-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1" aria-label=".form-select-sm example" data-toggle="modal" data-target="#status"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td>100</td>
                        <td>50</td>
                        <td> <span class="primary-status status-inactive">Inactive</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="./student-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1" aria-label=".form-select-sm example" data-toggle="modal" data-target="#status"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td>100</td>
                        <td>50</td>
                        <td> <span class="primary-status status-inactive">Inactive</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="./student-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1" aria-label=".form-select-sm example" data-toggle="modal" data-target="#status"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Product Name</td>
                        <td>£70</td>
                        <td>Abc</td>
                        <td>100</td>
                        <td>50</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="./student-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1" aria-label=".form-select-sm example" data-toggle="modal" data-target="#status"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
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
include('./studentPopups.php');
include('../layout/footer.php');
?>