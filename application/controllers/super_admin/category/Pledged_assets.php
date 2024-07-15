<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Pledged_assets extends CI_Controller
    {

        public function __construct()
        {

            parent::__construct();
            $this->load->model('super_admin/Common_model', 'common_model');
            $this->load->model('super_admin/category/Pledged_Assets_model', 'pledged_model');
            ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
            error_reporting(0);

        }

        public function create_pledged_assets() {

            $data['title'] = 'Manage All Collateral';
            $data['breadcrums'] = 'Manage All Collateral';
            $data['layout'] = 'category/manage_pledged_assets.php';
            $this->load->view('super_admin/base', $data);

        }

        public function add_pledged_data() {

            $this->form_validation->set_rules('pledged_assets_name', 'Pledged Assets Name' , 'required');

            if($this->form_validation->run() == TRUE) {

                $cate = $this->input->post();

                $real = array(

                    'pledged_assets_name'     => $cate['pledged_assets_name'],
                    'description'             => $cate['description'],
                    'created_by_user_type_id' => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),

                );
                $this->common_model->save_data('pledged_category', $real);
                $data = array('icon' => 'success', 'text' => 'Pledged Assets Data Added Successfully');

            } else {

                $msg = array(

                    'pledged_assets_name' => form_error('pledged_assets_name'),
                );
                $data = array('icon' => 'error', 'text' => $msg);
            }
            echo json_encode($data);

        }

        /*========================================= Pledged Assets Data ================================================*/
        public function pledged_assets_data()
        {

            $post_data = $this->input->post();
            $record = $this->pledged_model->all_pledged_assets_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_pledged_assets(' . $row->id . ')" title="Click to Update Lead Details"><i class="fas fa-edit"></i></a>';

                $status = ($row->status == 1) ? '
                <a style="color:green; margin-left:-5px;" href="javascript:void()" onClick="return changeStatus(\'' . $row->id . '\',\'0\',\' pledged_category\',\'super_admin/common/chageStatus\')" title="Click to Di-Active Employee"><b><i class="fa fa-check"></i> </b></a>&emsp;'
                :
                '<a style="color:red; margin-left:-5px;"  href="javascript:void()"  onClick="return changeStatus(\'' . $row->id . '\',\'1\',\' pledged_category\',\'super_admin/common/chageStatus\')" title="Click to Active Employee"><b><i class="fa fa-times"></i> </b></a>&emsp;';

                $return['data'][] = array(

                    $i++,
                    $row->pledged_assets_name,
                    $row->description,
                    $view . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;",

                );

            }

            $return['recordsTotal'] = $this->pledged_model->total_count();
            $return['recordsFiltered'] = $this->pledged_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        public function update_pledged_assets() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['category'] = $this->pledged_model->get_pledged_assets_data($upd['id']);
                $this->load->view('super_admin/category/update_pledged_assets', $data);

            }

        }

        public function update_pledged_assets_data() {

            $this->form_validation->set_rules('pledged_assets_name', 'Category Name' , 'required');

            if($this->form_validation->run() == TRUE) {

                $cate = $this->input->post();

                $real = array(

                    'id'                      => $cate['id'],
                    'pledged_assets_name'     => $cate['pledged_assets_name'],
                    'description'             => $cate['description'],

                );
                $this->common_model->update_data('pledged_category', array('id' => $cate['id']), $real);
                $data = array('icon' => 'success', 'text' => 'Pledged Assets Data Updated Successfully');

            } else {

                $msg = array(

                    'pledged_assets_name' => form_error('pledged_assets_name'),
                    
                );
                $data = array('icon' => 'error', 'text' => $msg);
            }
            echo json_encode($data);
        }

    }

?>