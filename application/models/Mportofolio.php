<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mportofolio extends CI_Model{

    function getArtikel($id){
        $this->db->where('id_portofolio', $id);
        $query = $this->db->get('portofolio');            
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
                $this->db->where('id_portofolio ', $id);
                $this->db->update('portofolio', $data);                
            }else{
                $query = $this->db->insert('portofolio',$data);
            }
            
        }
    
    function cekfav($id_info,$id_akun){
        $this->db->where('fk_user ', $id_akun);
        $this->db->where('fk_portofolio ', $id_info);
        $query = $this->db->get('favorite_portofolio');             
        return $query->row();
    }

    function saveinf($data){
        $query = $this->db->insert('favorite_portofolio',$data);
    }

    function hapusfav($id_info,$id_akun){
        $this->db->where('fk_user ', $id_akun);
        $this->db->where('fk_portofolio ', $id_info);
        $this->db->delete('favorite_portofolio');
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
                ->order_by('id_portofolio', 'DESC')
                ->where('status ', 1)
                ->get('portofolio');

            // Return hasil query
            return $query;
    }
    public function get(){
                // Jalankan query
        $this->db->where('status ', 1);
        $query = $this->db->get('portofolio');

                // Return hasil query
        return $query;
    }

    public function joinInformasiFavoritePortofolio($id){
        $this->db->select('favorite_portofolio.fk_portofolio,portofolio.id_portofolio,portofolio.judul_portofolio');
        $this->db->from('portofolio');
        $this->db->join('favorite_portofolio','favorite_portofolio.fk_portofolio=portofolio.id_portofolio');
        $this->db->where('favorite_portofolio.fk_user',$id);
        $this->db->group_by('fk_portofolio');
        $this->db->order_by('fk_portofolio', 'DESC');
        $query = $this->db->get();
        return $query->result_array();

    }

   
}