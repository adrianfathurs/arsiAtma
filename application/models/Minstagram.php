<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Minstagram extends CI_Model 
{
    function get(){
        $query = $this->db->get('instagram');            
        return $query->row();
    }

    function update($data){
        $this->db->where('id_instagram ', 2);
        $this->db->update('instagram', $data);   
    }
}

?>