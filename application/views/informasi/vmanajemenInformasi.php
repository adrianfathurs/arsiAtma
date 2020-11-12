<section class="contact_area section_gap">
    <div class="main-title">
        <h2 class="text-center mb-4">INFORMASI YANG DISIMPAN ATAU DISUKAI</h2></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-2"><button class="btn btn-outline-success" id="btnTableUniversitas">Informasi Universitas</button></div>
        <div class="col-lg-2 col-md-2"><button class="btn btn-outline-success" id="btnTableFakultas">Informasi Fakultas</button></div>
        <div class="col-lg-2 col-md-2"><button class="btn btn-outline-success" id="btnTableHima">Informasi Hima</button></div>
        </div>
        <br>
       <div id="table_hima">
        <table id="table_id" class="table">
        <h4 class="text-center mb-4">INFORMASI HIMA</h4></div>
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiHima as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark"><?php echo $a?></td>
                    <td scope="col" class="text-dark"><?php echo $key['judul_hima']?></td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
       <!--  -->
       <div id="table_univ">
        <table id="table_id_univ" class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiUniv as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark"><?php echo $a?></td>
                    <td scope="col" class="text-dark"><?php echo $key['judul_univ']?></td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
       <!--  -->
       <div id="table_fakultas">
        <table id="table_id_fakultas" class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Judul</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($manajemenInformasiFakultas as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark"><?php echo $a?></td>
                    <td scope="col" class="text-dark"><?php echo $key['judul_fakultas']?></td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
       </div>
        <!-- Modal -->
    </div>
    
</section>

