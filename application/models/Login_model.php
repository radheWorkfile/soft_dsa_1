<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function can_login($email, $password)
    {

        $this->db->select('u.*, a.id as agent_ids');
        $this->db->where('BINARY u.email =', "'" . $email . "'", false)->where('BINARY u.password =', "'" . md5($password) . "'", false)->where('u.status', '1');
        $this->db->join('agent as a', 'u.agent_id = a.agent_id', 'left');
        $output =  $this->db->get('users as u')->result_array();
        if (!empty($output)) {
            return $output;
        } else return array();

    }
    
    function system_config()
    {
        $this->db->select('*');
        $query = $this->db->get('system_config');
        $config = $query->result_array();
        return $config;
    }

    function get_department()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('department');
        return $query->result_array();
    }

    function get_date_gmt_ist($format)
    {
        $ist_date = date($format, mktime(date('H'), date('i'), date('s'), date("m"), date("d"), date("Y")));
        return $ist_date;
    }
    function checkoldPass($user_id, $array)
    {
        return $this->db->where(array('id' => $user_id, 'password' => md5($array['old_password'])))->count_all_results('users');
    }
    function changePass($user_id, $array)
    {
        $this->db->where('id', $user_id)->update('users', array('password' => md5($array['newpassword'])));
        //echo $this->db->last_query();
    }

    function login_access($id)
    {
        // $this->db->select('u.*, a.id as agent_ids');
        $this->db->where('id', $id);
        // $this->db->join('agent as a', 'a.created_by_user_type_id = u.id', 'left');
        $output =  $this->db->get('users')->result_array();
        if (!empty($output)) {
            return $output;
        } else return array();
    }

    public function log_add($data)
    {
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('userlog', $data);
        } else {
            $this->db->insert('userlog', $data);
        }
    }

    public function forgotPass($table,$con,$data)
    {
       return $this->db->select($data)->where($con)->get($table)->row_array();
    }
}
