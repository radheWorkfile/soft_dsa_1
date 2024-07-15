<?php 
if ($view_customer['sta'] == 2) {
    echo "<span class='text-success'><b> Approved <i class='fa fa-check'></i> </b></span>";
} else if ($view_customer['sta'] == 3) {
    echo "<span class='text-danger'><b> Reject <i class='fa fa-times'></i> </b></span>";
} else if ($view_customer['sta'] == 1) {
    echo "<span class='text-warning'><b> Pending <i class='fa fa-exclamation-triangle'></i> </b></span>";
}
?>
<div class="card-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Response</b>
                            <a style="float: right;">
                            <?php if($view_customer['sta'] == 1) { ?>
                                <?php echo "Document verification in progress"; ?>
                            <?php } else { ?>
                                <?php echo $view_customer['reason'] ; ?>
                            <?php } ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>