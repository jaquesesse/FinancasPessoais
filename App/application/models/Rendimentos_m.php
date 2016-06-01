<?php

/**
 * Created by PhpStorm.
 * User: Sidimar
 * Date: 30/05/2016
 * Time: 19:40
 */
class Rendimentos_m extends CI_Model
{

    public function incluir(){
        
    }
    public function get($id = null){
       // $db = Database::connect();
        if ($id) {
            $this->db->where('id', $id);
        }
        $this->db->order_by("id", 'desc');
        return $this->db->get('rendimentos');
    }


}