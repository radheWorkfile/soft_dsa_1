<?php

    class Customer_model extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function get_loan_type_doc($id) {

            $this->db->select('id, document');
            $this->db->where('id', $id);
            $val = $this->db->get('loan_type');
            return $val->row_array();

        }

        public function get_agent_data($id) {

            $this->db->select('id, mobile_no, email,');
            $this->db->where('id', $id);
            $agent = $this->db->get('agent');
            return $agent->row_array();

        }
        
        /* ===================================== All Customer Data Query ==================================== */

        public function all_customer_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c.email', 'c.address', 'c.customer_id', 'c.status'
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

            $this->db->select('c.id, c.name, c.mobile_no, c.email, c.address, c.customer_id, c.status, cd.status as sta')->from('customer as c');
            // $this->db->or_where('c.document_status', 2);
            $this->db->where('c.created_by_user_type_id', $this->session->userdata('user_id'));
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
           
            
        }

        public function all_customer_data($where = false)
        {
            $this->all_customer_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function total_count($where = false)
        {
            $this->all_customer_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function total_filter_count($where = false)
        {
            $this->all_customer_data_query($where);
            return $this->db->get()->num_rows();
        }

        /* ===================================== All follow Customer Data Query ==================================== */

        public function all_follow_customer_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c.email', 'c.address', 'c.customer_id', 'c.status'
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

            $this->db->select('c.id, c.name, c.mobile_no, c.email, c.address, c.customer_id, c.status, cd.status as sta, cd.reason')->from('customer_document as cd');
            $this->db->where(array('cd.created_by_user_type_id' => $this->session->userdata('user_id'), 'cd.status' => 1));
            $this->db->join('customer as c', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('c.id', 'desc');
            }
            
        }

        public function all_follow_customer_data($where = false)
        {
            $this->all_follow_customer_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function follow_total_count($where = false)
        {
            $this->all_follow_customer_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function follow_total_filter_count($where = false)
        {
            $this->all_follow_customer_data_query($where);
            return $this->db->get()->num_rows();
        }

        /* ===================================== All approve Customer Data Query ==================================== */

        public function all_approve_customer_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c.email', 'c.address', 'c.customer_id', 'c.status'
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

            $this->db->select('c.id, c.name, c.mobile_no, c.email, c.address, c.customer_id, c.status, cd.status as sta, cd.reason')->from('customer_document as cd');
            $this->db->where(array('c.created_by_user_type_id' => $this->session->userdata('user_id'), 'cd.status' => 2));
            $this->db->join('customer as c', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('c.id', 'desc');
            }
            
        }

        public function all_approve_customer_data($where = false)
        {

            $this->all_approve_customer_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();

        }

        public function approve_total_count($where = false)
        {

            $this->all_approve_customer_data_query($where);
            return $this->db->get()->num_rows();

        }

        public function approve_total_filter_count($where = false)
        {

            $this->all_approve_customer_data_query($where);
            return $this->db->get()->num_rows();

        }

        /* ===================================== All reject Customer Data Query ==================================== */

        public function all_reject_customer_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c.email', 'c.address', 'c.customer_id', 'c.status'
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

            $this->db->select('c.id, c.name, c.mobile_no, c.email, c.address, c.customer_id, c.status, cd.status as sta, cd.reason')->from('customer_document as cd');
            $this->db->where(array('c.created_by_user_type_id' => $this->session->userdata('user_id'), 'cd.status' => 3));
            $this->db->join('customer as c', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('c.id', 'desc');
            }
            
        }

        public function all_reject_customer_data($where = false)
        {

            $this->all_reject_customer_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();

        }

        public function reject_total_count($where = false)
        {

            $this->all_reject_customer_data_query($where);
            return $this->db->get()->num_rows();

        }

        public function reject_total_filter_count($where = false)
        {

            $this->all_reject_customer_data_query($where);
            return $this->db->get()->num_rows();

        }

        public function get_customer_data($id) {

            $this->db->select('c.*, a.name as agent_name, a.agent_id, e.name as employee_name, employee_id, cd.status as sta, cd.reason, cd.customer_passport_size_photo, cd.customer_identity_proof, cd.customer_address_proof, cd.customer_bank_statement, cd.customer_salary_slip, lt.loan_type_name');
            $this->db->where('c.id', $id);
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            $this->db->join('agent as a', 'a.id = c.identifier_name', 'left');
            $this->db->join('employee as e', 'e.id = c.assign_employee', 'left');
            $this->db->join('loan_type as lt', 'lt.id = c.loan_type', 'left');
            $customer = $this->db->get('customer as c');
            return $customer->row_array();

        }

        public function get_agent_datas() {

            $this->db->select('id, agent_id, name,');
            $this->db->where('id', $this->session->userdat('agent_id'));
            $val = $this->db->get('agent');
            return $val->result_array();
            
        }

    }
?>