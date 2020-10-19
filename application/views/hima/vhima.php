<!-- Script css content -->
<?php
if (isset($css)) {
  $this->load->view($css);
}
?>
<section class="home_banner_area">

</section>
<section class="blog_area single-post-area section_gap">
<div class="container">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="col-lg-12">
                    <div>
                    <a href="<?php echo base_url('article/update/')?>" class="btn waves-effect waves-light btn-warning">Edit</a>                                             
                    </div>
                        <div class="feature-img">
                            <img class="img-fluid" src="<?php echo base_url('assets/')?>img/blog/feature-img1.jpg" alt="">
                        </div>
                    </div>
                        <div class="container" id="main-wrapper">
                            <h2 class="text-black">TENTANG HIMPUNAN MAHASISWA ARSITEKTUR ATMA JAYA YOGYAKARTA</h2>
                            
                            <hr>
                            <br>
                                <center><h3 class="text-black"><b><span>-- </span> TRICAKA <span> --</span></b></h3></center>
                            <br>
                            <p class="text-justify text-black text-arvo">&nbsp;&nbsp;Crast FM merupakan sebuah radio komunitas milik Ilmu Komunikasi Universitas
                                Pembangunan Nasional “Veteran” Yogyakarta. Radio ini berdiri pada 14 Mei 2003 di
                                Babarsari, Sleman, Yogyakarta (Kampus II UPN “Veteran” Yogyakarta). Tagline dari Crast
                                sendiri adalah Smart People Think Different. Crast FM memiliki pendengar setia yang biasa
                                dipanggil dengan sebutan Smart Listener.</p>
                                <p class="text-justify text-black text-arvo">&nbsp;&nbsp;Sebagai radio komunitas dengan mahasiswa dan anak muda sebagai sasaran pendengarnya,
                                Crast FM menyajikan berbagai informasi mengenai dunia musik, hiburan, gaya hidup, dan
                                informasi menarik lainnya. Selain itu, Crast FM juga menempatkan diri sebagai media
                                kampus Universitas Pembangunan Nasional “Veteran” Yogyakarta, dengan memberitakan
                                informasi seputar kampus pada program Speaker dan mengundang narasumber dari kampus
                                pada program Breakdown. Crast FM mengudara dari Senin sampai Jum’at, mulai pukul
                                08.00-15.00. Berbagai program siaran yang dimiliki oleh Crast FM diantaranya, Morning
                                Sunshine, Crast Hour, Speaker Traffic Zone, dan Breakdown.</p>
                                <p class="text-justify text-black text-arvo">&nbsp;&nbsp;Kini, Crast FM tidak hanya mengudara melalui kanal terestrial di 107.8 Fm. Crast FM sudah
                                merambah secara streaming melalui platform milik Jogjastreamers.com. Melalui layanan
                                streaming jangkauan siaran Crast FM tidak terbatas pada wilayah Daerah Istimewa
                                Yogyakarta. Kini, Smart Listeners dapat mendengarkan Crast FM hingga berbagai penjuru
                                dunia. Tidak hanya itu, Crast FM juga menyapa Smart Listeners melalui melalui media
                                sosialnya yaitu Instagram, Youtube, dan Twitter.</p>
                        </div>
            </div>
            


<div class="clc"></div>


<?php
if (isset($asidebar)) {
    $this->load->view($asidebar);
}
?>
</div>
</div>
</section>