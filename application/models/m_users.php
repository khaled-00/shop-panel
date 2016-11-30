<?php


class M_users extends CI_Model 
{   
    
    /**
     *     
     */
    public function insert_user($data)
    {
        $insert = $this->db->insert('users', $data);

        return $insert;
    }
	
    /**
     *     
     */
     public function show_user()
    {
        $this->db->select('*');
        $this->db->from('users');

        $this->db->order_by('id','desc');
        $get = $this->db->get();

        return $get->result();
    }

    /**
     *     
     */
    public function Delet_user($id)
    {
        // Delete row from 'product' table
        $d1 = $this->db->delete('users', array('id' => $id));
        if (!$d1) 
            return FALSE;

        return TRUE;
    }
}
