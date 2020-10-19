<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Informasi extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model('Minformasi_hima');
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

    function informasi_hima(){
        $data['page'] = "Tentang Hima";
        $data['informasi'] = $this->Minformasi_hima->getAll();        
        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasi_css.php";
        $data['content']="informasi/vinformasi.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }

    function informasi_detail($id){            
            $data['informasi'] = $this->Minformasi_hima->getArtikel($id);
            
            // $num_char = strlen($informasi->deskripsi_hima);
            //                 if ($informasi->deskripsi_hima{$num_char - 1} != ' ') {
            //                     $num_char = strpos($$informasi->deskripsi_hima, ' ', $num_char); // cari posisi spasi, pencarian dilakukan mulai posisi 50
            //                 }
            //                 echo substr($informasi->deskripsi_hima, 0, 200) . '...'; die;
            
            $data['header']="template/template_header.php";            
            $data['content']="informasi/vDetailInformasi.php";
            $data['asidebar']="portofolio/vasidebar_portofolio.php";
            $data['footer']="template/template_footer.php";                
            $this->load->view('template/vtemplate',$data);
    }
}

?>