<script src="<?php echo base_url('assets/')?>js/jquery.js"></script>
<script src="<?php echo base_url('assets/')?>js/popper.js"></script>
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"></script>

<script>
		$('.toast').toast('show');
</script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>
<script src="<?php echo base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
<script>
$('.toast').toast('show');
</script>

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
            showCancelButton: false,
            cancelButtonColor: '#343a40',
            confirmButtonColor: '#c00e1f',
            confirmButtonText: 'Ya'
            })
    };
    $('.toast').toast('show');
 </script>