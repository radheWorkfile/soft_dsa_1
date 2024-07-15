<?php
class Dashboard_model  extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_customer_data($id) {

        $this->db->select('cd.id, cd.status, cd.reason');
        $this->db->where('cd.id', $id);
        $customer = $this->db->get('customer_document as cd');
        return $customer->row_array();

    }

}
