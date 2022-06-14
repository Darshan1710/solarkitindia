<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCategory extends CI_Controller {

    public function subCategoryList(){
        $filter              = array('status'=>'1');
        $data['category']    = $this->AdminModel->getList('categories',$filter);
        $data['subcategory'] = $this->AdminModel->getSubCategoryList();
        $this->load->view('subcategory/subcategory',$data);
    }

    public function addSubCategory(){
        $this->form_validation->set_rules('category','Category','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('sub_category','Sub Category','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status','Status','required|trim|xss_clean|max_length[255]');
        if($this->form_validation->run()){
            $filter = array('category_id'=>$this->input->post('category'),
                            'sub_category'=>$this->input->post('sub_category'));
            $checkMenu = $this->AdminModel->getDetails('sub_categories',$filter);
            if($checkMenu){
                    $returnArr['errCode']                   = 3;
                    $returnArr['messages']['category']      = '<p class="error">Sub Category Already Exists</p>';
            }else{  
                    $data = array('category_id'   =>$this->input->post('category'),
                                  'sub_category'   =>$this->input->post('sub_category'),
                                  'status'          =>$this->input->post('status')
                              );

                    $addExperience = $this->AdminModel->insert('sub_categories',$data);

                    if($addExperience){
                        $returnArr['errCode']     = -1;
                        $returnArr['message']  = 'Sub Category Added Successfully';
                    }else{
                        $returnArr['errCode']     = 2;
                        $returnArr['message']  = 'Please try again';
                    }
            }
        }else{
            print_r(validation_errors());exit;
            $returnArr['errCode'] = 3;
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }
    public function editSubCategory(){
        $this->form_validation->set_rules('id','Id','required|trim|xss_clean|max_length[255]');
        if($this->form_validation->run()){
            $filter = array('id'=>$this->input->post('id'));
            $category = $this->AdminModel->getDetails('sub_categories',$filter);
            if($category){
                $returnArr['errCode']      = -1;
                $returnArr['data']         = $category;
            }else{
                $returnArr['errCode']     = 2;
                $returnArr['data']        = 'No data found';
            }
        }else{
            $returnArr['errCode'] = 3;
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }
    public function updateSubCategory(){
       $this->form_validation->set_rules('category','Category','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('sub_category','Sub Category','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status','Status','required|trim|xss_clean|max_length[255]');
        if($this->form_validation->run()){
           $filter = array('category_id !='=>$this->input->post('category'),
                            'sub_category'=>$this->input->post('sub_category'));

            $sub_category = $this->AdminModel->getDetails('sub_categories',$filter);
            if($sub_category){
                    $returnArr['errCode']               = 3;
                    $returnArr['message']['product']      = '<p class="error">Sub Category Already Exists</p>';
            }else{
                
                $filter     = array('id'=>$this->input->post('id'));
                 $data = array('category_id'   =>$this->input->post('category'),
                               'sub_category'   =>$this->input->post('sub_category'),
                               'status'          =>$this->input->post('status')
                              );
                $updateMenu = $this->AdminModel->update('sub_categories',$filter,$data);
                if($updateMenu){
                    $returnArr['errCode']     = -1;
                    $returnArr['message']     = 'Sub Category Updated Successfully';
                }else{
                    $returnArr['errCode']     = 2;
                    $returnArr['message']     = 'Please try again';
                }
            }
            
        }else{
            $returnArr['errCode'] = 3;
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
        }
        echo json_encode($returnArr);
    }

    public function getSubCategories(){
        $id = $this->input->post('id');
        $filter = array('category_id'=>$id);
        $sub_category = $this->AdminModel->getList('sub_categories',$filter);
        $data['sub_category'] = $sub_category;
        echo json_encode($data);
    }

    public function deleteSubCategory(){
        $this->form_validation->set_rules('id','Id','required');
        if($this->form_validation->run()){
            $id = $this->input->post('id');
            $filter = array('id'=>$id);
            $data   = array('status'=>'0');

            $p_filter = array('sub_category'=>$id);
            $this->AdminModel->update('products',$p_filter,$data);

            $update = $this->AdminModel->update('sub_categories',$filter,$data);

            if($update){
                $returnArr['error'] = false;
                $returnArr['message'] = 'Delete Successfully';
            }else{
                $returnArr['error'] = true;
                $returnArr['message'] = 'Please trya again';
            }
        }else{
            print_r(validation_errors());exit;
            $returnArr['error'] = true;
            $returnArr['message'] = 'Id is required';
        }
        echo json_encode($returnArr);

    }
}
