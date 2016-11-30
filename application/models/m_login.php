<?php


class M_login extends CI_Model 
{

    private $tablename = 'users';
	
	/**
     * login(array) 
     * @param  array $data_insert [ Has input's data]
     * @return array              [ Has user's data]
     */
     public function login($data_insert)
    {
		$this->db->where('email', $data_insert['email']);
        $this->db->where('password', $data_insert['password']);
        
        $get = $this->db->get($this->tablename);
        $get = $get->result_array();

        return $get;  
    }

    /**
     * Update_db(int, array)
     * @param [int]   $id   [ user's id]
     * @param [array] $data [ the new data]
     */
    public function Update_db($id,$data)
    {        
        $this->db->where("id",$id);
        
        $up = $this->db->update($this->tablename,$data);   
        return $up;
    }
}
