<section class="contact_area section_gap">
    <div class="main-title">
        <h2 class="text-center mb-4">MANAJEMEN SARAN</h2></div>
    <div class="container">
        <table id="table_id" class="table-responsive table-dark ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Saran</th>
                </tr>
            </thead>
            <tbody>
                <?php $a=1; foreach ($saran as $key ) : ?>
                <tr>
                    <td class="text-dark"><?php echo $a?></td>
                    <td class="text-dark"><?php echo $key['nama_lengkap']?></td>
                    <td class="text-dark"><?php echo $key['email']?></td>
                    <td class="text-dark"><?php echo $key['no_telp']?></td>
                    <td class="text-dark"><?php echo $key['isi_saran']?></td>
                </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
    </div>
</section>