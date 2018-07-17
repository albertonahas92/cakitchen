<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramSingle extends Public_Controller
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

        $this->load->model('Program_model');


        $data['program'] = $this->Program_model->get_program($id);


        $this->load->model('Program_pricing_model');

        $data['pricings'] = $this->Program_pricing_model->get_program_pricing_by_program($id);


        $this->load->model('Program_item_model');

        $data['items'] = $this->Program_item_model->get_program_item_by_program($id);


        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language],

            'program' => $data['program'],
            'pricings' => $data['pricings'],
            'items' => $data['items'],

        );


        // load views
        $data['content'] = $this->load->view('program-single', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }


}
