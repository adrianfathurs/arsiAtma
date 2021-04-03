<section class="contact_area section_gap">
    <div class="main-title">
        <h2 class="text-center mb-4">MANAJEMEN SARAN</h2></div>
    <div class="card container" style="padding:9px; border: 1px solid rgb(246 207 143); background-color: #fcfcfc96;width: 100%;"  >
        <table id="table_id" class="table table-responsive" style="padding:9px; border: 1px solid rgb(246 207 143); background-color: #fcfcfc96;width: 100%;">
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Nama Lengkap</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col" >No Telp</th>
                    <th class="text-center" scope="col">Saran</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($saran as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark"><?php echo $a?></td>
                    <td scope="col" class="text-dark"><?php echo $key['nama_lengkap']?></td>
                    <td scope="col" class="text-dark"><?php echo $key['email']?></td>
                    <td scope="col" class="text-dark"><?php echo $key['no_telp']?></td>
                    <td scope="col" class="text-dark"><?php echo $key['isi_saran']?></td>
<!-- Button trigger modal -->
                    <td ><button type="button" id="btnPrahapus" data-id ="<?php echo $key['id_saran']?>" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">HAPUS</button></td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title " id="staticBackdropLabel">Peringatan !!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda akan Menghapus Saran ini?
            </div>
            <div class="modal-footer">
            <form action="<?php echo base_url('saran/hapusSaran')?>" method="post">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="hidden" class="btn btn-danger" name="id_saran" id="modal_id_saran"></input>
                <button type="submit" class="btn btn-success">Hapus</button>
                <!-- <button type="submit" class="btn btn-success">Hapus</button> -->
            </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    
</section>



