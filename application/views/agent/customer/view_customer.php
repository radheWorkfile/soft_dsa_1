<?php if ($view_customer['status'] == 1) {
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
                                <?php echo $view_customer['name'] . "(" . $view_customer['customer_id'] . ")" ;?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>D.O.B</b>
                            <a style="float: right;">
                                <?php echo $view_customer['dob'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Address</b>
                            <a style="float: right;">
                                <?php echo $view_customer['address'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Mobile No</b>
                            <a style="float: right;">
                                <?php echo $view_customer['mobile_no'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b>
                            <a style="float: right;">
                                <?php echo $view_customer['email'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Aadhar Card No.</b>
                            <a style="float: right;">
                                <?php echo $view_customer['aadhar_card_no'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Pan No.</b>
                            <a style="float: right;">
                                <?php echo $view_customer['pan_no'];?>
                            </a>
                        </li>
                </div>
                <div class="col-6 col-sm-6">
                    <h3 class="mb-sm-0 font-size-18 fw-bold" style="padding: 28px;"></h3>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>PassWord</b>
                            <a style="float: right;">
                                <?php echo $view_customer['password'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Loan Typet</b>
                            <a style="float: right;">
                                <?php echo $view_customer['loan_type_name'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Loan Amount</b>
                            <a style="float: right;">
                                <?php echo $view_customer['loan_amount'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Document Status</b>
                            <a style="float: right;">
                                <?php if($view_customer['document_status'] == 1) { echo "Pending" ;} elseif($view_customer['document_status'] == 2) { echo "Complete" ;}  ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Description</b>
                            <a style="float: right;">
                                <?php echo $view_customer['description'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Next Follow Up Feedback</b>
                            <a style="float: right;">
                                <?php echo $view_customer['next_follow_up_feedback'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Next Follow Date</b>
                            <a style="float: right;">
                                <?php echo $view_customer['next_follow_date'];?>
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
                                <?php echo $view_customer['account_no'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>IFSC Code</b>
                            <a style="float: right;">
                                <?php echo $view_customer['ifsc_code'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Branch Name</b>
                            <a style="float: right;">
                                <?php echo $view_customer['branch_name'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Bank Name</b>
                            <a style="float: right;">
                                <?php echo $view_customer['bank_name'];?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>