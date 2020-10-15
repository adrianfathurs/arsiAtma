<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Portofolio extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="portofolio/vportofolio_css.php";
        $data['content']="portofolio/vportofolio.php";
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";
               

        $this->load->view('template/vtemplate',$data);
    }
}

?>