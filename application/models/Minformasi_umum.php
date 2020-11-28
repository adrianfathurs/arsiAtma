<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minformasi_umum extends CI_Model{

    function getAlls(){
        $this->db->order_by('id_informasi_umum', 'DESC');
        $this->db->where('status ', 1);
        $user = $this->db->get('informasi_umum');
		return $user->result_array();
    }
    public function getAll($limit, $offset){
        // Jalankan query
        $query = $this->db
            ->limit($limit, $offset)
            ->order_by('id_informasi_umum', 'DESC')
            ->where('status ', 1)
            ->get('informasi_umum');

        // Return hasil query
        return $query;
}
    function getArtikel($id){
        $this->db->where('id_informasi_umum', $id);
        $query = $this->db->get('informasi_umum');            
        return $query->row();
    }

    public function insert($data,$id){
            if ($id != 0){
                $this->db->where('id_informasi_umum', $id);
                $this->db->update('informasi_umum', $data);                
            }else{
                $query = $this->db->insert('informasi_umum',$data);
            }
            
        }
    
    function cekfavumum($id_info,$id_akun){
        
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_umum ', $id_info);
        $query = $this->db->get('favorite_umum');            
        return $query->row();
    }

    function saveinf($data){
        $query = $this->db->insert('favorite_umum',$data);
    }

    function hapusfav($id_info,$id_akun){
        $this->db->where('fk_akun ', $id_akun);
        $this->db->where('fk_informasi_umum ', $id_info);
        $this->db->delete('favorite_umum');
        return true;
    }

    function getFav($id){
        $this->db->where('fk_akun ', $id);        
        $query = $this->db->get('favorite_umum');            
        return $query->result();
    }

    public function get_offset($limit, $offset){
            // Jalankan query
            $query = $this->db
                ->limit($limit, $offset)
                ->order_by('id_informasi_umum', 'DESC')
                ->where('status ', 1)
                ->get('informasi_umum');

            // Return hasil query
            return $query;
    }
    public function get(){
                // Jalankan query
        $this->db->where('status ', 1);
        $query = $this->db->get('informasi_umum');

                // Return hasil query
        return $query;
    }

    public function joinInformasiFavoriteUmum($id){
        $this->db->select('favorite_umum.fk_informasi_umum,informasi_umum.id_informasi_umum,favorite_umum.statusfavoriteumum,informasi_umum.judul_umum');
        $this->db->from('informasi_umum');
        $this->db->join('favorite_umum','favorite_umum.fk_informasi_umum=informasi_umum.id_informasi_umum');
        $this->db->where('favorite_umum.fk_akun',$id);
        $this->db->group_by('fk_informasi_umum');
        $this->db->order_by('fk_informasi_umum', 'DESC');
        $query = $this->db->get();
        return $query->result_array();

    }

}