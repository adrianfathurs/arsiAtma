<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Reg extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model("Makun");
    }

    public function index(){
        $data['css']="reg/vreg_css.php";
        $data['js']="reg/vreg_js.php";
        $data['data'] = "false";
        $data['content']="reg/vreg.php";
        $this->load->view('template/vtemplate',$data);
    }

    function forgot(){
        $data['css']="reg/vreg_css.php";
        $data['js']="reg/vreg_js.php";
        $data['content']="reg/vreg.php";
        $data['data'] = "forgot";
        $this->load->view('template/vtemplate',$data);
    }

    function insert(){
        $input = $this->input->post(NULL,TRUE);
        extract($input);
        $user = $this->Makun->get_by_username($username);            
        $em = $this->Makun->get_by_email($email);
        // print_r($em);die;
        if ($this->input->post('submit')) {                       
            if( empty($user) && empty($em)){
                
                $data=[
                    'email'=>$this->input->post('email'),
                    'username'=>$this->input->post('username'),
                    'password'=>$this->input->post('pass'),
                    'nama_lengkap'=>$this->input->post('nama'),
                    'no_telp'=>$this->input->post('telp'),
                    'instasi'=>$this->input->post('instansi'),
                    'type_akun'=> 0,
                    'status'=>1,
                    ];
                    $this->Makun->reg($data);
                    $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Pendaftaran Akun Berhasil, Silahkan Login, Terimakasih :)                        
                    </div>");
                    $this->session->set_flashdata($alert);
                    redirect('Home/');
                }else{             
                    $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='1000' data-autohide='false'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                    <i class='fas fa-user-ninja'></i> Email atau Username yang Anda Masukkan Sudah Terdaftar, Silahkan Login.
                    </div>");
                    $this->session->set_flashdata($alert); 
                    redirect('Reg/');
                }
        
        }

        if ($this->input->post('forgot')) {
          
            $data=[
                'email' => $email,
                'username' => $username,
                'password' => $pass,
            ];           
            
            if( !empty($user) && !empty($em)){
                
            $this->Makun->update($data);  
            $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Password Akun Anda Berhasil Diperbarui, Silahkan Login :)                        
                    </div>");
            $this->session->set_flashdata($alert);          
             redirect('Home/');

                }else{
                    $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='1000' data-autohide='false'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                    <i class='fas fa-user-ninja'></i> Email dan Username yang Anda Masukkan Tidak Cocok                       
                    </div>");
                    $this->session->set_flashdata($alert); 
                    redirect('Reg/forgot');
                }
        }

    }
    
    function auth(){
        $input = $this->input->post(NULL,TRUE);
        extract($input);
        // print_r($input);die;
        $cek = $this->Makun->ceklogin($username,$pass);

		if ($cek) {
            $time = time();
            if($remember){
                setcookie("arsiAtma[username]",$username , $time + 86400);        
                setcookie("arsiAtma[pass]", $pass, $time + 86400); 
            }
            $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
            <div class='toast-header'>
                <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
    
                <strong class='mr-auto'>Notifikasi </strong>                                
                <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='toast-body'>
                Selamat, Anda Berhasil Login :)                           
            </div>");
            $this->session->set_flashdata($alert); 
			redirect('home/');
		} else {
            $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='500' data-autohide='false'>
            <div class='toast-header'>
                <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
    
                <strong class='mr-auto'>Notifikasi </strong>                                
                <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='toast-body'>
                Gagal Login, Username atau Kata Sandi Salah!                         
            </div>");
            $this->session->set_flashdata($alert); 
			redirect('home/');
		}
    }
    
    function logout(){
        if(isset($_COOKIE['cookielogin'])){
            $time = time();
            setcookie("arsiAtma[username]", $time - 86400);
            setcookie("arsiAtma[pass]", $time - 86400);
        }
        $data = array (
			'id', 'username', 'type_akun', 'is_login'
		);
        // $this->session_destroy();
		$this->session->unset_userdata($data);
		$alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='1000' data-autohide='true'>
            <div class='toast-header'>
                <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>

                <strong class='mr-auto'>Notifikasi </strong>                                
                <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='toast-body'>
                LogOut Akun Berhasil, Terimakasih :)                        
            </div>");
        $this->session->set_flashdata($alert); 
		redirect('home/');
    }

}

?>