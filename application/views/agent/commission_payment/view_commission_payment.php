<div class="card-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Agent Name</b>
                            <a style="float: right;">
                                <?php echo $view_comm_pay['agent_name'] . "(" . $view_comm_pay['agent_id'] . ")" ;?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Commission Amount</b>
                            <a style="float: right;">
                                <?php echo "₹ " . $view_comm_pay['total_payble_amount'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Paid Amount</b>
                            <a style="float: right;">
                                <?php 
                                    echo "₹ " . $view_comm_pay['paid_amount'] ;
                                ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Rest Amount</b>
                            <a style="float: right;">
                                <?php 
                                    echo "₹ " . $view_comm_pay['rest_amount'] ;
                                ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Mode of Paymennt</b>
                            <a style="float: right;">
                                <?php if($view_comm_pay['mop'] == 1) { echo "Online";} elseif($view_comm_pay['mop'] == 2) { echo "Cheque";}elseif($view_comm_pay['mop'] == 3) { echo "Cash";}?>
                            </a>
                        </li>
                        <?php if($view_comm_pay['mop'] == 1 || $view_comm_pay['mop'] == 2) { ?>
                        <li class="list-group-item">
                            <b>Account No.</b>
                            <a style="float: right;">
                                <?php if($view_comm_pay['acc_no'] == 1) { echo "5745457445";} elseif($view_comm_pay['acc_no'] == 1) { echo "24545445744";}?>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if($view_comm_pay['mop'] == 3) { ?>
                        <li class="list-group-item">
                            <b>Cash Received By</b>
                            <a style="float: right;">
                                <?php echo $view_comm_pay['cash_received_by'];?>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="list-group-item">
                            <b>Pay Date</b>
                            <a style="float: right;">
                                <?php echo $view_comm_pay['pay_date'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Pay Remark</b>
                            <a style="float: right;">
                                <?php echo $view_comm_pay['pay_remarks'];?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>