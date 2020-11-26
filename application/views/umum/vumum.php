<!--
<section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                 HIMPUNAN MAHASISWA ARSITEKTUR 
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
    -->
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    <!-- <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Scholarship Facility</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Sell Online Course</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Global Certification</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--================ End Feature Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <section class="feature_area section_gap_top">
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="main_title">
              <h2 class="mb-3">Informasi Umum Seputar Arsitektur</h2>
            </div>
          </div>
        </div>
        <?php if($type_akun=="1") {?>
        <div class="row float-right">
          <a href="<?php echo base_url('Umum/submitInformasi') ?>"><button class="btn btn-success ">Tambah Informasi Umum</button></a>
        </div>
        <br>
        <div class="clc"></div>
        <br>
        <?php }?>
        <div class="row ">
        <?php foreach($informasiUmum as $umum) : $hello=0?>
        <div class="col-md-4 mb-4">
         <div class="card">
            <a href="<?php echo base_url('umum/informasi_detailUmum/').$umum->id_informasi_umum?>">
              <img class="card-img-top" src="<?php echo base_url('assets/img/informasiUmum/').$umum->foto1_umum?>" alt="Card image cap">
            </a>
            <div class="card-body"  style=" max-height: 80%;">
               <h5 class="card-title border-bottom pb-3"><?php $umum->judul_umum?> <a href="#" class="float-right d-inline-flex share"></a></h5>
               <p class="card-text"><?php echo  substr($umum->deskripsi_umum,0,120)."...";?></p>
               
               <!--  -->
                <?php 
                          foreach($joinInformasiFavoriteUmum as $cek) :?>          
                                <?php if($umum->id_informasi_umum==$cek['fk_informasi_umum']){
                                  if( $cek['statusfavoriteumum']==1){
                                      $hello=1;
                                      }
                                      else{
                                      $hello=0;
                                      }
                                  }else{ 
                                    if($hello==1)
                                    {
                                      $hello=1;
                                    }
                                    else{
                                      $hello=0;
                                    }
                                  ?>
                        <!-- keterangan fungsi id_informasi_hima, id_jenis_informasi,id_like_button var_dump($hima['id_informasi_hima']);var_dump($cek['fk_informasi_hima']); var_dump($hello);  var_dump($hello)-->
                        <?php } endforeach;
                            if($hello==1){?>
                             
                              <a id="btnLoveHima" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> href="<?php echo base_url('umum/informasi_umum_home/').$umum->id_informasi_umum;}?>"> 
                               <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a> 
                          <?php }
                            else{?>
                              <a id="btnDislikeHima" style="cursor:pointer;" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> href="<?php echo base_url('umum/informasi_umum_home/').$umum->id_informasi_umum;}?>">
                                <div id="bungkusDislikeHima">
                                <i id="gambarDislikeHima" class="far fa-heart"></i>
                                </div>
                              </a> 
                            
                              
                            <?php } ?>
               <!--  -->
               <a href="<?php echo base_url('umum/informasi_detailUmum/').$umum->id_informasi_umum?>" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
          <?php if($type_akun=="1"){?>
            <div class="kotakBisque pb-3">
              <center><a href="<?php echo base_url('umum/updateUmum/').$umum->id_informasi_umum?>"><button class="mt-3 btn  btn-outline-primary">EDIT <?php echo $umum->id_informasi_umum?></button></a>
                      <a href="<?php echo base_url('umum/delete/').$umum->id_informasi_umum?>"><button class="mt-3 btn  btn-outline-danger">Delete <?php echo $umum->id_informasi_umum?></button></a>
              </center>
            </div>
          <?php }?>
         </div>
      </div>
        <?php endforeach;?>
   </div>
      </div>
    </div>
    <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">                                    
                                    <div class="center-align pagination ">
                                            <?php echo $this->pagination->create_links(); ?>
                                    </div>
                                </li>
                            </ul>
                        </nav>
    </section>
    <!--================ End Popular Courses Area =================-->

