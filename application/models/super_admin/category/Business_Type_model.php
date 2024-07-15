<?php
    class Business_Type_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        /* ===================================== All Business Type Data Query ==================================== */

        public function all_business_type_data_query($where = false)
        {
            $field = array(
                'id','business_type_name', 'status'
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

            $this->db->select('*')->from('business_type');
            if (isset($where['order']) && !empty($where['order'])) {
                $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
            } else {
                $this->db->order_by('id', 'desc');
            }
        }

        public function all_business_type_data($where = false)
        {
            $this->all_business_type_data_query($where);

            if ($where['length'] != -1) {
                $this->db->limit($where['length'], $where['start']);
            }
            return $this->db->get()->result();
        }

        public function total_count($where = false)
        {

            $this->all_business_type_data_query($where);
            return $this->db->get()->num_rows();

        }

        public function total_filter_count($where = false)
        {

            $this->all_business_type_data_query($where);
            return $this->db->get()->num_rows();

        }

        public function get_business_type_data($id) {

            return $this->db->select('*')->where('id', $id)->get('business_type')->row_array();

        }

    }

?>