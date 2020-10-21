<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <?php if(!empty($informasi->foto2_hima)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <?php } if(!empty($informasi->foto3_hima)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <?php } if(!empty($informasi->foto4_hima)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <?php } if(!empty($informasi->foto5_hima)){ ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                        <?php } ?>
                                    </ol>
                                        
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto1_hima; ?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php if(!empty($informasi->foto2_hima)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto2_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto3_hima)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto3_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto4_hima)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto4_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto5_hima)){ ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto5_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php if(!empty($informasi->foto2_hima)) { ?>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <!-- <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div> -->
                                <ul class="blog_meta list">
                                    <li title="Penulis"><a ><?php echo $informasi->nama_penulis ?><i class="ti-user" title="Penulis"></i></a></li>
                                    <li title="Tanggal Ditulis"><a >12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                    <?php if(empty($cek_fav)){ ?>
                                    <li title="Simpan Ke Akun Saya?" ><a <?php if(empty($id)){ ?> onclick="konfirmasi()" <?php }else {?> href="<?php echo base_url('Informasi/saveinformasi/').$informasi->id_informasi_hima?> <?php } ?> " >Simpan Informasi <br> ke Akun<i id="icon" class="fas fa-download"></i></a></li>
                                    <?php }else { ?>
                                        <li title="Sudah Tersimpan di Akun, hapus?" ><a href="<?php echo base_url('Informasi/hapusfav/').$informasi->id_informasi_hima?>" >Hapus <i id="icon" class="fas fa-trash-alt"></i></a></li>
                                    <?php }?>
                                </ul>
                                <!-- <ul class="social-links">
                                    <li><a href="#"><i class="fas fa-download"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-github"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul> -->
                            </div>
                        </div> 
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $informasi->judul_hima ?></h2>
                            <p class="excert">
                            <?php  
                            $num=strlen($informasi->deskripsi_hima);
                            $num_char = 700;
                            if ($informasi->deskripsi_hima{$num_char - 1} != '.') {
                                $num_char = strpos($informasi->deskripsi_hima, '.', $num_char); // cari posisi spasi, pencarian dilakukan mulai posisi 50
                            }
                            echo substr($informasi->deskripsi_hima, 0, $num_char).'.';
                            ?>
                            </p>
                        </div>
                        <div class="col-lg-12">                        
                            <div class="row">                               
                                <div class="col-lg-12 mt-25">
                                    <p>
                                    <?php                                     
                                       echo substr($informasi->deskripsi_hima, $num_char+1, $num);
                                    ?>
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                             
                </div>
                <!-- Syntac Load asidebar Content -->
                <?php
                if(isset($asidebar))
                    {
                        $this->load->view($asidebar);
                    }
                    ?>
            </div>
        </div>
    </section>