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
                <div><button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"    data-bs-target=".bs-example-modal-md" style="float:right;"> <i class="fas fa-plus"></i> Create Commission Category</button></div><br><br><br>
                <table id="leadtable" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Loan Type</th>
                            <th>Commission Type</th>
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

<!--  Create Document Model -->
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Create Commission Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_commission_data" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">loan Type</label>
                                <select class="form-control" name="loan_type" id="loan_type" >
                                    <option value=""> ---- Select One ---- </option>
                                    <?php foreach($loan_type as $ln_type) { ?>
                                        <option value="<?php echo $ln_type['id'] ?>"><?php echo $ln_type['loan_type_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Commission Type</label>
                                <select name="commission_type" id="commission_type" class="form-control" >
                                    <option value=""> --- Select One --- </option>
                                    <option value="1">On File</option>
                                    <option value="2">On Approve</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12" id="commission_section" style="display: none;">
                            <div class="mb-3">
                                <label class="form-label">Commission</label>
                                <select name="commission" id="commission" class="form-control" >

                                    <option value=""> --- Select One --- </option>
                                    <option value="1">In Percentage</option>
                                    <option value="2">In Amount</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12" id="amount_section" style="display: none;">
                            <div class="mb-3">
                                <label class="form-label">Commission Amount</label>
                                <input type="text" name="commission_amount" id="commission_amount" class="form-control" placeholder="Enter Your Commission Amount Here!">
                            </div>
                        </div>
                        <div class="col-lg-12" id="percentage_section" style="display: none;">
                            <div class="mb-3">
                                <label class="form-label">Commission Percentage</label>
                                <input type="text" name="commission_percentage" id="commission_percentage" class="form-control" placeholder="Enter Your Commission Amount Here!">
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

<!--  view LOan Product Model -->
<div class="modal fade view_model" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">View Commission Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="show_commission"></div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--  Update Update Loan Product Category Model -->
<div class="modal fade update_category" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Update Commission Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="commission_updata" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div id="up_commission"></div>
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

<script src="<?php echo base_url() ?>media/js/super_admin/category/commission.js"></script>
<script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>