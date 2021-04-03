
  <section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    
    <!--================ End Feature Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <section class="feature_area section_gap_top">
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="main_title">
              <h2 class="mb-3">Informasi Sepekan Seputar Arsitektur</h2>
            </div>
          </div>
        </div>
        <?php if($type_akun=="1") {?>
        <div class="row float-right">
          <a href="<?php echo base_url('Sepekan/submitInformasi') ?>"><button class="btn btn-success ">Tambah Informasi Sepekan</button></a>
        </div>
        <br>
        <div class="clc"></div>
        <br>
        <?php }?>
        <div class="row ">
        <?php foreach($informasiSepekan as $sepekan) : $hello=0?>
        <div class="col-md-4 mb-4">
         <div class="card sepekancard" style="padding:9px; border: 1px solid rgb(246 207 143); background-color: #fcfcfc96;width: 100%;">
            <a href="<?php echo base_url('sepekan/informasi_detailSepekan/').$sepekan->id_informasi_sepekan?>">
              <img class="card-img-top" src="<?php echo base_url('assets/img/informasiSepekan/').$sepekan->foto1_sepekan?>" alt="Card image cap" style="max-height:275px;">
            </a>
            <div class="card-body"  style=" max-height: 80%;">
               <h5 class="card-title border-bottom pb-3"><?php echo substr($sepekan->judul_sepekan,0,20)."...";?> <a href="#" class="float-right d-inline-flex share"></a></h5>
               <p class="card-text"><?php echo  substr($sepekan->deskripsi_sepekan,0,30)."...";?></p>
               
               <!--  -->
                <?php 
                          foreach($joinInformasiFavoriteSepekan as $cek) :?>          
                                <?php if($sepekan->id_informasi_sepekan==$cek['fk_informasi_sepekan']){
                                  if( $cek['statusfavoritesepekan']==1){
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
                             
                              <a id="btnLoveHima" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> href="<?php echo base_url('sepekan/informasi_sepekan_home/').$sepekan->id_informasi_sepekan;}?>"> 
                               <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a> 
                          <?php }
                            else{?>
                              <a id="btnDislikeHima" style="cursor:pointer;" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> href="<?php echo base_url('sepekan/informasi_sepekan_home/').$sepekan->id_informasi_sepekan;}?>">
                                <div id="bungkusDislikeHima">
                                <i id="gambarDislikeHima" class="far fa-heart"></i>
                                </div>
                              </a> 
                            
                              
                            <?php } ?>
               <!--  -->
               <a href="<?php echo base_url('sepekan/informasi_detailSepekan/').$sepekan->id_informasi_sepekan?>" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
          <?php if($type_akun=="1"){?>
            <div class="kotakBisque pb-3">
              <center><a href="<?php echo base_url('sepekan/updateSepekan/').$sepekan->id_informasi_sepekan?>"><button class="mt-3 btn  btn-outline-primary">EDIT <?php echo $sepekan->id_informasi_sepekan?></button></a>
                      <a href="<?php echo base_url('sepekan/delete/').$sepekan->id_informasi_sepekan?>"><button class="mt-3 btn  btn-outline-danger">Delete <?php echo $sepekan->id_informasi_sepekan?></button></a>
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

