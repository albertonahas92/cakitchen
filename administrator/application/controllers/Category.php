<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
    }

    /*
     * Listing of categories
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('category/index?');
        $config['total_rows'] = $this->Category_model->get_all_categories_count();
        $this->pagination->initialize($config);

        $data['categories'] = $this->Category_model->get_all_categories($params);

        $data['_view'] = 'category/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new category
     */
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {

            if(isset($_FILES['image'])){
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "2000",
                'max_width' => "3000"
            );
            $this->load->library('upload', $config);
            if (  $this->upload->do_upload('image'))
            {
                $data = array('upload_data' => $this->upload->data());

                // print_r($data);
            }
            else
            {

                $error = array('error' => $this->upload->display_errors());
                // echo print_r($error);
            }
        }
            $params = array(
                'title' => $this->input->post('title'),
                'image' => isset($_FILES['image'])?$_FILES['image']['name']:"default.jpg",
                'text' => $this->input->post('text'),

            );

            $category_id = $this->Category_model->add_category($params);
            redirect('category/index');
        }
        else
        {
            $data['_view'] = 'category/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a category
     */
    function edit($id)
    {
        // check if the category exists before trying to edit it
        $data['category'] = $this->Category_model->get_category($id);
        $image=$data['category']['image'];

        $new_upload=false;
        if(isset($data['category']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {

                if(isset($_FILES['image'])) {
                    $config = array(
                        'upload_path' => "./uploads/",
                        'allowed_types' => "gif|jpg|png|jpeg|pdf",
                        'overwrite' => TRUE,
                        'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                        'max_height' => "2000",
                        'max_width' => "3000"
                    );
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('image')) {
                        $data = array('upload_data' => $this->upload->data());
                        $new_upload=true;
                    } else {

                        $error = array('error' => $this->upload->display_errors());
                        echo print_r($error);
                    }
                }


                $params = array(
                    'title' => $this->input->post('title'),
                    'image' => ($new_upload==true)?$_FILES['image']['name']: $image,
                    'text' => $this->input->post('text'),
                );

                $this->Category_model->update_category($id,$params);
                redirect('category/index');
            }
            else
            {
                $data['_view'] = 'category/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The category you are trying to edit does not exist.');
    }

    /*
     * Deleting category
     */
    function remove($id)
    {
        $category = $this->Category_model->get_category($id);

        // check if the category exists before trying to delete it
        if(isset($category['id']))
        {
            $this->Category_model->delete_category($id);
            redirect('category/index');
        }
        else
            show_error('The category you are trying to delete does not exist.');
    }

}

