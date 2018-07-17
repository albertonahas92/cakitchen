<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends Public_Controller
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
    function index()
    {
        // setup page header data
        $this->set_title(sprintf(lang('welcome title'), $this->settings->site_name));

        $data = $this->includes;


        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;


        $this->load->model('Item_model');

        $this->load->model('Category_model');

//


//        $s_data['sub_title'] = $this->input->post('sub_title');
//
//
//        $data['items'] = $this->search_model->get_quick_list($s_data);
//         $this->load->helper(array('form', 'url'));
//


        $params['title'] = $this->input->get('title');
        $params['limit'] = 4;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('menu?');
        $config['total_rows'] = $this->Item_model->get_all_items_count();
        $this->pagination->initialize($config);

        $data['items'] = $this->Item_model->get_all_items($params);

        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language],
            'categories' => $this->Category_model->get_all_categories(),
            'items' => $data['items'],

        );


        // load views
        $data['content'] = $this->load->view('menu-list', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }

}
