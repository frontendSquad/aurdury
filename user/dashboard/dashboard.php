<?php
include('../layout/topBar.php');
?>
<div class="row pt-3">
    <div class="col-md-12">
        <div class="dashboardPage py-3">
            <h1 class="achivpFont h3 font-weight-bold">Dashboard</h1>
        </div>
    </div>
</div>
<div class="row p-sm-2 mb-5">
    <div class="col-xl-4 col-md-8">
        <div class="shadow p-3 rounded-15 mb-3 mb-md-0">
            <h5 class="font-weight-bold achivpFont mb-0">No. Students</h5>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <div class="countNumbers flex-shrink-0">
                    <h3 class="font-weight-bold achivpFont mb-0">33</h3>
                </div>
                <div class="iconBasboard flex-shrink-0">
                    <figure class="mb-0">
                        <img src="../images/students.png" alt="Students" class="mw-100">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- No. Students Registered -->

<div class="row px-3 px-sm-0 position-relative">
    <div class="col rotateText">
        <h6 class="mb-0 achivpFont">New Shippers Registered</h6>
    </div>
    <div class="col-md-12 shadow p-sm-5 p-3 rounded-15">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
            <div class="graphTitle flex-shrink-0">
                <h6 class="mb-0 achivpFont">No. Students Registered</h6>
            </div>
            <div class="grapSelect flex-shrink-0">
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>Month</option>
                    <option value="1">January</option>
                    <option value="2">Febuary</option>
                    <option value="3">March</option>
                </select>
            </div>
        </div>
        <div class="graphBox py-4">
            <figure class="mb-0">
                <img src="../images/graph.png" class="mw-100" alt="No. Students Registered">
            </figure>
        </div>
    </div>
    <div class="col-md-12 text-center my-4">
        <p class="py-sm-3 py-0 mb-0">Months</p>
    </div>
</div>


<?php
include('../layout/footer.php');
?>