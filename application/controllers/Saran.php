<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Saran extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

        $this->load->model('Msaran');
        $this->load->model('Minstagram');
    }

    public function index(){
        $data['page']="saranPage";
        $data['instagram'] = $this->Minstagram->get();
         $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 

        $data['header']="template/template_header.php";
        $data['css']="saran/vsaran_css.php";
        $data['content']="saran/vsaran.php";
        $data['js']="saran/vsaran_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    public function submitSaran(){
        
         $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $name   = $this->input->post('name');
        $email  = $this->input->post('email');
        $no_telp= $this->input->post('no_telp');
        $message= $this->input->post('message');
        
        if(!empty($name) && !empty($email) && !empty($no_telp) && !empty($message)){

            $data= [
                'email' => $email,
                'nama_lengkap' => $name,
                'no_telp'   =>$no_telp,
                'isi_saran'=>$message
            ];
            
            $this->Msaran->submit($data); 
            echo "<div class='alert alert-success' role='alert'>Data Anda telah Terekam, Tambah Saran ? <a href= 'http://localhost/arsiAtma/saran' class='alert-link'>Klik</a>
            </div>";        
        }
        else{
            echo "<div class='alert alert-danger' role='alert'>Ada Kolom Yang Masih Kosong
            </div>";        
            
        }
    }

    public function manajemen_saran(){
        $data['instagram'] = $this->Minstagram->get();
         $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['header']="template/template_header.php";
        $data['css']="saran/vsaran_css.php";
        $data['content']="saran/manajemen_saran.php";
        $data['js']="saran/vsaran_js.php";
        $data['footer']="template/template_footer.php";
        $data['saran']=$this->Msaran->loadSaran();
        $this->load->view('template/vtemplate',$data);
    }

    public function hapusSaran(){
        
        $id=$this->input->post('id_saran');
        $this->Msaran->MhapusSaran($id);
        redirect('saran/manajemen_saran');
    }
}

?>