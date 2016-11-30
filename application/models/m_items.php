<?php


class M_items extends CI_Model 
{
	
	/**
     *     
     */
     public function insert_product($data)
    {
        $insert = $this->db->insert('product', $data);

		return $insert;
    }

    /**
     *     
     */
     public function insert_size($data)
    {
        $insert = $this->db->insert('product_size', $data);

        return $insert;
    }

    /**
     *     
     */
     public function insert_color($data)
    {
        $insert = $this->db->insert('product_color', $data);

        return $insert;
    }

    /**
     *     
     */
     public function join_product_size_color()
    {
        //join
        $this->db->select('*');
        $this->db->from('product');

        $this->db->join('product_size',  'product.id = product_size.product_id');
        $this->db->join('product_color', 'product.id = product_color.product_id');

        $this->db->order_by('product.id','desc');
        $get = $this->db->get();

        return $get->result();
    }

    /**
     *     
     */
    public function Delet_product_size_color($id)
    {
        // Delete row from 'product' table
        $d1 = $this->db->delete('product', array('id' => $id));
        if (!$d1) 
            return FALSE;

        // Delete row from 'product_size' table
        $d2 = $this->db->delete('product_size' , array('product_id' => $id));
         if (!$d2) 
            return FALSE;

        // Delete row from 'product_color' table
        $d3 = $this->db->delete('product_color', array('product_id' => $id)); 
        if (!$d3) 
            return FALSE;

        return TRUE;
    }
}
