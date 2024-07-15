<?php

    class Employee_model extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
        }
        
        /* ===================================== All Employee Data Query ==================================== */

        public function all_employee_data_query($where = false)
        {
            $field = array(
                'id','name', 'mobile_no', 'email', 'address', 'employee_id', 'status'
            );
            $i = 0;
            foreach ($field as $item) {
                if (!empty($where['search']['value'])) {
                    if ($i === 0) {
                        $this->db->group_start();
                        $this->db->like($item, $where['search']['value']);
                    } else {
                        $this->db->or_like($item, $where['search']['value']);
                    }
                    if (count($field) - 1 == $i) {
                        $this->db->group_end();
                    }
                }
                $i++;
            }

            $this->db->select('id,name,designation,mobile_no, email, address, employee_id, status')->from('employee');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
        }

        public function all_employee_data($where = false)
        {
            $this->all_employee_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function total_count($where = false)
        {
            $this->all_employee_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function total_filter_count($where = false)
        {
            $this->all_employee_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function get_employee_data($id) {
             return $this->db->select('emp.*,des.designation,des.id as des_id')->where('emp.id', $id)->join('designation as des','des.id=emp.designation','left')->get('employee as emp')->row_array();
        }

        public function getCus_details($data)
        {
            return $this->db->select('emp.name,emp.employee_id,emp.email,emp.mobile_no,emp.designation,des.designation as desig_data')->where(array('emp.id'=>$data['id']))->join('designation as des','des.id=emp.designation','left')->get('employee as emp')->row_array();
        }
    

    }



?>