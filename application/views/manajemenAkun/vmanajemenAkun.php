<section class="contact_area section_gap views">
    <div class="main-title">
        <h2 class="text-center mb-4">MANAJEMEN AKUN</h2></div>
    <div class="container">
        <?php if(!empty($this->session->tempdata('item'))) { 
            echo $this->session->tempdata('item');
        }?>
        <table id="table_id" class="table table-responsive">
            <thead>
                <tr>
                    <th class="text-center" scope="col" >No</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Username</th>
                    <th class="text-center" scope="col" >Nama Lengkap</th>
                    <th class="text-center" scope="col">No.Telp</th>
                    <th class="text-center" scope="col">instansi</th>
                    <th class="text-center" scope="col">Tipe Akun</th>
                    <th class="text-center" scope="col">Status</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <!--  -->
           
            <!--  -->
                <?php $a=1; foreach ($loadAkun as $key ) : ?>
                <tr>
                    <td scope="col" class="text-dark"><?php echo $a?></td>
                    <td scope="col" class="text-dark"><?php echo $key['email']?></td>
                    <td scope="col" class="text-dark"><?php echo $key['username']?></td>
                    <td scope="col" class="text-dark"><?php echo $key['nama_lengkap']?></td>
                    <td scope="col" class="text-dark"><?php echo $key['no_telp']?></td>
                    <td scope="col" class="text-dark"><?php echo $key['instasi']?></td>
                    <?php if($key['type_akun']==1){?>
                        <td scope="col" class="text-dark">Admin</td>
                    <?php } else{?>
                        <td scope="col" class="text-dark">Member</td>
                    <?php } ?>
                    <?php if($key['status']==1){?>
                            <td scope="col" class="text-dark">Active</td>
                        
                    <?php } else{?>
                            <td scope="col" class="text-dark">Deactive</td>
    
                    <?php } ?>
        <!-- Button trigger modal -->
        <td ><a id="btnPraedit" 
            data-id_akun ="<?php echo $key['id_akun']?>"
            data-email ="<?php echo $key['email']?>"
            data-username ="<?php echo $key['username']?>"
            data-nama_lengkap ="<?php echo $key['nama_lengkap']?>"
            data-no_telp ="<?php echo $key['no_telp']?>"
            data-type_akun ="<?php echo $key['type_akun']?>"
            data-status ="<?php echo $key['status']?>"
            data-instansi ="<?php echo $key['instasi']?>"
            data-toggle="modal" data-target="#exampleModal">
            <i class="text-dark fas fa-edit"></i>
        </a></td>
        </tr>
                <?php $a++;endforeach;?>
            </tbody>
        </table>
        <!-- Modal -->
    
    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-light">
        
        <div class="modal-body">
        <form method="post" action="<?php echo base_url('Manajemenakun/updateAkun');?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="text" class="form-control" id="password" name="password" disabled="true" placeholder="Only Edited By Akun's Owner">
        </div>
        <div  class="form-group">
            <label for="namaLengkap" class="col-form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" >
        </div>
        <div  class="form-group">
            <label for="instansi" class="col-form-label">Instansi:</label>
            <input type="text" class="form-control" id="instansi" name="instansi" >
        </div>
        <div  class="form-group">
            <label for="noTelp" class="col-form-label">No.Telp:</label>
            <input type="text" class="form-control" id="noTelp" name="noTelp" >
        </div>
        
        <div class="row">
            <div class="col">
                <div  class="form-group">
                    <label for="tipeAkuns">Tipe Akun</label>
                    <select class="form-control select2" id="tipeAkun" name="tipeAkun" required="true">
                        <option disabled selected>---pilih tipe akun ---</option>
                        <option value="1">Admin</option>
                        <option value="0">Member</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="statusAkuns">Status Akun</label>
                    <select class="form-control" id="statusAkun" name="statusAkun" required="true">
                        <option  disabled selected> --- Pilih Status Akun ---</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="hidden" class="btn btn-danger" name="id_akun" id="id_akun"></input>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
  </div>
</div>
    
</section>

