<h3>Personal Details</h3>
<section>
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $upd_customer['id'] ?>">
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
                <label for="example-number-input" class="form-label">Identifier Name</label>
                <select name="identifier_name" id="identifier_name" class="form-control" onchange="return get_agent_data(this.value)">
                    <option value=""> ---- Select One ---- </option>
                    <?php foreach ($agent as $age) { ?>
                        <option value="<?php echo $age['id'] ?>" <?php echo ($age['id'] == $upd_customer['identifier_name']) ? "Selected" : "" ;  ?>><?php echo $age['name'] . "(" . $age['agent_id'] . ")" ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Identifier Mobile No.</label>
                <input class="form-control" type="number" name="identifier_number" id="identifier_number" value="<?php echo $upd_customer['identifier_number'] ?>" readonly>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Identifier Email</label>
                <input class="form-control" type="email" name="identifier_email" id="identifier_email" value="<?php echo $upd_customer['identifier_email'] ?>" readonly>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Assign Employee </label>
                <select class="form-control" name="assign_employee" id="assign_employee">
                    <option value=""> ---- Select One ---- </option>
                    <?php foreach ($employee as $emp) { ?>
                        <option value="<?php echo $emp['id'] ?>" <?php echo($emp['id'] == $upd_customer['assign_employee']) ? "Selected" : "" ; ?> ><?php echo $emp['name'] . "(" . $emp['employee_id'] . ")" ?></option>
                    <?php } ?>
                </select>
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