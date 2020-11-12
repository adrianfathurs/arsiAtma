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

    function getThreeInformasi(){    
        $this->db->where('status',1);    
        $query=$this->db->get('informasi_fakultas',3);
        return $query->result_array();
    }

    public function insert($data,$id){
            if ($id != 0){
                $this->db->where('id_informasi_fakultas ', $id);
                $this->db->update('informasi_fakultas', $data);
                $alert = array('teks'=>'Informasi Fakultas Berhasil Diperbarui');
                return $this->session->set_flashdata($alert);  
            }else{
                $query = $this->db->insert('informasi_fakultas',$data);
                $alert = array('teks'=>'Informasi Fakultas Berhasil Ditambahkan');
                return $this->session->set_flashdata($alert);  
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

    public function joinInformasiFavoriteFakultas($id){
        $this->db->select('favorite_fakultas.fk_informasi_fakultas,informasi_fakultas.id_informasi_fakultas,informasi_fakultas.judul_fakultas,favorite_fakultas.statusfavoritefakultas');
        $this->db->from('informasi_fakultas');
        $this->db->join('favorite_fakultas','favorite_fakultas.fk_informasi_fakultas=informasi_fakultas.id_informasi_fakultas');
        $this->db->where('favorite_fakultas.fk_akun',$id);
        
        $this->db->group_by('fk_informasi_fakultas');
        $this->db->order_by('fk_informasi_fakultas', 'DESC');
        $query = $this->db->get();
        return $query->result_array();

    }
}