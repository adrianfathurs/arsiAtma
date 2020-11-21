<script src="<?php echo base_url('assets/')?>js/jquery.js"></script>
<script src="<?php echo base_url('assets/')?>js/popper.js"></script>
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"></script>

<script>
		$('.toast').toast('show');
</script>

<script src="<?php echo base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>

<!-- <script type="text/javascript">
	function like_button(id_informasi,id_jenis_informasi,id_button)
		{
			
			var postForm = {
				'id_informasi' : id_informasi,
				'id_jenis_informasi' : id_jenis_informasi,
				'id_button' :id_button
			};
			$.ajax({
				type :"post",
				url : 'http://localhost/arsiAtma/Informasi/likeButton',
				data :postForm,
			
				success: function(val){
					if(id_jenis_informasi==1 && id_button==1)
					{	
						$('#btnDislikeHima #bungkusDislikeHima i').remove();
						$('#btnDislikeHima #bungkusDislikeHima').append(val);
									
					}
					

				}
			});
	
		}

		
</script> -->

<!-- <script type="text/javascript">

 $(document).on("click",'#btnDislikeHima',function(){
	 var id_button=$(this).data('id_button');
	 var id_jenis_informasi=$(this).data('id_jenis_informasi');
	 var id_informasi=$(this).data('id_informasi_hima');

	var postForm = {
				'id_informasi' : id_informasi,
				'id_jenis_informasi' : id_jenis_informasi,
				'id_button' :id_button
			};
			$.ajax({
				type :"post",
				url : 'http://localhost/arsiAtma/Informasi/likeButton',
				data :postForm,
			
				success: function(val){
					if(id_jenis_informasi==1 && id_button==1)
					{
						console.log(val);
						$('i #gambarDislikeHima').attr("class","fas fa-heart");
						$('#btnDislikeHima').attr("data-id_button","1");
						console.log(id_button);
						console.log(id_informasi);
					}
					

				}
			});	

 });

 </script>

 -->
 <script>
 function konfirmasi(){
      Swal.fire({
            title: 'Perhatikan',
            text: "Anda Harus Login/Daftar Akun Pengguna Terlebih Dahulu!",
            icon: 'warning',
			position: 'center',
            showCancelButton: false,
            cancelButtonColor: '#343a40',
            confirmButtonColor: '#c00e1f',
            confirmButtonText: 'Ya'
            })
    };
    
 </script>

 <script>
  $('.like').on('click', function(e){
	  console.log("berhasil");
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Perhatian',
            text: "Data Anda Berhasil Tersimpan",
            icon: 'success',
           
            confirmButtonColor: '#49cd23',
            confirmButtonText: 'Sudah Paham!'
            }).then((result) => {
            if (result.value) {
              document.location.href = href;
            }
        });
        });

$('.unlike').on('click', function(e){
	  console.log("Unlike");
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Perhatian',
            text: "Anda Menghapus Data Informasi",
            icon: 'success',
            showCancelButton: true,
            cancelButtonColor: '#343a40',
            confirmButtonColor: '#c00e1f',
            confirmButtonText: 'Sudah Paham!'
            }).then((result) => {
            if (result.value) {
              document.location.href = href;
            }
        });
        });
 </script>