<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Reg extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model("Makun");
    }

    public function index(){
        $data['css']="reg/vreg_css.php";
        // $data['js']="viewArticle/VviewArticle_js.php";
        $data['data'] = "false";
        $data['content']="reg/vreg.php";
        $this->load->view('template/vtemplate',$data);
    }

    function forgot(){
        $data['css']="reg/vreg_css.php";
        $data['content']="reg/vreg.php";
        $data['data'] = "forgot";
        $this->load->view('template/vtemplate',$data);
    }

    function insert(){
        $input = $this->input->post(NULL,TRUE);
        extract($input);
        if ($this->input->post('submit')) {
            $data=[
                'email'=>$this->input->post('email'),
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('pass'),
                'nama_lengkap'=>$this->input->post('nama'),
                'no_telp'=>$this->input->post('telp'),
                'instasi'=>$this->input->post('instansi'),
                'type_akun'=> 0,
                'status'=>1,
                ];
                $this->Makun->reg($data);
                redirect('Home/regis');
            };
        
        if ($this->input->post('forgot')) {
            $data=[
                'email' => $email,
                'username' => $username,
                'password' => $pass,
            ];
            $this->Makun->update($data);
            redirect('Home/update');
        }

    }
    
    function auth(){
        $input = $this->input->post(NULL,TRUE);
        extract($input);

        $cek = $this->Makun->ceklogin($username,$pass);

		if ($cek) {
			redirect('home/auth');
		} else {
			redirect('home/failed');
		}
    }
    
    function logout(){
        $data = array (
			'id', 'username', 'type_akun', 'is_login'
		);
        // $this->session_destroy();
		$this->session->unset_userdata($data);
		redirect('home/Logout');
    }
        
    

}

?>