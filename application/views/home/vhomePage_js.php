<script src="<?php echo base_url('assets/')?>js/jquery.js"></script>
<script src="<?php echo base_url('assets/')?>js/popper.js"></script>
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"></script>
<script>
		$('.toast').toast('show');
</script>

<script>
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
			
				success: function(data){

				}
			});
	
		}
</script>
