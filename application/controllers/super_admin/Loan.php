<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Loan extends CI_Controller
    {
        public function __construct()
        {

            parent::__construct();
            $this->load->model('super_admin/Common_model', 'common_model');
            $this->load->model('super_admin/Loan_model', 'loan_model');
            ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
            error_reporting(0);

        }

        public function add_loan() {

            $data['title'] = 'Add Loan';
            $data['breadcrums'] = 'Add Loan';
            $data['layout']     = 'loan/add_loan.php';
            $this->load->view('super_admin/base', $data);

        }

        public function fetched_loan_data() {

            $val = $this->input->post();
            $data['product'] = $this->loan_model->all_loan_product();
            $data['member'] = $this->loan_model->get_member_data($val['member_id']);
            $this->load->view('super_admin/loan/fetched_loan_data', $data);
            
        }

        public function get_loan_product_data()
        {
            if ($this->input->is_ajax_request()) {

                $values = $this->input->post('id');
                $data   = $this->loan_model->get_loan_product_data($values);
                echo json_encode($data);

            }
        }

    }
?>