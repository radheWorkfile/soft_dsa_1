<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between card flex-sm-row border-0">
            <h4 class="mb-sm-0 font-size-16 fw-bold">
                <?php echo $title ?>
            </h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                    <li class="breadcrumb-item active">
                        <?php echo $breadcrums ?>
                    </li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div><button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"    data-bs-target=".bs-example-modal-md" style="float:right;"> <i class="fas fa-plus"></i> Create Loan Type </button></div><br><br><br>
                <table id="leadtable" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Loan Type Name</th>
                            <th>Document</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<!--  Create Loan Product Model -->
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Create Loan Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_loan_type_data" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Loan Type Name:</label>
                                <input class="form-control" type="text" name="loan_type_name" id="loan_type_name" placeholder="Enter Loan Type Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Documents:</label><br>
                                <input type="checkbox" name="document[]" value="1"> Identity Proof<br>
                                <input type="checkbox" name="document[]" value="2"> Address Proof<br>
                                <input type="checkbox" name="document[]" value="3"> Latest Passport Size Photography<br>
                                <input type="checkbox" name="document[]" value="4"> Signature Verification Proof<br>
                                <input type="checkbox" name="document[]" value="5"> Age Proof<br>
                                <input type="checkbox" name="document[]" value="6"> Pan Card<br>
                                <input type="checkbox" name="document[]" value="7"> Aadhaar Card<br>
                                <input type="checkbox" name="document[]" value="8"> Voter's Id Card<br>
                                <input type="checkbox" name="document[]" value="9"> Passport<br>
                                <input type="checkbox" name="document[]" value="10"> Driving License<br>
                                <input type="checkbox" name="document[]" value="11"> Bank Statement of Previous 12 Month<br>
                                <input type="checkbox" name="document[]" value="12"> Latest Salary Slip<br>
                                <input type="checkbox" name="document[]" value="13"> Work In Hand / Contract Copies<br>
                                <input type="checkbox" name="document[]" value="14"> Performa Invoice<br>
                                <input type="checkbox" name="document[]" value="15"> Property Document<br>
                                <input type="checkbox" name="document[]" value="16"> Academic Document<br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--  Update Update Loan Product Category Model -->
<div class="modal fade update_category" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Update Loan Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="loan_product_updata" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div id="up_loan_prod"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--  view LOan Product Model -->
<div class="modal fade view_model" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">View Loan Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="show_loan_prod"></div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="<?php echo base_url() ?>media/js/super_admin/category/loan_type.js"></script>
<script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>