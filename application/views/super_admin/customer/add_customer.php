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
        <form id="add_customer_data" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div id="basic-example">
                                <!-- Seller Details -->
                                <h3>Personal Details</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="name" id="name"
                                                    placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-date-input" class="form-label">Date of Birth <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="date" name="dob" id="dob">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Full Address <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="address" id="address"
                                                    placeholder="Enter Full Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Mobile Number <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="mobile_no"
                                                    id="mobile_no" placeholder="Enter Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-email-input" class="form-label">Email <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="email" name="email" id="email"
                                                    placeholder="Enter Email" id="example-email-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Aadhar Card No.
                                                    <span class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="aadhar_card_no"
                                                    id="aadhar_card_no" placeholder="Enter Aadhar Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Pan No. <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="pan_no" id="pan_no"
                                                    placeholder="Enter Pan Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Identifier Name
                                                </label>
                                                <select name="identifier_name" id="identifier_name" class="form-control"
                                                    onchange="return get_agent_data(this.value)">
                                                    <option value=""> ---- Select One ---- </option>
                                                    <?php foreach ($agent as $age) { ?>
                                                        <option value="<?php echo $age['id'] ?>"><?php echo $age['name'] . "(" . $age['agent_id'] . ")" ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Identifier Mobile
                                                    No.</label>
                                                <input class="form-control" type="number" name="identifier_number"
                                                    id="identifier_number" placeholder="Enter Identifier Number"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Identifier
                                                    Email</label>
                                                <input class="form-control" type="email" name="identifier_email"
                                                    id="identifier_email" placeholder="Enter Identifier Email" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Assign Employee
                                                </label>
                                                <select class="form-control" name="assign_employee"
                                                    id="assign_employee">
                                                    <option value=""> ---- Select One ---- </option>
                                                    <?php foreach ($employee as $emp) { ?>
                                                        <option value="<?php echo $emp['id'] ?>"><?php echo $emp['name'] . "(" . $emp['employee_id'] . ")" ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-number-input" class="form-label">Password <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="password" id="password"
                                                    placeholder="Enter Password Here!">
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
                                                <input class="form-control" type="number" name="account_no"
                                                    id="account_no" placeholder="Enter Account Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">IFSC Code</label>
                                                <input class="form-control" type="text" name="ifsc_code" id="ifsc_code"
                                                    placeholder="Enter IFSC Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Branch Name</label>
                                                <input class="form-control" type="text" name="branch_name"
                                                    id="branch_name" placeholder="Enter Branch Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Bank Name</label>
                                                <input class="form-control" type="text" name="bank_name" id="bank_name"
                                                    placeholder="Enter Bank Name">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Bank Details -->
                                <h3>Document Details</h3>
                                <section>
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Loan Type</label>
                                                    <select name="loan_type" class="form-control"
                                                        onchange="return get_loan_type_data(this.value)">
                                                        <option value=""> ---- Select One ---- </option>
                                                        <?php foreach ($loan_type as $ln_typ) { ?>
                                                            <option value="<?php echo $ln_typ['id'] ?>"><?php echo $ln_typ['loan_type_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Customer Type</label>
                                                    <select name="customer_type" id="doc" class="form-control"
                                                        onchange="return get_document(this.value)">
                                                        <option value=""> ---- Select One ---- </option>
                                                        <option value="1">Salaried Applicant</option>
                                                        <option value="2">Self Employed Applicant</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label">Loan Amount <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="loan_amount" id="loan_amount" placeholder="Enter Loan Amount Here!">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="sal_photo_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Passport Size
                                                        Photo <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="sal_photo" id="sal_photo">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="sal_identity_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Identity Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="sal_identity_proof"
                                                        id="sal_identity_proof">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="sal_address_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Address Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="sal_address_proof"
                                                        id="sal_address_proof">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="sal_statement_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Bank
                                                        Statement(last 6 month) <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="sal_bank_statement"
                                                        id="sal_bank_statement">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="sal_salry_slip_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Latest Salary
                                                        Slip <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="sal_salary_slip"
                                                        id="sal_salary_slip">
                                                </div>
                                            </div>

                                            <div class="col-lg-6" id="self_photo_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Passport Size
                                                        Photo <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_photo"
                                                        id="self_photo">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_identity_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Identity Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_identity_proof"
                                                        id="self_identity_proof">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_address_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Address Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_address_proof"
                                                        id="self_address_proof">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_statement_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Bank
                                                        Statement(last 6 month) <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_bank_statement"
                                                        id="self_bank_statement">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_business_proof_section"
                                                style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Proof of
                                                        Business <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_business_proof"
                                                        id="self_business_proof">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_business_profile_section"
                                                style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Busines
                                                        Profile <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_business_profile"
                                                        id="self_business_profile">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_itr_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> ITR for Last 3
                                                        Year <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_itr"
                                                        id="self_itr">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_profit_loss_section" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Profit Loss
                                                        Statement <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file"
                                                        name="self_profit_loss_statement"
                                                        id="self_profit_loss_statement">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="self_balance_sheet_section"
                                                style="display: none;">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Balance Sheet
                                                        of Last 3 Year <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="self_balance_sheet"
                                                        id="self_balance_sheet">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Collateral</label>
                                                    <select name="collateral" id="collateral" class="form-control">
                                                        <option value=""> ---- Select One ---- </option>
                                                        <?php foreach ($pledged as $pleg) { ?>
                                                            <option value="<?php echo $pleg['id'] ?>"><?php echo $pleg['pledged_assets_name'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label"> Collateral
                                                        Document <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span></label>
                                                    <input class="form-control" type="file" name="collateral_document"
                                                        id="collateral_document">
                                                </div>
                                            </div>
                                            <div class="row" id="documnt">

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Confirm Details -->
                                <h3>Confirm Detail</h3>
                                <section>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                </div>
                                                <div>
                                                    <h5>Confirm Detail</h5>
                                                </div>
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
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript -->
<script src="<?php echo base_url() ?>media/js/super_admin/customer.js"></script>
<script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>