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
<div class="card">
    <div class="card-body">
        <form id="user_search" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="basic-example">
                                <section>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Enter Customer Id:<span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                                </div>
                                                <input type="text" name="customer_id" id="customer_id" class="form-control" placeholder="Enter Customer Id"> &nbsp;&nbsp;&nbsp;
                                                <input type="submit" name="submit" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </form>
        <div id="user_data"></div>
    </div>
</div>

<!-- JavaScript -->
<script src="<?php echo base_url() ?>media/js/employee/document_verification.js"></script>
<script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>