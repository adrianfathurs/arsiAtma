<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minformasi_universitas extends CI_Model{

    function getAll(){
        $this->db->order_by('id_informasi_univ', 'DESC');
        $this->db->where('status ', 1);
        $user = $this->db->get('informasi_univ');
		return $user->result();
    }
    function getArtikel($id){
        

            $this->db->where('id_informasi_univ', $id);
            $query = $this->db->get('informasi_univ');            
            return $query->row();
       
    }

    public function insert($data,$id){
            if ($id != 0){
                $this->db->where('id_informasi_univ ', $id);
                $this->db->update('informasi_univ', $data);
                $alert = array('teks'=>'Informasi Universitas Berhasil Diperbarui');
                return $this->session->set_flashdata($alert);  
            }else{
                $query = $this->db->insert('informasi_univ',$data);
                $alert = array('teks'=>'Informasi Universitas Berhasil Ditambahkan');
                return $this->session->set_flashdata($alert);  
            }
            
        }
    
    function cekfavuniv($id_info,$id_akun){
        
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_univ ', $id_info);
        $query = $this->db->get('favorite_univ');            
        return $query->row();
    }

    function saveinf($data){
        $query = $this->db->insert('favorite_univ',$data);
    }

    function hapusfavuniv($id_info,$id_akun){
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_univ ', $id_info);
        $this->db->delete('favorite_univ');
        return true;
    }

    function getFav($id){
        $this->db->where('fk_akun ', $id);        
        $query = $this->db->get('favorite_univ');            
        return $query->result();
    }

    public function get_offset($limit, $offset){
            // Jalankan query
            $query = $this->db
                ->limit($limit, $offset)
                ->order_by('id_informasi_univ', 'DESC')
                ->get('informasi_univ');

            // Return hasil query
            return $query;
    }
    public function get(){
                // Jalankan query
        $this->db->where('status ', 1);
        $query = $this->db->get('informasi_univ');

                // Return hasil query
        return $query;
    }
}