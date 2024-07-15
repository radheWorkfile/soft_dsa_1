<?php
class Dashboard_model  extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function designation_data_query($where = false)
    {
        $field = array(
            'des.designation'
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

        $this->db->select('des.id,des.designation,des.description')->from('designation as des');


        if (isset($where['order']) && !empty($where['order'])) {
            $this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
        } else {
            $this->db->order_by('id', 'desc');
        }
    }

    public function designation_data($where = false)
    {
        $this->designation_data_query($where);

        if ($where['length'] != -1) {
            $this->db->limit($where['length'], $where['start']);
        }
        return $this->db->get()->result();
    }

    public function designation_data_total_count($where = false)
    {
        $this->designation_data_query($where);
        return $this->db->get()->num_rows();
    }

    public function designation_data_total_filter_count($where = false)
    {
        $this->designation_data_query($where);
        return $this->db->get()->num_rows();
    }

}
