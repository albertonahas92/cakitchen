<?php

/*
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Item_attribute_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get item_attribute by id
     */
    function get_item_attribute($id)
    {
        return $this->db->get_where('item_attributes', array('id' => $id))->row_array();
    }


    function get_item_attribute_by_item($id)
    {

        return $this->db->query('SELECT attributes.id,attributes.title,attributes.unit,item_attributes.value as daily,item_attributes.item_id  from attributes
 INNER JOIN item_attributes ON attributes.id=item_attributes.attribute_id 
WHERE attributes.id IN (SELECT  attribute_id FROM `item_attributes` where item_id=' . $id . ')
AND item_attributes.item_id =' . $id)->result_array();

    }

    /*
     * Get all item_attributes count
     */
    function get_all_item_attributes_count()
    {
        $this->db->from('item_attributes');
        return $this->db->count_all_results();
    }

    /*
     * Get all item_attributes
     */
    function get_all_item_attributes($params = array())
    {
        $this->db->order_by('id', 'desc');
        if (isset($params) && !empty($params)) {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('item_attributes')->result_array();
    }

    /*
     * function to add new item_attribute
     */
    function add_item_attribute($params)
    {
        $this->db->insert('item_attributes', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update item_attribute
     */
    function update_item_attribute($id, $params)
    {
        $this->db->where('id', $id);
        return $this->db->update('item_attributes', $params);
    }

    /*
     * function to delete item_attribute
     */
    function delete_item_attribute($id)
    {
        return $this->db->delete('item_attributes', array('id' => $id));
    }
}
