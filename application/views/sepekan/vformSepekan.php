<section class="contact_area section_gap">
<div class="container">
<div id="wrap-form" class="container_xx table-responsive">
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body text-black">
            <?php if (!empty($this->session->userdata('typeNotif'))) : ?>                
                <?php endif; ?>
                <center><h3 class="card-title"> Form Tambah Informasi Sepekan</h3></center>
               
                <?php echo form_open_multipart('Sepekan/submitInformasi/');?>
                <div class="form-group" >
                    <label class="col-sm-4 form-control-label" > Judul Informasi:</label>  
                    <input type="text" class="form-control " name="judul" placeholder="Judul Artikel" required value="<?php echo $data->judul_sepekan  ?>">
                </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                            <input type="file" class="form-control" name="foto1" id="foto1"  value="<?php  echo $data->foto1_sepekan ?>" onchange="previewImage();">
                            <img src="<?php echo base_url('assets/img/informasiSepekan/').$data->foto1_sepekan?>" name="foto1" id="image-preview" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 2 :</label>
                            <input type="file" class="form-control" name="foto2" id="foto2"  value="<?php echo $data->foto2_sepekan; ?>" onchange="previewImage2();"> 
                            <img src="<?php echo base_url('assets/img/informasiSepekan/'.$data->foto2_sepekan) ?>" name="foto2" id="image-preview2" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 3 :</label>
                            <input type="file" class="form-control" name="foto3" id="foto3"  value="<?php echo $data->foto3_sepekan; ?>" onchange="previewImage3();">  
                            <img src="<?php echo base_url('assets/img/informasiSepekan/'.$data->foto3_sepekan ) ?>" name="foto3" id="image-preview3" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                                         
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 4 :</label>
                            <input type="file" class="form-control" name="foto4" id="foto4"  value="<?php echo $data->foto4_sepekan; ?>" onchange="previewImage4();"> 
                            <img src="<?php echo base_url('assets/img/informasiSepekan/'.$data->foto4_sepekan ) ?>" name="foto4" id="image-preview4" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 5 :</label>
                            <input type="file" class="form-control" name="foto5" id="foto5"  value="<?php echo $data->foto5_sepekan; ?>" onchange="previewImage5();">  
                            <img src="<?php echo base_url('assets/img/informasiSepekan/'.$data->foto5_sepekan ) ?>" name="foto5" id="image-preview5" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Isi Artikel 1 :</label>
                            <textarea class="ckeditor" name="essay" required ><?php echo  $data->deskripsi_sepekan?> </textarea>        
                            
                        </div>                        
                        <div class="text-right">
                            <input type="text" hidden id="creator" name="creator" value="<?php echo  $id ; ?>">
                            <input type="text" hidden id="id_info" name="id_info" value="<?php echo  $data->id_informasi_sepekan ?> ">
                            <input type="text" hidden id="submit" name="submit" value="submit">
                            <button type="button" class="btn btn-secondary" onclick="history.back();">Batal</button>                                        
                            <button type="submit" class="btn btn-success"> Simpan</button>
                        </div>
                    
                        
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
</section>