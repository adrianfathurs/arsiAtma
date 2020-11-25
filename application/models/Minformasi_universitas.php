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

    function getThreeInformasi(){
        $this->db->where('status',1);    
        $this->db->order_by('id_informasi_univ', 'DESC');
        $query=$this->db->get('informasi_univ',3);
        return $query->result_array();
    }
    function getTwoInformasi(){
        $this->db->where('status',1);    
        $this->db->order_by('id_informasi_univ', 'DESC');
        $query=$this->db->get('informasi_univ',2);
        return $query->result_array();
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
                ->where('status ', 1)
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
    public function joinInformasiFavoriteUniv($id){
        $this->db->select('favorite_univ.fk_informasi_univ,informasi_univ.id_informasi_univ,informasi_univ.judul_univ,favorite_univ.statusfavoriteuniv');
        $this->db->from('informasi_univ');
        $this->db->join('favorite_univ','favorite_univ.fk_informasi_univ=informasi_univ.id_informasi_univ');
        $this->db->where('favorite_univ.fk_akun',$id);
        
        $this->db->group_by('fk_informasi_univ');
        $this->db->order_by('fk_informasi_univ', 'DESC');
        $query = $this->db->get();
        return $query->result_array();

    }
}