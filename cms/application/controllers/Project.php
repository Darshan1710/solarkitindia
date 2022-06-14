<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function getProjectList(){
        $filter = array('status'=>'1');
        $project = $this->AdminModel->getList('project',$filter);
        if($project){
            $returnArr['errCode'] = -1;
            $returnArr['message'] = $project;
        }else{
            $returnArr['errCode'] = 2;
            $returnArr['message'] = 'No products found';
        }
        echo json_encode($returnArr);
    }
    public function getProjectDetails(){
        $id = $this->input->post('id');

        $filter = array('status'=>'1','p.id'=>$id);
        $products = $this->AdminModel->getProductData($filter);

        if($products){
            $returnArr['errCode'] = -1;
            $returnArr['message'] = $products;
        }else{
            $returnArr['errCode'] = 2;
            $returnArr['message'] = 'No products found';
        }
        echo json_encode($returnArr);
    }
    public function projectList(){
        $filter = array('status'=>'1');
        $data['projects'] = $this->AdminModel->getList('projects',$filter);
        $this->load->view('project/projectList',$data);
    }
    public function getProjectListDetails(){
        $data = $row = array();

        // Fetch member's records
        $memData = $this->ProjectModel->getProjectDetailsRows($_POST);
        // echo $this->db->last_query();exit;
        $i = $_POST['start'];
        foreach($memData as $member){

            $i++;


            $action = '<td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="'.base_url().'Project/editProject/'.$member->project_id.'" id="'.$member->project_id.'"><i class="icon-file-pdf"></i> Edit</a></li>
                                    <li><a  id="'.$member->project_id.'" class="delete" data-table="'.$hash = $this->encryption->encrypt('projects').'"><i class="icon-file-excel"></i> Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                        </td>';

            $image = '<img src="'.base_url().$member->image.'" width="50px" height="50px">';

            $status = $member->status == '1' ? '<button class="btn btn-success btn-sm">Active</button>' : '<button class="btn btn-danger btn-sm">Inactive</button>';


            $data[] = array(
                $i,
                $image,
                $member->title,
                $status,
                date('d-m-Y h:i A',strtotime($member->created_at)),
                $action
            );
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->ProjectModel->countAllProjectDetails(),
            "recordsFiltered" => $this->ProjectModel->countFilteredProjectDetails($_POST),
            "data" => $data,
        );

        // Output to JSON format
        echo json_encode($output);
    }
    public function projectForm(){
        $this->load->view('project/projectForm');
    }
    public function addProject(){

        $this->form_validation->set_rules('title','Title','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('tags','Tags','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status','Status','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description','Short Description','');
        $this->form_validation->set_rules('long_description','Long Description','');
        if($this->form_validation->run()){
            $filter = array('title'=>$this->input->post('title'));

            $checkExists = $this->AdminModel->getDetails('projects',$filter);
            if($checkExists){
                $returnArr['errCode']               = 3;
                $returnArr['message']['product_name']      = '<p class="error">Products Already Exists</p>';
            }else{

                if(isset($_FILES)){
                    $upload = upload_image($_FILES,'file');

                    if($upload['errCode'] == -1){
                        $image = $upload['image'];
                    }else{
                        $returnArr['errCode']      = 3;
                        $returnArr['message']['image']      = $upload['image'];
                        echo json_encode($returnArr);exit;
                    }
                }else{
                    $image = '';
                }

                $data = array('title'=>$this->input->post('title'),
                    'tags'  =>$this->input->post('tags'),
                    'image' => $image,
                    'short_description'=>$this->input->post('short_description'),
                    'long_description' =>$this->input->post('long_description'),
                    'status'      =>$this->input->post('status')
                );

                $id = $this->AdminModel->insert('projects',$data);

                if($id){
                    $returnArr['errCode']     = -1;
                    $returnArr['message']  = 'Success';
                }else{
                    $returnArr['errCode']     = 2;
                    $returnArr['message']  = 'Please try again';
                }
            }
        }else{
           // print_r(validation_errors());exit;
            $returnArr['errCode'] = 3;
            $returnArr['message']['file'] = form_error('file');
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }

        }
        echo json_encode($returnArr);
    }
    public function imageUpload(){
        if(isset($_FILES)){
            $upload = upload_image($_FILES,'upload');

            if($upload['errCode'] == -1){
                $url = base_url().$upload['image'];
            }else{
                $url = $upload['image'];
            }
        }else{
            $url = '';
        }

        echo json_encode(array('url'=>$url));
    }
    public function editProject(){
        $filter = array('id'=>$this->uri->segment(3));
        $data['projects'] = $this->AdminModel->getDetails('projects',$filter);
        $this->load->view('project/editProject',$data);

    }
    public function updateProject(){
        $this->form_validation->set_rules('title','Title','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('tags','Tags','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status','Status','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description','Short Description','');
        $this->form_validation->set_rules('long_description','Long Description','');
        if($this->form_validation->run()){
            $filter = array('id !='=>$this->input->post('id'),
                'title'=>$this->input->post('title'));

            $projectData = $this->AdminModel->getDetails('projects',$filter);

            if($projectData){
                $returnArr['errCode']               = 3;
                $returnArr['message']['title']      = '<p class="error">Project Already Exists</p>';
            }else{
                if(isset($_FILES) && !empty($_FILES)){
                    $upload = upload_image($_FILES,'file');

                    if($upload['errCode'] == -1){
                        $image = $upload['image'];
                    }else{
                        $returnArr['errCode']      = 3;
                        $returnArr['message']['image']      = $upload['image'];
                        echo json_encode($returnArr);exit;
                    }
                }else{
                    $image = $this->input->post('old_image');
                }

                $filter     = array('id'=>$this->input->post('id'));
                $data = array('title'=>$this->input->post('title'),
                    'tags'  =>$this->input->post('tags'),
                    'image' => $image,
                    'short_description'=>$this->input->post('short_description'),
                    'long_description' =>$this->input->post('long_description'),
                    'status'      =>$this->input->post('status')
                );



                $update = $this->AdminModel->update('projects',$filter,$data);

                if($update){
                    $returnArr['errCode']     = -1;
                    $returnArr['message']  = 'Project Updated Successfully';
                }else{
                    $returnArr['errCode']     = 2;
                    $returnArr['message']  = 'Please try again';
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

    public function activateProductsStatus(){
        $ids = $this->input->post('ids');


        $data = [];
        $i = 0;
        foreach($ids as $row){
            $data[$i]['id'] =$row;
            $data[$i]['status'] = '1';
            $i++;
        }

        $update = $this->AdminModel->updateBatch('products',$data,'id');

        if($update){
            $returnArr['errCode'] = -1;
            $returnArr['message'] = 'success';
        }else{
            $returnArr['errCode'] = 2;
            $returnArr['message'] = 'failed';
        }

        echo json_encode($returnArr);
    }
    public function deactivateProductsStatus(){
        $ids = $this->input->post('ids');
        echo "<pre>";
        print_r($ids);exit;

        $data = [];
        $i = 0;
        foreach($ids as $row){
            $data[$i]['id'] =$row;
            $data[$i]['status'] = '0';
            $i++;
        }

        $update = $this->AdminModel->updateBatch('products',$data,'id');

        if($update){
            $returnArr['errCode'] = -1;
            $returnArr['message'] = 'success';
        }else{
            $returnArr['errCode'] = 2;
            $returnArr['message'] = 'failed';
        }

        echo json_encode($returnArr);
    }



    public function importProductPriceForm(){
        $this->load->view('product/importProductPriceForm');
    }

    public function importPriceData(){
        $this->form_validation->set_rules('file','','callback_file_check');
        if($this->form_validation->run()){

            $new_image_name = time().str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['file']['name']);

            $config['upload_path']      = 'uploads/';
            $config['allowed_types']    = 'csv';
            $config['file_name']        = $new_image_name;
            $config['max_size']         = '0';
            $config['max_width']        = '0';
            $config['max_height']       = '0';
            $config['$min_width']       = '0';
            $config['min_height']       = '0';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $upload = $this->upload->do_upload('file');
            if(!$upload)
            {
                $data['error'] = true;
                $data['imageError'] =  $this->upload->display_errors();

            }else{
                $csvData = $this->csvreader->parse_csv($_FILES['file']['tmp_name']);


                if(!empty($csvData)){
                    $insertCount = $updateCount = $rowCount = $notAddCount = 0;

                    foreach($csvData as $row){

                        $rowCount++;

                        $filter = array('product_name'=>$row['product_name']);
                        $product = $this->AdminModel->getDetails('products',$filter);

                        if($product){
                            $filter = array('id'=>$row['id']);
                            $data   = array('sell_price'=>$row['sell_price'],
                                'unit_price'=>$row['unit_price'],
                                'discount'  =>$row['discount'],
                                'sku'       =>$row['sku'],
                                'packaging_size'=>$row['packaging_size'],
                                'seller_name'=>$row['seller_name'],
                                'category_id'=>$row['category_id']
                            );
                            $this->AdminModel->update('products',$filter,$data);
                            $updateCount++;
                        }else{
                            $data   = array('id'          =>$row['id'],
                                'product_name'=>$row['product_name'],
                                'unit_price'  =>$row['unit_price'],
                                'sell_price'  =>$row['sell_price'],
                                'discount'    =>$row['discount'],
                                'sku'         =>$row['sku'],
                                'packaging_size'=>$row['packaging_size'],
                                'seller_name' =>$row['seller_name'],
                                'category_id' =>$row['category_id'],
                                'status'      =>'1'
                            );
                            $this->AdminModel->insert('products',$data);
                            $insertCount++;
                        }

                    }

                    $notAddCount = $rowCount - $insertCount;

                    $data['notAddCount'] = $notAddCount;
                    $data['rowCount']    = $rowCount;
                    $data['updateCount'] = $updateCount;
                    $data['insertCount'] = $insertCount;
                    $data['message']     = 'Import Successfully';

                    $this->load->view('product/importProductPriceForm',$data);
                }
            }

        }else{
            $this->load->view('product/importProductPriceForm');
        }

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
