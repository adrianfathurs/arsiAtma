<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Hima extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model('Morganisasi');
        $this->load->model('Makun');
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
        $data['informasiHima']=$this->Minformasi_hima->getThreeInformasi();
        $data['instagram'] = $this->Minstagram->get();
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
        $data['instagram'] = $this->Minstagram->get();
        $data['header']="template/template_header.php";
        $data['css']="hima/vhima_css.php";
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
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
        $data['ph'] = $this->Morganisasi->MloadOrganisasiPh();
        $data['instagram'] = $this->Minstagram->get();
        $data['header']="template/template_header.php";
        $data['css']="hima/vorganisasiHima_css.php";
        $data['content']="hima/vorganisasiHima.php";        
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    function updateOrganisasiHima($id_biro,$id_pencet){

        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        // print_r($data);die;
        $data['instagram'] = $this->Minstagram->get();
        if ($id_pencet=="1"){

            $data['ph']=$this->Morganisasi->MloadOrganisasiPhById($id_biro);
             $data['header']="template/template_header.php";
        $data['css']='hima/vorganisasiHima_css.php';
        $data['js'] = 'hima/vorganisasiHima_js.php'; 
        $data['content']="hima/vphForm.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
        }
        elseif($id_pencet=="2"){

            $data['biro']=$this->Morganisasi->MloadOrganisasiBiroById($id_biro);
            $data['header']="template/template_header.php";
        $data['css']='hima/vorganisasiHima_css.php';
        $data['js'] = 'hima/vorganisasiHima_js.php'; 
        $data['content']="hima/vbiroForm.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
        }
        
        
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
                
                $tanda=$this->_hapusFileBiro($id_biro);
                
                            $foto11=$this->_upload($foto111,$foto1_name,$id_biro);
                            $foto22=$this->_upload($foto222,$foto2_name,$id_biro);
                            // print_r($foto111);die;
                        
                            $data=[
                                'nama_biro'=>$this->input->post('namaBiro'),                               
                                'foto1_biro'=>$foto11,
                                'foto2_biro'=>$foto22,
                                'tugas_biro'=>"tidakAda",
                                'deskripsi_biro'=>$this->input->post('deskripsiBiro')
                            ];
                            
                            // print_r($data);die;
                            //$ket=$this->_hapusFileBiro($id_biro,$data);
                        
                                
                                    $this->Morganisasi->insertBiro($data,$id_biro);
                               
                        
                          redirect('hima/loadOrganisasiHima');
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
                    $data['instagram'] = $this->Minstagram->get();
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
                $config['max_size']=10000;
                $this->load->library('upload',$config);                
                if($ft=="foto1"){
                    
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_biro){
                            return $data->foto1_biro;
                            // die;
                        }else {
                            $this->session->set_userdata('typeNotif', "gagalUpload2");

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
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                            return "";
                            
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                } else{
                    echo "asdadsasd";die;
                }
    }
/*  */
 function formOrganisasiPh(){                     
            $input = $this->input->post(NULL,TRUE);
            extract($input);           
            
            if ($this->input->post('submit')) {
                // print_r($input);die;
                
            $foto111=$_FILES['foto1'];
            // var_dump($foto111); die();
            $foto1_name="foto1";
            
            // $akun= $this->Makun->get_by_id($creator);
            // print_r($akun);die;
            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
                // redirect('article');
            } else {
                            $tanda=$this->_hapusFilePh($id_ph);
                            $foto11=$this->_uploadph($foto111,$foto1_name,$id_ph);
                            
                            // print_r($foto111);die;

                            $data=[
                                'nama_lengkap'=>$this->input->post('namaPh'),                               
                                'foto1_ph'=>$foto11,
                                'tugas_ph'=>"tidakAda",
                                'deskripsi_ph'=>"tidakAda"
                            ];
                            // print_r($data);die;
                            
                                $this->Morganisasi->insertPh($data,$id_ph);
                                 
                        
                        redirect('hima/loadOrganisasiHima');
                        // $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->nama_lengkap = '';
                    $obj->id_ph = '';
                    $obj->deskripsi_ph = '';
                    $obj->tugas_ph = '';
                    $obj->foto1_ph = '';
                    
                    
                    // $obj->jenis_artikel = "0";
                    $data['data'] = $obj;
                    $data['informasi'] = "hima";                   
                    $data['js'] = 'informasi/vinformasi_js.php'; 
                    $data['css'] = 'informasi/vinformasi_css';      
                    $data['type_akun'] = $this->session->userdata('type_akun');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username'); 
                    $data['instagram'] = $this->Minstagram->get();
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'hima/vphForm.php';    
                    $data['css']='hima/vorganisasiHima_css.php';
                    $data['js'] = 'hima/vorganisasiHima_js.php'; 
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
        

    }
    function _uploadph($foto,$ft,$id_ph){
                $data = $this->Morganisasi->MloadOrganisasiPhById($id_ph);
                
                $config['upload_path']='./assets/img/organisasiHima/';
                $config['allowed_types']='jpg|png|jpeg';
                $config['max_size']= 10000;
                $this->load->library('upload',$config);                
                if($ft=="foto1"){
                    
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_ph){
                            return $data->foto1_ph;
                            // die;
                        }else {
                            
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                            return "";
                        }
                    }
                    else{
                        
                        return $this->upload->data('file_name');
                    }   
                
                } else{
                    echo "asdadsasd";die;
                }
    }
/*  */


    public function loadDetailOrganisasiBiro($id_biro){
        $data['page']="organisasiHimaPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        // print_r($data);die;
        $data['biro']=$this->Morganisasi->MloadOrganisasiBiroById($id_biro);
        $data['header']="template/template_header.php";
        $data['css']='hima/vdetailbiro_css.php';
        $data['js'] = 'hima/vorganisasiHima_js.php'; 
        $data['content']="hima/vdetailBiro.php";
        $data['instagram'] = $this->Minstagram->get();
        $data['asidebar']="hima/vasidebarorganisasi.php";
        $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);      
    }

    public function loadDetailOrganisasiPh($id_ph){
        $data['page']="organisasiHimaPage";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        // print_r($data);die;
        $data['ph']=$this->Morganisasi->MloadOrganisasiPhById($id_ph);
        $data['header']="template/template_header.php";
        $data['css']='hima/vdetailph_css.php';
        $data['js'] = 'hima/vorganisasiHima_js.php'; 
        $data['content']="hima/vdetailph.php";
        $data['instagram'] = $this->Minstagram->get();
        $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['asidebar']="hima/vasidebarorganisasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);      
    }

    public function _hapusFilePh($id_ph)
    {
       $data=$this->Morganisasi->MloadOrganisasiPhById($id_ph);
       $nama='./assets/img/organisasiHima/'.$data->foto1_ph;
        
       if(is_readable($nama)){
         unlink($nama);
         return true;
       }
       else{
           return false;
       }
        
    }
    public function _hapusFileBiro($id_biro){
         $data=$this->Morganisasi->MloadOrganisasiBiroById($id_biro);
       $nama='./assets/img/organisasiHima/'.$data->foto1_biro;
        
        if(is_readable($nama)){
           unlink($nama);
           return true;
        }
        else{
           return false;
       }
        
    }

}

?>