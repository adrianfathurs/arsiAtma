<div id="wrap-form" class="container_xx table-responsive">
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body text-black">
            <?php if (!empty($this->session->userdata('typeNotif'))) : ?>                
                <?php endif; ?>
                <h5 class="card-title"> Form tambah Informasi portofolio</h5>
               
                <?php echo form_open_multipart('informasi/formportofolio/');?>
              
                <div class="form-group" >
                    <label class="col-sm-4 form-control-label" > Judul Informasi:</label>  
                    <input type="text" class="form-control " name="judul" placeholder="Judul Artikel" required value="<?php echo $data->judul_portofolio ?>">
                </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                            <input type="file" class="form-control" name="foto1" id="foto1"  value="<?php $data->foto1_portofolio ?>" onchange="previewImage();">
                            <img src="<?php echo base_url('assets/img/portofolio/').$data->foto1_portofolio ?>" name="foto1" id="image-preview" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 2 :</label>
                            <input type="file" class="form-control" name="foto2" id="foto2"  value="<?php echo $data->foto2_portofolio; ?>" onchange="previewImage2();"> 
                            <img src="<?php echo base_url('assets/img/portofolio/'.$data->foto2_portofolio) ?>" name="foto2" id="image-preview2" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 3 :</label>
                            <input type="file" class="form-control" name="foto3" id="foto3"  value="<?php echo $data->foto3_portofolio; ?>" onchange="previewImage3();">  
                            <img src="<?php echo base_url('assets/img/portofolio/'.$data->foto3_portofolio) ?>" name="foto3" id="image-preview3" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                                         
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 4 :</label>
                            <input type="file" class="form-control" name="foto4" id="foto4"  value="<?php echo $data->foto4_portofolio; ?>" onchange="previewImage4();"> 
                            <img src="<?php echo base_url('assets/img/portofolio/'.$data->foto4_portofolio) ?>" name="foto4" id="image-preview4" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 5 :</label>
                            <input type="file" class="form-control" name="foto5" id="foto5"  value="<?php echo $data->foto5_portofolio; ?>" onchange="previewImage5();">  
                            <img src="<?php echo base_url('assets/img/portofolio/'.$data->foto5_portofolio) ?>" name="foto5" id="image-preview5" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Isi Artikel 1 :</label>
                            <textarea class="ckeditor" name="essay" required ><?php echo $data->keterangan_portofolio ?></textarea>        
                            
                        </div>                        
                        <div class="text-right">
                            <input type="text" hidden id="creator" name="creator" value="<?php echo $id; ?>">
                            <input type="text" hidden id="id_info" name="id_info" value="<?php echo $data->id_portofolio  ?>">
                            <input type="text" hidden id="submit" name="submit" value="submit">
                            <button type="button" class="btn btn-secondary" onclick="history.back();">Batal</button>                                        
                            <button type="submit" class="btn btn-success"> Simpan</button>
                        </div>
                        <?php echo form_close();?>
                    </div>      
                </div>
            </div>
        </div>
    </div>
        