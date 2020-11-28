<div class="col-lg-4 ">
                        <div class="blog_right_sidebar kotakBisque">
                            <h3 class="widget_title">Instagram</h3>
                            <iframe class="instagram-media instagram-media-rendered" id="instagram-embed-1" 
                            src="<?php echo $instagram->link_instagram;?>embed/captioned?cr=1&amp;wp=337&amp;rd=http%3A%2F%2Flocalhost&amp;rp=%2FarsiAtma%2FHima%2F6#%7B%22ci%22%3A1%2C%22os%22%3A716.6449999931501%2C%22ls%22%3A188.14499999280088%2C%22le%22%3A188.89499999932013%7D" 
                            allowtransparency="true" allowfullscreen="true" frameborder="0" height="863" data-instgrm-payload-id="instagram-media-payload-1" 
                            scrolling="yes" >
                            </iframe>
                            </aside><br>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Informasi Terbaru</h3>
                                
                                <!-- load 2 informasi univ -->
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
                                <!-- load 2 informasi fakultas -->
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
                                <!-- load 2 informasi pamiy -->
                                <?php foreach($asidebarContentPamiy as $pamiy) :?>
                                <div class="comment-list border-aside">
                                    <div class="single-comment single-reviews justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <a href="<?php echo base_url('informasi/informasi_detailpamiy/').$pamiy['id_informasi_pamiy']?>">
                                                <div class="desc">
                                                    <h5><?php echo substr($pamiy['judul_pamiy'],0,30)."...";?>
                                                    </h5>
                                                    <p class="comment">
                                                        <?php echo substr($pamiy['deskripsi_pamiy'],0,120)."...";?>
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