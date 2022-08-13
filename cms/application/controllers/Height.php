<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Height extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
    }

    public function getHeightList()
    {
        $data['height'] = $this->ProductModel->getHeightList();
        $data['railType'] = $this->AdminModel->getList('rail_type');
        $data['panelPosition'] = $this->AdminModel->getList('panel_position');
        $data['roofType'] = $this->AdminModel->getList('roof_type');
        $this->load->view('height/height', $data);
    }

    public function addHeight()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('file', '', 'callback_file_check');
        $this->form_validation->set_rules('short_description', 'Short Description', '');
        $this->form_validation->set_rules('rail_type_id', 'Rail Type', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('panel_position_id', 'Panel Position', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('roof_type_id', 'Roof Type', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('name' => $this->input->post('name'));
            $checkExist = $this->AdminModel->getDetails('roof_type', $filter);

            
                if(isset($_FILES)){
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

                $data = array('name' => $this->input->post('name'),
                    'image' => $image,
                    'short_description' => $this->input->post('short_description'),
                    'rail_type_id' => $this->input->post('rail_type_id'),
                    'panel_position_id' => $this->input->post('panel_position_id'),
                    'roof_type_id' => $this->input->post('roof_type_id')
                );

                $add = $this->AdminModel->insert('height', $data);

                if ($add) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Height Added Successfully';
                } else {
                    $returnArr['errCode'] = 2;
                    $returnArr['message'] = 'Please try again';
                }

        } else {
            $returnArr['errCode'] = 3;
            $returnArr['message']['file'] = form_error('file');
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }

    public function editHeight()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id' => $this->input->post('id'));
            $category = $this->AdminModel->getDetails('height', $filter);

            if ($category) {
                $returnArr['errCode'] = -1;
                $returnArr['data'] = $category;
            } else {
                $returnArr['errCode'] = 2;
                $returnArr['data'] = 'No data found';
            }
        } else {
            $returnArr['errCode'] = 3;
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }

    public function updateHeight()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description', 'Short Description', '');
        $this->form_validation->set_rules('rail_type_id', 'Rail Type', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('panel_position_id', 'Panel Position', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('roof_type_id', 'Roof Type', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id !=' => $this->input->post('id'),
                'name' => $this->input->post('name'));


                if (isset($_FILES) && !empty($_FILES)) {
                    $upload = upload_image($_FILES, 'file');

                    if ($upload['errCode'] == -1) {
                        $image = $upload['image'];
                    } else {
                        $returnArr['errCode'] = 3;
                        $returnArr['message']['image'] = '<p class="error">' . strip_tags($upload['image']) . '</p>';;
                        echo json_encode($returnArr);
                        die();
                    }
                } else {
                    $image = $this->input->post('old_image');
                }

                $filter = array('id' => $this->input->post('id'));
                $data = array('name' => $this->input->post('name'),
                    'image' => $image,
                    'short_description' => $this->input->post('short_description'),
                    'rail_type_id' => $this->input->post('rail_type_id'),
                    'panel_position_id' => $this->input->post('panel_position_id'),
                    'roof_type_id' => $this->input->post('roof_type_id')
                );
                $update = $this->AdminModel->update('height', $filter, $data);

                if ($update) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Height Updated Successfully';
                } else {
                    $returnArr['errCode'] = 2;
                    $returnArr['message'] = 'Please try again';
                }

        } else {
            $returnArr['errCode'] = 3;
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }

    public function file_check($str)
    {
        $allowed_mime_type_arr = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/pdf', 'image/gif', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
        $mime = get_mime_by_extension($_FILES['file']['name']);
        if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png/csv file.');
                return false;
            }
        } else {

            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }

    public function deleteHeight()
    {
        $this->form_validation->set_rules('id', 'Id', 'required');
        if ($this->form_validation->run()) {
            $id = $this->input->post('id');
            $filter = array('id' => $id);
            $data = array('status' => '0');
            $update = $this->AdminModel->update('height', $filter, $data);

            if ($update) {
                $returnArr['error'] = false;
                $returnArr['message'] = 'Delete Successfully';
            } else {
                $returnArr['error'] = true;
                $returnArr['message'] = 'Please try again';
            }
        } else {
            $returnArr['error'] = true;
            $returnArr['message'] = 'Id is required';
        }
        echo json_encode($returnArr);

    }

}
