<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Document_verification extends CI_Controller
    {
        public function __construct()
        {

            parent::__construct();
            $this->load->model('employee/Common_model', 'common_model');
            $this->load->model('employee/Document_Verification_model', 'document_verification_model');
            $this->load->helper(array('form', 'url'));
            ($this->session->userdata('user_cate') != 1 && $this->session->userdata('user_cate') != 3) ? redirect(base_url(), 'refresh') : '';error_reporting(0);

        }

        public function document_verification() {

            $data['title']       = 'Document Verification Section';
            $data['breadcrums']  = 'Document Verification Section';
            $data['assing_menu'] = $this->common_model->get_assign_data();
            $data['layout']      = 'document_verification/manage_document_verification.php';
            $this->load->view('employee/base', $data);

        }

        public function fetch_data()
        {

            $fetch             = $this->input->post('customer_id');
            $data['custdata']  = $this->document_verification_model->get_customer_data($fetch);
            $data['docdata']   = $this->document_verification_model->get_customer_document($fetch);
            $this->load->view('employee/document_verification/fetch_document_data',$data);

        }

        public function add_document_verification_data() {

            $this->form_validation->set_rules('status', 'Status', 'required');

            if($this->input->post('status') == 3) {
                $this->form_validation->set_rules('reason', 'Reason', 'required');
            }

            if($this->form_validation->run() == TRUE) {

                $add = $this->input->post();
                
                if($this->input->post('status') == 2) {
                    
                    $resn = "All Document Varified";
                } else if($this->input->post('status') == 3) {
                    
                    $resn = $add['reason'];
                }
                
                $customer = array(

                    'customer_id'             => $add['customer_id'],
                    'status'                  => $add['status'],
                    'reason'                  => $resn,
                    
                );

                $this->common_model->update_data('customer_document', array('customer_id' => $add['customer_id']), $customer);
                $data = array('icon' => 'success', 'text' => 'Verification Data Updated Successfully');

            } else {

                $msg = array(

                    'status' => form_error('status'),
                    'reason' => form_error('reason'),

                );
                $data = array('icon' => 'error', 'text' => $msg);

            }
            echo json_encode($data);

        }

        public function manage_customer() {

            $data['title']      = "Manage All Customer";
            $data['breadcrums'] = "Manage All Customer";
            $data['layout']     = 'customer/manage_customer.php';
            $this->load->view('employee/base', $data);

        }

        /*======================================= All Customer Data ============================================*/
        
        public function customer_data()
        {

            $post_data = $this->input->post();
            $record = $this->customer_model->all_customer_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_customer(' . $row->id . ')" title="Click to View Staff Details"><i class="fas fa-eye text-success"></i></a>&emsp;

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_customer(' . $row->id . ')" title="Click to Update Staff Details"><i class="fas fa-edit"></i></a>';

                $status = ($row->status == 1) ? '
                <a style="color:green; margin-left:-5px;" href="javascript:void()" onClick="return changeStatus(\'' . $row->id . '\',\'0\',\' customer\',\'employee/common/chageStatus\')" title="Click to Di-Active Staff"><b><i class="fa fa-check"></i> </b></a>&emsp;'
                :
                '<a style="color:red; margin-left:-5px;"  href="javascript:void()"  onClick="return changeStatus(\'' . $row->id . '\',\'1\',\' customer\',\'employee/common/chageStatus\')" title="Click to Active Staff"><b><i class="fa fa-times"></i> </b></a>&emsp;';

                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;",

                );
            }

            $return['recordsTotal'] = $this->customer_model->total_count();
            $return['recordsFiltered'] = $this->customer_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        public function view_customer() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_customer'] = $this->customer_model->get_customer_data($view['id']);
                $this->load->view('employee/customer/view_customer', $data);

            }

        }

        public function update_customer() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['upd_customer'] = $this->customer_model->get_customer_data($upd['id']);
                $data['agent']        = $this->common_model->all_data('agent', 'id, agent_id, name');
                $data['employee']     = $this->common_model->all_data('employee', 'id, employee_id, name');
                $this->load->view('employee/customer/update_customer', $data);

            }

        }

        public function update_basic_customer_data() {

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

                $data = array('icon' => 'success', 'text' => 'New Customer Updated Successfully');

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