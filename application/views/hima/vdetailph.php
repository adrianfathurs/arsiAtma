<section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">                  
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                Pengurus Harian Himpunan Arsitektur
                </h2>
                <div>
                  <a href="#" class="primary-btn mb-3 mb-sm-0">About Us</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left kotakBisque">
                    <div class="main_image">
                        <center>

                          <img class="img-fluid pt-4" src="<?php echo base_url('assets/img/organisasiHima/').$ph->foto1_ph;?>" alt="">
                        </center>
                        
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Nama Pengurus Harian</h4>
                        <div class="content">
                            
                            <?php echo $ph->nama_lengkap ?>
                        </div>

                        <!-- <h4 class="title">Deskripsi Pengurus Harian</h4>
                        <div class="content">
                            <?php echo $ph->deskripsi_ph ?>
                        </div>

                        <h4 class="title">Tugas Pengurus Harian</h4>
                        <div class="content">
                            <?php echo $ph->tugas_ph ?>
                        </div> -->
                    </div>
                </div>


                <?php if(!empty($asidebar)){
                    $this->load->view($asidebar);}
                    ?>
            </div>
        </div>
    </section>