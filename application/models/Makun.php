<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Makun extends CI_Model{
    
    function reg($data){
            if ($this->db->insert('akun', $data)) {
                $this->session->set_userdata('typeNotif', 'successAddUser');
                return $this->db->insert_id();
            } else {
                $this->session->set_userdata('typeNotif', 'errorAddUser');
                return false;
            }
        }
    
    function cekLogin($username,$password){
            $user = $this->get_by_username($username);            

            if (!$user) {  // jika usernya tidak ada
                $this->session->set_userdata('typeNotif', 'userNotFound');
                return false;
            } else if($user->status == 0){
                $this->session->set_userdata('typeNotif', 'userNotFound');
                return false;
            } else {  // pengecekan login
                if ($user->password == $password) {
                    $data = array (
                        'id' 		=> $user->id_akun,
                        'username' 	=> $user->username,                        
                        'type_akun' => $user->type_akun,  
                        'is_login' 	=> true
                    );
                    // print_r($data);die;
                    $this->session->set_userdata($data);
                    return true;
                } else {
                    $this->session->set_userdata('typeNotif', 'wrongPassword');
                    return false;
                }
            }
            return false;
        }

    public function get_by_username($username) {
            $this->db->from('akun');
            $this->db->where('username',$username);            
            $user = $this->db->get();
            return $user->row();
    }

    public function get_by_email($email) {
        $this->db->from('akun');
        $this->db->where('email',$email);            
        $user = $this->db->get();
        return $user->row();
    }

    public function get_by_id($id) {
        $this->db->from('akun');
        $this->db->where('id_akun ',$id);            
        $user = $this->db->get();
        return $user->row();
    }
    
    function update($data){
        $user = $this->get_by_username($data['username']);            
        $email = $this->get_by_email($data['email']); 
        if($user && $email){
            

                
                $this->db->where('username', $data['username']);
                $this->db->set('password', $data['password']);
                $this->db->update('akun');
                return true;
                // if ($this->db->update('akun', $data)) {
                //     $this->session->set_userdata('typeNotif', 'successEdited');
                //     return true;
                // } else {
                //     $this->session->set_userdata('typeNotif', 'errorEdited');
                //     return false;
                // }
                
        }else{
            die;
        }

    }

}
