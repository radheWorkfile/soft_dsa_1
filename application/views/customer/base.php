<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo $title ?> |
        <?php echo config_item('company_name') ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="<?php echo config_item('company_name') ?>" name="description" />
    <meta content="<?php echo config_item('company_name') ?>" name="author" />
    <?php $this->load->view('customer/include/css') ?>
</head>

<body data-sidebar="dark">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>


    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php $this->load->view('customer/include/header') ?>
        <!-- ========== Left Sidebar Start ========== -->
        <?php $this->load->view('customer/include/left') ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php if (!empty($layout) && trim($layout) !== "") {
                        require_once($layout);
                    } else { ?>
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="page-title-box d-sm-flex align-items-center justify-content-between card flex-sm-row border-0">
                                    <h4 class="mb-sm-0 font-size-16 fw-bold">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                                    <i class="mdi mdi-bank text-primary"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-muted text-uppercase fw-semibold font-size-13">Total Loan</p>
                                            <h4 class="mb-1 mt-1">
                                                <?php echo $total_loan; ?>
                                            </h4>
                                            <center><a href="<?php echo base_url('customer/Loan_Details/manage_loan_details') ?>" class="small-box-footer">More info <i class="fas fa-exclamation-angle"></i></a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                                    <i class="mdi mdi-bank text-warning"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-muted text-uppercase fw-semibold font-size-13">Pending Loan</p>
                                            <h4 class="mb-1 mt-1">
                                                <?php echo $pending_loan; ?>
                                            </h4>
                                            <center><a href="<?php echo base_url('customer/Loan_Details/manage_pending_loan_details') ?>" class="small-box-footer">More info <i class="fas fa-exclamation-angle"></i></a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                                    <i class="mdi mdi-bank text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-muted text-uppercase fw-semibold font-size-13">Approved Loan</p>
                                            <h4 class="mb-1 mt-1">
                                                <?php echo $approve_loan; ?>
                                            </h4>
                                            <center><a href="<?php echo base_url('customer/Loan_Details/manage_approve_loan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                                    <i class="mdi mdi-bank text-danger"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-muted text-uppercase fw-semibold font-size-13">Reject Loan</p>
                                            <h4 class="mb-1 mt-1">
                                                <?php echo $reject_loan; ?>
                                            </h4>
                                            <center><a href="<?php echo base_url('customer/Loan_Details/manage_reject_loan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                                    <i class="mdi mdi-account text-primary"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-muted text-uppercase fw-semibold font-size-13">Loan Amount</p>
                                            <h4 class="mb-1 mt-1">
                                                <?php echo $loan_amount['loan_amount'] ?>
                                            </h4>
                                            </p>
                                        </div>
                                        <center><a href="<?php echo base_url('customer/Loan_Details/manage_loan_amount') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                        </div> <!-- end row-->

                        <!--  View Pending Reason Data Model -->
                        <div class="modal fade view_pending_model" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">View Response</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="show_pending_response"></div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                        <!--  View Approve Reason Data Model -->
                        <div class="modal fade view_approve_model" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">View Response</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="show_approve_response"></div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                        <!--  View Reject Reason Data Model -->
                        <div class="modal fade view_reject_model" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">View Response</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="show_reject_response"></div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    <?php } ?>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php $this->load->view('customer/include/footer') ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <?php $this->load->view('customer/include/js') ?>
    <script src="<?php echo base_url() ?>media/js/agent/customer.js"></script>
    <script src="<?php echo base_url() ?>media/old_file/js/js.js"></script>

</body>
</html>