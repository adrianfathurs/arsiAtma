<section class="contact_area section_gap">
    <div class="main-title">
        <h2 class="text-center mb-4">INFORMASI YANG DISIMPAN ATAU DISUKAI</h2></div>
    <div class="container">
        <div class="row">
            <div class="col-lg col-md col-sm"><button class="btn btn-outline-success" id="btnTableHima">Informasi Hima</button></div>
            <div class="col-lg col-md col-sm"><button class="btn btn-outline-success" id="btnTableUniversitas">Informasi Universitas</button></div>
            <div class="col-lg col-md col-sm"><button class="btn btn-outline-success" id="btnTableFakultas">Informasi Fakultas</button></div>
            <div class="col-lg col-md col-sm"><button class="btn btn-outline-success" id="btnTablePamiy">Informasi Pamiy </button></div>
            <div class="col-lg col-md col-sm"><button class="btn btn-outline-success" id="btnTableUmum">Informasi Umum</button></div>
            <div class="col-lg col-md col-sm"><button class="btn btn-outline-success" id="btnTablePortofolio">Informasi Portofolio</button></div>
        </div>
        <br>
        <br>
       <div id="table_hima">
        <table id="table_id" class="table">
        <h4 class="text-center mb-4">INFORMASI HIMA</h4></div>
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiHima as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark text-center"><?php echo $a?></td>
                    <td scope="col" class="text-dark text-center"><?php echo $key['judul_hima']?></td>
                    <td scope="col" class="text-dark text-center">
                    <a title="Lihat detail" href="<?php echo base_url('informasi/informasi_detail/').$key['id_informasi_hima']?>"><i class="fas fa-search"></i></a>
                    <a title="Hapus Informasi" class="hapusInfo" href="<?php echo base_url('informasi/hapusfav/').$key['id_informasi_hima']?>"><i class="text-danger  fas fa-trash-alt"></i></a>
                    
                    </td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
       <!--  -->
       <div id="table_univ">
        <table id="table_id_univ" class="table">
        <h4 class="text-center mb-4">INFORMASI UNIVERSITAS</h4></div>
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                    <th class="text-center" scope="col">Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiUniv as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark text-center"><?php echo $a?></td>
                    <td scope="col" class="text-dark text-center"><?php echo $key['judul_univ']?></td>
                     <td scope="col" class="text-dark text-center">
                     <a title="Lihat detail" href="<?php echo base_url('informasi/informasi_detailUniv/').$key['id_informasi_univ']?>"><i class="fas fa-search"></i></a>
                     <a title="Hapus Informasi" class="hapusInfo" href="<?php echo base_url('informasi/hapusfavuniv/').$key['id_informasi_univ']?>"><i class="text-danger  fas fa-trash-alt"></i></a>
                     </td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
       <!--  -->
       <div id="table_fakultas">
        <table id="table_id_fakultas" class="table">
        <h4 class="text-center mb-4">INFORMASI FAKULTAS</h4></div>
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                    <th class="text-center" scope="col">Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiFakultas as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark text-center"><?php echo $a?></td>
                    <td scope="col" class="text-dark text-center"><?php echo $key['judul_fakultas']?></td>
                    <td scope="col" class="text-dark text-center">
                        <a title="Lihat detail" href="<?php echo base_url('informasi/informasi_detailFakultas/').$key['id_informasi_fakultas']?>"><i class="fas fa-search"></i></a>
                        <a title="Hapus Informasi" class="hapusInfo" href="<?php echo base_url('informasi/hapusfavfakultas/').$key['id_informasi_fakultas']?>"><i class="text-danger fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
       <div id="table_umum">
        <table id="table_id_umum" class="table">
        <h4 class="text-center mb-4">INFORMASI UMUM</h4></div>
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                    <th class="text-center" scope="col">Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiUmum as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark text-center"><?php echo $a?></td>
                    <td scope="col" class="text-dark text-center"><?php echo $key['judul_umum']?></td>
                    <td scope="col" class="text-dark text-center">
                        <a title="Lihat detail" href="<?php echo base_url('Umum/informasi_detailUmum/').$key['id_informasi_umum']?>"><i class="fas fa-search"></i></a>
                        <a title="Hapus Informasi" class="hapusInfo" href="<?php echo base_url('umum/hapusfavmanajemeninformasi/').$key['id_informasi_umum']?>"><i class="text-danger  fas fa-trash-alt"></i></a>
                     </td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
       <div id="table_pamiy">
        <table id="table_id_pamiy" class="table">
        <h4 class="text-center mb-4">INFORMASI PAMIY</h4></div>
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                    <th class="text-center" scope="col">Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiPamiy as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark text-center"><?php echo $a?></td>
                    <td scope="col" class="text-dark text-center"><?php echo $key['judul_pamiy']?></td>
                    <td scope="col" class="text-dark text-center">
                        <a title="Lihat detail" href="<?php echo base_url('informasi/informasi_detailpamiy/').$key['id_informasi_pamiy']?>"><i class="fas fa-search"></i></a>
                        <a title="Hapus Informasi" class="hapusInfo" href="<?php echo base_url('informasi/hapusfavpamiy/').$key['id_informasi_pamiy']?>"><i class="text-danger  fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
       <div id="table_portofolio">
        <table id="table_id_portofolio" class="table">
        <h4 class="text-center mb-4">INFORMASI PORTOFOLIO</h4></div>
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                    <th class="text-center" scope="col">Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiPortofolio as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark text-center"><?php echo $a?></td>
                    <td scope="col" class="text-dark text-center"><?php echo $key['judul_portofolio']?></td>
                    <td scope="col" class="text-dark text-center">
                        <a title="Lihat detail" href="<?php echo base_url('portofolio/detail/').$key['id_portofolio']?>"><i class="fas fa-search"></i></a>
                        <a title="Hapus Informasi" class="hapusInfo" href="<?php echo base_url('portofolio/hapusfav/').$key['id_portofolio']?>"><i class="text-danger  fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
        <!-- Modal -->
    </div>
    
</section>

