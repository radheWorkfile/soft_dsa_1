<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Bank_details extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct();
            $this->load->model('super_admin/Common_model', 'common_model');
            $this->load->model('super_admin/category/Bank_Details_model', 'bank_model');
            ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
            error_reporting(0);

        }

        public function add_bank() {

            $data['title'] = 'Manage All Bank Details';
            $data['breadcrums'] = 'Manage All Bank Details';
            $data['layout'] = 'category/manage_bank_details.php';
            $this->load->view('super_admin/base', $data);

        }

        public function add_bank_data() {

            $this->form_validation->set_rules('bank_name', 'Bank Name' , 'required');
            $this->form_validation->set_rules('ifsc_code', 'IFSC Code' , 'required');
            $this->form_validation->set_rules('branch_name', 'Branch Name' , 'required');

            if($this->form_validation->run() == TRUE) {

                $cate = $this->input->post();

                $real = array(

                    'bank_name'               => $cate['bank_name'],
                    'ifsc_code'               => $cate['ifsc_code'],
                    'branch_name'             => $cate['branch_name'],
                    'created_by_user_type_id' => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),
                );
                $this->common_model->save_data('bank_details', $real);
                $data = array('icon' => 'success', 'text' => 'Bank Details Added Successfully');

            } else {

                $msg = array(

                    'bank_name'   => form_error('bank_name'),
                    'ifsc_code'   => form_error('ifsc_code'),
                    'branch_name' => form_error('branch_name'),
                );
                $data = array('icon' => 'error', 'text' => $msg);

            }
            echo json_encode($data);

        }

        /*======================================= Bank Data ============================================*/
        public function bank_data()
        {

            $post_data = $this->input->post();
            $record = $this->bank_model->all_bank_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_bank_details(' . $row->id . ')" title="Click to Update Lead Details"><i class="fas fa-edit"></i></a>';

                $status = ($row->status == 1) ? '
                <a style="color:green; margin-left:-5px;" href="javascript:void()" onClick="return changeStatus(\'' . $row->id . '\',\'0\',\' bank_details\',\'super_admin/common/chageStatus\')" title="Click to Di-Active Employee"><b><i class="fa fa-check"></i> </b></a>&emsp;'
                :
                '<a style="color:red; margin-left:-5px;"  href="javascript:void()"  onClick="return changeStatus(\'' . $row->id . '\',\'1\',\' bank_details\',\'super_admin/common/chageStatus\')" title="Click to Active Employee"><b><i class="fa fa-times"></i> </b></a>&emsp;';

                $return['data'][] = array(

                    $i++,
                    $row->bank_name,
                    $row->ifsc_code,
                    $row->branch_name,
                    $view . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;",

                );

            }

            $return['recordsTotal'] = $this->bank_model->total_count();
            $return['recordsFiltered'] = $this->bank_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        public function update_bank_details() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['category'] = $this->bank_model->get_bank_data($upd['id']);
                $this->load->view('super_admin/category/update_bank_details', $data);

            }

        }

        public function update_bank_data() {

            $this->form_validation->set_rules('bank_name', 'Bank Name' , 'required');
            $this->form_validation->set_rules('ifsc_code', 'IFSC Code', 'required');
            $this->form_validation->set_rules('branch_name', 'Branch Name', 'required');

            if($this->form_validation->run() == TRUE) {

                $cate = $this->input->post();

                $real = array(

                    'id'                      => $cate['id'],
                    'bank_name'               => $cate['bank_name'],
                    'ifsc_code'               => $cate['ifsc_code'],
                    'branch_name'             => $cate['branch_name'],

                );
                $this->common_model->update_data('bank_details', array('id' => $cate['id']), $real);
                $data = array('icon' => 'success', 'text' => 'Designation Category Updated Successfully');

            } else {

                $msg = array(

                    'bank_name'   => form_error('bank_name'),
                    'ifsc_code'   => form_error('ifsc_code'),
                    'branch_name' => form_error('branch_name'),
                );
                $data = array('icon' => 'error', 'text' => $msg);
                
            }
            echo json_encode($data);
        }

    }

?>