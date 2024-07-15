<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between card flex-sm-row border-0">
            <h4 class="mb-sm-0 font-size-16 fw-bold"><?php echo $title ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                    <li class="breadcrumb-item active"><?php echo $breadcrums ?></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form id="user_search" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Enter Member Id</label>
                        <input class="form-control" type="text" name="member_id" id="member_id" placeholder="Enter Member Id Here !">
                    </div>
                </div>
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-top: 30px;">Save</button>
                </div>
            </div>
            <!-- end row -->
        </form>
        <div id="user_data"></div>
    </div>
</div>

<!-- JavaScript -->
<script src="<?php echo base_url() ?>media/js/super_admin/loan.js"></script>
<script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>