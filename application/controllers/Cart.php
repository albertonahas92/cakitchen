<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends Public_Controller
{

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();


        // load the language file
        $this->lang->load('welcome');

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


        $user = null;
        $step = $this->input->get('step');
        $plan = $this->input->get("plan");
        $program = null;

        $params['title'] = $this->input->get('title');
        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language],
            'step' => $step,
            'user' => $this->session->userdata('logged_in'),

        );


        // load views
        $data['content'] = $this->load->view('cart', $content_data, TRUE);
        return $this->load->view($this->template, $data);
    }

}
