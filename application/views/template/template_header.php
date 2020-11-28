<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="<?php echo base_url('assets/')?>img/favicon.png" type="image/png" />
    <title>Arsi Atma</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/themify-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sbootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css" />
    <!-- main css -->
    <script src="https://use.fontawesome.com/d1fb53bc02.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/login.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
</head>

<body >
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
    <div class="main_menu"> 
        
  
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="<?php echo base_url('home')?>">
              <div class="mt-1">
                <center><h4>HIMA<p>Tri<span>&ccedil;</span>aka</p></h4></center>              
              </div>
            </a>
            <button 
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
     
            <ul class="nav navbar-nav menu_nav ml-auto">
              <?php if(isset($page) && $page=="homePage"){?>
                <li class="nav-item active">
                  
                  <a class="nav-link" href="<?php echo site_url('Home')?>">HOME</a>
                </li>
                <?php } else {?>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo site_url('Home')?>">HOME</a>
                  </li>
              <?php } ?>    
                <?php if(isset($page) ){ 
                  if($page=="organisasiHimaPage" || $page=="tentangHimaPage" || $page=="informasiHimasPage"){?>
                    <li class="nav-item active submenu dropdown">
                    <?php } else{ ?>
                      <li class="nav-item submenu dropdown">
                    <?php } }else {?><li class="nav-item submenu dropdown">
                    <?php } ?>
                
                  <a
                    href="<?php echo site_url('hima/loadTentangHima')?>"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >HIMA</a
                  >
                  <ul class="dropdown-menu">
                
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('hima/loadTentangHima')?>">TENTANG HIMA</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('hima/loadOrganisasiHima')?>"
                        >ORGANISASI</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Informasi/informasi_hima')?>"
                        >INFORMASI</a
                      >
                    </li>
                  </ul>
                </li>            
                <?php if(isset($page) ){ 
                  if($page=="tentangUnivPage" || $page=="informasiUnivPage"){?>
                    <li class="nav-item active submenu dropdown">
                    <?php } else{ ?>
                      <li class="nav-item submenu dropdown">
                    <?php } }else {?><li class="nav-item submenu dropdown">
                    <?php } ?>
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >UNIVERSITAS</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('')?>universitas/loadTentangUniversitas">TENTANG UAJY</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Informasi/informasi_universitas')?>"
                        >INFORMASI</a
                      >
                    </li>
                  </ul>
                </li>
                <?php if(isset($page) ){ 
                  if($page=="tentangFakultasPage" || $page=="informasiFakultasPage"){?>
                    <li class="nav-item active submenu dropdown">
                    <?php } else{ ?>
                      <li class="nav-item submenu dropdown">
                    <?php } }else {?><li class="nav-item submenu dropdown">
                    <?php } ?>
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >FAKULTAS</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('')?>fakultas/">TENTANG FT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Informasi/informasi_fakultas')?>"
                        >INFORMASI</a
                      >
                    </li>
                  </ul>
                </li>
                <?php if(isset($page) ){ 
                  if($page=="tentangPamiyPage" || $page=="informasiPamiyPage"){?>
                    <li class="nav-item active submenu dropdown">
                    <?php } else{ ?>
                      <li class="nav-item submenu dropdown">
                    <?php } }else {?><li class="nav-item submenu dropdown">
                    <?php } ?>
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >PAMIY</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('')?>pamiy/">TENTANG PAMIY</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Informasi/informasi_pamiy')?>"
                        >INFORMASI</a
                      >
                    </li>
                  </ul>
                </li>
                  <?php if(isset($page) && $page=="umumPage"){?>
              <li class="nav-item active">
              <?php } else {?>
              <li class="nav-item ">
              <?php } ?>
                  <a class="nav-link" href="<?php echo site_url('Umum/informasi')?>">UMUM</a>
                </li>
                
            <?php if(isset($page) && $page=="portofolioPage"){?>
              <li class="nav-item active">
              <?php } else {?>
              <li class="nav-item ">
              <?php } ?>
                  <a class="nav-link" href="<?php echo site_url('Portofolio')?>">PORTOFOLIO</a>
                </li>
            <?php if(isset($page) && $page=="saranPage"){?>
              <li class="nav-item active">
              <?php } else {?>
              <li class="nav-item ">
              <?php } ?>
                  <a class="nav-link" href="<?php echo site_url('Saran')?>">SARAN</a>
                </li>
                <li class="nav-item">
                <?php if(empty($id)) { ?>
                  <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#">LOGIN</a>                  
                <?php } else {?>
                  <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    ><?php echo $username;?></a>                   
                  <?php if($type_akun=="1"){?>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Manajemen_akun/')?>">Manajemen Akun</a>
                    </li>                  
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Saran/manajemen_saran/')?>">Manajemen Saran</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="modal" data-target="#modalInstagram">Update Instagram</a>
                    </li>                  
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Reg/logout')?>">LogOut</a>
                    </li>                  
                  </ul>
                  <?php }else{ ?>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('informasi/manajemen_informasi/')?>">INFORMASI TERSIMPAN</a>
                    </li>    
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('Reg/logout')?>">LogOut</a>
                    </li>                                
                  </ul>
                  <?php }?>
                </li>
                <?php } ?>            
                </li>                
              </ul>              
            </div>
          </div>
        </nav>
      </div>    
      <div>
          <?php if(!empty($this->session->flashdata('notif'))) { 
          echo $this->session->flashdata('notif'); } ?>
      </div>
</header>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                
                  <div class="modal-header"></div>
                  <div class="modal-content">
                  <div class="modal-body">
                    
  <div class="">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?php echo base_url('assets/')?>img/logo.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
        <form action="<?php echo site_url('Reg/auth')?>" method="post">
          <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input name="remember" type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	  <button type="submit" name="button" class="btn login_btn">Login</button>
            <input type="text" hidden id="submit" name="submit" value="submit">
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="<?php echo base_url('')?>Reg/" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="<?php echo base_url('')?>Reg/forgot/">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
                    </form>
              </div>
              </div>
            </div>
            </div>

<!-- update link instagram -->
<div class="modal fade" id="modalInstagram" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                
                  <div class="modal-header"></div>
                  <div class="modal-content">
                  <div class="modal-body">
                      
		<div class="">
			<div class="user_cards">				
				<div class="d-flex justify-content-center form_container">
        <form action="<?php echo site_url('Reg/instagram')?>" method="post">
        <div class="mt-4">
        Link Postingan Instagram Sebelumnya :
					<div class="d-flex justify-content-center links" style="background-color:yellow">
						 <?php echo $instagram->link_instagram ?>
					</div>					
				</div>
          <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fab fa-instagram"></i></span>
							</div>
							<input type="text" name="link" class="form-control input_user" value="" placeholder="Paste link post instagram yg baru">
						</div>					
							<div class="d-flex justify-content-center mt-3 login_container">
				 	  <button type="submit" name="button" class="btn login_btn">Update</button>
            <input type="text" hidden id="submit" name="submit" value="submit">
				   </div>
					</form>						
			</div>
		</div>
	</div>
                    </form>
              </div>
              </div>
            </div>
            </div>
