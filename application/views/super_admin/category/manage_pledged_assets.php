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
                <div><button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"    data-bs-target=".bs-example-modal-md" style="float:right;"> <i class="fas fa-plus"></i> Create Collateral</button></div><br><br><br>
                <table id="leadtable" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Collateral Name</th>
                            <th>Description</th>
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

<!--  Create Pledged Assets Model -->
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Create Collateral</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_pledged_data" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Collateral Name</label>
                                <input class="form-control" type="text" name="pledged_assets_name" id="pledged_assets_name" placeholder="Enter Pledged Assets Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" id="description" rows="2" class="form-control" placeholder="Enter Description Here !"></textarea>
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

<!--  Update Relationship Category Model -->
<div class="modal fade update_category" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Update Collateral Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="pledged_assets_updata" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div id="up_pledged_assets"></div>
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

<script src="<?php echo base_url() ?>media/js/super_admin/category/pledged_assets.js"></script>
<script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>