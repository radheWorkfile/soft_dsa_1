<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('agent/Common_model','common_model');
        $this->load->model('agent/dashboard_model', 'Dashboard_model');
        ($this->session->userdata('user_cate') != 2) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);

    }

    function index()
    {
        $data['title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $data['total_commission_amt'] = $this->common_model->sum_all('total_commission_amount', 'commission_earning', array('agent_name' => (int)($this->session->userdata('agent_id'))));

        $data['total_commission'] = $this->common_model->count_all('commission_earning', array('agent_name' => $this->session->userdata('agent_id')));
        
        $data['total_customer']   = $this->common_model->count_all('customer', array('created_by_user_type_id' => $this->session->userdata('user_id')));

        $data['follow_customer']  = $this->common_model->count_all('customer_document', array('status' => 1, 'document_status' => 1,'created_by_user_type_id'=> $this->session->userdata('user_id')));

        $data['approve_customer'] = $this->common_model->count_all('customer_document', array('status' => 2, 'document_status' => 1,'created_by_user_type_id'=> $this->session->userdata('user_id')));

        $data['reject_customer']  = $this->common_model->count_all('customer_document', array('status' => 3, 'document_status' => 1,'created_by_user_type_id'=> $this->session->userdata('user_id')));
        
        $data['assing_menu'] = $this->common_model->get_assign_data();
        $this->load->view('agent/base', $data);

    }
    
}
