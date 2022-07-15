<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="d-flex justify-content-between mt-4 mb-4">
        <div class="titleBox my-3">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Payment Screen</h3>
        </div>
    </div>
    <form action="">
        <div class="row my-3">
            <div class="col-md-4">
                <div class="d-flex flex-wrap">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Card Holder's Name<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="text" value="" placeholder="Enter Card Holder's Name">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Expire MM / YY<span class="text-danger">*</span>
                            <div class="d-flex gap-15">
                                <input class="mt-2 form-control border-0 shadow" type="number" value="" placeholder="Enter Month">
                                <input class="mt-2 form-control border-0 shadow" type="number" value="" placeholder="Enter Year">
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-wrap">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Card Number<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="number" value="" placeholder="Enter Card Number">
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap mt-4">
                    <div class="form-controls flex-grow-1 mb-4">
                        <label for="" class="w-100">
                            Enter CVV<span class="text-danger">*</span>
                            <input class="mt-2 form-control border-0 shadow" type="number" value="" placeholder="Enter CVV">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4 d-sm-flex d-block">
                <button class="btn bg-theme-primary text-white px-5 py-3" aria-label=".form-select-sm example" type="button" data-toggle="modal" data-target="#stuReg">Pay Now</button>
            </div>
        </div>
    </form>

</div>


<!-- student Registration -->

<div class="modal fade" id="stuReg" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/check.png" alt="Icon">
                </figure>
                <p class="achivpFont mb-3">Payment of $25.00 has been successful!</p>
                <p class="achivpFont theme-primary-text mb-0">Thank you for choosing us!</p>
            </div>
            <div class="modal-footers text-center py-3">
                <button type="button" class="px-5 btn bg-theme-primary text-white" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>

<?php
include('../layout/footer.php');
?>