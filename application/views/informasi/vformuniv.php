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
                <h5 class="card-title"> Form tambah Informasi Universitas</h5>
               
                <?php echo form_open_multipart('informasi/formuniv/');?>
              
                <div class="form-group" >
                    <label class="col-sm-4 form-control-label" > Judul Informasi:</label>  
                    <input type="text" class="form-control " name="judul" placeholder="Judul Artikel" required value="<?php echo $data->judul_univ ?>">
                </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                            <input type="file" class="form-control" name="foto1" id="foto1"  value="<?php $data->foto1_univ ?>" onchange="previewImage();">
                            <img src="<?php echo base_url('assets/img/informasiUniv/').$data->foto1_univ ?>" name="foto1" id="image-preview" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 2 :</label>
                            <input type="file" class="form-control" name="foto2" id="foto2"  value="<?php echo $data->foto2_univ; ?>" onchange="previewImage2();"> 
                            <img src="<?php echo base_url('assets/img/informasiUniv/'.$data->foto2_univ) ?>" name="foto2" id="image-preview2" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 3 :</label>
                            <input type="file" class="form-control" name="foto3" id="foto3"  value="<?php echo $data->foto3_univ; ?>" onchange="previewImage3();">  
                            <img src="<?php echo base_url('assets/img/informasiUniv/'.$data->foto3_univ) ?>" name="foto3" id="image-preview3" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                                         
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 4 :</label>
                            <input type="file" class="form-control" name="foto4" id="foto4"  value="<?php echo $data->foto4_univ; ?>" onchange="previewImage4();"> 
                            <img src="<?php echo base_url('assets/img/informasiUniv/'.$data->foto4_univ) ?>" name="foto4" id="image-preview4" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 5 :</label>
                            <input type="file" class="form-control" name="foto5" id="foto5"  value="<?php echo $data->foto5_univ; ?>" onchange="previewImage5();">  
                            <img src="<?php echo base_url('assets/img/informasiUniv/'.$data->foto5_univ) ?>" name="foto5" id="image-preview5" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Isi Artikel 1 :</label>
                            <textarea class="ckeditor" name="essay" required ><?php echo $data->deskripsi_univ ?></textarea>        
                            
                        </div>                        
                        <div class="text-right">
                            <input type="text" hidden id="creator" name="creator" value="<?php echo $id; ?>">
                            <input type="text" hidden id="id_info" name="id_info" value="<?php echo $data->id_informasi_univ  ?>">
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
        