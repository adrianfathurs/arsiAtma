<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Msaran extends CI_Model 
{
    public function submit($data)
    {
        $this->db->insert('saran',$data);
        }
    
    public function loadSaran()
    {
        $query=$this->db->select('id_saran,email,nama_lengkap,no_telp,isi_saran')
                    ->from('saran')
                    ->get();
        return $query->result_array();
    }

    public function MhapusSaran($id){
        $this->db->where('id_saran',$id);
        $this->db->delete('saran');
    }
}

?>