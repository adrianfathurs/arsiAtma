<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Umum extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        $data['page']="umumPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="umum/vumum_css.php";
        $data['content']="home/vhomePage.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="umum/vumum.php";        

        $this->load->view('template/vtemplate',$data);
    }
}

?>