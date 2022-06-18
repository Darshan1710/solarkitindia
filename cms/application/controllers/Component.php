<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Component extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function getComponentList()
    {
        $filter = array('status' => '1');
        $components = $this->AdminModel->getList('sub_products', $filter);
        if ($components) {
            $returnArr['errCode'] = -1;
            $returnArr['message'] = $components;
        } else {
            $returnArr['errCode'] = 2;
            $returnArr['message'] = 'No products found';
        }
        echo json_encode($returnArr);
    }

    public function getComponentDetails()
    {
        $id = $this->input->post('id');

        $filter = array('status' => '1', 'p.id' => $id);
        $components = $this->ComponentModel->getComponentData($filter);

        if ($components) {
            $returnArr['errCode'] = -1;
            $returnArr['message'] = $components;
        } else {
            $returnArr['errCode'] = 2;
            $returnArr['message'] = 'No products found';
        }
        echo json_encode($returnArr);
    }

    public function componentList()
    {
        $this->load->view('component/componentList.php');
    }

    public function getComponentListDetails()
    {
        $data = $row = array();

        // Fetch member's records
        $memData = $this->ComponentModel->getComponentDetailsRows($_POST);
       // echo $this->db->last_query();exit;
        $i = $_POST['start'];
        foreach ($memData as $member) {

            $i++;


            $action = '<td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="' . base_url() . 'Component/editComponent/' . $member->component_id . '" id="' . $member->component_id . '"><i class="icon-file-pdf"></i> Edit</a></li>
                                    <li><a  id="' . $member->component_id . '" class="delete" data-table="' . $hash = $this->encryption->encrypt('sub_products') . '"><i class="icon-file-excel"></i> Delete</a></li>
                                    <li><a href="' . base_url() . 'ImageController/gallery/' . $member->component_id . '/3"><i class="icon-file-excel"></i> Add Images</a></li>
                                </ul>
                            </li>
                        </ul>
                        </td>';

            $image = '<img src="' . base_url() . $member->thumbnail . '" width="50px" height="50px">';

            $status = $member->status == '1' ? '<button class="btn btn-success btn-sm">Active</button>' : '<button class="btn btn-danger btn-sm">Inactive</button>';

            $data[] = array(
                $i,
                $image,
                $member->title,
                $member->category,
                $status,
                date('d-m-Y h:i A', strtotime($member->created_at)),
                $action
            );
        }


        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->ComponentModel->countAllComponentDetails(),
            "recordsFiltered" => $this->ComponentModel->countFilteredComponentDetails($_POST),
            "data" => $data,
        );

        // Output to JSON format
        echo json_encode($output);
    }

    public function componentForm(){
        $filter = array('status'=>'1');
        $data['category'] = $this->AdminModel->getList('category',$filter);
        $this->load->view('component/componentForm.php',$data);
    }

    public function addComponent()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description', 'Short Description', '');
        $this->form_validation->set_rules('long_description', 'Long Description', '');
        $this->form_validation->set_rules('file', '', 'callback_file_check');
        $this->form_validation->set_rules('category', 'Category', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('tags', 'Tags', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('title' => $this->input->post('title'));

            $exist = $this->AdminModel->getDetails('sub_products', $filter);
            if ($exist) {
                $returnArr['errCode'] = 3;
                $returnArr['message']['product_name'] = '<p class="error">Component Already Exists</p>';
            } else {

                if (isset($_FILES)) {
                    $upload = upload_image($_FILES, 'file');

                    if ($upload['errCode'] == -1) {
                        $image = $upload['image'];
                    } else {
                        $returnArr['errCode'] = 3;
                        $returnArr['message']['image'] = $upload['image'];
                        echo json_encode($returnArr);
                        exit;
                    }
                } else {
                    $image = '';
                }

                $data = array('title' => $this->input->post('title'),
                    'short_description' => $this->input->post('short_description'),
                    'long_description' => $this->input->post('long_description'),
                    'category_id' => $this->input->post('category'),
                    'thumbnail' => $image,
                    'tags' => $this->input->post('tags'),
                    'status' => $this->input->post('status')
                );

                $id = $this->AdminModel->insert('sub_products', $data);

                if ($id) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Success';
                } else {
                    $returnArr['errCode'] = 2;
                    $returnArr['message'] = 'Please try again';
                }
            }
        } else {
            print_r(validation_errors());exit;
            $returnArr['errCode'] = 3;
            $returnArr['message']['file'] = form_error('file');
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }

        }
        echo json_encode($returnArr);
    }

    public function editComponent()
    {
        $c_filter = array('status' => '1');
        $data['category'] = $this->AdminModel->getList('category', $c_filter);

        $filter = array('id' => $this->uri->segment(3));
        $data['component'] = $this->AdminModel->getDetails('sub_products', $filter);

        $this->load->view('component/editComponent', $data);

    }

    public function updateComponent()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description', 'Short Description', '');
        $this->form_validation->set_rules('long_description', 'Long Description', '');
        $this->form_validation->set_rules('category', 'Category', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('tags', 'Tags', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id !=' => $this->uri->segment(3),
                'title' => $this->input->post('title'));

            $exists = $this->AdminModel->getDetails('sub_products', $filter);

            if ($exists) {
                $returnArr['errCode'] = 3;
                $returnArr['message']['product_name'] = '<p class="error">Product Already Exists</p>';
            } else {
                if (isset($_FILES) && !empty($_FILES)) {
                    $upload = upload_image($_FILES, 'image');

                    if ($upload['errCode'] == -1) {
                        $image = $upload['image'];
                    } else {
                        $returnArr['errCode'] = 3;
                        $returnArr['message']['image'] = $upload['image'];
                        echo json_encode($returnArr);
                        exit;
                    }
                } else {
                    $image = $this->input->post('old_image');
                }

                $filter = array('id' => $this->uri->segment(3));
                $data = array('title' => $this->input->post('title'),
                    'short_description' => $this->input->post('short_description'),
                    'long_description' => $this->input->post('long_description'),
                    'category_id' => $this->input->post('category'),
                    'thumbnail' => $image,
                    'tags' => $this->input->post('tags'),
                    'status' => $this->input->post('status')
                );


                $update = $this->AdminModel->update('sub_products', $filter, $data);
                // echo $this->db->last_query();exit;
                if ($update) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Component Updated Successfully';
                } else {
                    $returnArr['errCode'] = 2;
                    $returnArr['message'] = 'Please try again';
                }
            }
        } else {
            print_r(validation_errors());
            $returnArr['errCode'] = 3;
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }

    public function file_check($str){
        $allowed_mime_type_arr = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain','application/pdf','image/gif','image/jpeg','image/pjpeg','image/png','image/x-png','image/jpg');
        $mime = get_mime_by_extension($_FILES['file']['name']);
        if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png/csv file.');
                return false;
            }
        }else{

            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }

}
