<?php

class ProductModel extends CI_Model
{
    public function getPanelPositionList($filter = NULL){
        if($filter){
            $this->db->where($filter);
        }
        $this->db->select('pp.*,rt.name as rail_type');
        $this->db->join('rail_type rt','rt.id = pp.rail_type_id');
        return $this->db->get('panel_position pp')->result_array();
    }

    public function getRoofTypeList($filter = NULL){
        if($filter){
            $this->db->where($filter);
        }
        $this->db->select('r.*,rt.name as rail_type,pp.name as panel_position');
        $this->db->join('rail_type rt','rt.id = r.rail_type_id');
        $this->db->join('panel_position pp','pp.id = r.panel_position_id');
        return $this->db->get('roof_type r')->result_array();
    }

    public function getHeightList($filter = NULL){
        if($filter){
            $this->db->where($filter);
        }
        $this->db->select('h.*,h.name as height,rt.name as rail_type,pp.name as panel_position,r.name as roof_type');
        $this->db->join('rail_type rt','rt.id = h.rail_type_id');
        $this->db->join('panel_position pp','pp.id = h.panel_position_id');
        $this->db->join('roof_type r','r.id = h.roof_type_id');
        return $this->db->get('height h')->result_array();
    }

    public function getScrewList($filter = NULL){
        if($filter){
            $this->db->where($filter);
        }
        $this->db->select('s.*,s.name as screw,h.name as height,rt.name as rail_type,pp.name as panel_position,r.name as roof_type');
        $this->db->join('rail_type rt','rt.id = s.rail_type_id');
        $this->db->join('panel_position pp','pp.id = s.panel_position_id');
        $this->db->join('roof_type r','r.id = s.roof_type_id');
        $this->db->join('height h','h.id = s.height_id');
        return $this->db->get('screw s')->result_array();
    }
}
?>