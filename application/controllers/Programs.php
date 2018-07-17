<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Programs extends Public_Controller
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

        $this->load->model('Program_model');


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
            'programs' => $this->Program_model->get_all_programs(),
            'items' => $data['items'],

        );


        // load views
        $data['content'] = $this->load->view('programs', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }


    function getProgramPricing()
    {
        $id = $this->input->get('id');
        $this->load->model('Program_pricing_model');

        $data['items'] = $this->Program_pricing_model->get_program_pricing_by_program($id);
        echo json_encode($data['items']);

    }


    function getProgramItems()
    {
        $id = $this->input->get('id');
        $this->load->model('Program_item_model');

        $data['items'] = $this->Program_item_model->get_program_item_by_program($id);
        echo json_encode($data['items']);

    }

    function getProgram()
    {
        $id = $this->input->get('id');
        $this->load->model('Program_model');

        $data['program'] = $this->Program_model->get_program($id);
        echo json_encode($data['program']);

    }




    function loadPrograms(){


       $this->load->model('Program_model');


        $data['items'] = $this->Program_model->get_all_programs();

        // set content data

        echo json_encode($data['items']);

    }


}
