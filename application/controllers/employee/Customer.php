<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Customer extends CI_Controller
    {
        public function __construct()
        {

            parent::__construct();
            $this->load->model('employee/Common_model', 'common_model');
            $this->load->model('employee/Customer_model', 'customer_model');
            $this->load->helper(array('form', 'url'));
            ($this->session->userdata('user_cate') != 1 && $this->session->userdata('user_cate') != 3) ? redirect(base_url(), 'refresh') : '';error_reporting(0);

        }

        public function add_customer() {

            $data['title']       = 'Add Customer';
            $data['breadcrums']  = 'Add Customer';
            $data['pledged']     = $this->common_model->all_data('pledged_category', 'id, pledged_assets_name');
            $data['loan_type']   = $this->common_model->all_data('loan_type', 'id, loan_type_name');
            $data['agent']       = $this->common_model->all_data('agent', 'id, agent_id, name');
            $data['employee']    = $this->common_model->all_data('employee', 'id, employee_id, name');
            $data['assing_menu'] = $this->common_model->get_assign_data();
            $data['layout']      = 'customer/add_customer.php';
            $this->load->view('employee/base', $data);

        }

        public function get_loan_type_doc()
        {

            if ($this->input->is_ajax_request()) {

                $val = $this->input->post();
                $loan = $this->customer_model->get_loan_type_doc($val['id']);
                $data = explode(",", $loan['document']);
                echo json_encode($data);
                
            }

        }

        public function get_agent_data() {

            if($this->input->is_ajax_request()) {

                $inp = $this->input->post();
                $data = $this->customer_model->get_agent_data($inp['id']);
                echo json_encode($data);

            }

        }

        public function add_customer_data() {
              
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[customer.email]');
            $this->form_validation->set_rules('aadhar_card_no', 'Aadhar Card No.', 'required');
            $this->form_validation->set_rules('pan_no', 'Pan No.', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|is_unique[customer.password]');
            $this->form_validation->set_rules('loan_type', 'Loan Type', 'required');
            $this->form_validation->set_rules('loan_amount', 'Loan Amount', 'required');
            $this->form_validation->set_rules('document_status', 'Document Status', 'required');

            if($this->form_validation->run() == TRUE) {

                $add = $this->input->post();

                $customer_id = rand(pow(10, 6-1), pow(10, 6)-1);
                
                $config['upload_path']          = './uploads/customer_all_document/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 1024;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;
                
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('sal_photo')) {
                    
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                    
                } else {
                    
                    $img_data = $this->upload->data();
                    $sal_pass_img = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('sal_identity_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $sal_identity_img = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('sal_address_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $sal_address_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('sal_bank_statement')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $sal_bank_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('sal_salary_slip')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $sal_salary_img = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_photo')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_identity_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_identity_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_address_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_address_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_bank_statement')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_bank_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_business_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_business_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_business_profile')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_buss_profile_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_itr')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_itr_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('self_profit_loss_statement')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_profit_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('self_balance_sheet')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $self_balance_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('collateral_document')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $collateral_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_identity_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_identity_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_address_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_address_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_passport_size_photo')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_pass_size_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_signature')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_sign_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_age_proof')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_age_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_pan_card')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_pan_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_aadhaar_card')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_aadhar_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_voter_id')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_voter_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_passport')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_passport_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_driving_license')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_loan_driving_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_bank_statement')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_bank_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_salary_slip')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_salary_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_work_in_hand_copies')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_work_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_performa_invoice')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_performa_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_property_document')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_property_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                if (!$this->upload->do_upload('loan_academic_document')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $loan_academin_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                }
                
                $customer = array(

                    'customer_id'             => $customer_id,
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
                    'loan_amount'             => $add['loan_amount'],
                    'customer_type'           => $add['customer_type'],
                    'collateral'              => $add['collateral'],
                    'loan_type'               => $add['loan_type'],
                    'description'             => $add['description'],
                    'document_status'         => $add['document_status'],
                    'created_by_user_type_id' => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),

                );
                $this->common_model->save_data('customer', $customer);

                if($this->input->post('customer_type') == 1) {
                
                    $doc = array(
                        
                        'customer_id'                    => $customer_id,
                        'customer_type'                  => $add['customer_type'],
                        'customer_passport_size_photo'   => empty($sal_pass_img) ? '' : $sal_pass_img,
                        'customer_identity_proof'        => empty($sal_identity_img) ? '' : $sal_identity_img,
                        'customer_address_proof'         => empty($sal_address_imag) ? '' : $sal_address_imag,
                        'customer_bank_statement'        => empty($sal_bank_imag) ? '' : $sal_bank_imag,
                        'customer_salary_slip'           => empty($sal_salary_img) ? '' : $sal_salary_img,
                        'customer_proof_of_business'     => empty($self_business_imag) ? '' : $self_business_imag,
                        'customer_business_profile'      => empty($self_buss_profile_imag) ? '' : $self_buss_profile_imag,
                        'customer_itr'                   => empty($self_itr_imag) ? '' : $self_itr_imag,
                        'customer_profit_loss_statement' => empty($self_profit_imag) ? '' : $self_profit_imag,
                        'customer_balance_sheet'         => empty($self_balance_imag) ? '' : $self_balance_imag,
                        'collateral_document'            => empty($collateral_imag) ? '' : $collateral_imag,
                        'loan_identity_proof'            => empty($loan_identity_imag) ? '' : $loan_identity_imag,
                        'loan_address_proof'             => empty($loan_address_imag) ? '' : $loan_address_imag,
                        'loan_passport_size_photo'       => empty($loan_pass_size_imag) ? '' : $loan_pass_size_imag,
                        'loan_signature'                 => empty($loan_sign_imag) ? '' : $loan_sign_imag,
                        'loan_age_proof'                 => empty($loan_age_imag) ? '' : $loan_age_imag,
                        'loan_pan_card'                  => empty($loan_pan_imag) ? '' : $loan_pan_imag,
                        'loan_aadhaar_card'              => empty($loan_aadhar_imag) ? '' : $loan_aadhar_imag,
                        'loan_voter_id'                  => empty($loan_voter_imag) ? '' : $loan_voter_imag,
                        'loan_passport'                  => empty($loan_passport_imag) ? '' : $loan_passport_imag,
                        'loan_driving_license'           => empty($loan_loan_driving_imag) ? '' : $loan_loan_driving_imag,
                        'loan_bank_statement'            => empty($loan_bank_imag) ? '' : $loan_bank_imag,
                        'loan_salary_slip'               => empty($loan_salary_imag) ? '' : $loan_salary_imag,
                        'loan_work_in_hand_copies'       => empty($loan_work_imag) ? '' : $loan_work_imag,
                        'loan_performa_invoice'          => empty($loan_performa_imag) ? '' : $loan_performa_imag,
                        'loan_property_document'         => empty($loan_property_imag) ? '' : $loan_property_imag,
                        'loan_academic_document'         => empty($loan_academin_imag) ? '' : $loan_academin_imag,
                        'document_status'                => $add['document_status'],
                        'created_by_user_type_id'             => $this->session->userdata('user_id'),
                        'created_at'                     => date('Y-m-d'),
                        
                    ); 
                    
                } else {

                    $doc = array(
                        
                        'customer_id'                    => $customer_id,
                        'customer_type'                  => $add['customer_type'],
                        'customer_passport_size_photo'   => empty($self_imag) ? '' : $self_imag,
                        'customer_identity_proof'        => empty($self_identity_imag) ? '' : $self_identity_imag,
                        'customer_address_proof'         => empty($self_address_imag) ? '' : $self_address_imag,
                        'customer_bank_statement'        => empty($self_bank_imag) ? '' : $self_bank_imag,
                        'customer_salary_slip'           => empty($sal_salary_img) ? '' : $sal_salary_img,
                        'customer_proof_of_business'     => empty($self_business_imag) ? '' : $self_business_imag,
                        'customer_business_profile'      => empty($self_buss_profile_imag) ? '' : $self_buss_profile_imag,
                        'customer_itr'                   => empty($self_itr_imag) ? '' : $self_itr_imag,
                        'customer_profit_loss_statement' => empty($self_profit_imag) ? '' : $self_profit_imag,
                        'customer_balance_sheet'         => empty($self_balance_imag) ? '' : $self_balance_imag,
                        'collateral_document'            => empty($collateral_imag) ? '' : $collateral_imag,
                        'loan_identity_proof'            => empty($loan_identity_imag) ? '' : $loan_identity_imag,
                        'loan_address_proof'             => empty($loan_address_imag) ? '' : $loan_address_imag,
                        'loan_passport_size_photo'       => empty($loan_pass_size_imag) ? '' : $loan_pass_size_imag,
                        'loan_signature'                 => empty($loan_sign_imag) ? '' : $loan_sign_imag,
                        'loan_age_proof'                 => empty($loan_age_imag) ? '' : $loan_age_imag,
                        'loan_pan_card'                  => empty($loan_pan_imag) ? '' : $loan_pan_imag,
                        'loan_aadhaar_card'              => empty($loan_aadhar_imag) ? '' : $loan_aadhar_imag,
                        'loan_voter_id'                  => empty($loan_voter_imag) ? '' : $loan_voter_imag,
                        'loan_passport'                  => empty($loan_passport_imag) ? '' : $loan_passport_imag,
                        'loan_driving_license'           => empty($loan_loan_driving_imag) ? '' : $loan_loan_driving_imag,
                        'loan_bank_statement'            => empty($loan_bank_imag) ? '' : $loan_bank_imag,
                        'loan_salary_slip'               => empty($loan_salary_imag) ? '' : $loan_salary_imag,
                        'loan_work_in_hand_copies'       => empty($loan_work_imag) ? '' : $loan_work_imag,
                        'loan_performa_invoice'          => empty($loan_performa_imag) ? '' : $loan_performa_imag,
                        'loan_property_document'         => empty($loan_property_imag) ? '' : $loan_property_imag,
                        'loan_academic_document'         => empty($loan_academin_imag) ? '' : $loan_academin_imag,
                        'document_status'                => $add['document_status'],
                        'created_by_user_type_id'        => $this->session->userdata('user_id'),
                        'created_at'                     => date('Y-m-d'),
                        
                    );

                }
                
                $this->common_model->save_data('customer_document', $doc);

                $use = array(
                    
                    'customer_id'             => $customer_id,
                    'department_type'         => 4,
                    'name'                    => $add['name'],
                    'mobile'                  => $add['mobile_no'],
                    'email'                   => $add['email'],
                    'address'                 => $add['address'],
                    'password'                => md5($add['passowrd']),
                    'show_ps'                 => $add['password'],
                    'created_by_user_id'      => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),
                    
                );
                $this->common_model->save_data('users', $use);

                $data = array('icon' => 'success', 'text' => 'New Employee Added Successfully');

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
                    'loan_amount'    => form_error('loan_amount'),
                    'loan_type'      => form_error('loan_type'),
                    'document_status'=> form_error('document_status'),

                );
                $data = array('icon' => 'error', 'text' => $msg);

            }
            echo json_encode($data);

        }

        
        /*======================================= All Customer Data ============================================*/
        public function manage_customer() {

            $data['title']      = "Manage All Customer";
            $data['breadcrums'] = "Manage All Customer";
            $data['assing_menu'] = $this->common_model->get_assign_data();
            $data['layout']     = 'customer/manage_customer.php';
            $this->load->view('employee/base', $data);

        }
        
        public function customer_data()
        {

            $post_data = $this->input->post();
            $record = $this->customer_model->all_customer_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_customer(' . $row->id . ')" title="Click to View Customer Details"><i class="fas fa-eye text-success"></i></a>&emsp;

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_customer(' . $row->id . ')" title="Click to Update Customer Details"><i class="fas fa-edit"></i></a>&emsp;
                
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_document" onclick="update_customer_document(' . $row->id . ')" title="Click to Update Customer Document Details"><i class="fas fa-book text-success"></i></a>';

                if ($row->sta == 1) {

                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';

                } else if ($row->sta == 2) {

                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';

                } else if ($row->sta == 3) {

                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                    
                }

                if($row->sta == 2) {
                    $assign_bank = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".assign_bank" style="margin-left:-5px;" onclick="assign_bank(' . $row->id . ')" title="Click to Assign Bank"><i class="fas fa-edit text-success"></i></a>&emsp;';
                } else {
                    $assign_bank = "";
                }

                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view ."&emsp;". $assign_bank . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;" ,

                );
            }

            $return['recordsTotal'] = $this->customer_model->total_count();
            $return['recordsFiltered'] = $this->customer_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        /*======================================= All Follow Customer Data ============================================*/

        public function manage_follow_customer() {

            $data['title']      = "Manage All Follow Customer";
            $data['breadcrums'] = "Manage All Follow Customer";
            $data['layout']     = 'customer/follow_customer.php';
            $this->load->view('employee/base', $data);

        }

        public function follow_customer_data()
        {

            $post_data = $this->input->post();
            $record = $this->customer_model->all_follow_customer_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_customer(' . $row->id . ')" title="Click to View Customer Details"><i class="fas fa-eye text-success"></i></a>&emsp;

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_customer(' . $row->id . ')" title="Click to Update Customer Details"><i class="fas fa-edit"></i></a>';

                if ($row->sta == 1) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';
                } else if ($row->sta == 2) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';
                } else if ($row->sta == 3) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                }

                if($row->sta == 2) {
                    $assign_bank = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".assign_bank" style="margin-left:-5px;" onclick="assign_bank(' . $row->id . ')" title="Click to Assign Bank"><i class="fas fa-edit text-success"></i></a>&emsp;';
                } else {
                    $assign_bank = "";
                }

                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view ."&emsp;". $assign_bank . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;" ,

                );
            }

            $return['recordsTotal'] = $this->customer_model->follow_total_count();
            $return['recordsFiltered'] = $this->customer_model->follow_total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        /*======================================= All Approve Customer Data ============================================*/


        public function manage_approve_customer() {

            $data['title']      = "Manage All Approve Customer";
            $data['breadcrums'] = "Manage All Approve Customer";
            $data['layout']     = 'customer/approve_customer.php';
            $this->load->view('employee/base', $data);

        }

        public function approve_customer_data()
        {

            $post_data = $this->input->post();
            $record = $this->customer_model->all_approve_customer_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_customer(' . $row->id . ')" title="Click to View Customer Details"><i class="fas fa-eye text-success"></i></a>&emsp;

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_customer(' . $row->id . ')" title="Click to Update Customer Details"><i class="fas fa-edit"></i></a>';

                if ($row->sta == 1) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';
                } else if ($row->sta == 2) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';
                } else if ($row->sta == 3) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                }

                if($row->sta == 2) {
                    $assign_bank = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".assign_bank" style="margin-left:-5px;" onclick="assign_bank(' . $row->id . ')" title="Click to Assign Bank"><i class="fas fa-edit text-success"></i></a>&emsp;';
                } else {
                    $assign_bank = "";
                }

                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view ."&emsp;". $assign_bank . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;" ,

                );
            }

            $return['recordsTotal'] = $this->customer_model->approve_total_count();
            $return['recordsFiltered'] = $this->customer_model->approve_total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        /*======================================= All Reject Customer Data ============================================*/

        public function manage_reject_customer() {

            $data['title']      = "Manage All Reject Customer";
            $data['breadcrums'] = "Manage All Reject Customer";
            $data['layout']     = 'customer/reject_customer.php';
            $this->load->view('employee/base', $data);

        }

        public function reject_customer_data()
        {

            $post_data = $this->input->post();
            $record = $this->customer_model->all_reject_customer_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_customer(' . $row->id . ')" title="Click to View Customer Details"><i class="fas fa-eye text-success"></i></a>&emsp;

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_customer(' . $row->id . ')" title="Click to Update Customer Details"><i class="fas fa-edit"></i></a>';

                if ($row->sta == 1) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_pending_model" style="margin-left:-5px;" onclick="view_pending_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-exclamation-triangle text-warning">Pending</i></a>';
                } else if ($row->sta == 2) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_approve_model" style="margin-left:-5px;" onclick="view_approve_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-check text-success">Approved</i></a>';
                } else if ($row->sta == 3) {
                    $status = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_reject_model" style="margin-left:-5px;" onclick="view_reject_response(' . $row->id . ')" title="Click to View Response"><i class="fa fa-times text-danger">Reject</i></a>';
                }

                if($row->sta == 2) {
                    $assign_bank = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".assign_bank" style="margin-left:-5px;" onclick="assign_bank(' . $row->id . ')" title="Click to Assign Bank"><i class="fas fa-edit text-success"></i></a>&emsp;';
                } else {
                    $assign_bank = "";
                }

                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->customer_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view ."&emsp;". $assign_bank . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;" ,

                );
            }

            $return['recordsTotal'] = $this->customer_model->reject_total_count();
            $return['recordsFiltered'] = $this->customer_model->reject_total_filter_count($post_data);
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

        public function view_pending_response() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_customer'] = $this->customer_model->get_customer_data($view['id']);
                $this->load->view('employee/customer/view_reason', $data);

            }

        }

        public function view_approve_response() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_customer'] = $this->customer_model->get_customer_data($view['id']);
                $this->load->view('employee/customer/view_reason', $data);

            }

        }

        public function view_reject_response() {

            if($this->input->is_ajax_request()) {

                $view = $this->input->post();
                $data['view_customer'] = $this->customer_model->get_customer_data($view['id']);
                $this->load->view('employee/customer/view_reason', $data);

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
            $this->form_validation->set_rules('loan_amount', 'Loan Amount', 'required');

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
                    'loan_amount'             => $add['loan_amount'],

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
                    'loan_amount'       => form_error('loan_amount'),
                    
                );
                $data = array('icon' => 'error', 'text' => $msg);

            }
            echo json_encode($data);
    
        }

        public function assign_bank() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['upd_customer'] = $this->customer_model->get_customer_data($upd['id']);
                $data['assign_bank']  = $this->common_model->all_data('bank_details', 'id, bank_name, ifsc_code');
                $this->load->view('employee/customer/assign_bank', $data);

            }

        }

        public function assign_bank_data() {

            if($this->input->is_ajax_request()) {

                $this->form_validation->set_rules('assigned_bank', 'Bank Name', 'required');

                if($this->form_validation->run() == TRUE) {

                    $inp = $this->input->post();

                    $assign = array(

                        'id'            => $inp['id'],
                        'assigned_bank' => $inp['assigned_bank'],

                    );
                    $this->common_model->update_data('customer', array('id' => $inp['id']), $assign);
                    $data = array('icon' => 'success', 'text' => 'Bank Assigned Successfully');

                } else {

                    $msg = array(

                        'assigned_bank' => form_error('assigned_bank'),

                    );
                    $data = array('icon' => 'error', 'text' => $msg);

                }
                echo json_encode($data);

            }
        }

        public function update_customer_document()
        {

            if ($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['upd_customer'] = $this->customer_model->get_customer_data($upd['id']);
                $this->load->view('super_admin/customer/update_customer_document', $data);

            }

        }

        public function update_customer_document_data()
        {

            $add = $this->input->post();

            $config['upload_path']   = './uploads/customer_all_document/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']      = config_item('image_size');

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('customer_passport_size_photo')) {

                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");

            } else {

                $img_data = $this->upload->data();
                $pass_size_img = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);

            }

            if (!$this->upload->do_upload('customer_identity_proof')) {
                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");
            } else {
                $img_data = $this->upload->data();
                $identity_proof_img = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);

            }

            if (!$this->upload->do_upload('customer_address_proof')) {
                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");
            } else {
                $img_data = $this->upload->data();
                $address_proof_img = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);

            }

            if (!$this->upload->do_upload('customer_bank_statement')) {
                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");
            } else {
                $img_data = $this->upload->data();
                $bank_statement_imag = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);

            }

            if (!$this->upload->do_upload('customer_salary_slip')) {
                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");
            } else {
                $img_data = $this->upload->data();
                $sallary_slip_img = base_url('uploads/customer_all_document/' . $img_data['raw_name'] . $img_data['file_ext']);

            }

            $doc = array(

                'customer_id'                  => $add['customer_id'],
                'customer_passport_size_photo' => empty($pass_size_img) ? $add['passport_size_pic'] : $pass_size_img,
                'customer_identity_proof'      => empty($identity_proof_img) ? $add['identity_proof'] : $identity_proof_img,
                'customer_address_proof'       => empty($address_proof_img) ? $add['address_proof'] : $address_proof_img,
                'customer_bank_statement'      => empty($bank_statement_imag) ? $add['bank_statement'] : $bank_statement_imag,
                'customer_salary_slip'         => empty($sallary_slip_img) ? $add['salary_slip'] : $sallary_slip_img,

            );
            $this->common_model->update_data('customer_document', array('customer_id' => $add['customer_id']), $doc);
            $data = array('icon' => 'success', 'text' => 'Customer Document Data Uploaded Successfully');
            echo json_encode($data);

        }

    }

?>