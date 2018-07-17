<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends API_Controller {

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
    }


    /**
     * Default
     */
    function index()
    {
        $this->lang->load('core');


        $this->load->model('users_model');

        // load the users language file
        $this->lang->load('users');

        $results['error'] = lang('core error no_results');
        display_json($results);
        exit;
    }


    /**
     * Users API - DO NOT LEAVE THIS ACTIVE IN A PRODUCTION ENVIRONMENT !!! - for demo purposes only
     */
    function users()
    {
        // load the users model and admin language file
        $this->load->model('users_model');
        $this->lang->load('admin');

        // get user data
        $users = $this->users_model->get_all();
        $results['data'] = NULL;

        if ($users)
        {
            // build usable array
            foreach($users['results'] as $user)
            {
                $results['data'][$user['id']] = array(
                    'name'   => $user['first_name'] . " " . $user['last_name'],
                    'email'  => $user['email'],
                    'status' => ($user['status']) ? lang('admin input active') : lang('admin input inactive')
                );
            }
            $results['total'] = $users['total'];
        }
        else
            $results['error'] = lang('core error no_results');

        // display results using the JSON formatter helper
        display_json($results);
        exit;
    }



    function loginAjax()
    {
        if ($this->session->userdata('logged_in'))
        {
            $logged_in_user = $this->session->userdata('logged_in');
            echo  $this->send($logged_in_user);
        }

        // set form validation rules
        $this->form_validation->set_error_delimiters($this->config->item('error_delimeter_left'), $this->config->item('error_delimeter_right'));
        $this->form_validation->set_rules('username', lang('users input username_email'), 'required|trim|max_length[256]');
        $this->form_validation->set_rules('password', lang('users input password'), 'required|trim|max_length[72]|callback__check_login');

        if ($this->form_validation->run() == TRUE)
        {
            echo  $this->send($logged_in_user);
        }
        $data['status']="error";
        // setup page header data
        $this->send($data['status']);
    }
    function registerAjax()
    {
//        // validators
//        $this->form_validation->set_error_delimiters($this->config->item('error_delimeter_left'), $this->config->item('error_delimeter_right'));
//        $this->form_validation->set_rules('username', lang('users input username'), 'required|trim|min_length[5]|max_length[30]|callback__check_username');
//        $this->form_validation->set_rules('first_name', lang('users input first_name'), 'required|trim|min_length[2]|max_length[32]');
//       // $this->form_validation->set_rules('last_name', lang('users input last_name'), 'required|trim|min_length[2]|max_length[32]');
//        $this->form_validation->set_rules('email', lang('users input email'), 'required|trim|max_length[256]|valid_email|callback__check_email');
//        //$this->form_validation->set_rules('language', lang('users input language'), 'required|trim');
//        $this->form_validation->set_rules('password', lang('users input password'), 'required|trim|min_length[5]');
//        $this->form_validation->set_rules('password_repeat', lang('users input password_repeat'), 'required|trim|matches[password]');
//
//        if ($this->form_validation->run() == TRUE)
//        {
//            // save the changes
//            $validation_code = $this->users_model->create_profile($this->input->post());
//
//            if ($validation_code)
//            {
//                // build the validation URL
//                $encrypted_email = sha1($this->input->post('email', TRUE));
//                $validation_url  = base_url('user/validate') . "?e={$encrypted_email}&c={$validation_code}";
//
//                // build email
//                $email_msg  = lang('core email start');
//                $email_msg .= sprintf(lang('users msg email_new_account'), $this->settings->site_name, $validation_url, $validation_url);
//                $email_msg .= lang('core email end');
//
//                // send email
//                $this->load->library('email');
//                $config['protocol'] = 'sendmail';
//                $config['mailpath'] = '/usr/sbin/sendmail -f' . $this->settings->site_email;
//                $this->email->initialize($config);
//                $this->email->clear();
//                $this->email->from($this->settings->site_email, $this->settings->site_name);
//                $this->email->reply_to($this->settings->site_email, $this->settings->site_name);
//                $this->email->to($this->input->post('email', TRUE));
//                $this->email->subject(sprintf(lang('users msg email_new_account_title'), $this->input->post('first_name', TRUE)));
//                $this->email->message($email_msg);
//                $this->email->send();
//                #echo $this->email->print_debugger();
//
//                $this->session->language = $this->input->post('language');
//                $this->lang->load('users', $this->user['language']);
//                $this->session->set_flashdata('message', sprintf(lang('users msg register_success'), $this->input->post('first_name', TRUE)));
//            }
//            else
//            {
//                $this->session->set_flashdata('error', lang('users error register_failed'));
//                $message["status"]=0;
//                echo json_encode(  $message["status"]);
//
//            }
//            $message["status"]=1;
//            // redirect home and display message
//            echo json_encode(  $message["status"]);
//         //   redirect(base_url());
//        }
//
//        // setup page header data
//        $this->set_title(lang('users title register'));
//
//        $data = $this->includes;
//
//        // set content data
//        $content_data = array(
//            'cancel_url'        => base_url(),
//            'user'              => NULL,
//            'password_required' => TRUE
//        );
//
//        // load views
//        $data['content'] = $this->load->view('user/profile_form', $content_data, TRUE);
//        echo json_encode($content_data);
        $this->send("hello");
    }

}
