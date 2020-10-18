<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Msaran extends CI_Model 
{
    public function submit($data)
    {
        $this->db->insert('saran',$data);
        }
}

?>