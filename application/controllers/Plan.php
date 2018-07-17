<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends Public_Controller
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
        $this->load->model('Program_model');
        $data = $this->includes;


        $user = null;
        $step = $this->input->get('step');
        $plan = $this->input->get("plan");
        $program = null;


        if(isset($step) && $step==4 ){
            $this->load->model('Program_order_model');
            $params = array(
                'program_pricing_id' => $plan,
                'user_id' => $this->session->userdata('logged_in')['id']


            );

            $order_id = $this->Program_order_model->add_program_order($params);
            redirect(base_url());
        }

        if ((isset($step) || $this->session->userdata('logged_in')) && $step != 1) {


            if (isset($plan)) {
                $step = 3;

                $this->load->model('Program_pricing_model');
                $plan = $this->Program_pricing_model->get_program_pricing($plan);
                $program = $this->Program_model->get_program($plan['program_id']);
            } else {
                $step = 2;
            }

        } else {
            $step = 1;
        }


        $params['title'] = $this->input->get('title');
        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language],
            'step' => $step,
            'programs' => $this->Program_model->get_all_programs(),
            'program' => $program,
            'user' => $this->session->userdata('logged_in'),
            'plan' => $plan
        );


        // load views
        $data['content'] = $this->load->view('choose-plan', $content_data, TRUE);
        return $this->load->view($this->template, $data);
    }

}
