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
      <h2 class="title">Pengurus Harian </h2>
      <hr>
    <div class="clear"></div>
  <div class="row">
  <?php foreach($ph as $key):?>
    <div class="col-lg-12">
        <div class="">
            <div class="kotakph">
            <a class="" href="<?php echo base_url('Hima/loadDetailOrganisasiPh/').$key['id_ph']?>">
                <img  src="<?php echo base_url('assets/img/organisasiHima/').$key['foto1_ph']?>" width="" height="500px">
            </a>
            </div>
        </div>
        <?php if($type_akun=="1"){?>
        <a href="<?php echo base_url('Hima/updateOrganisasiHima/').$key['id_ph']."/"."1"?>"><button class="mt-3 btn btn-outline-primary">EDIT <?php echo $key['id_ph']?></button>
        <input type="hidden" name="kode" value="1">
        </a>
        <?php }?>
    </div>
  <?php endforeach?>
    <div class="clearfix visible-sm-block"></div>
    <div class="clearfix visible-md-block"></div>
  </div>
  
    <div class="container"><br>
      <h2 class="title mt-4">Biro dan Divisi </h2>
      <hr>
    <div class="clear"></div>
  <div class="row">
  <?php foreach ($biro as $k ):?>
       <div class="col-lg-4 col-sm-4 mb-2">
      
        <div class="">
            <div class="kotakbiro">
                <a class="" href="<?php echo base_url('Hima/loadDetailOrganisasiBiro/').$k['id_biro']?>">
                <img  src="<?php echo base_url('assets/img/organisasiHima/').$k['foto1_biro']?>">
                </a>
            </div>
        </div>
        <?php if($type_akun=="1"){?>
        <a href="<?php echo base_url('Hima/updateOrganisasiHima/').$k['id_biro']."/"."2"?>"><button class="mt-3 btn  btn-outline-primary">EDIT <?php echo $k['id_biro']?></button>
        <input type="hidden" name="kode" value="2">
        </a>
        <?php }?>
    </div>
    
    <div class="clearfix visible-sm-block"></div>
    <div class="clearfix visible-md-block"></div>
  <?php endforeach;?>
</div>
</div>
</section>