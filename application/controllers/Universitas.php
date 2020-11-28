<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Universitas extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model('Morganisasi');
        $this->load->model('Makun');
        $this->load->library('upload');
        $this->load->model('Minformasi_hima');
        $this->load->model('Minformasi_universitas');
        $this->load->model('Minformasi_fakultas');
        $this->load->model('Minformasi_pamiy');
        $this->load->model('Minstagram');

    }

    public function index(){
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['informasiUniv']=$this->Minformasi_univ->getThreeInformasi();
        // $data['css']="viewArticle/VviewArticle_css.php";
        
        $data['header']="template/template_header.php";
        $data['css']="universitas/vuniversitas_css.php";
        $data['content']="home/vhomePage.php";
        $data['instagram'] = $this->Minstagram->get();
        $data['asidebar']="viewArticle/VviewAsidebar.php";
         $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['footer']="template/template_footer.php";
        $data['content']="universitas/vuniversitas.php";        

        $this->load->view('template/vtemplate',$data);
    }

    public function loadTentangUniversitas(){
        $data['page']="tentangUnivPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="universitas/vuniversitas_css.php";
        $data['js']="universitas/vuniversitas_js.php";
        $data['instagram'] = $this->Minstagram->get();
        $data['asidebar']="viewArticle/VviewAsidebar.php";
         $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['footer']="template/template_footer.php";
        $data['content']="universitas/vuniversitas.php";        

        $this->load->view('template/vtemplate',$data);
    }
}

?>