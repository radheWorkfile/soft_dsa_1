<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assign_work extends CI_Controller
{
    public function __construct()  
    {
        parent::__construct();
        $this->load->model('super_admin/common_model', 'Common_model');
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    public function index()
    {
        $data['title']  = 'Assign Work';
        $data['breadcrums'] = 'Assign Work';
        $data['layout'] = 'assign_work/work_assign.php';
        $data['all_menu'] = $this->Common_model->all_data('menu', '*');
        $data['all_user'] = $this->Common_model->all_data('users', '*');
        $this->load->view('super_admin/base', $data);
    }
    public function add_data()
    {
       
        $value = $this->input->post();
        $data = array('department_type'=>$value['department_type']);
        $data['all_user'] = $this->Common_model->all_data_con('users', array('department_type' => $value['department_type']), '*');
       	//echo $this->db->last_query().'<br>';
	    // $data['all_user'] = $this->Common_model->all_data_con_d($value);
       // $data['assign_data'] = $this->Common_model->get_last('assign_menu', '*');
        $data['type'] = $value['menu'];
        $this->load->view('super_admin/assign_work/table.php', $data);
    }
    public function save_data()
    {
        $this->form_validation->set_rules('mem_id[]', 'Select Member', 'required');
        if ($this->form_validation->run() == TRUE) {
            $value = $this->input->post();
            $values = $value['mem_id'];
            foreach ($values as $row) {
            $data = array(
            'menu' => $value['menu'],
            'department_type' => $value['department_type'],
            'mem_id' => $row,
            'created_at' => date('Y-m-d')
            );
          
            $this->Common_model->save_data('assign_menu', $data);
            $data = array('icon' => 'success', 'text' => 'Work Assing Successfully');
            }
            } else {
            $msg = array(

                'mem_id' => form_error('mem_id[]'),
            );
            $data = array('icon' => 'error', 'text' => $msg);
            }
            echo json_encode($data);
    }

}