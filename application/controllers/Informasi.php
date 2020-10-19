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

    function form(){          
            $data['page']="articlePage";
            $input = $this->input->post(NULL,TRUE);
            extract($input);
            
            
            if ($this->input->post('submit')) {
            // print_r($input);die;
           
            
            
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];

            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";


            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
                // redirect('article');
            } else {
                            $foto11=$this->_upload($foto111,$foto1_name,$id_artikel);
                            $foto22=$this->_upload($foto222,$foto2_name,$id_artikel);
                            $foto33=$this->_upload($foto333,$foto3_name,$id_artikel);

                            $data=[
                                'judul'=>$this->input->post('judul'),
                                'jenis_artikel'=>$this->input->post('jenis_artikel'),
                                'essay'=>$this->input->post('essay'),
                                'essay2'=>$this->input->post('essay2'),
                                'essay3'=>$this->input->post('essay3'),
                                'foto1'=>$foto11,
                                'foto2'=>$foto22,
                                'foto3'=>$foto33,
                                'fk_akun' => $creator
                            ];
                            // print_r($data);die;
                        $this->Martikel->insert($data,$id_artikel);

                        $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->judul = '';
                    $obj->id_artikel = '';
                    $obj->essay = '';
                    $obj->essay2 = '';
                    $obj->essay3 = '';
                    $obj->foto1 = '';
                    $obj->foto2 = '';
                    $obj->foto3 = '';
                    $obj->jenis_artikel = "0";
                    
                    $data['data'] = $obj; 
                    $data['role'] = $this->session->userdata('role');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username');
                    $data['js'] = 'informasi/vinformasi_js.php'; 
                    $data['css'] = 'informasi/vinformasi_css';      
                    
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'informasi/vform.php';    
                    $data['asidebar']="portofolio/vasidebar_portofolio.php";
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
        

    }
}

?>