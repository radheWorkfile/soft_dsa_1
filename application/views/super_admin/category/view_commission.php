<?php if ($cmmsn['status'] == 1) {
    echo "<span class='text-success'><b> Active <i class='fa fa-check'></i> </b></span>";
} else {
    echo "<span class='text-danger'><b> De-Active <i class='fa fa-times'></i> </b></span>";
}  ?>
<div class="card-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Loan Type</b>
                            <a style="float: right;">
                                <?php echo $cmmsn['loan_type_name']; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Commission Type</b>
                            <a style="float: right;">
                                <?php if($cmmsn['commission_type'] == 1) { echo "On File"; } elseif($cmmsn['commission_type'] == 2) { echo "On Approve"; } ;?>
                            </a>
                        </li>
                        <?php if($cmmsn['commission_type'] == 2) { ?>
                            <li class="list-group-item">
                                <b>Commission</b>
                                <a style="float: right;">
                                    <?php if($cmmsn['commission'] == 1) { echo "In Percentage"; } elseif($cmmsn['commission'] == 2) { echo "In Amount"; } ?>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if($cmmsn['commission_type'] == 1) { ?>
                            <li class="list-group-item">
                                <b>Commission Amount</b>
                                <a style="float: right;">
                                    <?php echo $cmmsn['commission_amount'];?>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if($cmmsn['commission'] == 2) { ?>
                            <li class="list-group-item">
                                <b>Commission Amount</b>
                                <a style="float: right;">
                                    <?php echo $cmmsn['commission_amount'];?>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if($cmmsn['commission'] == 1) { ?>
                            <li class="list-group-item">
                                <b>Commission Percentage</b>
                                <a style="float: right;">
                                    <?php echo $cmmsn['commission_percentage']. "%";?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>