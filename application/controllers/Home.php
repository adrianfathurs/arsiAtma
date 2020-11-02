<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Home extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model("Makun");
        $this->load->model('Minformasi_hima');
        $this->load->model('Minformasi_universitas');

    }

    public function index(){
        // cek cookies
        if(isset($_COOKIE['arsiAtma'])){            
            die;
            $cek = $this->Makun->ceklogin($_COOKIE['arsiAtma']['username'],$_COOKIE['arsiAtma']['pass']);
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
        }

        /* Untuk active navbar */
        $data['page']="homePage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['informasiHima']=$this->Minformasi_hima->getThreeInformasi();
        $data['informasiUniv']=$this->Minformasi_universitas->getThreeInformasi();
        
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
        // print_r($data);die;
    }


    function auth(){
        $data['notif'] = "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
        <div class='toast-header'>
            <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>

            <strong class='mr-auto'>Notifikasi </strong>                                
            <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
        </div>
        <div class='toast-body'>
            Selamat, Anda Berhasil Login :)                           
        </div>" ;
        
        
        /* Untuk active navbar */
        $data['page']="homePage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['informasiHima']=$this->Minformasi_hima->getThreeInformasi();
        $data['informasiUniv']=$this->Minformasi_universitas->getThreeInformasi();
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    function failed(){
        $data['notif'] = "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='500' data-autohide='false'>
        <div class='toast-header'>
            <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>

            <strong class='mr-auto'>Notifikasi </strong>                                
            <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='toast-body'>
            Gagal Login, Username atau Kata Sandi Salah!                         
        </div>" ;


        /* Untuk active navbar */
        $data['page']="homePage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['informasiHima']=$this->Minformasi_hima->getThreeInformasi();
        $data['informasiUniv']=$this->Minformasi_universitas->getThreeInformasi();
      
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    function Logout(){
        $data['notif'] = "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='1000' data-autohide='true'>
        <div class='toast-header'>
            <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>

            <strong class='mr-auto'>Notifikasi </strong>                                
            <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='toast-body'>
            LogOut Akun Berhasil, Terimakasih :)                        
        </div>" ;


        /* Untuk active navbar */
        $data['page']="homePage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['informasiHima']=$this->Minformasi_hima->getThreeInformasi();
        $data['informasiUniv']=$this->Minformasi_universitas->getThreeInformasi();
      
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    function regis(){
        $data['notif'] = "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
        <div class='toast-header'>
            <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>

            <strong class='mr-auto'>Notifikasi </strong>                                
            <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='toast-body'>
            Pendaftaran Akun Berhasil, Silahkan Login, Terimakasih :)                        
        </div>" ;


        /* Untuk active navbar */
        $data['page']="homePage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['informasiHima']=$this->Minformasi_hima->getThreeInformasi();
      
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    function update(){
        $data['notif'] = "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
        <div class='toast-header'>
            <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>

            <strong class='mr-auto'>Notifikasi </strong>                                
            <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='toast-body'>
            Password Akun Anda Berhasil Diperbarui, Silahkan Login :)                        
        </div>" ;


        /* Untuk active navbar */
        $data['page']="homePage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['informasiHima']=$this->Minformasi_hima->getThreeInformasi();
        $data['informasiUniv']=$this->Minformasi_universitas->getThreeInformasi();
      
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

}

?>