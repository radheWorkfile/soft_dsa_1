<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('customer/Common_model','common_model');
        $this->load->model('customer/Dashboard_model', 'dashboard_model');
        ($this->session->userdata('user_cate') != 4) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);

    }

    function index()
    {
        $data['title']          = 'Dashboard';
        $data['breadcrumb']     = 'Dashboard';

        $data['total_loan']     = $this->common_model->count_all('customer_document', array('customer_id' => $this->session->userdata('customer_id')));

        $data['pending_loan']   = $this->common_model->count_all('customer_document', array('customer_id' => $this->session->userdata('customer_id'), 'status' => 1));

        $data['approve_loan']   = $this->common_model->count_all('customer_document', array('customer_id' => $this->session->userdata('customer_id'), 'status' => 2));

        $data['reject_loan']    = $this->common_model->count_all('customer_document', array('customer_id' => $this->session->userdata('customer_id'), 'status' => 3));

        $data['loan_amount']    = $this->common_model->sum_all('loan_amount', 'customer', array('customer_id' => $this->session->userdata('customer_id')));
        
        $this->load->view('customer/base', $data);
    }
    
}
