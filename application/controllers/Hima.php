<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Hima extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="hima/vhima_css.php";
        $data['content']="home/vhome.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="hima/vhima.php";        

        $this->load->view('template/vtemplate',$data);
    }

    public function loadTentangHima(){
        $data['page']="tentangHimaPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="hima/vhima_css.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="hima/vhima.php";        

        $this->load->view('template/vtemplate',$data);
    }

    public function loadOrganisasiHima(){
        $data['page']="organisasiHimaPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="hima/vhima_css.php";
        $data['content']="hima/vorganisasiHima.php";        
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }
}

?>