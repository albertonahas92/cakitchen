<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Item_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get item by id
     */
    function get_item($id)
    {
        return $this->db->get_where('items',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all items count
     */
    function get_all_items_count()
    {
        $this->db->from('items');
        return $this->db->count_all_results();
    }



    public  function get_quick_list($s_data)
    {
//        $this->db->select('td.*, ts.*');
//    $this->db->from('items as td');
//    $this->db->join('item_attributes as ts', 'ts.spec_id = td.spec_id','left');
//
//    if($s_data['sepcli'] !="")
//        $this->db->like('ts.spec_specialise',$s_data['sepcli'],'both');
//    if($s_data['distct'] !="")
//        $this->db->like('td.district',$s_data['distct'],'both');
//    if($s_data['locat'] !="")
//        $this->db->like('td.place', $s_data['locat'], 'both');

        $this->db->select('td.*');
        $this->db->from('items as td');

        if($s_data['title'] !="")
            $this->db->like('td.title',$s_data['title'],'both');
        if($s_data['distct'] !="")
            $this->db->like('td.sub_title',$s_data['sub_title'],'both');


    $query=$this->db->get('items')->result_array();
    return $query;
}

        
    /*
     * Get all items
     */
    function get_all_items($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);

            if(isset($params['title'])){
                $this->db->like("title",$params['title']);
            }
        }

        return $this->db->get('items')->result_array();
    }


    /*
    * Get all items
    */
    function get_featured_items($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get_where('items',array('is_featured'=>1))->result_array();
    }


    /*Get Item By Title*/
    function get_item_by_title($title)
    {
        $this->db->order_by('title', 'DESC');
        $this->db->like("title", $title);
        return $this->db->get('items')->result_array();
    }

        
    /*
     * function to add new item
     */
    function add_item($params)
    {
        $this->db->insert('items',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update item
     */
    function update_item($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('items',$params);
    }
    
    /*
     * function to delete item
     */
    function delete_item($id)
    {
        return $this->db->delete('items',array('id'=>$id));
    }
}
