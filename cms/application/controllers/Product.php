<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

     public function getProductList(){
         $data['railType'] = $this->AdminModel->getList('rail_type');
         $data['panelPosition'] = $this->AdminModel->getList('panel_position');
         $data['roofType'] = $this->AdminModel->getList('roof_type');
         $data['height'] = $this->AdminModel->getList('height');
         $this->load->view('product/products',$data);
    }
    public function getProductDetails(){
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

    public function getProductListDetails(){
        $data = $row = array();
        
        // Fetch member's records
        $memData = $this->AdminModel->getProductDetailsRows($_POST);
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
                                    <li><a href="'.base_url().'Product/editProduct/'.$member->product_id.'" id="'.$member->product_id.'"><i class="icon-file-pdf"></i> Edit</a></li>
                                    <li><a  id="'.$member->product_id.'" class="delete" data-table="'.$hash = $this->encryption->encrypt('products').'"><i class="icon-file-excel"></i> Delete</a></li>
                                    <li><a href="'.base_url().'ImageController/gallery/'.$member->product_id.'/3"><i class="icon-file-excel"></i> Add Images</a></li>
                                </ul>
                            </li>
                        </ul>
                        </td>';

        $image = '<img src="'.base_url().$member->image.'" width="50px" height="50px">';
        $status = $member->status == '1' ? '<button class="btn btn-success btn-sm">Active</button>' : '<button class="btn btn-danger btn-sm">Inactive</button>';

        $data[] = array($member->product_id,
                        $i,
                        $action,
                        $image,
                        $member->title,
                        $member->rail_type,
                        $member->panel_position,
                        $member->roof_type,
                        $member->height,
                        $status,
                        date('d-m-Y h:i A',strtotime($member->created_at))
                    );
        }



        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->AdminModel->countAllProductDetails(),
            "recordsFiltered" => $this->AdminModel->countFilteredProductDetails($_POST),
            "data" => $data,
        );  
        
        // Output to JSON format
        echo json_encode($output);
    }
    public function addProduct(){

        $this->form_validation->set_rules('name','Product Name','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description','Short Description','');
        $this->form_validation->set_rules('long_description','Short Description','');
        $this->form_validation->set_rules('file','','callback_file_check');
        $this->form_validation->set_rules('rail_type_id','Rail Type','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('panel_position_id','Panel Position','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('roof_type_id','Roof Type','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('height_id','Height','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status','Status','required|trim|xss_clean|max_length[255]');

        if($this->form_validation->run()){
            $filter = array('title'=>$this->input->post('title'));

            $checkMenu = $this->AdminModel->getDetails('sub_products',$filter);
            if($checkMenu){
                    $returnArr['errCode']               = 3;
                    $returnArr['message']['title']      = '<p class="error">Products Already Exists</p>';
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

                    $data = array('title'       =>$this->input->post('name'),
                                  'image'       =>$image,
                                  'short_description'=>$this->input->post('short_description'),
                                  'long_description'=>$this->input->post('long_description'),
                                  'rail_type_id' =>$this->input->post('rail_type_id'),
                                  'panel_position_id' =>$this->input->post('panel_position_id'),
                                  'roof_type_id' =>$this->input->post('roof_type_id'),
                                  'height_id'    =>$this->input->post('height_id'),
                                  'status'      =>$this->input->post('status')
                              );

                    $id = $this->AdminModel->insert('sub_products',$data);
                    
                    if($id){
                        $returnArr['errCode']     = -1;
                        $returnArr['message']  = 'Success';
                    }else{
                        $returnArr['errCode']     = 2;
                        $returnArr['message']  = 'Please try again';
                    }
            }
        }else{
            $returnArr['errCode'] = 3;
            $returnArr['message']['file'] = form_error('file');
            foreach ($this->input->post() as $key => $value) {
                $returnArr['message'][$key] = form_error($key);
            }
            
        }
        echo json_encode($returnArr);
    }

    public function editProduct(){
            $data['rail_type'] = $this->AdminModel->getList('rail_type');
            $data['roof_type'] = $this->AdminModel->getList('roof_type');
            $data['panel_position'] = $this->AdminModel->getList('panel_position');
            $data['height'] = $this->AdminModel->getList('height');

            $filter = array('id'=>$this->uri->segment(3));
            $data['product'] = $this->AdminModel->getDetails('sub_products',$filter);
            
            $this->load->view('product/editProduct',$data);

    }
    public function updateProduct(){
        $this->form_validation->set_rules('title','Product Name','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('short_description','Short Description','');
        $this->form_validation->set_rules('file','','callback_file_check');
        $this->form_validation->set_rules('rail_type_id','Rail Type','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('panel_position_id','Panel Position','required|trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('roof_type_id','Roof Type','trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('height_id','Height','trim|xss_clean|max_length[255]');
        $this->form_validation->set_rules('status','Status','required|trim|xss_clean|max_length[255]');
        if($this->form_validation->run()){
            $filter = array('id !='=>$this->uri->segment(3));
            
            $exists = $this->AdminModel->getDetails('products',$filter);

            if($exists){
                    $returnArr['errCode']               = 3;
                    $returnArr['message']['product_name']      = '<p class="error">Product Already Exists</p>';
            }else{
                if(isset($_FILES) && !empty($_FILES)){
                    $upload = upload_image($_FILES,'image');

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

                $filter     = array('id'=>$this->uri->segment(3));
                $data = array(  'title'       =>$this->input->post('title'),
                                'image'       =>$image,
                                'short_description'=>$this->input->post('short_description'),
                                'rail_type_id' =>$this->input->post('rail_type_id'),
                                'panel_position_id' =>$this->input->post('panel_position_id'),
                                'roof_type_id' =>$this->input->post('roof_type_id'),
                                'height_id'    =>$this->input->post('height_id'),
                                'status'      =>$this->input->post('status')
                            );


          
                $updateMenu = $this->AdminModel->update('sub_products',$filter,$data);
                if($updateMenu){
                    $returnArr['errCode']     = -1;
                    $returnArr['message']  = 'Product Updated Successfully';
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
    public function productReports(){
        $product = $this->AdminModel->getList('products');

        $i = 0;
        foreach($product as $row){
            $i++;
            $filter = array('product_id'=>$row['id'],'status'=>'1');
            $order      = $this->AdminModel->getOrderProductDetails($filter);

            $report[$i]['product_name']     = $row['product_name'];
            $report[$i]['image']            = $row['image'];
            $report[$i]['unit_price']       = $row['unit_price'];
            $report[$i]['sell_price']       = $row['sell_price'];
            $report[$i]['total_sell_qty']   = $order['total_sell_qty'];
            $report[$i]['total_sell_price']   = $order['total_sell_price'];
        }


        $data['reports'] = $report;
        $this->load->view('product/product_reports',$data);
    }
    
}
