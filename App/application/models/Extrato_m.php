<?php

class Extrato_m extends CI_Model
{

    public function incluir(){
        
    }
    public function get($id = null){
        if ($id) {
            $this->db->where('id', $id);
        }
        $this->db->order_by("id", 'desc');
        $saldos = $this->db->get('extratos');
        return $saldos;
    }


}