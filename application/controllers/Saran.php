<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Saran extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

        $this->load->model('Msaran');
    }

    public function index(){
        $data['header']="template/template_header.php";
        $data['css']="saran/vsaran_css.php";
        $data['content']="saran/vsaran.php";
        $data['js']="saran/vsaran_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }

    public function submitSaran(){
        
        $name   = $this->input->post('name');
        $email  = $this->input->post('email');
        $no_telp= $this->input->post('no_telp');
        $message= $this->input->post('message');

        $data= [
            'email' => $email,
            'nama_lengkap' => $name,
            'no_telp'   =>$no_telp,
            'isi_saran'=>$message
        ];

        $this->Msaran->submit($data); 
        echo "<div class='alert alert-success' role='alert'>
  A simple success alert with <a href='"<?php echo base_url('Saran')?>"' class='alert-link'>an example link</a>. Give it a click if you like.
</div>";
        

    }
}

?>