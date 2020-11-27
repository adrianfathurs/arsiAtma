<div class="col-lg-4 ">
                        <div class="blog_right_sidebar kotakBisque">
                            <h3 class="widget_title">Instagram</h3>
                                <?php echo $instagram->link_instagram?>
                            </aside><br>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Informasi Terbaru</h3>
                                
                                <!-- load 2 informasi univ -->
                                <?php foreach($asidebarContent as $hima) :?>
                                <div class="comment-list border-aside">
                                    <div class="single-comment single-reviews justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">     
                                            <a href="<?php echo base_url('informasi/informasi_detail/').$hima['id_informasi_hima']?>">
                                                <div class="desc">
                                                    <h5><?php echo substr($hima['judul_hima'],0,30)."...";?>
                                                    </h5>
                                                    <p class="comment">
                                                        <?php echo substr($hima['deskripsi_hima'],0,120)."...";?>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                                <!-- load 2 informasi fakultas -->
                                <?php foreach($asidebarContentFakultas as $fakultas) :?>
                                <div class="comment-list border-aside">
                                    <div class="single-comment single-reviews justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                             <a href="<?php echo base_url('informasi/informasi_detailFakultas/').$fakultas['id_informasi_fakultas']?>">
                                                <div class="desc">
                                                    <h5><?php echo substr($fakultas['judul_fakultas'],0,30)."...";?>
                                                    </h5>
                                                    <p class="comment">
                                                        <?php echo substr($fakultas['deskripsi_fakultas'],0,120)."...";?>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                                <!-- load 2 informasi pamiy -->
                                <?php foreach($asidebarContentUniv as $univ) :?>
                                <div class="comment-list border-aside">
                                    <div class="single-comment single-reviews justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <a href="<?php echo base_url('informasi/informasi_detailUniv/').$univ['id_informasi_univ']?>">
                                                <div class="desc">
                                                    <h5><?php echo substr($univ['judul_univ'],0,30)."...";?>
                                                    </h5>
                                                    <p class="comment">
                                                        <?php echo substr($univ['deskripsi_univ'],0,120)."...";?>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                            </aside>

                        </div>
                    </div>