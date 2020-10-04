<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Article extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        $data['header']="template/template_header.php";
        $data['css']="viewArticle/VviewArticle_css.php";
        $data['content']="viewArticle/VviewArticle.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['js']="viewArticle/VviewArticle_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }
}

?>