<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Loan_Details extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct();
            $this->load->model('customer/Common_model', 'common_model');
            $this->load->model('customer/Loan_model', 'loan_model');
            $this->load->helper(array('form', 'url'));
            ($this->session->userdata('user_cate') != 4) ? redirect(base_url(), 'refresh') : '';
            error_reporting(0);

        }
        
        /*======================================= All Loan Data ============================================*/

        public function manage_loan_details() {

            $data['title']      = "Manage Loan Details";
            $data['breadcrums'] = "Manage Loan Details";
            $data['layout']     = 'all_loan_details/manage_loan_details.php';
            $this->load->view('customer/base', $data);

        }

        public function loan_data()
        {

            $post_data = $this->input->post();
            $record = $this->loan_model->all_loan_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_loan(' . $row->id . ')" title="Click to View Staff Details"><i class="fas fa-eye text-success"></i></a>&emsp;';

                if ($row->sta == 1) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_resp(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';
                } else if ($row->sta == 2) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_respnse(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';
                } else if ($row->sta == 3) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_respn(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                }
                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view,
                    $status,

                );
            }

            $return['recordsTotal'] = $this->loan_model->total_count();
            $return['recordsFiltered'] = $this->loan_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        /*======================================= All Pending Loan Data ============================================*/

        public function manage_pending_loan_details() {

            $data['title']      = "Manage All Pending Loan Details";
            $data['breadcrums'] = "Manage All Pending Loan Details";
            $data['layout']     = 'all_loan_details/manage_pending_loan.php';
            $this->load->view('customer/base', $data);

        }

        public function pending_loan_data()
        {

            $post_data = $this->input->post();
            $record = $this->loan_model->all_pending_loan_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_loan(' . $row->id . ')" title="Click to View Staff Details"><i class="fas fa-eye text-success"></i></a>&emsp;';

                if ($row->sta == 1) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_resp(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';
                } else if ($row->sta == 2) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_respnse(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';
                } else if ($row->sta == 3) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_respn(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                }
                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view,
                    $status,

                );
            }

            $return['recordsTotal'] = $this->loan_model->pending_total_count();
            $return['recordsFiltered'] = $this->loan_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        /*======================================= All Approve Loan Data ============================================*/

        public function manage_approve_loan() {

            $data['title']      = "Manage All Approve Loan Details";
            $data['breadcrums'] = "Manage All Approve Loan Details";
            $data['layout']     = 'all_loan_details/manage_approve_loan.php';
            $this->load->view('customer/base', $data);

        }

        public function approve_loan_data()
        {

            $post_data = $this->input->post();
            $record = $this->loan_model->all_approve_loan_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_loan(' . $row->id . ')" title="Click to View Staff Details"><i class="fas fa-eye text-success"></i></a>&emsp;';

                if ($row->sta == 1) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_resp(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';
                } else if ($row->sta == 2) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_respnse(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';
                } else if ($row->sta == 3) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_respn(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                }
                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view,
                    $status,

                );
            }

            $return['recordsTotal'] = $this->loan_model->approve_total_count();
            $return['recordsFiltered'] = $this->loan_model->approve_total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        /*======================================= All Reject Loan Data ============================================*/

        public function manage_reject_loan() {

            $data['title']      = "Manage All Reject Loan Details";
            $data['breadcrums'] = "Manage All Reject Loan Details";
            $data['layout']     = 'all_loan_details/manage_reject_loan.php';
            $this->load->view('customer/base', $data);

        }

        public function reject_loan_data()
        {

            $post_data = $this->input->post();
            $record = $this->loan_model->all_reject_loan_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_loan(' . $row->id . ')" title="Click to View Staff Details"><i class="fas fa-eye text-success"></i></a>&emsp;';

                if ($row->sta == 1) {

                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_resp(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';

                } else if ($row->sta == 2) {

                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_respnse(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';

                } else if ($row->sta == 3) {

                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_respn(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';

                }
                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view,
                    $status,

                );
            }

            $return['recordsTotal'] = $this->loan_model->reject_total_count();
            $return['recordsFiltered'] = $this->loan_model->reject_total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        /*======================================= All Loan Amount Data ============================================*/

        public function manage_loan_amount() {

            $data['title']      = "Manage All Loan Amount Details";
            $data['breadcrums'] = "Manage All Loan Amount Details";
            $data['layout']     = 'all_loan_details/manage_loan_amount.php';
            $this->load->view('customer/base', $data);

        }

        public function loan_amount_data()
        {

            $post_data = $this->input->post();
            $record = $this->loan_model->all_loan_amount_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_loan(' . $row->id . ')" title="Click to View Staff Details"><i class="fas fa-eye text-success"></i></a>&emsp;';

                if ($row->sta == 1) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_resp(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';
                } else if ($row->sta == 2) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_respnse(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';
                } else if ($row->sta == 3) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_respn(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                }
                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    "₹ ".$row->loan_amount,
                    $view,
                    $status,

                );
            }

            $return['recordsTotal'] = $this->loan_model->loan_total_count();
            $return['recordsFiltered'] = $this->loan_model->loan_total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        public function view_loan_details() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_loan'] = $this->loan_model->get_customer_data($view['id']);
                $this->load->view('customer/all_loan_details/view_loan_details', $data);

            }

        }

        public function view_pending_response() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_customer'] = $this->loan_model->get_customer_data($view['id']);
                $this->load->view('customer/all_loan_details/view_reason', $data);

            }

        }

        public function view_approve_response() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_customer'] = $this->loan_model->get_customer_data($view['id']);
                $this->load->view('customer/all_loan_details/view_reason', $data);

            }

        }

        public function view_reject_response() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_customer'] = $this->loan_model->get_customer_data($view['id']);
                $this->load->view('customer/all_loan_details/view_reason', $data);

            }

        }

        public function update_loan() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['upd_customer'] = $this->loan_model->get_customer_data($upd['id']);
                $data['agent']        = $this->common_model->all_data('agent', 'id, agent_id, name');
                $data['employee']     = $this->common_model->all_data('employee', 'id, employee_id, name');
                $this->load->view('customer/all_loan_details/update_loan_details', $data);

            }

        }

        public function update_loan_data() {

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('aadhar_card_no', 'Aadhar Card No.', 'required');
            $this->form_validation->set_rules('pan_no', 'Pan No.', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == TRUE) {

                $add = $this->input->post();
                
                $staff = array(

                    'id'                      => $add['id'],
                    'name'                    => $add['name'],
                    'dob'                     => $add['dob'],
                    'address'                 => $add['address'],
                    'mobile_no'               => $add['mobile_no'],
                    'email'                   => $add['email'],
                    'aadhar_card_no'          => $add['aadhar_card_no'],
                    'pan_no'                  => $add['pan_no'],
                    'identifier_name'         => $add['identifier_name'],
                    'identifier_number'       => $add['identifier_number'],
                    'identifier_email'        => $add['identifier_email'],
                    'assign_employee'         => $add['assign_employee'],
                    'password'                => $add['password'],
                    'account_no'              => $add['account_no'],
                    'ifsc_code'               => $add['ifsc_code'],
                    'branch_name'             => $add['branch_name'],
                    'bank_name'               => $add['bank_name'],

                );
                $this->common_model->update_data('customer', array('id' => $add['id']), $staff);
                
                $use = array(
                    
                    'customer_id'             => $add['customer_id'],
                    'department_type'         => 4,
                    'name'                    => $add['name'],
                    'mobile'                  => $add['mobile_no'],
                    'email'                   => $add['email'],
                    'address'                 => $add['address'],
                    'password'                => md5($add['password']),
                    'show_ps'                 => $add['password'],
                    
                );
                $this->common_model->update_data('users', array('customer_id' => $add['customer_id']), $use);

                $data = array('icon' => 'success', 'text' => 'Customer Data Updated Successfully');

            } else {

                $msg = array(

                    'name'           => form_error('name'),
                    'dob'            => form_error('dob'),
                    'address'        => form_error('address'),
                    'mobile_no'      => form_error('mobile_no'),
                    'email'          => form_error('email'),
                    'aadhar_card_no' => form_error('aadhar_card_no'),
                    'pan_no'         => form_error('pan_no'),
                    'password'       => form_error('password'),
                    
                );
                $data = array('icon' => 'error', 'text' => $msg);

            }
            echo json_encode($data);
    
        }

    }

?>