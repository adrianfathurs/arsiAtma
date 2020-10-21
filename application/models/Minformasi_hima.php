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
    
    function cekfav($id_info,$id_akun){
        
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_hima ', $id_info);
        $query = $this->db->get('favorite_hima');            
        return $query->row();
    }

    function saveinf($data){
        $query = $this->db->insert('favorite_hima',$data);
    }

    function hapusfav($id_info,$id_akun){
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_hima ', $id_info);
        $this->db->delete('favorite_hima');
        return true;
    }
}