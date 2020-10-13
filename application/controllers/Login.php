<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Login extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        $data['css']="login/vlogin_css.php";
        // $data['js']="viewArticle/VviewArticle_js.php";
        $data['content']="login/vlogin.php";
        $this->load->view('template/vtemplate',$data);
    }
}

?>