

<footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="single-footer-widget">
            <h4>HIMPUNAN MAHASISWA ARSITEKTUR UNIVERSITAS ATMA JAYA YOGYAKARTA</h4>
            <ul>
              <li><a href="https://goo.gl/maps/8yMrp47petHuxA6v6" target="_blank"><p><b>Alamat </b>: Jl. Babarsari No.44, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p></a></li>
            </ul>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="footer-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    

    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo base_url('assets/')?>js/gmaps.min.js"></script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="<?php echo base_url('assets/')?>js/jquery.js"></script>
    <script src="<?php echo base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/popper.js"></script>
    <script src="<?php echo base_url('assets/')?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/')?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/owl-carousel-thumb.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/mail-script.js"></script>    
    <script src="<?php echo base_url('assets/')?>js/theme.js"></script>
    <!-- Syntac Load  Footer -->
    <?php
      if(isset($js))
      {
        $this->load->view($js);
      }
    ?>
  </body>
</html>