<script type="text/javascript" src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"></script>
<script>
    $('.remove').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Perhatikan',
            text: "Anda Akan Menghapus Informasi Ini, Anda Yakin?",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#343a40',
            confirmButtonColor: '#c00e1f',
            confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
            if (result.value) {
              document.location.href = href;
            }
        });
        });

        $('.removefav').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Perhatikan',
            text: "Anda Akan Menghapus Informasi Ini dari Akun Anda, Anda Yakin?",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#343a40',
            confirmButtonColor: '#c00e1f',
            confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
            if (result.value) {
              document.location.href = href;
            }
        });
        });

        $('.addfav').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Perhatikan',
            text: "Anda Akan Menyimpan Informasi Ini ke Akun Anda, Anda Yakin?",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#343a40',
            confirmButtonColor: '#ffc107',
            confirmButtonText: 'Ya, Simpan!'
            }).then((result) => {
            if (result.value) {
              document.location.href = href;
            }
        });
        });

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


  // function savelike(idhima){
  //       $.ajax({
  //               type: "POST",
  //               url: "<?php echo site_url('Informasi/saveinformasi');?>",
  //               data: "id_hima="+idhima, 
  //               success: function (response) {
  //                 alert(idhima);
  //                 document.getElementById('like').innerHTML="Tersimpan <i class='fas fa-trash-alt'></i>";
  //               }              
  //           });
  //   }
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
