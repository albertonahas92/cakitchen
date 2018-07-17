<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Program_pricing_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get program_pricing by id
     */
    function get_program_pricing($id)
    {
        return $this->db->get_where('program_pricing',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all program_pricing
     */
    function get_all_program_pricing()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('program_pricing')->result_array();
    }
    
    
    /*get_program_pricing_by_program*/

    function get_program_pricing_by_program($id)
    {



 //       $this->db->get_where('program_pricing', array('program_id' => $id));
        $this->db->order_by("weeks", "asc", "price", "asc");
        $query = $this->db->get_where('program_pricing', array('program_id' => $id));
        return $query->result_array();
    }

    /*
     * function to add new program_pricing
     */
    function add_program_pricing($params)
    {
        $this->db->insert('program_pricing',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update program_pricing
     */
    function update_program_pricing($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('program_pricing',$params);
    }
    
    /*
     * function to delete program_pricing
     */
    function delete_program_pricing($id)
    {
        return $this->db->delete('program_pricing',array('id'=>$id));
    }
}
