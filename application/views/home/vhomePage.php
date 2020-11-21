
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
<section id="autoload" class="feature_area section_gap_top">    
  <div class="popular_courses">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Seputar Arsi Atma Jaya</h2> 
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        <!-- single course -->
        <div class="col-lg-12">
          <div class="owl-carousel active_course">    
            <?php foreach($informasiHima as $hima): $hello=0?>
              <div class="single_course">
                
                <div class="course_head">
                  <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$hima['foto1_hima']?>" alt="" />
                </div>
                
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">News Hima</span>
                  <h4 class="mb-3">
                    <a href="<?php echo base_url('informasi/informasi_detail/').$hima['id_informasi_hima']?>"><?php echo substr($hima['judul_hima'],0,14)."..."?></a>
                  </h4>
                  <?php echo  substr($hima['deskripsi_hima'],0,120)."...";?>
                  
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info">
                        <?php 
                          foreach($joinInformasiFavoriteHima as $cek) :?>          
                                <?php if($hima['id_informasi_hima']==$cek['fk_informasi_hima']){
                                  if( $cek['statusfavoritehima']==1){
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
                        <?php } endforeach;;
                            if($hello==1){?>
                              <!-- <a id="btnLoveHima" style="cursor:pointer;" onclick="like_button(<?php echo $hima['id_informasi_hima']?>,1,0)" >
                                <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a>  -->
                              <a id="btnLoveHima" style="cursor:pointer;"<?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> class="unlike" href="<?php echo base_url('informasi/informasi_hima_home/').$hima['id_informasi_hima'];}?>">
                                <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a>  
                      
                          <?php }
                            else{?>
                              <a id="btnDislikeHima" style="cursor:pointer;" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> class="like" href="<?php echo base_url('informasi/informasi_hima_home/').$hima['id_informasi_hima'];}?>">
                                <div id="bungkusDislikeHima">
                                <i id="gambarDislikeHima" class="far fa-heart"></i>
                                </div>
                              </a> 
                            
                              
                            <?php } ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        <!-- single course -->
        <div class="col-lg-12">
          <div class="owl-carousel active_course">    
            <?php foreach($informasiUniv as $univ): $hello=0?>
              <div class="single_course">
                
                <div class="course_head">
                  <img class="img-fluid" src="<?php echo base_url('assets/img/informasiUniv/').$univ['foto1_univ']?>" alt="" />
                </div>
                
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">News Univ</span>
                  <h4 class="mb-3">
                    <a href="<?php echo base_url('informasi/informasi_detailUniv/').$univ['id_informasi_univ']?>"><?php echo substr($univ['judul_univ'],0,14)."..."?></a>
                  </h4>
                  <?php echo  substr($univ['deskripsi_univ'],0,120)."...";?>
                  
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info">
                        <?php 
                          foreach($joinInformasiFavoriteUniv as $cek) :?>          
                                <?php if($univ['id_informasi_univ']==$cek['fk_informasi_univ']){
                                  if( $cek['statusfavoriteuniv']==1){
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
                              <!-- <a id="btnLoveHima" style="cursor:pointer;" onclick="like_button(<?php echo $univ['id_informasi_univ']?>,1,0)" >
                                <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a>  -->
                              <a id="btnLoveHima" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> class="unlike" href="<?php echo base_url('informasi/informasi_univ_home/').$univ['id_informasi_univ'];}?>"> 
                               <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a> 
                          <?php }
                            else{?>
                              <a id="btnDislikeHima" style="cursor:pointer;" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> class="like" href="<?php echo base_url('informasi/informasi_univ_home/').$univ['id_informasi_univ'];}?>">
                                <div id="bungkusDislikeHima">
                                <i id="gambarDislikeHima" class="far fa-heart"></i>
                                </div>
                              </a> 
                            
                              
                            <?php } ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>


<!--  -->
        <div class="row">
          <!-- single course -->  
          <div class="col-lg-12">
            <div class="owl-carousel active_course">    
          <?php foreach($informasiFakultas as $fakultas): $hello=0?>
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="<?php echo base_url('assets/img/informasiFakultas/').$fakultas['foto1_fakultas']?>" alt="" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">News Fakultas</span>
                  <h4 class="mb-3">
                    <a href="<?php echo base_url('informasi/informasi_detailFakultas/').$fakultas['id_informasi_fakultas']?>"><?php echo substr($fakultas['judul_fakultas'],0,14)."..."?></a>
                  </h4>
                  <?php echo  substr($fakultas['deskripsi_fakultas'],0,120)."...";?>
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info">
                        <?php 
                          foreach($joinInformasiFavoriteFakultas as $cek) :?>
                            
                                <?php if($fakultas['id_informasi_fakultas']==$cek['fk_informasi_fakultas']){
                                
                                if( $cek['statusfavoritefakultas']==1){

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
                              <!-- <a id="btnLoveHima" style="cursor:pointer;" onclick="like_button(<?php echo $fakultas['id_informasi_fakultas']?>,1,0)" >
                                <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a>  -->
                              <a id="btnLoveHima" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?>  class="unlike" href="<?php echo base_url('informasi/informasi_fakultas_home/').$fakultas['id_informasi_fakultas'];}?>">
                                <i id="gambarLoveHima" class="fas fa-heart"></i>
                              </a> 
                      
                          <?php }
                            else{?>
                              <a id="btnDislikeHima" style="cursor:pointer;" <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> class="like" href="<?php echo base_url('informasi/informasi_fakultas_home/').$fakultas['id_informasi_fakultas'];}?>">
                                <div id="bungkusDislikeHima">
                                <i id="gambarDislikeHima" class="far fa-heart"></i>
                                </div>
                              </a> 
                            
                              
                            <?php } ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
          <?php endforeach;?>
            </div>
        </div>

<!--  -->
     

<!--  -->
        
    </div>
  </div>
</section>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
   
    <!--================ End Testimonial Area =================-->

     <!--================ Start Popular Courses Area =================-->
