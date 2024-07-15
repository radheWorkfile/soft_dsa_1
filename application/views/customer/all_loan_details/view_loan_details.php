<?php if ($view_loan['status'] == 1) {
    echo "<span class='text-success'><b> Active <i class='fa fa-check'></i> </b></span>";
} else {
    echo "<span class='text-danger'><b> De-Active <i class='fa fa-times'></i> </b></span>";
}  ?>
<div class="card-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
            <div class="row">
                <div class="col-6 col-sm-6">
                    <h3 class="mb-sm-0 font-size-18 fw-bold" style="padding: 15px;">Personal Details</h3>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Full Name</b>
                            <a style="float: right;">
                                <?php echo $view_loan['name'] . "(" . $view_loan['customer_id'] . ")" ;?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>D.O.B</b>
                            <a style="float: right;">
                                <?php echo $view_loan['dob'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Address</b>
                            <a style="float: right;">
                                <?php echo $view_loan['address'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Mobile No</b>
                            <a style="float: right;">
                                <?php echo $view_loan['mobile_no'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b>
                            <a style="float: right;">
                                <?php echo $view_loan['email'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Aadhar Card No.</b>
                            <a style="float: right;">
                                <?php echo $view_loan['aadhar_card_no'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Pan No.</b>
                            <a style="float: right;">
                                <?php echo $view_loan['pan_no'];?>
                            </a>
                        </li>
                </div>
                <div class="col-6 col-sm-6">
                    <h3 class="mb-sm-0 font-size-18 fw-bold" style="padding: 28px;"></h3>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Identifier Name</b>
                            <a style="float: right;">
                                <?php echo $view_loan['agent_name']; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Identifier Mobile No.</b>
                            <a style="float: right;">
                                <?php echo $view_loan['identifier_number'] ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Identifier Email</b>
                            <a style="float: right;">
                                <?php echo $view_loan['identifier_email']; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Pan No.</b>
                            <a style="float: right;">
                                <?php echo $view_loan['pan_no']; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Assign_employee</b>
                            <a style="float: right;">
                                <?php echo $view_loan['employee_name'] . "(". $view_loan['employee_id'] .")" ; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Password</b>
                            <a style="float: right;">
                                <?php echo $view_loan['password'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Loan Type</b>
                            <a style="float: right;">
                            <?php echo $view_loan['loan_type_name']; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Loan Amount</b>
                            <a style="float: right;">
                                <?php echo $view_loan['loan_amount'];?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6">
                    <h3 class="mb-sm-0 font-size-18 fw-bold" style="padding: 15px;">Account Details</h3>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Account NO. </b>
                            <a style="float: right;">
                                <?php echo $view_loan['account_no'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>IFSC Code</b>
                            <a style="float: right;">
                                <?php echo $view_loan['ifsc_code'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Branch Name</b>
                            <a style="float: right;">
                                <?php echo $view_loan['branch_name'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Bank Name</b>
                            <a style="float: right;">
                                <?php echo $view_loan['bank_name'];?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>