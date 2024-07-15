<section>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group img">
                <label class="lab">Passport Size Photo: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                <input type="hidden" class="form-control" name="customer_id" id="customer_id" value="<?php echo $upd_customer['customer_id'] ?>" readonly>
                <input type="file" class="form-control" name="customer_passport_size_photo" id="customer_passport_size_photo">
                <input type="hidden" class="form-control" name="passport_size_pic" id="passport_size_pic" value="<?php echo $upd_customer['customer_passport_size_photo'] ?>">
                <?php if (!empty($upd_customer['customer_passport_size_photo'])) { ?>
                    <a href="<?php echo $upd_customer['customer_passport_size_photo'] ?>" target="_blank"><img src="<?php echo $upd_customer['customer_passport_size_photo'] ?>" style="width: 50%; height: 50%; border: 1px solid black; border-radius:25px; margin-top: 15px;"></a>
                <?php } else { ?>
                    <?php echo "Not Uploaded" ?>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group img">
                <label class="lab">Identity Proof: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                <input type="file" name="customer_identity_proof" id="customer_identity_proof" class="form-control">
                <input type="hidden" class="form-control" name="identity_proof" id="identity_proof" value="<?php echo $upd_customer['customer_identity_proof'] ?>">
                <?php if (!empty($upd_customer['customer_identity_proof'])) { ?>
                    <a href="<?php echo $upd_customer['customer_identity_proof'] ?>" target="_blank"><img src="<?php echo $upd_customer['customer_identity_proof'] ?>" style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px; margin-top: 15px;"></a>
                <?php } else { ?>
                    <?php echo "<h4>Not Uploaded</h4>"; ?>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group img">
                <label class="lab">Address Proof: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                <input type="file" class="form-control" name="customer_address_proof" id="customer_address_proof">
                <input type="hidden" class="form-control" name="address_proof" id="address_proof" value="<?php echo $upd_customer['customer_address_proof'] ?>">
                <?php if (!empty($upd_customer['customer_address_proof'])) { ?>
                    <a href="<?php echo $upd_customer['customer_address_proof'] ?>" download><img
                            src="<?php echo $upd_customer['customer_address_proof'] ?>"
                            style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px; margin-top: 15px;"></a>
                <?php } else { ?>
                    <?php echo "<h4>Not Uploaded</h4>"; ?>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group img">
                <label class="lab">Bank Statement: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                <input type="file" class="form-control" name="customer_bank_statement" id="customer_bank_statement">
                <input type="hidden" class="form-control" name="bank_statement" id="bank_statement" value="<?php echo $upd_customer['customer_bank_statement'] ?>">
                <?php if (!empty($upd_customer['customer_bank_statement'])) { ?>
                    <a href="<?php echo $upd_customer['customer_bank_statement'] ?>" download><img
                            src="<?php echo $upd_customer['customer_bank_statement'] ?>"
                            style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px; margin-top: 15px;"></a>
                <?php } else { ?>
                    <?php echo "Not Uploaded"; ?>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group img">
                <label class="lab">Salary Slip: <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label><br>
                <input type="file" class="form-control" name="customer_salary_slip" id="customer_salary_slip">
                <input type="hidden" class="form-control" name="salary_slip" id="salary_slip" value="<?php echo $upd_customer['customer_salary_slip'] ?>">
                <?php if (!empty($upd_customer['customer_salary_slip'])) { ?>
                    <a href="<?php echo $upd_customer['customer_salary_slip'] ?>" download><img
                            src="<?php echo $upd_customer['customer_salary_slip'] ?>"
                            style="width: 80%; height: 60%; border: 1px solid black; border-radius:25px; margin-top: 15px;"></a>
                <?php } else { ?>
                    <?php echo "<h4>Not Uploaded</h4>"; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>