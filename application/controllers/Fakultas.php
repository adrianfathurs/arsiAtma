<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Fakultas extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model('Makun');
        $this->load->library('upload');

    }

    public function index(){
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['informasiFakultas']=$this->Minformasi_fakultas->getThreeInformasi();
        // $data['css']="viewArticle/VviewArticle_css.php";

        $data['header']="template/template_header.php";
        $data['css']="fakultas/vfakultas_css.php";
        $data['content']="home/vhomePage.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="fakultas/vfakultas.php";        

        $this->load->view('template/vtemplate',$data);
    }

    public function loadTentangFakultas(){
        $data['page']="tentangFakultasPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="fakultas/vfakultas_css.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="fakultas/vfakultas.php";        

        $this->load->view('template/vtemplate',$data);
    }
}

?>