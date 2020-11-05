
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
                  <span class="tag mb-4 d-inline-block">News</span>
                  <h4 class="mb-3">
                    <a href="<?php echo base_url('Article')?>"><?php echo substr($hima['judul_hima'],0,14)."..."?></a>
                  </h4>
                  <?php echo  substr($hima['deskripsi_hima'],0,120)."...";?>
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info">
                        <?php if(!empty($id)){
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
                               <a id="btnLoveHima" style="cursor:pointer;" href="<?php echo base_url('informasi/informasi_hima_home/').$hima['id_informasi_hima']?>">
                                <i id="gambarLoveHima" class="fas fa-heart"></i>
                               </a> 
                      
                           <?php }
                            else{?>
                              <a id="btnDislikeHima" style="cursor:pointer;" href="<?php echo base_url('informasi/informasi_hima_home/').$hima['id_informasi_hima']?>">
                                <div id="bungkusDislikeHima">
                                <i id="gambarDislikeHima" class="far fa-heart"></i>
                                </div>
                              </a> 
                            
                              
                            <?php }} ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
          <?php endforeach;?>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">    
          <?php foreach($informasiUniv as $univ):?>
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="<?php echo base_url('assets/img/informasiUniv/').$univ['foto1_univ']?>" alt="" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">News</span>
                  <h4 class="mb-3">
                    <a href="<?php echo base_url('Article')?>"><?php echo substr($univ['judul_univ'],0,14)."..."?></a>
                  </h4>
                  <?php echo  substr($univ['deskripsi_univ'],0,120)."...";?>
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info">
                        <?php if(!empty($id) ){ ?>
                        <div id="btnLoveHima">
                        <!-- keterangan fungsi id_informasi_hima, id_jenis_informasi,id_like_button -->
                         <a class="btnLove" style="cursor:pointer;" onclick="like_button(<?php echo $univ['id_informasi_univ']?>,2,1)"><i  class="far fa-heart"></i></a>
                        </div>
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
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="<?php echo base_url('assets/')?>img/courses/c3.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">News</span>
                  <h4 class="mb-3">
                    <a href="<?php echo base_url('Article')?>">Juara Lomba</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info">
                        <a href="#"> <i class="ti-heart mr-2"></i></a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
<!--  -->

      </div>
    </div>
    </section>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
   
    <!--================ End Testimonial Area =================-->