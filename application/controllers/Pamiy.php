<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Pamiy extends CI_Controller 
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
        $data['css']="pamiy/vpamiy_css.php";
        $data['content']="home/vhomePage.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="pamiy/vpamiy.php";        

        $this->load->view('template/vtemplate',$data);
    }
}

?>