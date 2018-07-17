<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MenuSingle extends Public_Controller
{

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();


        // load the language file
        $this->lang->load('welcome');


        $this->load->library('pagination');
        $this->load->helper('url');
    }


    /**
     * Default
     */
    function index($id)
    {
        $this->load->helper('url');
        // setup page header data
        $this->set_title(sprintf(lang('welcome title'), $this->settings->site_name));

        $data = $this->includes;
        $id = $this->input->get('id');

        $this->load->model('Item_model');

        $this->load->model('Category_model');


        $data['item'] = $this->Item_model->get_item($id);


        $this->load->model('item_attribute_model');
        $data['attributes'] = $this->item_attribute_model->get_item_attribute_by_item($id);


        $this->load->model('item_ingrident_model');

        $data['ingridents'] = $this->item_ingrident_model->get_item_ingrident_by_item($id);

        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language],
            'categories' => $this->Category_model->get_all_categories(),
            'item' => $data['item'],
            'attributes' => $data['attributes'],
            'ingridents' => $data['ingridents'],
        );


        // load views
        $data['content'] = $this->load->view('menu-single', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }


    function getItemAttributes()
    {
        $id = $this->input->get('id');
        $this->load->model('item_attribute_model');
        $data['attributes'] = $this->item_attribute_model->get_item_attribute_by_item($id);
        echo json_encode($data['attributes']);

    }

    function getItemIngrident()
    {
        $id = $this->input->get('id');
        $this->load->model('item_ingrident_model');

        $data['ingridents'] = $this->item_ingrident_model->get_item_ingrident_by_item($id);
        echo json_encode($data['ingridents']);

    }


}
