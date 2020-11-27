<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Fakultas extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
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
        $data['informasiFakultas']=$this->Minformasi_fakultas->getThreeInformasi();
        $data['instagram'] = $this->Minstagram->get();
        $data['page']="tentangFakultasPage";
        $data['header']="template/template_header.php";
        $data['css']="fakultas/vfakultas_css.php";
        $data['content']="home/vhomePage.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['footer']="template/template_footer.php";
        $data['content']="fakultas/vfakultas.php";        

        $this->load->view('template/vtemplate',$data);
    }

    public function loadTentangFakultas(){
        $data['page']="tentangFakultasPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        $data['instagram'] = $this->Minstagram->get();
        $data['header']="template/template_header.php";
        $data['css']="fakultas/vfakultas_css.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['footer']="template/template_footer.php";
        $data['content']="fakultas/vfakultas.php";        

        $this->load->view('template/vtemplate',$data);
    }
}

?>