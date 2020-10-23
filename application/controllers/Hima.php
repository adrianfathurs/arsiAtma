<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Hima extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model('Morganisasi');
        $this->load->model('Makun');
        $this->load->library('upload');

    }

    public function index(){
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="hima/vhima_css.php";
        $data['content']="home/vhome.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="hima/vhima.php";        

        $this->load->view('template/vtemplate',$data);
    }

    public function loadTentangHima(){
        $data['page']="tentangHimaPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="hima/vhima_css.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";
        $data['content']="hima/vhima.php";        

        $this->load->view('template/vtemplate',$data);
    }

    public function loadOrganisasiHima(){
        $data['page']="organisasiHimaPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        /* load data biro */
        $data['biro'] = $this->Morganisasi->MloadOrganisasiBiro();
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="hima/vorganisasiHima_css.php";
        
        $data['content']="hima/vorganisasiHima.php";        
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    function updateOrganisasiHima($id_biro){

        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        // print_r($data);die;
        $data['biro']=$this->Morganisasi->MloadOrganisasiBiroById($id_biro);
        $data['header']="template/template_header.php";
        $data['css']='hima/vorganisasiHima_css.php';
        $data['js'] = 'hima/vorganisasiHima_js.php'; 
        $data['content']="hima/vbiroForm.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }

      function formOrganisasiBiro(){                     
            $input = $this->input->post(NULL,TRUE);
            extract($input);           
            
            if ($this->input->post('submit')) {
                // print_r($input);die;
                
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            
            // var_dump($foto111); die();
            
            $foto1_name="foto1";
            $foto2_name="foto2";
            
            

            // $akun= $this->Makun->get_by_id($creator);
            // print_r($akun);die;
            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
                // redirect('article');
            } else {
                            $foto11=$this->_upload($foto111,$foto1_name,$id_biro);
                            $foto22=$this->_upload($foto222,$foto2_name,$id_biro);
                            

                            $data=[
                                'nama_biro'=>$this->input->post('namaBiro'),                               
                                'foto1_biro'=>$foto11,
                                'foto2_biro'=>$foto22,
                                'tugas_biro'=>$this->input->post('tugasBiro'),
                                'deskripsi_biro'=>$this->input->post('deskripsiBiro')
                            ];
                            // print_r($data);die;
                        $this->Morganisasi->insertBiro($data,$id_biro);
                        redirect('Hima/loadOrganisasiHima');
                        // $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->nama_biro = '';
                    $obj->id_biro = '';
                    $obj->deskripsi_biro = '';
                    $obj->tugas_biro = '';
                    $obj->foto1_biro = '';
                    $obj->foto2_biro = '';
                    
                    // $obj->jenis_artikel = "0";
                    $data['data'] = $obj;
                    $data['informasi'] = "hima";                   
                    $data['js'] = 'informasi/vinformasi_js.php'; 
                    $data['css'] = 'informasi/vinformasi_css';      
                    $data['type_akun'] = $this->session->userdata('type_akun');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username'); 
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'hima/vbiroForm.php';    
                    $data['css']='hima/vorganisasiHima_css.php';
                    $data['js'] = 'hima/vorganisasiHima_js.php'; 
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
        

    }
    function _upload($foto,$ft,$id_biro){
                $data = $this->Morganisasi->MloadOrganisasiBiroById($id_biro);
                
                $config['upload_path']='./assets/img/organisasiHima/';
                $config['allowed_types']='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if($ft=="foto1"){
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_biro){
                            return $data->foto1_biro;
                        }else {
                            return $foto111;
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                        }
                    }
                    else{
                        return $this->upload->data('file_name');
                    }   
                }elseif($ft=="foto2"){
                    if(!$this->upload->do_upload('foto2')){
                        if($data->foto2_biro){
                            return $data->foto2_biro;
                        }else {
                            return $foto222;
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                }
    }

}

?>