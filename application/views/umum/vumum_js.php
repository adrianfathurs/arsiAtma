<script type="text/javascript" src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>
<script src="<?php echo base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/')?>js/jquery.js"></script>
<script src="<?php echo base_url('assets/')?>js/popper.js"></script>
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"></script>
<script>
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto1").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };

  function previewImage2() {
    document.getElementById("image-preview2").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto2").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview2").src = oFREvent.target.result;
    };
  };

  function previewImage3() {
    document.getElementById("image-preview3").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto3").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview3").src = oFREvent.target.result;
    };
  };

  function previewImage4() {
    document.getElementById("image-preview4").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto4").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview4").src = oFREvent.target.result;
    };
  };

  function previewImage5() {
    document.getElementById("image-preview5").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto5").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview5").src = oFREvent.target.result;
    };
  };
</script>
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