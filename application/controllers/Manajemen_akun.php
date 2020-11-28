<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Manajemen_akun extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model("Makun");
        $this->load->model('Minstagram');
        if ($this->session->userdata('is_login') != TRUE) { // ketika belum login
			$alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
            <div class='toast-header'>
                <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
    
                <strong class='mr-auto'>Notifikasi </strong>                                
                <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='toast-body'>
                hanya bisa diakses oleh admin :)                        
            </div>");
            $this->session->set_flashdata($alert); 
			redirect('home'); //redirect kehalaman login
		}
    }

    function index()
    {
        $data['instagram'] = $this->Minstagram->get();
        $data['loadAkun']=$this->Makun->getAll();
        $data['page']="Login";
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $id = $this->session->userdata('id');
        $data['username'] = $this->session->userdata('username');         
        $data['header']="template/template_header.php";
        $data['css']="manajemenAkun/vmanajemenAkun_css.php";
        $data['content']="manajemenAkun/vmanajemenAkun.php";
        $data['js']="manajemenAkun/vmanajemenAkun_js.php";
        $data['footer']="template/template_footer.php";
        
        $this->load->view('template/vtemplate',$data);
    }

    function updateAkun(){
        $id_akun=$this->input->post('id_akun');
        $username=$this->input->post('username');
        $nama_Lengkap=$this->input->post('namaLengkap');
        $noTelp=$this->input->post('noTelp');
        $instansi=$this->input->post('instansi');
        $statusAkun=$this->input->post('statusAkun');
        $tipeAkun=$this->input->post('tipeAkun');
        $data=[
            'username'=>$username,
            'nama_lengkap'=>$nama_Lengkap,
            'no_telp'=>$noTelp,
            'instasi'=>$instansi,
            'status'=>$statusAkun,
            'type_akun'=>$tipeAkun
        ];
        $updateManajemenAkun=$this->Makun->updateManajemenAkun($data,$id_akun);

        if($updateManajemenAkun){
           $this->session->set_tempdata('item', "<div class='alert alert-success' role='alert'>
            <center>DATA ANDA BERHASIL TERUPDATE</center></div>", 10);

            redirect('Manajemen_akun');
        }
        else{
           $this->session->set_tempdata('item', "<div class='alert alert-danger' role='alert'>
            <center>DATA ANDA TIDAK BERHASIL TERUPDATE</center></div>", 10);
            redirect('Manajemen_akun');
 
        }
        

    }
}
?>