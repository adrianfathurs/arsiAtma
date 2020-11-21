<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Informasi extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model('Minformasi_hima');
        $this->load->model('Minformasi_universitas');
        $this->load->model('Minformasi_fakultas');
        $this->load->model('Minformasi_pamiy');
        $this->load->model('Minformasi_umum');
        $this->load->model('Mportofolio');
        $this->load->model("Makun");
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
        // Load library pagination
        $this->load->library('pagination');
        // Pengaturan pagination
        $config['base_url'] = base_url('Informasi/informasi_hima/');
        $config['total_rows'] = $this->Minformasi_hima->get()->num_rows();
        $config['per_page'] = 10 ;
        $config['offset'] = $this->uri->segment(3);
        // Styling pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        
        $this->pagination->initialize($config);

        $data['Informasi'] = $this->Minformasi_hima->get_offset($config['per_page'], $config['offset'])->result();
        foreach ($data['Informasi'] as $key => $val) {
			if (!empty($val->created_date)) {
                // $tanggal = ;
				$data['Informasi'][$key]->created_date	= $this->convert_date(date('Y-m-d', strtotime($val->created_date)));
			}
		}
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');  
        $data['fav'] = $this->Minformasi_hima->getFav($this->session->userdata('id'));

        // print_r($data['fav']);die;
        $data['page'] = "Tentang Hi";
        // $data['informasi'] = $this->Minformasi_hima->getAll();        

        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasi_css.php";
        $data['js'] = 'informasi/vinformasi_js.php'; 
        $data['content']="informasi/vinformasi.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }

    function informasi_universitas(){
        // Load library pagination
        $this->load->library('pagination');

        // Pengaturan pagination
        $config['base_url'] = base_url('Informasi/informasi_universitas/');
        $config['total_rows'] = $this->Minformasi_universitas->get()->num_rows();
        $config['per_page'] = 10 ;
        $config['offset'] = $this->uri->segment(3);

        // Styling pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);

        // Data untuk page index
        $data['Informasi'] = $this->Minformasi_universitas->get_offset($config['per_page'], $config['offset'])->result();
        foreach ($data['Informasi'] as $key => $val) {
			if (!empty($val->created_date)) {
                // $tanggal = ;
				$data['Informasi'][$key]->created_date	= $this->convert_date(date('Y-m-d', strtotime($val->created_date)));
			}
		}
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['fav'] = $this->Minformasi_universitas->getFav($this->session->userdata('id'));
        $data['page'] = "Tentang UAJY";
        // $data['informasi'] = $this->Minformasi_universitas->getAll();        
        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasiuniv_css.php";
        $data['js'] = 'informasi/vinformasiuniv_js.php'; 
        $data['content']="informasi/vinformasiuniv.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }

    function informasi_fakultas(){
        // Load library pagination
        $this->load->library('pagination');

        // Pengaturan pagination
        $config['base_url'] = base_url('Informasi/informasi_fakultas/');
        $config['total_rows'] = $this->Minformasi_fakultas->get()->num_rows();
        $config['per_page'] = 10 ;
        $config['offset'] = $this->uri->segment(3);

        // Styling pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);

        // Data untuk page index
        $data['Informasi'] = $this->Minformasi_fakultas->get_offset($config['per_page'], $config['offset'])->result();
        foreach ($data['Informasi'] as $key => $val) {
			if (!empty($val->created_date)) {
                // $tanggal = ;
				$data['Informasi'][$key]->created_date	= $this->convert_date(date('Y-m-d', strtotime($val->created_date)));
			}
		}
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['fav'] = $this->Minformasi_fakultas->getFav($this->session->userdata('id'));
        $data['page'] = "Tentang Fakultas";
        // $data['informasi'] = $this->Minformasi_fakultas->getAll();        
        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasifakultas_css.php";
        $data['js'] = 'informasi/vinformasifakultas_js.php'; 
        $data['content']="informasi/vinformasifakultas.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }

    function informasi_pamiy(){
        // Load library pagination
        $this->load->library('pagination');

        // Pengaturan pagination
        $config['base_url'] = base_url('Informasi/informasi_pamiy/');
        $config['total_rows'] = $this->Minformasi_pamiy->get()->num_rows();
        $config['per_page'] = 10 ;
        $config['offset'] = $this->uri->segment(3);

        // Styling pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);

        // Data untuk page index
        $data['Informasi'] = $this->Minformasi_pamiy->get_offset($config['per_page'], $config['offset'])->result();
        foreach ($data['Informasi'] as $key => $val) {
			if (!empty($val->created_date)) {
                // $tanggal = ;
				$data['Informasi'][$key]->created_date	= $this->convert_date(date('Y-m-d', strtotime($val->created_date)));
			}
		}
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['fav'] = $this->Minformasi_pamiy->getFav($this->session->userdata('id'));
        $data['page'] = "Tentang Hima";
        //$data['informasi'] = $this->Minformasi_pamiy->getAll();        
        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasipamiy_css.php";
        $data['js'] = 'informasi/vinformasipamiy_js.php'; 
        $data['content']="informasi/vinformasipamiy.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }
   
    function informasi_detail($id){               
        $data['page']="informasiHimasPage";              
        $data['cek_fav'] = $this->Minformasi_hima->cekfav($id,$this->session->userdata('id'));
        
        $data['informasi'] = $this->Minformasi_hima->getArtikel($id);         
        //convert date 
        $tanggal = date('Y-m-d', strtotime($data['informasi']->created_date));
        $data['informasi']->created_date = $this->tanggal_indo($tanggal,true);
        
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="informasi/vinformasi_css.php";
        $data['js'] = 'informasi/vinformasi_js.php'; 
        $data['header']="template/template_header.php";            
        $data['content']="informasi/vDetailInformasi.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    }
    // fungsi yang digunakan untuk like button hima di home
    function informasi_hima_home($id_info){       
        $data['page']="informasiHimasPage";              
        $id= $this->session->userdata('id'); 
        $data['cek_fav'] = $this->Minformasi_hima->cekfav($id_info,$this->session->userdata('id'));
        $cek_status=$this->Minformasi_hima->cekfav($id_info,$this->session->userdata('id'));
        
        if(empty($cek_status))
        {
            $this->saveinformasihimalikehome($id_info);
           
            
        }
        else{
            $this->hapusfavhimalikehome($id_info);
            
        }
    }      
       function saveinformasihimalikehome($id_info){
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_hima '=>$id_info,
            'statusfavoritehima'=>1
        ];
        $this->Minformasi_hima->saveinf($data);
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Disimpan ke Akun Anda                      
                    </div>");
        $this->session->set_flashdata($alert);
         
        redirect('Home');
    }
    function hapusfavhimalikehome($id_info){
        $this->Minformasi_hima->hapusfav($id_info,$this->session->userdata('id'));
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Akun Anda                    
                    </div>");
        $this->session->set_flashdata($alert);
        redirect('Home');
    }

    function informasi_univ_home($id_info){       
        $data['page']="informasiUnivPage";              
        
        $data['cek_fav'] = $this->Minformasi_universitas->cekfavuniv($id_info,$this->session->userdata('id'));
        $cek_status=$this->Minformasi_universitas->cekfavuniv($id_info,$this->session->userdata('id'));
        
        if(empty($cek_status))
        {
            $this->saveinformasiunivlikehome($id_info);
            
        }
        else{
            $this->hapusfavunivlikehome($id_info);
        }
        
    } 

    function saveinformasiunivlikehome($id_info){
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_univ '=>$id_info,
            'statusfavoriteuniv'=>1
        ];
        $this->Minformasi_universitas->saveinf($data);
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Disimpan ke Akun Anda                      
                    </div>");
        $this->session->set_flashdata($alert);
        redirect('Home');
    }
    function hapusfavunivlikehome($id_info){
        $this->Minformasi_universitas->hapusfavuniv($id_info,$this->session->userdata('id'));
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Akun Anda                    
                    </div>");
        $this->session->set_flashdata($alert);
        redirect('Home');
    }
    //
    //FUNGSI DIBAWAH INI JGN DIHAPUS
    //
    /* function informasi_univ_home($id){       
        $data['page']="informasiUnivPage";              
        
        $data['cek_fav'] = $this->Minformasi_universitas->cekfavuniv($id,$this->session->userdata('id'));
        $cek_status=$this->Minformasi_universitas->cekfavuniv($id,$this->session->userdata('id'));
        var_dump($id);
        if(empty($cek_status))
        {
            $this->saveinformasiuniv($id);
            
        }
        else{
            $this->hapusfavuniv($id);
        }
        $data['informasi'] = $this->Minformasi_hima->getArtikel($id);          
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="informasi/vinformasi_css.php";
        $data['js'] = 'informasi/vinformasi_js.php'; 
        $data['header']="template/template_header.php";            
        $data['content']="informasi/vDetailInformasi.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    } */

    function informasi_fakultas_home($id_info){       
        $data['page']="informasiFakultasPage";              
        
        $data['cek_favfakultas'] = $this->Minformasi_fakultas->cekfavfakultas($id_info,$this->session->userdata('id'));
        $cek_status=$this->Minformasi_fakultas->cekfavfakultas($id_info,$this->session->userdata('id'));
        
        if(empty($cek_status))
        {
            $this->saveinformasifakultaslikehome($id_info);
            
        }
        else{
            $this->hapusfavfakultaslikehome($id_info);
        }
        
    }          
   function saveinformasifakultaslikehome($id_info){
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_fakultas '=>$id_info,
            'statusfavoritefakultas'=>1
        ];
        $this->Minformasi_fakultas->saveinf($data);
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Disimpan ke Akun Anda                      
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Home");
    }
    function hapusfavfakultaslikehome($id_info){
        $this->Minformasi_fakultas->hapusfavfakultas($id_info,$this->session->userdata('id'));
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Akun Anda                    
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Home");
    }

    function informasi_detailuniv($id){   
        $data['page']="informasiUnivPage";                     
        $data['cek_favuniv'] = $this->Minformasi_universitas->cekfavuniv($id,$this->session->userdata('id'));
        // print_r($data);die;
        $data['informasi'] = $this->Minformasi_universitas->getArtikel($id);          
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id');
        $tanggal = date('Y-m-d', strtotime($data['informasi']->created_date));
        $data['informasi']->created_date = $this->tanggal_indo($tanggal,true);
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="informasi/vinformasiuniv_css.php";
        $data['js'] = 'informasi/vinformasiuniv_js.php'; 
        $data['header']="template/template_header.php";            
        $data['content']="informasi/vDetailInformasiuniv.php";
        $data['asidebar']="informasi/vasidebar_informasiuniv.php";
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    }
   

    function informasi_detailFakultas($id){   
        /* $data['page']="informasiFakultassPage"; */
         $data['page']="informasiFakultasPage";                   
        $data['cek_favfakultas'] = $this->Minformasi_fakultas->cekfavfakultas($id,$this->session->userdata('id'));
        $data['informasi'] = $this->Minformasi_fakultas->getArtikel($id);          
        
        //convert date 
         $tanggal = date('Y-m-d', strtotime($data['informasi']->created_date));
        $data['informasi']->created_date = $this->tanggal_indo($tanggal,true); 

        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="informasi/vinformasifakultas_css.php";
        $data['js'] = 'informasi/vinformasifakultas_js.php'; 
        $data['header']="template/template_header.php";            
        $data['content']="informasi/vDetailInformasifakultas.php";
        $data['asidebar']="informasi/vasidebar_informasifakultas.php";
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    }
    // fungsi yang digunakan untuk like button fakultas di home
    /* function informasi_fakultas_home($id){       
        $data['page']="informasiFakultassPage";
    } */

    function informasi_detailpamiy($id){                     
         $data['page']="informasiPamiysPage";
        $data['cek_fav'] = $this->Minformasi_pamiy->cekfavpamiy($id,$this->session->userdata('id'));
        $data['informasi'] = $this->Minformasi_pamiy->getArtikel($id);          
        
        //convert date 
        $tanggal = date('Y-m-d', strtotime($data['informasi']->created_date));
        $data['informasi']->created_date = $this->tanggal_indo($tanggal,true);

        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="informasi/vinformasipamiy_css.php";
        $data['js'] = 'informasi/vinformasipamiy_js.php'; 
        $data['header']="template/template_header.php";            
        $data['content']="informasi/vDetailInformasipamiy.php";
        $data['asidebar']="informasi/vasidebar_informasipamiy.php";
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    }
    // fungsi yang digunakan untuk like button pamiy di home
    /* function informasi_pamiy_home($id){       
        $data['page']="informasiPamiysPage";
    }  */

    function formhima(){                   
            $data['page']="informasiHimasPage";  

            $input = $this->input->post(NULL,TRUE);
            extract($input);           
            
            if ($this->input->post('submit')) {
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];
            $foto444=$_FILES['foto4'];
            $foto555=$_FILES['foto5'];
            
            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";
            $foto4_name="foto4";
            $foto5_name="foto5";

            $akun= $this->Makun->get_by_id($creator);
            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
            } else {
                            $foto11=$this->_upload($foto111,$foto1_name,$id_info);
                            $foto22=$this->_upload($foto222,$foto2_name,$id_info);
                            $foto33=$this->_upload($foto333,$foto3_name,$id_info);
                            $foto44=$this->_upload($foto444,$foto4_name,$id_info);
                            $foto55=$this->_upload($foto555,$foto5_name,$id_info);

                            $data=[
                                'judul_hima'=>$this->input->post('judul'),                               
                                'foto4_hima'=>$foto44,
                                'foto5_hima'=>$foto55,
                                'deskripsi_hima'=>$this->input->post('essay'),
                                'foto1_hima'=>$foto11,
                                'foto2_hima'=>$foto22,
                                'foto3_hima'=>$foto33,
                                'nama_penulis' => $akun->nama_lengkap,
                                'status' => 1
                            ];

                            // print_r($data);die;
                        $this->Minformasi_hima->insert($data,$id_info);
                        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                                    <div class='toast-header'>
                                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
                            
                                        <strong class='mr-auto'>Notifikasi </strong>                                
                                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='toast-body'>
                                        Informasi Hima Berhasil Diperbarui
                                    </div>");
                        $this->session->set_flashdata($alert);                        
                        redirect('Informasi/informasi_hima');
                        // $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->judul_hima = '';
                    $obj->id_informasi_hima  = '';
                    $obj->deskripsi_hima = '';
                    $obj->foto4_hima = '';
                    $obj->foto5_hima = '';
                    $obj->foto1_hima = '';
                    $obj->foto2_hima = '';
                    $obj->foto3_hima = '';
                    // $obj->jenis_artikel = "0";
                    $data['data'] = $obj;
                    $data['informasi'] = "hima";                   
                    $data['js'] = 'informasi/vinformasi_js.php'; 
                    $data['css'] = 'informasi/vinformasi_css';      
                    $data['type_akun'] = $this->session->userdata('type_akun');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username'); 
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'informasi/vform.php';    
                    $data['asidebar']="portofolio/vasidebar_portofolio.php";
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
    }

    function formuniv(){        
            /* $data['page']="informasiUnivsPage"; */ 
        
            $input = $this->input->post(NULL,TRUE);
            extract($input);           
            
            if ($this->input->post('submit')) {
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];
            $foto444=$_FILES['foto4'];
            $foto555=$_FILES['foto5'];
            
            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";
            $foto4_name="foto4";
            $foto5_name="foto5";

            $akun= $this->Makun->get_by_id($creator);
            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
            } else {
                            $foto11=$this->_uploaduniv($foto111,$foto1_name,$id_info);
                            $foto22=$this->_uploaduniv($foto222,$foto2_name,$id_info);
                            $foto33=$this->_uploaduniv($foto333,$foto3_name,$id_info);
                            $foto44=$this->_uploaduniv($foto444,$foto4_name,$id_info);
                            $foto55=$this->_uploaduniv($foto555,$foto5_name,$id_info);

                            $data=[
                                'judul_univ'=>$this->input->post('judul'),                               
                                'foto1_univ'=>$foto11,
                                'foto2_univ'=>$foto22,
                                'foto3_univ'=>$foto33,
                                'foto4_univ'=>$foto44,
                                'foto5_univ'=>$foto55,
                                'deskripsi_univ'=>$this->input->post('essay'),
                                'nama_penulis' => $akun->nama_lengkap,
                                'status' => 1
                            ];
                            
                            // print_r($data);die;
                        $this->Minformasi_universitas->insert($data,$id_info);
                        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                                    <div class='toast-header'>
                                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
                            
                                        <strong class='mr-auto'>Notifikasi </strong>                                
                                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='toast-body'>
                                        Informasi Universitas Berhasil Diperbarui
                                    </div>");
                        $this->session->set_flashdata($alert);    
                        redirect('informasi/informasi_universitas');
                        // $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->judul_univ = '';
                    $obj->id_informasi_univ  = '';
                    $obj->deskripsi_univ = '';
                    $obj->foto4_univ = '';
                    $obj->foto5_univ = '';
                    $obj->foto1_univ = '';
                    $obj->foto2_univ = '';
                    $obj->foto3_univ = '';
                    // $obj->jenis_artikel = "0";
                    $data['data'] = $obj;
                    $data['informasi'] = "univ";                   
                    $data['js'] = 'informasi/vinformasiuniv_js.php'; 
                    $data['css'] = 'informasi/vinformasiuniv_css';      
                    $data['type_akun'] = $this->session->userdata('type_akun');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username'); 
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'informasi/vformuniv.php';    
                    $data['asidebar']="portofolio/vasidebar_portofolio.php";
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
    }

    function formfakultas(){      
            /* $data['page']="informasiFakultassPage"; */

            $input = $this->input->post(NULL,TRUE);
            extract($input);           
            
            if ($this->input->post('submit')) {
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];
            $foto444=$_FILES['foto4'];
            $foto555=$_FILES['foto5'];
            
            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";
            $foto4_name="foto4";
            $foto5_name="foto5";

            $akun= $this->Makun->get_by_id($creator);
            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
            } else {
                            $foto11=$this->_uploadfakultas($foto111,$foto1_name,$id_info);
                            $foto22=$this->_uploadfakultas($foto222,$foto2_name,$id_info);
                            $foto33=$this->_uploadfakultas($foto333,$foto3_name,$id_info);
                            $foto44=$this->_uploadfakultas($foto444,$foto4_name,$id_info);
                            $foto55=$this->_uploadfakultas($foto555,$foto5_name,$id_info);

                            $data=[
                                'judul_fakultas'=>$this->input->post('judul'),                               
                                'foto1_fakultas'=>$foto11,
                                'foto2_fakultas'=>$foto22,
                                'foto3_fakultas'=>$foto33,
                                'foto4_fakultas'=>$foto44,
                                'foto5_fakultas'=>$foto55,
                                'deskripsi_fakultas'=>$this->input->post('essay'),
                                'nama_penulis' => $akun->nama_lengkap,
                                'status' => 1
                            ];
                            // print_r($data);die;
                        $this->Minformasi_fakultas->insert($data,$id_info);
                        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                                    <div class='toast-header'>
                                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
                            
                                        <strong class='mr-auto'>Notifikasi </strong>                                
                                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='toast-body'>
                                        Informasi Fakultas Berhasil Diperbarui
                                    </div>");
                        $this->session->set_flashdata($alert);
                        redirect('Informasi/informasi_fakultas');
                        // $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->judul_fakultas = '';
                    $obj->id_informasi_fakultas  = '';
                    $obj->deskripsi_fakultas = '';
                    $obj->foto4_fakultas = '';
                    $obj->foto5_fakultas = '';
                    $obj->foto1_fakultas = '';
                    $obj->foto2_fakultas = '';
                    $obj->foto3_fakultas = '';
                    // $obj->jenis_artikel = "0";
                    $data['data'] = $obj;
                    $data['informasi'] = "fakultas";                   
                    $data['js'] = 'informasi/vinformasifakultas_js.php'; 
                    $data['css'] = 'informasi/vinformasifakultas_css';      
                    $data['type_akun'] = $this->session->userdata('type_akun');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username'); 
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'informasi/vformfakultas.php';    
                    $data['asidebar']="portofolio/vasidebar_portofolio.php";
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
    }

    function formpamiy(){    
            /* $data['page']="informasiPamiysPage";  */
        
            $input = $this->input->post(NULL,TRUE);
            extract($input);           
            
            if ($this->input->post('submit')) {
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];
            $foto444=$_FILES['foto4'];
            $foto555=$_FILES['foto5'];
            
            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";
            $foto4_name="foto4";
            $foto5_name="foto5";

            $akun= $this->Makun->get_by_id($creator);
            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
            } else {
                            $foto11=$this->_uploadpamiy($foto111,$foto1_name,$id_info);
                            $foto22=$this->_uploadpamiy($foto222,$foto2_name,$id_info);
                            $foto33=$this->_uploadpamiy($foto333,$foto3_name,$id_info);
                            $foto44=$this->_uploadpamiy($foto444,$foto4_name,$id_info);
                            $foto55=$this->_uploadpamiy($foto555,$foto5_name,$id_info);

                            $data=[
                                'judul_pamiy'=>$this->input->post('judul'),                               
                                'foto1_pamiy'=>$foto11,
                                'foto2_pamiy'=>$foto22,
                                'foto3_pamiy'=>$foto33,
                                'foto4_pamiy'=>$foto44,
                                'foto5_pamiy'=>$foto55,
                                'deskripsi_pamiy'=>$this->input->post('essay'),
                                'nama_penulis' => $akun->nama_lengkap,
                                'status' => 1
                            ];

                            // print_r($data);die;
                        $this->Minformasi_pamiy->insert($data,$id_info);
                        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                                    <div class='toast-header'>
                                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
                            
                                        <strong class='mr-auto'>Notifikasi </strong>                                
                                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='toast-body'>
                                        Informasi PAMIY Berhasil Diperbarui
                                    </div>");
                        $this->session->set_flashdata($alert);
                        redirect('Informasi/informasi_pamiy');
                        // $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->judul_pamiy = '';
                    $obj->id_informasi_pamiy  = '';
                    $obj->deskripsi_pamiy = '';
                    $obj->foto4_pamiy = '';
                    $obj->foto5_pamiy = '';
                    $obj->foto1_pamiy = '';
                    $obj->foto2_pamiy = '';
                    $obj->foto3_pamiy = '';
                    // $obj->jenis_artikel = "0";

                    $data['data'] = $obj;
                    $data['informasi'] = "pamiy";                   
                    $data['js'] = 'informasi/vinformasipamiy_js.php'; 
                    $data['css'] = 'informasi/vinformasipamiy_css';      
                    $data['type_akun'] = $this->session->userdata('type_akun');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username'); 
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'informasi/vformpamiy.php';    
                    $data['asidebar']="portofolio/vasidebar_portofolio.php";
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
    }

    function _upload($foto,$ft,$id){
        $data['page']="articlePage";
                $data = $this->Minformasi_hima->getArtikel($id);
                
                $config['upload_path']='./assets/img/informasiHima/';
                $config['allowed_types']='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if($ft=="foto1"){
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_hima){
                            return $data->foto1_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                        }
                    }
                    else{
                        return $this->upload->data('file_name');
                    }   
                }elseif($ft=="foto2"){
                    if(!$this->upload->do_upload('foto2')){
                        if($data->foto2_hima){
                            return $data->foto2_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                }elseif($ft=="foto3"){
                    if(!$this->upload->do_upload('foto3')){
                        if($data->foto3_hima){
                            return $data->foto3_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto4"){
                    if(!$this->upload->do_upload('foto4')){
                        if($data->foto4_hima){
                            return $data->foto4_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload4");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto5"){
                    if(!$this->upload->do_upload('foto5')){
                        if($data->foto5_hima){
                            return $data->foto5_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload5");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  
                }
    }

    function _uploaduniv($foto,$ft,$id){
        $data['page']="articlePage";
                $data = $this->Minformasi_universitas->getArtikel($id);
                
                $config['upload_path']='./assets/img/informasiUniv/';
                $config['allowed_types']='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if($ft=="foto1"){
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_univ){
                            return $data->foto1_univ;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                        }
                    }
                    else{
                        return $this->upload->data('file_name');
                    }   
                }elseif($ft=="foto2"){
                    if(!$this->upload->do_upload('foto2')){
                        if($data->foto2_univ){
                            return $data->foto2_univ;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                }elseif($ft=="foto3"){
                    if(!$this->upload->do_upload('foto3')){
                        if($data->foto3_univ){
                            return $data->foto3_univ;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto4"){
                    if(!$this->upload->do_upload('foto4')){
                        if($data->foto4_univ){
                            return $data->foto4_univ;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload4");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto5"){
                    if(!$this->upload->do_upload('foto5')){
                        if($data->foto5_univ){
                            return $data->foto5_univ;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload5");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  
                }
    }

    function _uploadfakultas($foto,$ft,$id){
        $data['page']="articlePage";
                $data = $this->Minformasi_fakultas->getArtikel($id);
                
                $config['upload_path']='./assets/img/informasiFakultas/';
                $config['allowed_types']='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if($ft=="foto1"){
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_fakultas){
                            return $data->foto1_fakultas;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                        }
                    }
                    else{
                        return $this->upload->data('file_name');
                    }   
                }elseif($ft=="foto2"){
                    if(!$this->upload->do_upload('foto2')){
                        if($data->foto2_fakultas){
                            return $data->foto2_fakultas;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                }elseif($ft=="foto3"){
                    if(!$this->upload->do_upload('foto3')){
                        if($data->foto3_fakultas){
                            return $data->foto3_fakultas;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto4"){
                    if(!$this->upload->do_upload('foto4')){
                        if($data->foto4_fakultas){
                            return $data->foto4_fakultas;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload4");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto5"){
                    if(!$this->upload->do_upload('foto5')){
                        if($data->foto5_fakultas){
                            return $data->foto5_fakultas;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload5");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  
                }
    }

    function _uploadpamiy($foto,$ft,$id){
        $data['page']="articlePage";
                $data = $this->Minformasi_pamiy->getArtikel($id);
                
                $config['upload_path']='./assets/img/informasiPamiy/';
                $config['allowed_types']='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if($ft=="foto1"){
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_pamiy){
                            return $data->foto1_pamiy;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                        }
                    }
                    else{
                        return $this->upload->data('file_name');
                    }   
                }elseif($ft=="foto2"){
                    if(!$this->upload->do_upload('foto2')){
                        if($data->foto2_pamiy){
                            return $data->foto2_pamiy;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                }elseif($ft=="foto3"){
                    if(!$this->upload->do_upload('foto3')){
                        if($data->foto3_pamiy){
                            return $data->foto3_pamiy;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto4"){
                    if(!$this->upload->do_upload('foto4')){
                        if($data->foto4_pamiy){
                            return $data->foto4_pamiy;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload4");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto5"){
                    if(!$this->upload->do_upload('foto5')){
                        if($data->foto5_pamiy){
                            return $data->foto5_pamiy;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload5");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  
                }
    }

    function updatehima($id){

        $data['page']="informasiHimasPage";

        $data['data'] = $this->Minformasi_hima->getArtikel($id);
        $data['informasi'] = "hima";                   
        $data['js'] = 'informasi/vinformasi_js.php'; 
        $data['css'] = 'informasi/vinformasi_css';      
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['header']="template/template_header.php";            
        $data['content'] = 'informasi/vform.php';    
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";          
        $this->load->view('template/vtemplate', $data);
    }


    function updateuniv($id){

        /* $data['page']="informasiUnivsPage"; */

        $data['data'] = $this->Minformasi_universitas->getArtikel($id);
        $data['informasi'] = "hima";                   
        $data['js'] = 'informasi/vinformasiuniv_js.php'; 
        $data['css'] = 'informasi/vinformasiuniv_css';      
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['header']="template/template_header.php";            
        $data['content'] = 'informasi/vformuniv.php';    
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";          
        $this->load->view('template/vtemplate', $data);
    }
    
    function updatefakultas($id){

        /* $data['page']="informasiFakultassPage"; */

        $data['data'] = $this->Minformasi_fakultas->getArtikel($id);
        $data['informasi'] = "hima";                   
        $data['js'] = 'informasi/vinformasifakultas_js.php'; 
        $data['css'] = 'informasi/vinformasifakultas_css';      
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['header']="template/template_header.php";            
        $data['content'] = 'informasi/vformfakultas.php';    
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";          
        $this->load->view('template/vtemplate', $data);
    }

    function updatepamiy($id){

        /* $data['page']="informasiPamiysPage"; */

        $data['data'] = $this->Minformasi_pamiy->getArtikel($id);
        $data['informasi'] = "hima";                   
        $data['js'] = 'informasi/vinformasipamiy_js.php'; 
        $data['css'] = 'informasi/vinformasipamiy_css';      
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['header']="template/template_header.php";            
        $data['content'] = 'informasi/vformpamiy.php';    
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";          
        $this->load->view('template/vtemplate', $data);
    }

    function delete($id){
        $dataInf = $this->Minformasi_hima->getArtikel($id);
        $data=[
            'judul_hima'=>$dataInf->judul_hima,                               
            'foto4_hima'=>$dataInf->foto4_hima,
            'foto5_hima'=>$dataInf->foto5_hima,
            'deskripsi_hima'=>$dataInf->deskripsi_hima,
            'foto1_hima'=>$dataInf->foto1_hima,
            'foto2_hima'=>$dataInf->foto2_hima,
            'foto3_hima'=>$dataInf->foto3_hima,
            'nama_penulis' => $dataInf->nama_penulis,
            'status' => 0
        ];
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Database
                    </div>");
        $this->session->set_flashdata($alert);
        $this->Minformasi_hima->insert($data,$id);
        redirect("Informasi/informasi_hima");
    }

    function deleteuniv($id){
        $dataInf = $this->Minformasi_universitas->getArtikel($id);
        $data=[
            'judul_univ'=>$dataInf->judul_univ,                               
            'foto4_univ'=>$dataInf->foto4_univ,
            'foto5_univ'=>$dataInf->foto5_univ,
            'deskripsi_univ'=>$dataInf->deskripsi_univ,
            'foto1_univ'=>$dataInf->foto1_univ,
            'foto2_univ'=>$dataInf->foto2_univ,
            'foto3_univ'=>$dataInf->foto3_univ,
            'nama_penulis' => $dataInf->nama_penulis,
            'status' => 0
        ];
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Database
                    </div>");
        $this->session->set_flashdata($alert);  
        $this->Minformasi_universitas->insert($data,$id);
        redirect("Informasi/informasi_universitas");
    }

    function deletefakultas($id){
        $dataInf = $this->Minformasi_fakultas->getArtikel($id);
        $data=[
            'judul_fakultas'=>$dataInf->judul_fakultas,                               
            'foto4_fakultas'=>$dataInf->foto4_fakultas,
            'foto5_fakultas'=>$dataInf->foto5_fakultas,
            'deskripsi_fakultas'=>$dataInf->deskripsi_fakultas,
            'foto1_fakultas'=>$dataInf->foto1_fakultas,
            'foto2_fakultas'=>$dataInf->foto2_fakultas,
            'foto3_fakultas'=>$dataInf->foto3_fakultas,
            'nama_penulis' => $dataInf->nama_penulis,
            'status' => 0
        ];
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Database
                    </div>");
        $this->session->set_flashdata($alert);  
        $this->Minformasi_fakultas->insert($data,$id);
        redirect("Informasi/informasi_fakultas");
    }    

    function deletepamiy($id){
        $dataInf = $this->Minformasi_pamiy->getArtikel($id);
        $data=[
            'judul_pamiy'=>$dataInf->judul_pamiy,                               
            'foto4_pamiy'=>$dataInf->foto4_pamiy,
            'foto5_pamiy'=>$dataInf->foto5_pamiy,
            'deskripsi_pamiy'=>$dataInf->deskripsi_pamiy,
            'foto1_pamiy'=>$dataInf->foto1_pamiy,
            'foto2_pamiy'=>$dataInf->foto2_pamiy,
            'foto3_pamiy'=>$dataInf->foto3_pamiy,
            'nama_penulis' => $dataInf->nama_penulis,
            'status' => 0
        ];
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Database
                    </div>");
        $this->session->set_flashdata($alert);  
        $this->Minformasi_pamiy->insert($data,$id);
        redirect("Informasi/informasi_pamiy");
    }
    

    function saveinformasi($id_info){
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_hima '=>$id_info,
            'statusfavoritehima'=>1
        ];
        $this->Minformasi_hima->saveinf($data);
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Disimpan ke Akun Anda                      
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Hima/".$id_info);
    }

    function saveinformasiuniv($id_info){
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_univ '=>$id_info,
            'statusfavoriteuniv'=>1
        ];
        $this->Minformasi_universitas->saveinf($data);
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Disimpan ke Akun Anda                      
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Informasi/informasi_detailuniv/".$id_info);
    }

    function saveinformasifakultas($id_info){
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_fakultas '=>$id_info,
            'statusfavoritefakultas'=>1
        ];
        $this->Minformasi_fakultas->saveinf($data);
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Disimpan ke Akun Anda                      
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Informasi/informasi_detailfakultas/".$id_info);
    }

    function saveinformasipamiy($id_info){
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_pamiy '=>$id_info,
            'statusfavoritepamiy'=>1
        ];
        $this->Minformasi_pamiy->saveinf($data);
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Disimpan ke Akun Anda                      
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Informasi/informasi_detailpamiy/".$id_info);
    }

    function hapusfav($id_info){
        $this->Minformasi_hima->hapusfav($id_info,$this->session->userdata('id'));
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Akun Anda                    
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Hima/".$id_info);
    }

    function hapusfavuniv($id_info){
        $this->Minformasi_universitas->hapusfavuniv($id_info,$this->session->userdata('id'));
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Akun Anda                    
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Informasi/informasi_detailuniv/".$id_info);
    }

    function hapusfavfakultas($id_info){
        $this->Minformasi_fakultas->hapusfavfakultas($id_info,$this->session->userdata('id'));
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Akun Anda                    
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Informasi/informasi_detailfakultas/".$id_info);
    }

    function hapusfavpamiy($id_info){
        $this->Minformasi_pamiy->hapusfavpamiy($id_info,$this->session->userdata('id'));
        $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                    <div class='toast-header'>
                        <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
            
                        <strong class='mr-auto'>Notifikasi </strong>                                
                        <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='toast-body'>
                        Informasi Ini Berhasil Dihapus dari Akun Anda                    
                    </div>");
        $this->session->set_flashdata($alert);
        redirect("Informasi/informasi_detailpamiy/".$id_info);
    }

    function tanggal_indo($tanggal, $cetak_hari = false){
        $hari = array ( 1 =>    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                    'Minggu'
                );
                
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split 	  = explode('-', $tanggal);
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        
        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    
}

    private function convert_date($date) {
		$split_date			= explode("-", $date);
		$year				= $split_date[0];
		$month				= (int) $split_date[1];
		$day				= $split_date[2];

		if		($month == 1)	{ $month = "Januari"; }
		else if ($month == 2)	{ $month = "Februari"; }
		else if ($month == 3)	{ $month = "Maret"; }
		else if ($month == 4)	{ $month = "April"; }
		else if ($month == 5)	{ $month = "Mei"; }
		else if ($month == 6)	{ $month = "Juni"; }
		else if ($month == 7)	{ $month = "Juli"; }
		else if ($month == 8)	{ $month = "Agustus"; }
		else if ($month == 9)	{ $month = "September"; }
		else if ($month == 10)	{ $month = "Oktober"; }
		else if ($month == 11)	{ $month = "November"; }
		else if ($month == 12)	{ $month = "Desember"; }

		$final_convert = $day . " " . $month . " " . $year;
		return $final_convert;
	}


    /* function likeButton(){
       $id_informasi=$this->input->post('id_informasi');
       $id_jenis_informasi=$this->input->post('id_jenis_informasi');
       $id_button=$this->input->post('id_button');
       if($id_jenis_informasi==1){
        //informasi_hima
        if($id_button==1){
            //insert
              $data=[
                'fk_akun'=>$this->session->userdata('id'),
                'fk_informasi_hima'=> $id_informasi,
                'statusfavoritehima'=> $id_button

            ];
            $insert=$this->Minformasi_hima->saveFav($data);
            if($insert){
                return echo "";
            }
            else{
                return echo "Belum tersimpan";
            }
        }
        else{
            //update
            
          
           
        }
       }
       elseif($id_informasi==2){
        //informas_univ
       }
       elseif($id_informasi==3){
        //informasi_fakultas
       }

    } */

    function manajemen_informasi(){
        $id= $this->session->userdata('id'); 
         $data['manajemenInformasiHima'] = $this->Minformasi_hima->joinInformasiFavoriteHima($id);
         $data['manajemenInformasiUniv'] = $this->Minformasi_universitas->joinInformasiFavoriteUniv($id);
         $data['manajemenInformasiFakultas'] = $this->Minformasi_fakultas->joinInformasiFavoriteFakultas($id);
         $data['manajemenInformasiUmum'] = $this->Minformasi_umum->joinInformasiFavoriteUmum($id);
         $data['manajemenInformasiPamiy'] = $this->Minformasi_pamiy->joinInformasiFavoritePamiy($id);
         $data['manajemenInformasiPortofolio'] = $this->Mportofolio->joinInformasiFavoritePortofolio($id);
        // print_r($data);die;         
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="informasi/vmanajemenInformasi_css.php";
        $data['header']="template/template_header.php";            
        $data['content']="informasi/vmanajemenInformasi.php";
        $data['js'] ='informasi/vmanajemenInformasi_js.php'; 
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    }


}
    
?>