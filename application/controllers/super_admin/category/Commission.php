<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Commission extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct();
            $this->load->model('super_admin/Common_model', 'common_model');
            $this->load->model('super_admin/category/Commission_model', 'commission_model');
            ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
            error_reporting(0);

        }

        public function create_commission() {

            $data['title']         = 'Manage All Commissions';
            $data['breadcrums']    = 'Manage All Commissions';
            $data['loan_type'] = $this->common_model->all_data('loan_type', 'id, loan_type_name');
            $data['layout']        = 'category/manage_commission.php';
            $this->load->view('super_admin/base', $data);

        }

        public function add_commission_data() {

            $this->form_validation->set_rules('loan_type', 'Loan Type', 'required');
            $this->form_validation->set_rules('commission_type', 'Commission Type', 'required');

            if($this->form_validation->run() == TRUE) {

                $inp = $this->input->post();

                $commission = array(

                    'loan_type'               => $inp['loan_type'],
                    'commission_type'         => $inp['commission_type'],
                    'commission'              => $inp['commission'],
                    'commission_amount'       => $inp['commission_amount'],
                    'commission_percentage'   => $inp['commission_percentage'],
                    'created_by_user_type_id' => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),

                );
                $this->common_model->save_data('commission_category', $commission);
                $data = array('icon' => 'success', 'text' => 'New Commission Created Successfully');

            } else {

                $msg = array(

                    'loan_type'              => form_error('loan_type'),
                    'commission_type'       => form_error('commission_type'),

                );
                $data = array('icon' => 'error', 'text' => $msg);
            }
            echo json_encode($data);

        }

       /*===================================== Commission Data ========================================*/
        public function commission_data()
        {

           $post_data = $this->input->post();
           $record = $this->commission_model->all_commission_data($post_data);
           $i = $post_data['start'] + 1;

           $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" onclick="view_commission(' . $row->id . ')" title="Click to Update Lead Details"><i class="fas fa-eye text-success"></i></a>&emsp;
                
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_commission(' . $row->id . ')" title="Click to Update Lead Details"><i class="fas fa-edit"></i></a>';

                $status = ($row->status == 1) ? '
                <a style="color:green; margin-left:-5px;" href="javascript:void()" onClick="return changeStatus(\'' . $row->id . '\',\'0\',\' commission_category\',\'super_admin/common/chageStatus\')" title="Click to Di-Active Employee"><b><i class="fa fa-check"></i> </b></a>&emsp;'
                :
                '<a style="color:red; margin-left:-5px;"  href="javascript:void()"  onClick="return changeStatus(\'' . $row->id . '\',\'1\',\' commission_category\',\'super_admin/common/chageStatus\')" title="Click to Active Employee"><b><i class="fa fa-times"></i> </b></a>&emsp;';

                if($row->commission_type == 1) {
                    $cmmsn_typ = "On File";
                } else if ($row->commission_type == 2) {
                    $cmmsn_typ = "On Approve";
                }

                $return['data'][] = array(

                    $i++,
                    $row->loan_type_name,
                    $cmmsn_typ,
                    $view . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;",

                );
                
            }

           $return['recordsTotal'] = $this->commission_model->total_count();
           $return['recordsFiltered'] = $this->commission_model->total_filter_count($post_data);
           $return['draw'] = $post_data['draw'];
           echo json_encode($return);
           
        }

        public function view_commission() {

            if($this->input->is_ajax_request()) {

                $val = $this->input->post();
                $data['cmmsn'] = $this->commission_model->get_data($val['id']);
                $this->load->view('super_admin/category/view_commission', $data);

            }

        }

        public function update_commission() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['upd_cmsn'] = $this->commission_model->get_data($upd['id']);
                $data['loan_type'] = $this->common_model->all_data('loan_type', 'id, loan_type_name');
                $this->load->view('super_admin/category/update_commission', $data);

            }

        }

        public function update_commission_data() {

            $this->form_validation->set_rules('business_type', 'Loan Type', 'required');
            $this->form_validation->set_rules('commission_type', 'Commission Type', 'required');

            if($this->form_validation->run() == TRUE) {

                $inp = $this->input->post();

                $commission = array(

                    'id'                      => $inp['id'],
                    'business_type'           => $inp['business_type'],
                    'commission_type'         => $inp['commission_type'],
                    'commission'              => $inp['commission'],
                    'commission_amount'       => $inp['commission_amount'],
                    'commission_percentage'   => $inp['commission_percentage'],

                );
                $this->common_model->update_data('commission_category', array('id' => $inp['id']), $commission);
                $data = array('icon' => 'success', 'text' => 'New Commission Created Successfully');

            } else {

                $msg = array(

                    'business_type'         => form_error('business_type'),
                    'commission_type'       => form_error('commission_type'),

                );
                $data = array('icon' => 'error', 'text' => $msg);
            }
            echo json_encode($data);

        }

    }
?>