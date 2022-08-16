<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Screw extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
    }

    public function getScrewList()
    {
        $data['screw'] = $this->ProductModel->getScrewList();
        $data['railType'] = $this->AdminModel->getList('rail_type');
        $data['panelPosition'] = $this->AdminModel->getList('panel_position');
        $data['height'] = $this->AdminModel->getList('height');
        $this->load->view('screw/screw', $data);
    }

    public function getScrew()
    {
        $this->form_validation->set_rules('rail_type_id', 'Rail Type Id', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('panel_position_id', 'Panel Position Id', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('roof_type_id', 'Roof Type Id', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('height_id', 'Height', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('rail_type_id' => $this->input->post('rail_type_id'),
                'panel_position_id' => $this->input->post('panel_position_id'),
                'roof_type_id'      => $this->input->post('roof_type_id'),
                'height_id'         => $this->input->post('height_id')
            );
            $data = $this->AdminModel->getList('screw', $filter);
            if ($data) {
                $returnArr['errCode'] = -1;
                $returnArr['message'] = $data;
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

    public function addScrew()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('file', '', 'callback_file_check');
        $this->form_validation->set_rules('short_description', 'Short Description', '');
        $this->form_validation->set_rules('rail_type_id', 'Rail Type', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('panel_position_id', 'Panel Position', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('height_id', 'Height', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('roof_type_id', 'Roof Type', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            
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
                'roof_type_id'      => $this->input->post('roof_type_id'),
                'height_id'         => $this->input->post('height_id')
            );

            $add = $this->AdminModel->insert('screw', $data);

            if ($add) {
                $returnArr['errCode'] = -1;
                $returnArr['message'] = 'Screw Added Successfully';
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

    public function editScrew()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id' => $this->input->post('id'));
            $data = $this->AdminModel->getDetails('screw', $filter);
            
            $railType = $this->AdminModel->getList('rail_type');
            
            $panel_filter = array('rail_type_id'=>$data['rail_type_id']);
            $panelPosition = $this->AdminModel->getList('panel_position',$panel_filter);

            $roofType_filter = array('rail_type_id'=>$data['rail_type_id'],
                                    'panel_position_id'=>$data['panel_position_id']);
            $roofType = $this->AdminModel->getList('roof_type',$roofType_filter);

            $height_filter = array('rail_type_id'=>$data['rail_type_id'],
                                   'panel_position_id'=>$data['panel_position_id'],
                                    'roof_type_id'    =>$data['roof_type_id']);
            $height = $this->AdminModel->getList('height',$height_filter);

            if ($data) {
                $returnArr['errCode'] = -1;
                $returnArr['data'] = $data;
                $returnArr['railType'] = $railType;
                $returnArr['panelPosition'] = $panelPosition;
                $returnArr['roofType'] = $roofType;
                $returnArr['height'] = $height;
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

    public function updateScrew()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description', 'Short Description', '');
        $this->form_validation->set_rules('rail_type_id', 'Rail Type', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('panel_position_id', 'Panel Position', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('height_id', 'Height', 'required|trim|xss_clean|max_length[255]');
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
                'roof_type_id'      => $this->input->post('roof_type_id'),
                'height_id'         => $this->input->post('height_id')
            );
            $update = $this->AdminModel->update('roof_type', $filter, $data);

            if ($update) {
                $returnArr['errCode'] = -1;
                $returnArr['message'] = 'Screw Updated Successfully';
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

    public function deleteScrew()
    {
        $this->form_validation->set_rules('id', 'Id', 'required');
        if ($this->form_validation->run()) {
            $id = $this->input->post('id');
            $filter = array('id' => $id);
            $data = array('status' => '0');
            $update = $this->AdminModel->update('roof_type', $filter, $data);

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
