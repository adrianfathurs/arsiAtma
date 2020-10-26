<section class="contact_area section_gap">
<div class="container">
<div id="wrap-form" class="container_xx table-responsive">
    <center><h2 class="card-title"> Form Update Biro</h2></center>
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body text-black">
            <?php if (!empty($this->session->userdata('typeNotif'))) : ?>
                <div id="alerttype" class="alert p-3 mb-2">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" required> <span aria-hidden="true">×</span> </button>
                    <h5 id="alerttitle"></h5>
                    <span id="alertmessage"></span>
                    <i id="alerticon"></i>
                </div>
                <?php endif; ?>
                
               
                <?php echo form_open_multipart('hima/formOrganisasiPh/');?>
              
                        <div class="form-group" >
                            <label class="col-sm-4 form-control-label" >Nama Lengkap:</label>  
                            <input type="text" class="form-control " name="namaPh" placeholder="Nama Pengurus Harian" required value="<?php echo $ph->nama_lengkap ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Foto Sampul :</label>
                            <input type="file" class="form-control" name="foto1" id="foto1"  value="<?php echo $ph->foto1_ph ?>" onchange="previewImage();">
                            <img src="<?php echo base_url('assets/img/organisasiHima/').$ph->foto1_ph ?>" name="foto1" id="image-preview" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>
                        <br>                                   
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Tugas Pengurus Harian :</label>
                            <textarea class="ckeditor" name="tugasPh" required ><?php echo $ph->tugas_ph ?></textarea>        
                        </div>
                        <br>                        
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Deskripsi Pengurus Harian:</label>
                            <textarea class="ckeditor" name="deskripsiPh" required ><?php echo $ph->deskripsi_ph ?></textarea>        
                        </div>
                        <br>                        
                        <div class="text-right">
                            <input type="text" hidden id="creator" name="creator" value="<?php echo $id; ?>">
                            <input type="text" hidden id="id_ph" name="id_ph" value="<?php echo $ph->id_ph?>">
                            <input type="text" hidden id="submit" name="submit" value="submit">
                            <button type="button" class="btn btn-secondary" onclick="history.back();">Batal</button>                                        
                            <button type="submit" class="btn btn-success"> Simpans</button>
                        </div>
                        <?php echo form_close();?>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
</section>