<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Portofolio extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model("Mportofolio");
        $this->load->model('Minformasi_hima');
        $this->load->model('Minformasi_universitas');
        $this->load->model('Minformasi_fakultas');
        $this->load->model('Minformasi_pamiy');
        $this->load->model('Minstagram');
        
    }
    function index(){
        $this->main();
    }
    public function main(){
        
        // Load library pagination
        $this->load->library('pagination');
        // Pengaturan pagination
        $config['base_url'] = base_url('Portofolio/main');
        $config['total_rows'] = $this->Mportofolio->get()->num_rows();
        $config['per_page'] = 2 ;
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

        $data['Informasi'] = $this->Mportofolio->get_offset($config['per_page'], $config['offset'])->result();
        foreach ($data['Informasi'] as $key => $val) {
			if (!empty($val->created_date)) {
                // $tanggal = ;
				$data['Informasi'][$key]->created_date	= $this->convert_date(date('Y-m-d', strtotime($val->created_date)));
			}
        }
        // print_r($data['Informasi']);die;
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username');  
        $data['fav'] = $this->Mportofolio->getFav($this->session->userdata('id'));

        // print_r($data['fav']);die;
        $data['page']="portofolioPage";  
        // $data['informasi'] = $this->Mportofolio->getAll();        
        $data['header']="template/template_header.php";
        $data['css']="portofolio/vportofolio_css.php";
        $data['js'] = 'portofolio/vportofolio_js.php'; 
        $data['content']="portofolio/vportofolio.php";
        $data['instagram'] = $this->Minstagram->get();
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }


    function detail($id){               
        $data['page']="portofolioPage";              
        $data['cek_fav'] = $this->Mportofolio->cekfav($id,$this->session->userdata('id'));
        $data['informasi'] = $this->Mportofolio->getArtikel($id);         
        
        //convert date 
        $tanggal = date('Y-m-d', strtotime($data['informasi']->created_date));
        $data['informasi']->created_date = $this->tanggal_indo($tanggal,true);
        
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="portofolio/vportofolio_css.php";
        $data['js'] = 'portofolio/vportofolio_js.php'; 
        $data['header']="template/template_header.php";            
        $data['content']="portofolio/vDetail.php";
        $data['instagram'] = $this->Minstagram->get();
        $data['asidebar']="viewArticle/VviewAsidebar.php";
        $data['asidebarContent']=$this->Minformasi_hima->getTwoInformasi();
        $data['asidebarContentUniv']=$this->Minformasi_universitas->getTwoInformasi();
        $data['asidebarContentFakultas']=$this->Minformasi_fakultas->getTwoInformasi();
        $data['asidebarContentPamiy']=$this->Minformasi_pamiy->getTwoInformasi();
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    }

    function updateportofolio($id){

        $data['page']="portofolioPage";

        $data['data'] = $this->Mportofolio->getArtikel($id);
        $data['informasi'] = "portofolio";                   
        $data['js'] = 'portofolio/vportofolio_js.php'; 
        $data['css'] = 'portofolio/vportofolio_css';      
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['header']="template/template_header.php";            
        $data['content'] = 'portofolio/vform.php';  
        $data['instagram'] = $this->Minstagram->get();  
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";          
        $this->load->view('template/vtemplate', $data);
    }

    function delete($id){
        $dataInf = $this->Mportofolio->getArtikel($id);
        $data=[
            'judul_portofolio'=>$dataInf->judul_portofolio,                               
            'foto4_portofolio'=>$dataInf->foto4_portofolio,
            'foto5_portofolio'=>$dataInf->foto5_portofolio,
            'keterangan_portofolio'=>$dataInf->keterangan_portofolio,
            'foto1_portofolio'=>$dataInf->foto1_portofolio,
            'foto2_portofolio'=>$dataInf->foto2_portofolio,
            'foto3_portofolio'=>$dataInf->foto3_portofolio,
            'nama_peraih' => $dataInf->nama_penulis,
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
        $this->Mportofolio->insert($data,$id);
        redirect("portofolio");
    }

    function form(){                   
        $data['page']="portofolioPage";  

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

        // $akun= $this->Makun->get_by_id($creator);
        if(null == $foto111 && $foto111 && $foto111 ){
            $this->session->set_userdata('typeNotif', "gagalUpload");
        } else {
                        $foto11=$this->_upload($foto111,$foto1_name,$id_info);
                        $foto22=$this->_upload($foto222,$foto2_name,$id_info);
                        $foto33=$this->_upload($foto333,$foto3_name,$id_info);
                        $foto44=$this->_upload($foto444,$foto4_name,$id_info);
                        $foto55=$this->_upload($foto555,$foto5_name,$id_info);

                        $data=[
                            'judul_portofolio'=>$this->input->post('judul'),                               
                            'foto4_portofolio'=>$foto44,
                            'foto5_portofolio'=>$foto55,
                            'keterangan_portofolio'=>$this->input->post('essay'),
                            'foto1_portofolio'=>$foto11,
                            'foto2_portofolio'=>$foto22,
                            'foto3_portofolio'=>$foto33,
                            'nama_peraih' => $this->input->post('peraih'),
                            'status' => 1
                        ];

                        // print_r($data);die;
                    $this->Mportofolio->insert($data,$id_info);
                    $alert = array('notif'=>"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='2000' data-autohide='true'>
                                <div class='toast-header'>
                                    <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>
                        
                                    <strong class='mr-auto'>Notifikasi </strong>                                
                                    <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='toast-body'>
                                    Informasi portofolio Berhasil Diperbarui
                                </div>");
                    $this->session->set_flashdata($alert);                        
                    redirect('portofolio');
                    // $this->getArtikel($jenis_artikel);
                }
                
            }else{
                $obj = new stdClass();            
                $obj->judul_portofolio = '';
                $obj->nama_peraih = '';
                $obj->id_portofolio  = '';
                $obj->keterangan_portofolio = '';
                $obj->foto4_portofolio = '';
                $obj->foto5_portofolio = '';
                $obj->foto1_portofolio = '';
                $obj->foto2_portofolio = '';
                $obj->foto3_portofolio = '';
                // $obj->jenis_artikel = "0";
                $data['data'] = $obj;
                $data['informasi'] = "portofolio";                   
                $data['js'] = 'portofolio/vportofolio_js.php'; 
                $data['css'] = 'portofolio/vportofolio_css';      
                $data['type_akun'] = $this->session->userdata('type_akun');            
                $data['id'] = $this->session->userdata('id'); 
                $data['username'] = $this->session->userdata('username'); 
                $data['header']="template/template_header.php";            
                $data['content'] = 'portofolio/vform.php';   
                $data['instagram'] = $this->Minstagram->get(); 
                $data['asidebar']="portofolio/vasidebar_portofolio.php";
                $data['footer']="template/template_footer.php";          
                $this->load->view('template/vtemplate', $data);
            }
    }

    function _upload($foto,$ft,$id){
                $data['page']="articlePage";
                $data = $this->Mportofolio->getArtikel($id);
                
                $config['upload_path']='./assets/img/portofolio/';
                $config['allowed_types']='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if($ft=="foto1"){
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_portofolio){
                            return $data->foto1_portofolio;
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
                        if($data->foto2_portofolio){
                            return $data->foto2_portofolio;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                }elseif($ft=="foto3"){
                    if(!$this->upload->do_upload('foto3')){
                        if($data->foto3_portofolio){
                            return $data->foto3_portofolio;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto4"){
                    if(!$this->upload->do_upload('foto4')){
                        if($data->foto4_portofolio){
                            return $data->foto4_portofolio;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload4");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto5"){
                    if(!$this->upload->do_upload('foto5')){
                        if($data->foto5_portofolio){
                            return $data->foto5_portofolio;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload5");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  
                }
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
    
    function savefav($id_info){
        $data=[
            'fk_user'=>$this->session->userdata('id'),                               
            'fk_portofolio  '=>$id_info,            
        ];
        $this->Mportofolio->saveinf($data);
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
        $this->detail($id_info);
    }

    function hapusfav($id_info){
        $this->Mportofolio->hapusfav($id_info,$this->session->userdata('id'));
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
        $this->detail($id_info);
    }

}

?>