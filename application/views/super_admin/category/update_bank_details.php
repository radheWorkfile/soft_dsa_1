<div class="row">
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">Bank Name</label>
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $category['id'] ?>">
            <input class="form-control" type="text" name="bank_name" id="bank_name" value="<?php echo $category['bank_name'] ?>">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">IFSC Code</label>
            <input class="form-control" type="text" name="ifsc_code" id="ifsc_code" value="<?php echo $category['ifsc_code'] ?>">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">Branch Name</label>
            <input class="form-control" type="text" name="branch_name" id="branch_name" value="<?php echo $category['branch_name'] ?>">
        </div>
    </div>
</div>