<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Hima extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="hima/vhima_css.php";
        $data['content']="home/vhomePage.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="hima/vhima.php";        

        $this->load->view('template/vtemplate',$data);
    }
}

?>