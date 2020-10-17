<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Informasi extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasi_css.php";
        $data['content']="informasi/vinformasi.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
               

        $this->load->view('template/vtemplate',$data);
    }
}

?>