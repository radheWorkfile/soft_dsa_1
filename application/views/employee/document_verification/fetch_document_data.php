<style>
    .img:hover{
        opacity: 0.7;
        color: black;
    }
</style>
<div class="card-body">
    <h4 class="text-center">personal Details</h4>
    <div class="row">
        <div class="col-md-4">
            <p class="text-sm">Name
                <b class="d-block"><?php echo $custdata['name'] . "(" . $custdata['customer_id'] . ")" ?></b>
            </p>
        </div>
        <div class="col-md-4">
            <p class="text-sm">Mobile
                <b class="d-block"><?php echo $custdata['mobile_no'] ?></b>
            </p>
        </div>
        <div class="col-md-4">
            <p class="text-sm">Email
                <b class="d-block"><?php echo $custdata['email'] ?></b>
            </p>
        </div>
    </div>
    <form id="add_document_data" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="lab">Customer Id</label>
                    <input type="text" class="form-control" name="customer_id" id="customer_id" value="<?php echo $docdata['customer_id'] ?>" readonly>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" id="stats" class="form-control">
                        <option value=""> ---- Select One ---- </option>
                        <option value="2" <?php echo ($docdata['status'] == 2) ? "Selected" : ""; ?>>Approved</option>
                        <option value="3" <?php echo ($docdata['status'] == 3) ? "Selected" : ""; ?>>Reject</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6" id="reason_section" style="display:none;">
                <div class="form-group">
                    <label class="lab">Reason <span class="text-danger">*</span ></label>
                    <textarea class="form-control" name="reason" id="reason" placeholder="Enter Reason Here!"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group img">
                    <label class="lab">Passport Size Photo: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                    <?php if(!empty($docdata['customer_passport_size_photo'])) { ?>
                        <a href="<?php echo $docdata['customer_passport_size_photo'] ?>" download><img src="<?php echo $docdata['customer_passport_size_photo'] ?>" style="width: 50%; height: 50%; border: 1px solid black; border-radius:25px;"></a>
                    <?php } else { ?>
                       <?php echo "Not Uploaded" ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group img">
                    <label class="lab">Identity Proof: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                    <?php if(!empty($docdata['customer_identity_proof'])) { ?>
                        <a href="<?php echo $docdata['customer_identity_proof'] ?>" download> <img src="<?php echo $docdata['customer_identity_proof'] ?>" style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px;"></a>
                    <?php } else { ?>
                        <?php echo "<h4>Not Uploaded</h4>"; ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group img">
                    <label class="lab">Address Proof: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                    <?php if(!empty($docdata['customer_address_proof'])) { ?>
                        <a href="<?php echo $docdata['customer_address_proof'] ?>" download><img src="<?php echo $docdata['customer_address_proof'] ?>" style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px; padding: 10px;"></a>
                    <?php } else { ?>
                        <?php echo "<h4>Not Uploaded</h4>"; ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group img">
                    <label class="lab">Bank Statement: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                    <?php if(!empty($docdata['customer_bank_statement'])) { ?>
                        <a href="<?php echo $docdata['customer_bank_statement'] ?>" download><img src="<?php echo $docdata['customer_bank_statement'] ?>" style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px;"></a>
                    <?php } else { ?>
                        <?php echo "Not Uploaded"; ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group img">
                    <label class="lab">Salary Slip: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                    <?php if(!empty($docdata['customer_salary_slip'])) { ?>
                        <a href="<?php echo $docdata['customer_salary_slip'] ?>" download><img src="<?php echo $docdata['customer_salary_slip'] ?>" style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px;"></a>
                    <?php } else { ?>
                        <?php echo "<h4>Not Uploaded</h4>"; ?>
                    <?php } ?>
                </div>
            </div>
        </div><br>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
        </div>
    </form>
</div>

<!-- JavaScript -->
<script src="<?php echo base_url() ?>media/js/employee/document_verification.js"></script>
<script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>
    