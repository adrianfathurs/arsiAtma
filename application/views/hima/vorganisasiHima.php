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
<section class="contact_area section_gap">
    <div class="container">
        <div class="jumbotron">
            <h1>
                <span class="glyphicon glyphicon-camera"></span> The Image Gallery</h1>
            <p>A bunch of images depicting daily life of stormtroopers.</p>
        </div>

    <h2 class="title">Pengurus Harian </h2>
    <hr>
    <div class="clear"></div>
  <div class="row">
  <?php foreach($ph as $key):?>
    <div class="col-lg-4 col-sm-6 mb-2">
        <div class="zoom-effect">
            <div class="kotak">
            <a class="" href="<?php echo base_url('Hima/loadDetailOrganisasiPh/').$key['id_ph']?>">
                <img  src="<?php echo base_url('assets/img/organisasiHima/').$key['foto1_ph']?>" width="70vw" height="200px">
            </a>
            </div>
        </div>
    </div>
  <?php endforeach?>
    <div class="clearfix visible-sm-block"></div>
    <div class="clearfix visible-md-block"></div>
    
    
  </div>
  
  <h2 class="title mt-4">Biro </h2>
      <hr>
    <div class="clear"></div>
    <div class="row">
  <?php foreach ($biro as $key ):?>
       <div class="col-lg-4 col-sm-6 mb-2">
      
        <div class="zoom-effect">
            <div class="kotak">
                <a class="" href="<?php echo base_url('Hima/loadDetailOrganisasiBiro/').$key['id_biro']?>">
                <img  src="<?php echo base_url('assets/img/organisasiHima/').$key['foto1_biro']?>" width="70vw" height="200px">
                </a>
            </div>
        </div>
        <?php if($type_akun=="1"){?>
        <a href="<?php echo base_url('Hima/updateOrganisasiHima/').$key['id_biro']?>"><button class="btn btn-primary">EDIT <?php echo $key['id_biro']?></button></a>
        <?php }?>
    </div>
    
    <div class="clearfix visible-sm-block"></div>
    <div class="clearfix visible-md-block"></div>
  <?php endforeach;?>
</div>
</div>
</section>