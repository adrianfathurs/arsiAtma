<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="card col-lg-12" style="padding:9px; border: 1px solid rgb(246 207 143); background-color: #fcfcfc96;width: 100%;">
                            <div class="feature-img">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <?php if(!empty($informasi->foto2_fakultas)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <?php } if(!empty($informasi->foto3_fakultas)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <?php } if(!empty($informasi->foto4_fakultas)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <?php } if(!empty($informasi->foto5_fakultas)){ ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                        <?php } ?>
                                    </ol>
                                        
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiFakultas/').$informasi->foto1_fakultas; ?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php if(!empty($informasi->foto2_fakultas)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiFakultas/').$informasi->foto2_fakultas ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto3_fakultas)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiFakultas/').$informasi->foto3_fakultas ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto4_fakultas)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiFakultas/').$informasi->foto4_fakultas ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto5_fakultas)){ ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiFakultas/').$informasi->foto5_fakultas ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php if(!empty($informasi->foto2_fakultas)) { ?>
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
                            
                            <br>
                            <div class="detail">
                                    <p title="Penulis">Penulis : <a ><?php echo $informasi->nama_penulis ?><i class="ti-user" title="Penulis"></i></a></p>
                                    <p title="Tanggal Ditulis"><a >12 Dec, 2017<i class="ti-calendar"></i></a></p>
                                    <?php if(empty($cek_favfakultas)){ ?>
                                        <p title="Simpan Ke Akun Saya?" ><a <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="#" <?php }else {?> href="<?php echo base_url('Informasi/saveinformasifakultas/').$informasi->id_informasi_fakultas?> <?php } ?> " >Simpan ke Akun<i id="icon" class="fas fa-download"></i></a></p>
                                    <?php }else { ?>
                                        <p title="Sudah Tersimpan di Akun, hapus?" ><a href="<?php echo base_url('Informasi/hapusfavfakultas/').$informasi->id_informasi_fakultas?>" >Hapus <i id="icon" class="fas fa-trash-alt"></i></a></p>
                                    <?php }?>                            
                            </div>
                        </div>
                        <hr>                          
                        <div class="card" style="padding:9px; border: 1px solid rgb(246 207 143); background-color: #fcfcfc96;width: 100%;">
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2><?php echo $informasi->judul_fakultas ?></h2>                            
                            </div>
                            <div class="col-lg-12">                        
                                <div class="row">                               
                                    <div class="col-lg-12 mt-25">
                                        <p >
                                        <?php                                     
                                        echo $informasi->deskripsi_fakultas;
                                        ?>
                                            
                                        </p>
                                    </div>
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