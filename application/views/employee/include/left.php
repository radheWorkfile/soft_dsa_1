<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu" style="width: 104%;">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="<?php echo base_url('employee/Dashboard'); ?>" class="waves-effect">
                        <i class='bx bxs-dashboard'></i>
                        <span key="t-dashboard">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-user-circle'></i>
                        <span key="t-authentication">Customer Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('employee/Customer/add_customer'); ?>" key="t-login">
                                Add Customer
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('employee/Customer/manage_customer'); ?>" key="t-login">
                                Customer List
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo base_url('employee/Document_verification/document_verification'); ?>" key="t-login">
                        <i class='bx bx-file'></i>
                        Document Varification
                    </a>
                </li>
                <!-- --------------------------- super admin section start in agent section start --------------  -->
                <?php foreach($assing_menu as $asn_menu) { ?>
                <?php if ($asn_menu['menu'] == 1) : ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bx-user-circle'></i>
                            <span key="t-authentication">Agent Management</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('employee/Agent/add_agent'); ?>" key="t-login">
                                    Add Agent
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('employee/Agent/manage_agent'); ?>" key="t-login">
                                    Agent List
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if ($asn_menu['menu'] == 2) : ?>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bx-user-circle'></i>
                            <span key="t-authentication">Employee Management</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('employee/Employee/add_employee'); ?>" key="t-login">
                                    Add Employee
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('employee/Employee/manage_employee'); ?>" key="t-login">
                                    Employee List
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if ($asn_menu['menu'] == 4) : ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='fa fa-percent'></i>
                            <span key="t-authentication" style="margin-left:-0.5rem;">Commission Management</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('employee/Commission_man/add_commission'); ?>" key="t-login">
                                    Create Commission
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('employee/Commission_man/manage_commission'); ?>" key="t-login">
                                    Commissions List
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if ($asn_menu['menu'] == 3) : ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='fa fa-money-bill'></i>
                            <span key="t-authentication">Commission Payment</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('employee/Commission_payment/manage_commission_payment'); ?>" key="t-login">
                                    Payment List
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php } ?>
                <!-- ------------------------- super admin section start in agent section End ----------------  -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>