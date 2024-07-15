<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Business_type extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct();
            $this->load->model('super_admin/Common_model', 'common_model');
            $this->load->model('super_admin/category/Business_Type_model', 'business_type_model');
            ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
            error_reporting(0);

        }

        public function create_business_type() {

            $data['title'] = 'Manage All business Types Details';
            $data['breadcrums'] = 'Manage All business Types Details';
            $data['layout'] = 'category/manage_business_type.php';
            $this->load->view('super_admin/base', $data);

        }

        public function add_business_type_data() {

            $this->form_validation->set_rules('business_type_name', 'Business Type Name', 'required');

            if($this->form_validation->run() == TRUE) {

                $data = $this->input->post();

                $desig = array(

                    'business_type_name'      => $data['business_type_name'],
                    'description'             => $data['description'],
                    'created_by_user_type_id' => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),

                );
                $this->common_model->save_data('business_type', $desig);
                $data = array('icon' => 'success', 'text' => 'Business Type Created Successfully');
                
            } else {

                $msg = array(

                    'business_type_name'   => form_error('business_type_name'),
                );
                $data = array('icon' => 'error', 'text' => $msg);
                
            }
            echo json_encode($data);

        }

        /*======================================= Business Type Data ============================================*/
        public function business_type_data()
        {

            $post_data = $this->input->post();
            $record = $this->business_type_model->all_business_type_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_business_type(' . $row->id . ')" title="Click to Update Lead Details"><i class="fas fa-edit"></i></a>';

                $status = ($row->status == 1) ? '
                <a style="color:green; margin-left:-5px;" href="javascript:void()" onClick="return changeStatus(\'' . $row->id . '\',\'0\',\' business_type\',\'super_admin/common/chageStatus\')" title="Click to Di-Active Employee"><b><i class="fa fa-check"></i> </b></a>&emsp;'
                :
                '<a style="color:red; margin-left:-5px;"  href="javascript:void()"  onClick="return changeStatus(\'' . $row->id . '\',\'1\',\' business_type\',\'super_admin/common/chageStatus\')" title="Click to Active Employee"><b><i class="fa fa-times"></i> </b></a>&emsp;';

                $return['data'][] = array(

                    $i++,
                    $row->business_type_name,
                    $row->description,
                    $view . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;" ,

                );

            }

            $return['recordsTotal'] = $this->business_type_model->total_count();
            $return['recordsFiltered'] = $this->business_type_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        public function update_business_type() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['business'] = $this->business_type_model->get_business_type_data($upd['id']);
                $this->load->view('super_admin/category/update_business_type', $data);

            }

        }
 
        public function update_business_type_data() {

            $this->form_validation->set_rules('business_type_name', 'Business Type Name' , 'required');

            if($this->form_validation->run() == TRUE) {

                $cate = $this->input->post();

                $real = array(

                    'id'                 => $cate['id'],
                    'business_type_name' => $cate['business_type_name'],
                    'description'        => $cate['description'],

                );
                $this->common_model->update_data('business_type', array('id' => $cate['id']), $real);
                $data = array('icon' => 'success', 'text' => 'Business Type Data Updated Successfully');

            } else {

                $msg = array(

                    'business_type_name'   => form_error('business_type_name'),
                );
                $data = array('icon' => 'error', 'text' => $msg);
            }
            echo json_encode($data);
        }

    }

?>