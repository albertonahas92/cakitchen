<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends Public_Controller
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

        $params['title'] = $this->input->get('title');
        $this->load->model('Program_model');
        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language],
            'programs' => $this->Program_model->get_all_programs()


        );


        // load views
        $data['content'] = $this->load->view('pricing', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }

}
