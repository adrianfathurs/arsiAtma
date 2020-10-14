<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Reg extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        $data['css']="reg/vreg_css.php";
        // $data['js']="viewArticle/VviewArticle_js.php";
        $data['data'] = "false";
        $data['content']="reg/vreg.php";
        $this->load->view('template/vtemplate',$data);
    }

    function forgot(){
        $data['css']="reg/vreg_css.php";
        $data['content']="reg/vreg.php";
        $data['data'] = "forgot";
        // print_r($data);die;
        $this->load->view('template/vtemplate',$data);
    }
}

?>