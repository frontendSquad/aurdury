<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-3 d-sm-flex d-block justify-content-between align-items-center">
        <h3 class="mb-0 achivpFont font-weight-bold"><a href="./payment-log.php" class="text-dark text-decoration-none"><i class="bi bi-arrow-left theme-primary-text"></i> Payment Screen</a></h3>
    </div>
</div>

<!-- tablesection -->

<div class="notification-section shadow p-5 rounded-15 my-4">
    <div class="row">
        <div class="col-md-6">
            <div class="priceArea mb-5">
                <div class="d-flex align-items-center gap-15">
                    <div class="price-item mr-md-5">
                        <h3 class="font-weight-bold mb-1 text-dark achivpFont h4">Silver</h3>
                        <h5 class="text-secondary achivpFont">20 hours</h5>
                    </div>
                    <div class="price-item">
                        <h3 class="font-weight-bold mb-1 text-dark achivpFont h4">Price</h3>
                        <h5 class="text-secondary achivpFont">$20</h5>
                    </div>
                </div>
            </div>
            <div class="price-description mb-5">
                <div class="d-flex gap-15 mb-3">
                    <div class="icon-box">
                        <i class="bi bi-check-square-fill text-secondary"></i>
                    </div>
                    <div class="description">
                        <p class="mb-0 text-secondary">20 Students</p>
                    </div>
                </div>
                <div class="d-flex gap-15">
                    <div class="icon-box">
                        <i class="bi bi-check-square-fill text-secondary"></i>
                    </div>
                    <div class="description">
                        <p class="mb-0 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Aenean euismod bibendum laoreet. Proin gravida dolor sit</p>
                    </div>
                </div>
            </div>
            <div class="mt-4 d-flex gap-15 flex-wrap">
                <button class="btn bg-theme-primary text-white px-4 py-3" data-toggle="modal" data-target="#save">Mark As Inactive</button>
                <button class="btn border-btn text-white px-5 py-3 mt-sm-0 mt-3">Edit</button>
            </div>
        </div>
    </div>
</div>

<?php
include('../layout/footer.php');
?>