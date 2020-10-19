<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minformasi_hima extends CI_Model{

    function getAll(){
        $user = $this->db->get('Informasi_hima');
		return $user->result();
    }
}