<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minformasi_pamiy extends CI_Model{

    function getAll(){
        $this->db->order_by('id_informasi_pamiy', 'DESC');
        $this->db->where('status ', 1);
        $user = $this->db->get('Informasi_pamiy');
		return $user->result();
    }

    function getArtikel($id){
        $this->db->where('id_informasi_pamiy', $id);
        $query = $this->db->get('Informasi_pamiy');            
        return $query->row();
    }

    function getThreeInformasi(){    
        $query=$this->db->get('informasi_pamiy',3);
        return $query->result_array();
    }

    public function insert($data,$id){
            if ($id != 0){
                $this->db->where('id_informasi_pamiy ', $id);
                $this->db->update('informasi_pamiy', $data);
                $alert = array('teks'=>'Informasi PAMIY Berhasil Diperbarui');
                return $this->session->set_flashdata($alert);  
            }else{
                $query = $this->db->insert('informasi_pamiy',$data);
                $alert = array('teks'=>'Informasi PAMIY Berhasil Ditambahkan');
                return $this->session->set_flashdata($alert);  
            }
            
        }
    
    function cekfavpamiy($id_info,$id_akun){
        
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_pamiy ', $id_info);
        $query = $this->db->get('favorite_pamiy');            
        return $query->row();
    }

    function saveinf($data){
        $query = $this->db->insert('favorite_pamiy',$data);
    }

    function hapusfavpamiy($id_info,$id_akun){
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_pamiy ', $id_info);
        $this->db->delete('favorite_pamiy');
        return true;
    }

    function getFav($id){
        $this->db->where('fk_akun ', $id);        
        $query = $this->db->get('favorite_pamiy');            
        return $query->result();
    }
    
    public function get_offset($limit, $offset){
            // Jalankan query
            $query = $this->db
                ->limit($limit, $offset)
                ->order_by('id_informasi_pamiy', 'DESC')
                ->where('status ', 1)
                ->get('informasi_pamiy');

            // Return hasil query
            return $query;
    }
    public function get(){
                // Jalankan query
        $this->db->where('status ', 1);
        $query = $this->db->get('informasi_pamiy');

                // Return hasil query
        return $query;
    }
}