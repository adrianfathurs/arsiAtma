<div id="wrap-form" class="container_xx table-responsive">
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
                <h5 class="card-title"> Form Article</h5>
               
                <?php echo form_open_multipart('informasi/formhima/');?>
              
                <div class="form-group" >
                    <label class="col-sm-4 form-control-label" > Judul Artikel:</label>  
                    <input type="text" class="form-control " name="judul" placeholder="Judul Artikel" required value="<?php ?>">
                </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                            <input type="file" class="form-control" name="foto1" id="foto1"  value="<?php ?>" onchange="previewImage();">
                            <img src="<?php echo base_url('assets/upload/') ?>" name="foto1" id="image-preview" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>
                        <div>
                            <input type="file" name="fileeee">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 2 :</label>
                            <input type="file" class="form-control" name="foto2" id="foto2"  value="<?php echo $data->foto2; ?>" onchange="previewImage2();"> 
                            <img src="<?php echo base_url('assets/upload/'.$data->foto2) ?>" name="foto2" id="image-preview2" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 3 :</label>
                            <input type="file" class="form-control" name="foto3" id="foto3"  value="<?php echo $data->foto3; ?>" onchange="previewImage3();">  
                            <img src="<?php echo base_url('assets/upload/'.$data->foto3) ?>" name="foto3" id="image-preview3" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                                         
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 4 :</label>
                            <input type="file" class="form-control" name="foto4" id="foto4"  value="<?php echo $data->foto2; ?>" onchange="previewImage4();"> 
                            <img src="<?php echo base_url('assets/upload/'.$data->foto2) ?>" name="foto4" id="image-preview4" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 5 :</label>
                            <input type="file" class="form-control" name="foto5" id="foto5"  value="<?php echo $data->foto3; ?>" onchange="previewImage5();">  
                            <img src="<?php echo base_url('assets/upload/'.$data->foto3) ?>" name="foto5" id="image-preview5" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Isi Artikel 1 :</label>
                            <textarea class="ckeditor" name="essay" required ><?php  ?></textarea>        
                            
                        </div>                        
                        <div class="text-right">
                            <input type="text" hidden id="creator" name="creator" value="<?php ?>">
                            <input type="text" hidden id="id_artikel" name="id_artikel" value="<?php  ?>">
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
        