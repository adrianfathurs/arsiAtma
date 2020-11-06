<section class="contact_area section_gap">
    <div class="main-title">
        <h2 class="text-center mb-4">INFORMASI YANG DISIMPAN ATAU DISUKAI</h2></div>
    <div class="container">
       
        <table id="tableid" class="table">
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
                    <td scope="col" class="text-dark"><?php echo $a?></td>
                    <td scope="col" class="text-dark"><?php echo $key['judul_hima']?></td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
        <!-- Modal -->
    </div>
    
</section>

