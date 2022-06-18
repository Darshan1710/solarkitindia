<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function videoList()
    {
        $data['video'] = $this->AdminModel->getList('video');
        $this->load->view('video/video', $data);
    }

    public function addVideo()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('link', 'Link', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('link' => $this->input->post('link'));
            $checkMenu = $this->AdminModel->getDetails('video', $filter);
            if ($checkMenu) {
                $returnArr['errCode'] = 3;
                $returnArr['messages']['link'] = '<p class="error">Video Already Exists</p>';
            } else {

                $data = array('name' => $this->input->post('name'),
                    'link' => $this->input->post('link'),
                    'status' => $this->input->post('status')
                );

                $add = $this->AdminModel->insert('video', $data);

                if ($add) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Video Added Successfully';
                } else {
                    $returnArr['errCode'] = 2;
                    $returnArr['message'] = 'Please try again';
                }
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

    public function editVideo()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id' => $this->input->post('id'));
            $category = $this->AdminModel->getDetails('video', $filter);
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

    public function updateVideo()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('link', 'Link', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id !=' => $this->input->post('id'),
                'link' => $this->input->post('link'));

            $experience = $this->AdminModel->getDetails('video', $filter);
            if ($experience) {
                $returnArr['errCode'] = 3;
                $returnArr['message']['link'] = '<p class="error">Video Already Exists</p>';
            } else {
                $filter = array('id' => $this->input->post('id'));
                $data = array('name' => $this->input->post('name'),
                    'link' => $this->input->post('link'),
                    'status' => $this->input->post('status')
                );
                $updateMenu = $this->AdminModel->update('video', $filter, $data);
                if ($updateMenu) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Video Updated Successfully';
                } else {
                    $returnArr['errCode'] = 2;
                    $returnArr['message'] = 'Please try again';
                }
            }

        } else {
            $returnArr['errCode'] = 3;
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }

    public function deleteVideo()
    {
        $this->form_validation->set_rules('id', 'Id', 'required');
        if ($this->form_validation->run()) {
            $id = $this->input->post('id');
            $filter = array('id' => $id);
            $data = array('status' => '0');
            $update = $this->AdminModel->update('video', $filter, $data);
            if ($update) {
                $returnArr['error'] = false;
                $returnArr['message'] = 'Delete Successfully';
            } else {
                $returnArr['error'] = true;
                $returnArr['message'] = 'Please try again';
            }
        } else {
            print_r(validation_errors());
            exit;
            $returnArr['error'] = true;
            $returnArr['message'] = 'Id is required';
        }
        echo json_encode($returnArr);

    }

}
