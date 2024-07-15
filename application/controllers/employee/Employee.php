<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Employee extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('agent/Common_model', 'common_model');
            $this->load->model('agent/Employee_model', 'employee_model');
            $this->load->helper(array('form', 'url'));
            ($this->session->userdata('user_cate') != 3) ? redirect(base_url(), 'refresh') : '';
            error_reporting(0);
        }

        public function add_employee() {

            $data['title']         = 'Add Employee';
            $data['breadcrums']    = 'Add Employee';
            $data['assing_menu'] = $this->common_model->get_assign_data();
            $data['designation']   = $this->common_model->all_data('designation','*');
            $data['layout']        = 'employee/add_employee.php';
            $this->load->view('employee/base', $data);

        }

        public function add_employee_data() {

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('aadhar_card_no', 'Aadhar Card No.', 'required');
            $this->form_validation->set_rules('pan_no', 'Pan No.', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == TRUE) {

                $add = $this->input->post();

                $employee_id = rand(pow(10, 6-1), pow(10, 6)-1);
                
                $config['upload_path']          = './uploads/employee_document/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = config_item('image_size');
                
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('aadhaar_img')) {
                    
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                    
                } else {
                    
                    $img_data = $this->upload->data();
                    $aadhr_img = base_url('uploads/employee_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('pan_img')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $pan_imag = base_url('uploads/employee_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                $staff = array(

                    'employee_id'             => $employee_id,
                    'name'                    => $add['name'],
                    'dob'                     => $add['dob'],
                    'address'                 => $add['address'],
                    'mobile_no'               => $add['mobile_no'],
                    'email'                   => $add['email'],
                    'aadhar_card_no'          => $add['aadhar_card_no'],
                    'aadhar_image'            => empty($aadhr_img) ? '' : $aadhr_img,
                    'pan_no'                  => $add['pan_no'],
                    'designation'             => $add['designation'],
                    'pan_image'               => empty($pan_imag) ? '' : $pan_imag,
                    'password'                => $add['password'],
                    'account_no'              => $add['account_no'],
                    'ifsc_code'               => $add['ifsc_code'],
                    'branch_name'             => $add['branch_name'],
                    'bank_name'               => $add['bank_name'],
                    'created_by_user_type_id' => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),
                );
                $this->common_model->save_data('employee', $staff);
                
                $use = array(
                    
                    'employee_id'             => $employee_id,
                    'department_type'         => 3,
                    'name'                    => $add['name'],
                    'mobile'                  => $add['mobile_no'],
                    'email'                   => $add['email'],
                    'address'                 => $add['address'],
                    'password'                => md5($add['password']),
                    'show_ps'                 => $add['password'],
                    'created_by_user_id'      => $this->session->userdata('user_id'),
                    'created_at'              => date('Y-m-d'),
                    
                );
                $this->common_model->save_data('users', $use);

                $data = array('icon' => 'success', 'text' => 'New Employee Added Successfully');

            } else {

                $msg = array(

                    'full_name'      => form_error('full_name'),
                    'dob'            => form_error('dob'),
                    'address'        => form_error('address'),
                    'mobile_no'      => form_error('mobile_no'),
                    'email'          => form_error('email'),
                    'aadhar_card_no' => form_error('aadhar_card_no'),
                    'designation'    => form_error('designation'),
                    'password'       => form_error('password'),
                );
                $data = array('icon' => 'error', 'text' => $msg);

            }
            echo json_encode($data);

        }

        public function manage_employee() {

            $data['title']      = "Manage All Employee";
            $data['breadcrums'] = "Manage All Employee";
            $data['assing_menu'] = $this->common_model->get_assign_data();
            $data['layout']     = 'employee/manage_employee.php';
            $this->load->view('employee/base', $data);

        }

        /*======================================= All Employee Data ============================================*/
        public function employee_data()
        {

            $post_data = $this->input->post();
            $record = $this->employee_model->all_employee_data($post_data);
            $i = $post_data['start'] + 1;

            $return['data'] = array();
            foreach ($record as $row) {

                $view = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".view_model" style="margin-left:-5px;" onclick="view_employee(' . $row->id . ')" title="Click to View Staff Details"><i class="fas fa-eye text-success"></i></a>&emsp;

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".update_category" onclick="update_employee(' . $row->id . ')" title="Click to Update Staff Details"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".download_idcard" onclick="id_card_download(' . $row->id . ')" title="Click to Update Customer Document Details"><i class="fas fa-id-card text-primary"></i></a>';

                $status = ($row->status == 1) ? '
                <a style="color:green; margin-left:-5px;" href="javascript:void()" onClick="return changeStatus(\'' . $row->id . '\',\'0\',\' employee\',\'agent/common/chageStatus\')" title="Click to Di-Active employee"><b><i class="fa fa-check"></i> </b></a>&emsp;'
                :
                '<a style="color:red; margin-left:-5px;"  href="javascript:void()"  onClick="return changeStatus(\'' . $row->id . '\',\'1\',\' employee\',\'agent/common/chageStatus\')" title="Click to Active employee"><b><i class="fa fa-times"></i> </b></a>&emsp;';

                $return['data'][] = array(

                    $i++,
                    $row->name . "(" . $row->employee_id . ")",
                    $row->mobile_no,
                    $row->email,
                    $row->address,
                    $view . "&emsp; <span id='".$row->id ."'>". $status . "</span>&emsp;",

                );
            }

            $return['recordsTotal'] = $this->employee_model->total_count();
            $return['recordsFiltered'] = $this->employee_model->total_filter_count($post_data);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
            
        }

        public function view_employee() {
 
            if($this->input->is_ajax_request()) {      

                $view = $this->input->post();
                $data['view_employee'] = $this->employee_model->get_employee_data($view['id']);
                // echo "<pre>"; print_r($data['view_employee']);die;
                // $data['des_data'] = $this->common_model->all_data('designation','*');
                $this->load->view('agent/employee/view_employee', $data);
            }

        }

        public function update_employee() {

            if($this->input->is_ajax_request()) {

                $upd = $this->input->post();
                $data['upd_employee'] = $this->employee_model->get_employee_data($upd['id']);
                $data['designation'] = $this->common_model->all_data('designation','*');
                
                $this->load->view('agent/employee/update_employee', $data);

            }
        }

        public function update_employee_data() {

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('aadhar_card_no', 'Aadhar Card No.', 'required');
            $this->form_validation->set_rules('pan_no', 'Pan No.', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == TRUE) {

                $add = $this->input->post();

                $employee_id = rand(pow(10, 6-1), pow(10, 6)-1);
                
                $config['upload_path']          = './uploads/employee_document/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = config_item('image_size');
                
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('aadhaar_img')) {
                    
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                    
                } else {
                    
                    $img_data = $this->upload->data();
                    $aadhr_img = base_url('uploads/employee_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                if (!$this->upload->do_upload('pan_img')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $img_data = $this->upload->data();
                    $pan_imag = base_url('uploads/employee_document/' . $img_data['raw_name'] . $img_data['file_ext']);
                    
                }
                
                $staff = array(

                    'id'                      => $add['id'],
                    'name'                    => $add['name'],
                    'dob'                     => $add['dob'],
                    'address'                 => $add['address'],
                    'mobile_no'               => $add['mobile_no'],
                    'email'                   => $add['email'],
                    'aadhar_card_no'          => $add['aadhar_card_no'],
                    'aadhar_image'            => empty($aadhr_img) ? $add['aadhar_img_upd'] : $aadhr_img,
                    'pan_no'                  => $add['pan_no'],
                    'pan_image'               => empty($pan_imag) ? $add['pan_img_upd'] : $pan_imag,
                    'password'                => $add['password'],
                    'account_no'              => $add['account_no'],
                    'ifsc_code'               => $add['ifsc_code'],
                    'branch_name'             => $add['branch_name'],
                    'bank_name'               => $add['bank_name'],
                );
                $this->common_model->update_data('employee', array('id' => $add['id']), $staff);
                
                $use = array(
                    
                    'employee_id'             => $add['employee_id'],
                    'department_type'         => 3,
                    'name'                    => $add['name'],
                    'mobile'                  => $add['mobile_no'],
                    'email'                   => $add['email'],
                    'address'                 => $add['address'],
                    'password'                => md5($add['password']),
                    'show_ps'                 => $add['password'],
                    
                );
                $this->common_model->update_data('users', array('employee_id' => $add['employee_id']), $use);

                $data = array('icon' => 'success', 'text' => 'New Employee Added Successfully');

            } else {

                $msg = array(

                    'full_name'      => form_error('full_name'),
                    'dob'            => form_error('dob'),
                    'address'        => form_error('address'),
                    'mobile_no'      => form_error('mobile_no'),
                    'email'          => form_error('email'),
                    'aadhar_card_no' => form_error('aadhar_card_no'),
                    'designation'    => form_error('designation'),
                    'password'       => form_error('password'),
                    
                );
                $data = array('icon' => 'error', 'text' => $msg);

            }
            echo json_encode($data);
    
        }


    public function download_idcard()
  {
        $data = $this->input->post(); 
        $data['cus_details'] = $this->employee_model->getCus_details($data); 
        // print_r($data['cus_details']);die;
        $this->load->view('agent/employee/id_card_details.php',$data);
  }


}

?>