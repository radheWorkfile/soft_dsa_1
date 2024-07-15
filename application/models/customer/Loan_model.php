<?php

    class Loan_model extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
        }

        /* ===================================== All Loan Data Query ==================================== */

        public function all_loan_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c .email', 'c.address', 'c.customer_id', 'c.status'
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
            $this->db->where('u.id', $this->session->userdata('user_id'));
            $this->db->join('users as u', 'u.customer_id = c.customer_id', 'left');
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
            
        }

        public function all_loan_data($where = false)
        {
            $this->all_loan_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function total_count($where = false)
        {
            $this->all_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function total_filter_count($where = false)
        {
            $this->all_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        /* ===================================== All Pending Loan Data Query ==================================== */

        public function all_pending_loan_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c .email', 'c.address', 'c.customer_id', 'c.status'
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
            $this->db->where(array('u.id' => $this->session->userdata('user_id'), 'cd.status' => 1));
            $this->db->join('users as u', 'u.customer_id = c.customer_id', 'left');
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
            
        }

        public function all_pending_loan_data($where = false)
        {
            $this->all_pending_loan_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function pending_total_count($where = false)
        {
            $this->all_pending_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function pending_total_filter_count($where = false)
        {
            $this->all_pending_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        /* ===================================== All Approve Loan Data Query ==================================== */

        public function all_approve_loan_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c .email', 'c.address', 'c.customer_id', 'c.status'
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
            $this->db->where(array('u.id' => $this->session->userdata('user_id'), 'cd.status' => 2));
            $this->db->join('users as u', 'u.customer_id = c.customer_id', 'left');
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
            
        }

        public function all_approve_loan_data($where = false)
        {
            $this->all_approve_loan_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function approve_total_count($where = false)
        {
            $this->all_approve_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function approve_total_filter_count($where = false)
        {
            $this->all_approve_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        /* ===================================== All Reject Loan Data Query ==================================== */

        public function all_reject_loan_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c .email', 'c.address', 'c.customer_id', 'c.status'
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
            $this->db->where(array('u.id' => $this->session->userdata('user_id'), 'cd.status' => 3));
            $this->db->join('users as u', 'u.customer_id = c.customer_id', 'left');
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
            
        }

        public function all_reject_loan_data($where = false)
        {
            $this->all_reject_loan_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function reject_total_count($where = false)
        {
            $this->all_reject_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function reject_total_filter_count($where = false)
        {
            $this->all_reject_loan_data_query($where);
            return $this->db->get()->num_rows();
        }

        /* ===================================== All Loan Amount Data Query ==================================== */

        public function all_loan_amount_data_query($where = false)
        {
            $field = array(
                'c.id','c.name', 'c.mobile_no', 'c .email', 'c.loan_amount', 'c.customer_id', 'c.status'
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

            $this->db->select('c.id, c.name, c.mobile_no, c.email, c.loan_amount, c.customer_id, c.status, cd.status as sta')->from('customer as c');
            $this->db->where(array('u.id' => $this->session->userdata('user_id')));
            $this->db->join('users as u', 'u.customer_id = c.customer_id', 'left');
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
            
        }

        public function all_loan_amount_data($where = false)
        {
            $this->all_loan_amount_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function loan_total_count($where = false)
        {
            $this->all_loan_amount_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function loan_total_filter_count($where = false)
        {
            $this->all_loan_amount_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function get_customer_data($id) {

            $this->db->select('c.*, a.name as agent_name, a.agent_id, e.name as employee_name, employee_id, cd.status as sta, cd.reason, lt.loan_type_name');
            $this->db->where('c.id', $id);
            $this->db->join('customer_document as cd', 'cd.customer_id = c.customer_id', 'left');
            $this->db->join('agent as a', 'a.id = c.identifier_name', 'left');
            $this->db->join('employee as e', 'e.id = c.assign_employee', 'left');
            $this->db->join('loan_type as lt', 'lt.id = c.loan_type', 'left');
            $customer = $this->db->get('customer as c');
            return $customer->row_array();

        }

    }
?>