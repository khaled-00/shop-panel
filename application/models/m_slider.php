<?php


class M_slider extends CI_Model 
{
    public function insert_slide($data)
    {
        $insert = $this->db->insert('slider', $data);

        return $insert;
    }
	
    /**
     *     
     */
     public function show_slides()
    {
        $this->db->select('*');
        $this->db->from('slider');

        $this->db->order_by('id','desc');
        $get = $this->db->get();

        return $get->result();
    }

    /**
     *     
     */
    public function Delet_slide($id)
    {
        // Delete row from 'product' table
        $d1 = $this->db->delete('slider', array('id' => $id));
        if (!$d1) 
            return FALSE;

        return TRUE;
    }
}
