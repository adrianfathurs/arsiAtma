<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minformasi_sepekan extends CI_Model{

    function getAlls(){
        $this->db->order_by('id_informasi_sepekan', 'DESC');
        $this->db->where('status ', 1);
        $user = $this->db->get('informasi_sepekan');
		return $user->result_array();
    }
    public function getAll($limit, $offset){
        // Jalankan query
        $query = $this->db
            ->limit($limit, $offset)
            ->order_by('id_informasi_sepekan', 'DESC')
            ->where('status ', 1)
            ->get('informasi_sepekan');

        // Return hasil query
        return $query;
}
    function getArtikel($id){
        $this->db->where('id_informasi_sepekan', $id);
        $query = $this->db->get('informasi_sepekan');            
        return $query->row();
    }

    public function insert($data,$id){
            if ($id != 0){
                $this->db->where('id_informasi_sepekan', $id);
                $this->db->update('informasi_sepekan', $data);                
            }else{
                $query = $this->db->insert('informasi_sepekan',$data);
            }
            
        }
    
    function cekfavsepekan($id_info,$id_akun){
        
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_sepekan ', $id_info);
        $query = $this->db->get('favorite_sepekan');            
        return $query->row();
    }

    function saveinf($data){
        $query = $this->db->insert('favorite_sepekan',$data);
    }

    function hapusfav($id_info,$id_akun){
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_sepekan ', $id_info);
        $this->db->delete('favorite_sepekan');
        return true;
    }

    function getFav($id){
        $this->db->where('fk_akun ', $id);        
        $query = $this->db->get('favorite_sepekan');            
        return $query->result();
    }

    public function get_offset($limit, $offset){
            // Jalankan query
            $query = $this->db
                ->limit($limit, $offset)
                ->order_by('id_informasi_sepekan', 'DESC')
                ->where('status ', 1)
                ->get('informasi_sepekan');

            // Return hasil query
            return $query;
    }
    public function get(){
                // Jalankan query
        $this->db->where('status ', 1);
        $query = $this->db->get('informasi_sepekan');

                // Return hasil query
        return $query;
    }

    public function joinInformasiFavoriteSepekan($id){
        $this->db->select('favorite_sepekan.fk_informasi_sepekan,informasi_sepekan.id_informasi_sepekan,favorite_sepekan.statusfavoritesepekan,informasi_sepekan.judul_sepekan');
        $this->db->from('informasi_sepekan');
        $this->db->join('favorite_sepekan','favorite_sepekan.fk_informasi_sepekan=informasi_sepekan.id_informasi_sepekan');
        $this->db->where('favorite_sepekan.fk_akun',$id);
        $this->db->group_by('fk_informasi_sepekan');
        $this->db->order_by('fk_informasi_sepekan', 'DESC');
        $query = $this->db->get();
        return $query->result_array();

    }

}