<?php
include('../layout/topBar.php');
?>
<div class="comission-section p-3">
    <div class="titleBox my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Commsion Management</h3>
    </div>
    <div class="contentTabs">
        <ul class="nav nav-pills mb-5 d-flex text-center pt-3 " id="pills-tab" role="tablist">
            <li class="nav-item flex-grow-1 shadow">
                <a class="nav-link active" id="pills-question-tab" data-toggle="pill" href="#pills-question" role="tab" aria-controls="pills-question" aria-selected="true">Sessions</a>
            </li>
            <li class="nav-item flex-grow-1 shadow">
                <a class="nav-link" id="pills-session-tab" data-toggle="pill" href="#pills-session" role="tab" aria-controls="pills-session" aria-selected="false">Questions</a>
            </li>
        </ul>
        <div class="">
            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-question" role="tabpanel" aria-labelledby="pills-question-tab">
                        <div class="row  justify-content-between shadow p-sm-5 p-3 rounded-15">
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
                                    <option selected>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">In Active</option>
                                </select>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center gap-15 mt-5">
                                <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-bs-toggle="button" aria-pressed="true">Apply</a></p>
                                <p><a class="btn bg-theme-primary-outline text-white px-4" aria-disabled="true" role="button" data-bs-toggle="button">Reset</a></p>
                            </div>
                        </div>
                        <div class="shadow p-sm-5 p-3 mt-5 row rounded-15">
                            <div class="row justify-content-between">
                                <div class="col-md-4 mt-sm-0 mt-3">
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
                                                <th class="table-site-headings">Teacher Name</th>
                                                <th class="table-site-headings">Subject</th>
                                                <th class="table-site-headings">Payment Recieved</th>
                                                <th class="table-site-headings">Payed To Teacher</th>
                                                <th class="table-site-headings">Admins Commission</th>
                                                <th class="table-site-headings">Education Level</th>
                                                <th class="table-site-headings">Payment Status</th>
                                                <th class="table-site-headings">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="session-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="session-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="session-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="session-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="session-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
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
                    </div>
                    <div class="tab-pane fade" id="pills-session" role="tabpanel" aria-labelledby="pills-session-tab">
                        <div class="row  justify-content-between shadow p-sm-5 p-3 rounded-15">
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
                                    <option selected>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">In Active</option>
                                </select>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center gap-15 mt-5">
                                <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-bs-toggle="button" aria-pressed="true">Apply</a></p>
                                <p><a class="btn bg-theme-primary-outline text-white px-4" aria-disabled="true" role="button" data-bs-toggle="button">Reset</a></p>
                            </div>
                        </div>
                        <div class="shadow p-sm-5 p-3 mt-5 row rounded-15">
                            <div class="row justify-content-between">
                                <div class="col-md-4 mt-sm-0 mt-3">
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
                                <div class="col-md-12 pt-5 table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th class="table-site-headings">S.No.</th>
                                                <th class="table-site-headings">Student Name</th>
                                                <th class="table-site-headings">Teacher Name</th>
                                                <th class="table-site-headings">Subject</th>
                                                <th class="table-site-headings">Payment Recieved</th>
                                                <th class="table-site-headings">Payed To Teacher</th>
                                                <th class="table-site-headings">Admins Commission</th>
                                                <th class="table-site-headings">Education Level</th>
                                                <th class="table-site-headings">Payment Status</th>
                                                <th class="table-site-headings">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="question-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="question-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="question-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="question-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                                            <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abcd</td>
                                                <td>Abcd</td>
                                                <td>Eng</td>
                                                <td>£000</td>
                                                <td>£000</td>
                                                <td>abc,abc,abc,</td>
                                                <td>abc</td>
                                                <td> <span class="primary-status status-active">Payed</span></td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item mb-1" href="question-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../layout/footer.php');
?>