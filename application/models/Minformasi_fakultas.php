<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minformasi_fakultas extends CI_Model{

    function getAll(){
        $this->db->order_by('id_informasi_fakultas', 'DESC');
        $this->db->where('status ', 1);
        $user = $this->db->get('Informasi_fakultas');
		return $user->result();
    }
    function getArtikel($id){
        $this->db->where('id_informasi_fakultas', $id);
        $query = $this->db->get('Informasi_fakultas');            
        return $query->row();
    }

    public function insert($data,$id){
            if ($id != 0){
                $this->db->where('id_informasi_fakultas ', $id);
                $this->db->update('informasi_fakultas', $data);
            }else{
                $query = $this->db->insert('informasi_fakultas',$data);
            }
            
        }
    
    function cekfavfakultas($id_info,$id_akun){
        
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_fakultas ', $id_info);
        $query = $this->db->get('favorite_fakultas');            
        return $query->row();
    }

    function saveinf($data){
        $query = $this->db->insert('favorite_fakultas',$data);
    }

    function hapusfavfakultas($id_info,$id_akun){
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_fakultas ', $id_info);
        $this->db->delete('favorite_fakultas');
        return true;
    }

    function getFav($id){
        $this->db->where('fk_akun ', $id);        
        $query = $this->db->get('favorite_fakultas');            
        return $query->result();
    }

    public function get_offset($limit, $offset){
            // Jalankan query
            $query = $this->db
                ->limit($limit, $offset)
                ->order_by('id_informasi_fakultas', 'DESC')
                ->where('status ', 1)
                ->get('informasi_fakultas');

            // Return hasil query
            return $query;
    }
    public function get(){
                // Jalankan query
        $this->db->where('status ', 1);
        $query = $this->db->get('informasi_fakultas');

                // Return hasil query
        return $query;
    }
}