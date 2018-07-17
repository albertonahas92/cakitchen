<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Calendar_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get calendar by id
     */
    function get_calendar($id)
    {
        return $this->db->get_where('calendar',array('id'=>$id))->row_array();
    }


    /*Get calendar By Title*/
    function get_calendar_by_title($title)
    {
        $this->db->order_by('title', 'DESC');
        $this->db->like("title", $title);
        return $this->db->get('calendar')->result_array();
    }


    /*
     * Get all calendar count
     */
    function get_all_calendar_count()
    {
        $this->db->from('calendar');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all calendar
     */
    function get_all_calendar($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('calendar')->result_array();
    }
        
    /*
     * function to add new calendar
     */
    function add_calendar($params)
    {
        $this->db->insert('calendar',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update calendar
     */
    function update_calendar($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('calendar',$params);
    }
    
    /*
     * function to delete calendar
     */
    function delete_calendar($id)
    {
        return $this->db->delete('calendar',array('id'=>$id));
    }
}
