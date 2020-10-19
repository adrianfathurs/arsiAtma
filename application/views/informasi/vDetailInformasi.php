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
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    </ol>
                                    <?php foreach($informasi as $informasi) :     ?>      
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto1_hima; ?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto2_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto3_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto4_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto5_hima ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
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
                                    <li><a href="#"><?php echo $informasi->nama_penulis ?><i class="ti-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-github"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div> 
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $informasi->judul_hima ?></h2>
                            <p class="excert">
                            <?php echo $informasi->deskripsi_hima; ?>
                            </p>
                        </div>
                        <div class="col-lg-12">                        
                            <div class="row">
                                <!-- <div class="col-6">
                                    <img class="img-fluid" src="<?php echo base_url('assets/')?>img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="<?php echo base_url('assets/')?>img/blog/post-img2.jpg" alt="">
                                </div>  -->
                                <div class="col-lg-12 mt-25">
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction of the camp price. However, who has
                                        the willpower.
                                    </p>
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction of the camp price. However, who has
                                        the willpower.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                                    <?php endforeach; ?>
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