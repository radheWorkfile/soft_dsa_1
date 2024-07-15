<div class="col-lg-12">
    <div class="mb-3">
        <label class="form-label">Loan Type <span class="text-danger">*</span></label>
        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $upd_cmsn['id'] ?>">
        <select class="form-control" name="loan_type" id="loan_type">
            <option value=""> --- Select One--- </option>
            <?php foreach($loan_type as $ln_type) { ?>
                <option value="<?php echo $ln_type['id'] ?>" <?php echo ($ln_type['id'] == $upd_cmsn['loan_type']) ? "Selected" : "" ; ?>><?php echo $ln_type['loan_type_name'] ?></option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="col-lg-12">
    <div class="mb-3">
        <label class="form-label">Commission Type <span class="text-danger">*</span></label>
        <select class="form-control" name="commission_type" id="commission_type">
            <option value=""> ---- Select One ---- </option>
            <option value="1" <?php echo ($upd_cmsn['commission_type'] == 1) ? "Selected" : "" ; ?>>On File</option>
            <option value="2" <?php echo ($upd_cmsn['commission_type'] == 2) ? "Selected" : "" ; ?>>On Approved</option>
        </select>
    </div>
</div>
<?php if($upd_cmsn['commission_type'] == 2) { ?>
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">Commission <span class="text-danger">*</span></label>
            <select class="form-control" name="commission" id="commission">
            <option value=""> --- Select One ---</option>
            <option value="1" <?php echo($upd_cmsn['commission'] == 1) ? "Selected" : "" ; ?>>In Percentage</option>
            <option value="2" <?php echo ($upd_cmsn['commission'] == 2) ? "Selected" : "" ; ?>>In Amount</option>
            </select>
        </div>
    </div>
<?php } ?>
<?php if($upd_cmsn['commission_type'] == 1 || $upd_cmsn['commission'] == 2) { ?>
    <div class="col-lg-12">
        <div class="mb-3">
            <label for="example-number-input" class="form-label">Commission Amount <span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="commission_amount" id="commission_amount" value="<?php echo $upd_cmsn['commission_amount'] ?>">
        </div>
    </div>
<?php } ?>
<?php if($upd_cmsn['commission'] == 1) { ?>
<div class="col-lg-12">
    <div class="mb-3">
        <label for="example-email-input" class="form-label">Commission Percentage(%) <span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="commission_percentage" id="commission_percentage"
            id="example-email-input" value="<?php echo $upd_cmsn['commission_percentage'] ?>">
    </div>
</div>
<?php } ?>