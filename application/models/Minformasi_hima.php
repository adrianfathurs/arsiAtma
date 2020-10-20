<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minformasi_hima extends CI_Model{

    function getAll(){
        $this->db->order_by('id_informasi_hima', 'DESC');
        $this->db->where('status ', 1);
        $user = $this->db->get('Informasi_hima');
		return $user->result();
    }
    function getArtikel($id){
        $this->db->where('id_informasi_hima', $id);
        $query = $this->db->get('Informasi_hima');            
        return $query->row();
    }

    public function insert($data,$id){
            if ($id != 0){
                $this->db->where('id_informasi_hima ', $id);
                $this->db->update('informasi_hima', $data);
            }else{
                $query = $this->db->insert('informasi_hima',$data);
            }
            
        }
}