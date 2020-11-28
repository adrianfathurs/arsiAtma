
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"></script>

<script>
		$('.toast').toast('show');
</script>

<script src="<?php echo base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>

 <script>
 function konfirmasi(){
      Swal.fire({
			title: 'Perhatikan',
			scrollbarPadding: 'false',
			grow: 'bottom',
            text: "Anda Harus Login/Daftar Akun Pengguna Terlebih Dahulu!",
            icon: 'warning',
			position: 'center',
            showCancelButton: false,
            cancelButtonColor: '#343a40',
            confirmButtonColor: '#c00e1f',
            confirmButtonText: 'Ya'
            })
    };    
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