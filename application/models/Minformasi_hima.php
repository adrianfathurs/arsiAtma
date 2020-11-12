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

    function getThreeInformasi(){
       $this->db->where('status',1);   
        $this->db->order_by('id_informasi_hima', 'DESC');
        $query=$this->db->get('informasi_hima',3);
        return $query->result_array();
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

    function getFav($id){
        $this->db->where('fk_akun ', $id);        
        $query = $this->db->get('favorite_hima');            
        return $query->result();
    }

    public function get_offset($limit, $offset){
            // Jalankan query
            $query = $this->db
                ->limit($limit, $offset)
                ->order_by('id_informasi_hima', 'DESC')
                ->where('status ', 1)
                ->get('informasi_hima');

            // Return hasil query
            return $query;
    }
    public function get(){
                // Jalankan query
        $this->db->where('status ', 1);
        $query = $this->db->get('informasi_hima');

                // Return hasil query
        return $query;
    }

    public function joinInformasiFavoriteHima($id){
        $this->db->select('favorite_hima.fk_informasi_hima,informasi_hima.id_informasi_hima,favorite_hima.statusfavoritehima,informasi_hima.judul_hima');
        $this->db->from('informasi_hima');
        $this->db->join('favorite_hima','favorite_hima.fk_informasi_hima=informasi_hima.id_informasi_hima');
        $this->db->where('favorite_hima.fk_akun',$id);
        $this->db->group_by('fk_informasi_hima');
        $this->db->order_by('fk_informasi_hima', 'DESC');
        $query = $this->db->get();
        return $query->result_array();

    }

}