<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Testimonials extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function testimonialsList()
    {
        $data['testimonials'] = $this->AdminModel->getList('testimonials');
        $this->load->view('testimonials/testimonials.php', $data);
    }

    public function addTestimonials()
    {
        $this->form_validation->set_rules('review', 'review', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('review_by', 'Review By', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('review' => $this->input->post('review'));
            $checkMenu = $this->AdminModel->getDetails('testimonials', $filter);
            if ($checkMenu) {
                $returnArr['errCode'] = 3;
                $returnArr['messages']['link'] = '<p class="error">Review Already Exists</p>';
            } else {

                $data = array('review' => $this->input->post('review'),
                    'review_by' => $this->input->post('review_by'),
                    'status' => $this->input->post('status')
                );

                $add = $this->AdminModel->insert('testimonials', $data);

                if ($add) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Testimonial Added Successfully';
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

    public function editTestimonials()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id' => $this->input->post('id'));
            $category = $this->AdminModel->getDetails('testimonials', $filter);
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

    public function updateTestimonials()
    {
        $this->form_validation->set_rules('id', 'Id', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('review', 'Review', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('review_by', 'Review By', 'required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean|max_length[255]');
        if ($this->form_validation->run()) {
            $filter = array('id !=' => $this->input->post('id'),
                'review' => $this->input->post('review'));

            $experience = $this->AdminModel->getDetails('testimonials', $filter);
            if ($experience) {
                $returnArr['errCode'] = 3;
                $returnArr['message']['review'] = '<p class="error">Testimonials Already Exists</p>';
            } else {
                $filter = array('id' => $this->input->post('id'));
                $data = array('review' => $this->input->post('review'),
                    'review_by' => $this->input->post('review_by'),
                    'status' => $this->input->post('status')
                );
                $updateMenu = $this->AdminModel->update('testimonials', $filter, $data);
                if ($updateMenu) {
                    $returnArr['errCode'] = -1;
                    $returnArr['message'] = 'Testimonials Updated Successfully';
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

    public function deleteTestimonials()
    {
        $this->form_validation->set_rules('id', 'Id', 'required');
        if ($this->form_validation->run()) {
            $id = $this->input->post('id');
            $filter = array('id' => $id);
            $data = array('status' => '0');
            $update = $this->AdminModel->update('testimonials', $filter, $data);
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
