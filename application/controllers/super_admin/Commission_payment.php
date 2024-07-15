<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Commission_payment extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('super_admin/Common_model', 'common_model');
        $this->load->model('super_admin/Commission_Payment_model', 'commission_paymennt_model');
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);

    }

    public function manage_commission_payment() {

        $data['title'] = 'Manage All Commission';
        $data['breadcrums'] = 'MAnage All Commission';
        $data['layout']     = 'commission_payment/manage_commission_payment.php';
        $this->load->view('super_admin/base', $data);
        
    }

    /* ======================================= All Commission Payment Data ============================================ */
    
    public function commission_payment_data()
    {
        
        $post_data = $this->input->post();
        $record = $this->commission_paymennt_model->all_commission_payment_data($post_data);

        $i = $post_data['start'] + 1;

        $return['data'] = array();
        foreach ($record as $row) {

            $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_commission_paymentn_data(' . $row->id . ')" title="Click to View Commission Payment Details"><i class="fas fa-eye text-success"></i></a>&emsp;';

            $return['data'][] = array(

                $i++,
                $row->agent_name . "(" . $row->agent_id . ")",
                $row->mobile_no,
                $row->total_payble_amount,
                $row->paid_amount,
                $row->rest_amount,
                $view,

            );

        }

        $return['recordsTotal'] = $this->commission_paymennt_model->total_count();
        $return['recordsFiltered'] = $this->commission_paymennt_model->total_filter_count($post_data);
        $return['draw'] = $post_data['draw'];
        echo json_encode($return);
        
    }

    public function view_commission_payment()
    {

        if ($this->input->is_ajax_request()) {

            $view = $this->input->post();
            $data['view_comm_pay'] = $this->commission_paymennt_model->get_commission_payment_data($view['id']);
            $this->load->view('super_admin/commission_payment/view_commission_payment', $data);

        }

    }

    public function update_commission()
    {

        if ($this->input->is_ajax_request()) {

            $upd = $this->input->post();
            $data['upd_commission'] = $this->commission_model->get_commission_data($upd['id']);
            $this->load->view('super_admin/commission/update_commission', $data);

        }

    }

    public function update_commission_payment_data() {
        $this->form_validation->set_rules('paid_amount','Paid Amount','required');
        $this->form_validation->set_rules('rest_amount','Rest Amount','required');
        $this->form_validation->set_rules('mop','Mode Of Payment','required');
        $this->form_validation->set_rules('pay_date','Payment Date','required');
        
        if($this->input->post('mop') == 1 || $this->input->post('mop') == 2) {
            $this->form_validation->set_rules('acc_no', 'Account No.', 'required');
        }

        if($this->input->post('mop') == 3) {
            $this->form_validation->set_rules('cash_received_by', 'Cash Received By', 'required');
        }

        if($this->form_validation->run() == TRUE) {

            $pay = $this->input->post();
            
            $config['upload_path']          = './uploads/recipet/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024;
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('recipet')) {
                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");
            } else {
                $img_data = $this->upload->data();
                $img = ('uploads/recipet/' . $img_data['raw_name'] . $img_data['file_ext']);
                
            }
            
            $amou = array (

                'commission_earning_id'   => $pay['commission_earning_id'],
                'agent_id'                => $pay['agent_id'],
                'total_payble_amount'     => $pay['total_payble_amount'],
                'paid_amount'             => $pay['paid_amount'],
                'rest_amount'             => $pay['rest_amount'],
                'mop'                     => $pay['mop'],
                'acc_no'                  => $pay['acc_no'],
                'cash_received_by'        => $pay['cash_received_by'],
                'pay_date'                => $pay['pay_date'],
                'pay_remarks'             => $pay['pay_remarks'],
                'recipet'                 => empty($img) ? '' : $img,
                'created_at'            => date('Y-m-d'),
                'created_by_user_type_id' => $this->session->userdata('user_id'),
                'status'                  => 2
                
            );
            $this->common_model->save_data('commission_payment_details', $amou);

            $comm = array(

                'id'             => $pay['commission_earning_id'],
                'payment_status' => 2,
            );

            $this->common_model->update_data('commission_earning', array('id' => $pay['commission_earning_id']), $comm);

            $data=array('text' => 'Commission Payment Created Successfully', 'icon' => 'success');

        }else{

            $msg=array(

                'paid_amount'      => form_error('paid_amount'),
                'rest_amount'      => form_error('rest_amount'),
                'mop'              => form_error('mop'),
                'acc_no'           => form_error('acc_no'),
                'cash_received_by' => form_error('cash_received_by'),
                'pay_date'         => form_error('pay_date'),

            );
            $data=array('text' => $msg, 'icon' => 'error');

        }
        echo json_encode($data);
    }

}