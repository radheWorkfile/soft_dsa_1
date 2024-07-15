<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('super_admin/Common_model','common_model');
        $this->load->model('super_admin/dashboard_model', 'Dashboard_model');
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    function index()
    {

        $data['title']            = 'Dashboard';
        $data['breadcrumb']       = 'Dashboard';
        $data['total_customer']   = $this->common_model->count_all('customer');
        $data['follow_customer']  = $this->common_model->count_all('customer_document', array('status' => 1));
        $data['approve_customer'] = $this->common_model->count_all('customer_document', array('status' => 2));
        $data['reject_customer']  = $this->common_model->count_all('customer_document', array('status' => 3));
        $data['total_agent']      = $this->common_model->count_all('agent');
        $data['total_employee']      = $this->common_model->count_all('employee');
        $data['total_bank']       = $this->common_model->count_all('bank_details');
        $this->load->view('super_admin/base', $data);

    }

    public function manage_designation()
    {
        $data['title'] = 'Manage Designation';
        $data['breadcrums'] = 'Manage Designation';
        $data['layout'] = 'category/manage_designation.php';
        $this->load->view('super_admin/base', $data);
    }

 
    public function add_designation() 
    {
        $this->form_validation->set_rules('designation_name', 'Enter Designation' , 'required');
        if($this->form_validation->run() == TRUE) {
            $value = $this->input->post();
            $data = array(
                'designation'     => $value['designation_name'],
                'description'     => $value['description'],
                'created_at'      => date('Y-m-d'),
            );
            $this->common_model->save_data('designation', $data);
            $data = array('icon' => 'success', 'text' => 'Designation Added Successfully');
            } else {
            $msg = array(

                'designation_name' => form_error('designation_name'),
            );
            $data = array('icon' => 'error', 'text' => $msg);
            }
            echo json_encode($data);
     }



           public function manage_all_designation()
           {
   
               $post_data = $this->input->post();
               $record = $this->Dashboard_model->designation_data($post_data);
               $i = $post_data['start'] + 1;
   
               $return['data'] = array();
               foreach ($record as $row) {
   
                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_deg_category" onclick="update_designation(' . $row->id . ')" title="Click to Update Designation Details"><i class="fas fa-edit"></i></a>';
   
                $return['data'][] = array(
   
                       $i++,
                       $row->designation,
                       $row->description,
                       $view . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;",
   
                   );
               }
                  
   
               $return['recordsTotal'] = $this->Dashboard_model->designation_data_total_count();
               $return['recordsFiltered'] = $this->Dashboard_model->designation_data_total_filter_count($post_data);
               $return['draw'] = $post_data['draw'];
               echo json_encode($return);
               
           }

           public function get_des_data()
           {
            if($this->input->is_ajax_request()) {
                $upd = $this->input->post();
                $data['deg_data'] = $this->common_model->get_data('designation',array('id'=>$upd['id']),'*');
                $this->load->view('super_admin/category/update_designation', $data);
            }
           }

           public function update_designation() {

            $this->form_validation->set_rules('designation_name', 'Enter Designation' , 'required');
            if($this->form_validation->run() == TRUE) {
                $value = $this->input->post();
                $data = array(
                    'id'             => $value['id'],
                    'designation'    => $value['designation_name'],
                    'description'    => $value['description'],
                );
                $this->common_model->update_data('designation',array('id' => $data['id']),$data);
                $data = array('icon' => 'success', 'text' => 'Updated Successfully');
                } else {
                $msg = array(
    
                    'designation_name' => form_error('designation_name'),
                );
                $data = array('icon' => 'error', 'text' => $msg);
                }
                echo json_encode($data);
        }
}
