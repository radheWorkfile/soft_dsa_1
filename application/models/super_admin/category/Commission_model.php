<?php
    class Commission_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        /* ===================================== All Commission Data Query ==================================== */

        public function all_commision_data_query($where = false)
        {
            $field = array(
                'cc.id','cc.commission_type', 'lt.loan_type_name', 'cc.status'
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

            $this->db->select('cc.id, cc.commission_type, cc.status, lt.loan_type_name')->from('commission_category as cc');
            $this->db->join('loan_type as lt', 'lt.id = cc.loan_type', 'left');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('cc.id', 'desc');
            }
        }

        public function all_commission_data($where = false)
        {
            $this->all_commision_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function total_count($where = false)
        {
            $this->all_commision_data_query($where);
            return $this->db->get()->num_rows();
        }

        public function total_filter_count($where = false)
        {
            $this->all_commision_data_query($where);
            return $this->db->get()->num_rows();

        }

        public function get_data($id) {

            $this->db->select('cc.*, lt.loan_type_name');
            $this->db->where('cc.id', $id);
            $this->db->join('loan_type as lt', 'lt.id = cc.loan_type', 'left');
            $val = $this->db->get('commission_category as cc');
            return $val->row_array();

        }

    }
?>