<?php

class ComponentModel extends CI_Model {

    public function getComponentDetailsRows($postData){
        $this->_get_component_details_datatables_query($postData);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countAllComponentDetails(){
        $this->db->from('sub_products');
        return $this->db->count_all_results();
    }
    public function countFilteredComponentDetails($postData){
        $this->_get_component_details_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }
    private function _get_component_details_datatables_query($postData){

        $this->db->select('p.*,p.id as component_id,category');
        $this->db->where('p.status','1');
        $this->db->join('category c','c.id = p.category_id');
        $this->db->order_by('p.id','desc');
        $this->db->from('sub_products p');
        // Set orderable column fields
        $this->column_order = array(null,'image','title','category_id','status','created_at');

        // Set searchable column fields
        $this->column_search = array('image','title','category_id','status','created_at');
        // Set default order
        $this->order = array('p.created_at' => 'desc');



        foreach ($_POST['columns'] as $key => $value) {
            if(!empty($value['search']['value'])){

                if ($value['name'] == 'status') {
                    $value['search']['value']--;
                }
                if($value['name'] != ''){
                    if($value['name'] == 'created_at'){
                        $dates            = explode('-',$value['search']['value']);
                        $start_date       = date('md',strtotime($dates['0']));
                        $end_date         = date('md',strtotime($dates['1']));
                        $this->db->where("DATE_FORMAT(created_at,'%m%d') >=", $start_date);
                        $this->db->where("DATE_FORMAT(created_at,'%m%d') <=", $end_date);
                    }else{
                        $this->db->like($value['name'],$value['search']['value']);
                    }
                }
            }
        }


        $i = 0;


        foreach($this->column_search as $item){

            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
                    $this->db->like($item, $postData['search']['value']);
                }else{
                    $this->db->or_like($item, $postData['search']['value']);

                }
                if(count($this->column_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }



        if(isset($postData['order'])){
            if($postData['order'][0]['column'] == '1' || $postData['order'][0]['column'] == '2' || $postData['order'][0]['column'] == '3' || $postData['order'][0]['column'] == '4' || $postData['order'][0]['column'] == '5') {
                $this->db->order_by($this->column_order[$postData['order'][0]['column']], $postData['order'][0]['dir']);
            }
        }else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

}