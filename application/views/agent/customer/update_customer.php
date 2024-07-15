<h3>Personal Details</h3>
<section>
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $upd_customer['id'] ?>">
                <input class="form-control" type="hidden" name="customer_id" id="customer_id" value="<?php echo $upd_customer['customer_id'] ?>">
                <input class="form-control" type="text" name="name" id="name" value="<?php echo $upd_customer['name'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-date-input" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="dob" id="dob" value="<?php echo $upd_customer['dob'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Full Address <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="address" id="address" value="<?php echo $upd_customer['address'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="mobile_no" id="mobile_no" value="<?php echo $upd_customer['mobile_no'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-email-input" class="form-label">Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" id="email" value="<?php echo $upd_customer['email'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Aadhar Card No.<span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="aadhar_card_no" id="aadhar_card_no" value="<?php echo $upd_customer['aadhar_card_no'] ?>" >
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Pan No. <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="pan_no" id="pan_no" value="<?php echo $upd_customer['pan_no'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Password <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="password" id="password" value="<?php echo $upd_customer['password'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Loan Amount <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="loan_amount" id="loan_amount" value="<?php echo $upd_customer['loan_amount'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Document Status <span class="text-danger">*</span></label>
                <select class="form-control" name="document_status" id="document_status">
                    <option value=""> ---- Selecte One ---- </option>
                    <option value="1" <?php echo ($upd_customer['document_status'] == 1) ? "Selected" : ""; ?>> Pending </option>
                    <option value="2" <?php echo ($upd_customer['document_status'] == 2) ? "Selected" : ""; ?>> Complete </option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Description </label>
                <textarea class="form-control" name="description" id="description"><?php echo $upd_customer['description'] ?></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Next Follow Up Feedback </label>
                <textarea class="form-control" name="next_follow_up_feedback" id="next_follow_up_feedback"><?php echo $upd_customer['next_follow_up_feedback'] ?></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Next Follow Date </label>
                <input class="form-control" type="date" name="next_follow_date" id="next_follow_date" value="<?php echo $upd_customer['next_follow_date'] ?>">
            </div>
        </div>
    </div>
</section>

<!-- Company Document -->
<h3>Bank Details</h3>
<section>
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Account No.</label>
                <input class="form-control" type="number" name="account_no" id="account_no" value="<?php echo $upd_customer['account_no'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">IFSC Code</label>
                <input class="form-control" type="text" name="ifsc_code" id="ifsc_code" value="<?php echo $upd_customer['ifsc_code'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Branch Name</label>
                <input class="form-control" type="text" name="branch_name" id="branch_name" value="<?php echo $upd_customer['branch_name'] ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Bank Name</label>
                <input class="form-control" type="text" name="bank_name" id="bank_name" value="<?php echo $upd_customer['bank_name'] ?>">
            </div>
        </div>
    </div>
</section>