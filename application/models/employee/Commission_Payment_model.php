<?php

    class Commission_Payment_model extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
        }

        /* ===================================== All Commission Payment Data Query ==================================== */

        public function all_commission_payment_data_query($where = false)
        {
            $field = array(
                'cpd.id','cpd.total_payble_amount', 'cpd.paid_amount', 'cpd.rest_amount', 'a.name as agent_name', 'a.agent_id', 'a.mobile_no'
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

            $this->db->select('cpd.*, a.name as agent_name, a.agent_id, a.mobile_no')->from('commission_payment_details as cpd');
            $this->db->join('agent as a', 'a.id = cpd.agent_id', 'left');
            if (isset($where['order']) && !empty($where['order'])) {

                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);

            } else {

                $this->db->order_by('id', 'desc');

            }

        }

        public function all_commission_payment_data($where = false)
        {
            $this->all_commission_payment_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function total_count($where = false)
        {
            $this->all_commission_payment_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function total_filter_count($where = false)
        {
            $this->all_commission_payment_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function get_commission_payment_data($id) {

            $this->db->select('cpd.*, a.name as agent_name, a.agent_id, a.mobile_no');
            $this->db->where('cpd.id', $id);
            $this->db->join('agent as a', 'a.id = cpd.agent_id', 'left');
            $val = $this->db->get('commission_payment_details as cpd');
            return $val->row_array();
        }

    }

?>