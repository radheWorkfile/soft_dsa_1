<?php

    class Document_Verification_model extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function get_customer_data($id) {

            $this->db->select('id, name, customer_id, mobile_no, email,');
            $this->db->where('customer_id', $id);
            $agent = $this->db->get('customer');
            return $agent->row_array();

        }

        public function get_customer_document($id) {

            $this->db->select('*');
            $this->db->where('customer_id', $id);
            $agent = $this->db->get('customer_document');
            return $agent->row_array();

        }
        
        /* ===================================== All Customer Data Query ==================================== */

        public function all_customer_data_query($where = false)
        {
            $field = array(
                'id','name', 'mobile_no', 'email', 'address', 'customer_id', 'status'
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

            $this->db->select('id, name, mobile_no, email, address, customer_id, status')->from('customer');
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

    }
?>