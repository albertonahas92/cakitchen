<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller
{

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();


        // load the language file
        $this->lang->load('welcome');
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

        $this->load->model('Home_slider_model');
        $this->load->model('Item_model');
        $this->load->model('Member_model');
        $this->load->model('Gallery_slider_model');
        $this->load->model('Testominal_model');
        $this->load->model('Category_model');
        $this->load->model('Program_model');
//

        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language],
            'home_slider' => $this->Home_slider_model->get_all_home_slider($params),
            'featured_menu' => $this->Item_model->get_featured_items(),
            'gallery' => $this->Gallery_slider_model->get_all_gallery_slider(),
            'testominals' => $this->Testominal_model->get_all_testominals(),
            'categories' => $this->Category_model->get_all_categories(),
            'members' => $this->Member_model->get_all_members(),
            'programs' => $this->Program_model->get_all_programs()
        );


        // load views
        $data['content'] = $this->load->view('welcome', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }

}
