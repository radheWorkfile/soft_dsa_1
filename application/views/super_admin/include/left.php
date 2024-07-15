<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu" style="width: 108%;">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="<?php echo base_url('super_admin/Dashboard/index'); ?>" class="waves-effect">
                        <i class='bx bxs-dashboard'></i>
                        <span key="t-dashboard">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('super_admin/setting/basic_setting'); ?>">
                        <i class='bx bx-cog'></i>
                        <span>Setting</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('super_admin/Assign_work'); ?>">
                    <i class='bx bx-user-circle'></i>
                        <span>Roles & Permissions</span>
                    </a>
                </li>

                <li>   
                    <a href="javascript: void(0);" class="has-arrow waves-effect"> 
                        <i class='bx bx-user-circle'></i>
                        <span key="t-authentication">Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <li>
                            <a href="<?php echo base_url('super_admin/dashboard/manage_designation'); ?>" key="t-login">
                                Create Designation 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/category/Pledged_assets/create_pledged_assets'); ?>" key="t-login">
                                Create Collateral
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/category/Bank_details/add_bank'); ?>" key="t-login">
                                Add New Bank
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/category/Loan_type/create_loan_type'); ?>" key="t-login">
                                Create Loan Type
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/category/Business_type/create_business_type'); ?>" key="t-login">
                                Create Business Type
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/category/Commission/create_commission'); ?>" key="t-login">
                                Create Commission
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-user-circle'></i>
                        <span key="t-authentication">Agent Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('super_admin/Agent/add_agent'); ?>" key="t-login">
                                Add Agent
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/Agent/manage_agent'); ?>" key="t-login">
                                Agent List
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-user-circle'></i>
                        <span key="t-authentication">Employee Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('super_admin/Employee/add_employee'); ?>" key="t-login">
                                Add Employee
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/Employee/manage_employee'); ?>" key="t-login">
                                Employee List
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-user-circle'></i>
                        <span key="t-authentication">Customer Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('super_admin/Customer/add_customer'); ?>" key="t-login">
                                Add Customer
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/Customer/manage_customer'); ?>" key="t-login">
                                Customer List
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='fa fa-percent'></i>
                        <span key="t-authentication">Commission Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('super_admin/Commission/add_commission'); ?>" key="t-login">
                                Create Commission
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('super_admin/Commission/manage_commission'); ?>" key="t-login">
                                Commissions List
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='fa fa-money-bill'></i>
                        <span key="t-authentication">Commission Payment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('super_admin/Commission_payment/manage_commission_payment'); ?>" key="t-login">
                                Payment List
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>