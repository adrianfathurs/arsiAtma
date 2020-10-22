<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Home extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){

      
        $data['notif'] = "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='500' data-autohide='false'>
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



        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
        // print_r($data);die;
    }
}

?>