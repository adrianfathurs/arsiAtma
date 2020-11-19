 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    $(document).ready( function () {
        $('#table_id_univ').DataTable();
    } );
    $(document).ready( function () {
        $('#table_id_fakultas').DataTable();
    } );
    $(document).ready( function () {
        $('#table_id_umum').DataTable();
    } );
    $(document).ready( function () {
        $('#table_id_pamiy').DataTable();
    } );

    
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#table_hima').show();
    $('#table_hima').addClass('active');
    $('#table_univ').hide();
    $('#table_fakultas').hide();
    $('#table_umum').hide();
    $('#table_pamiy').hide();
    $('#table_portofolio').hide();

    $('#btnTableHima').click(function(){
        $('#table_hima').show();
        $('#table_hima').addClass('active');
        $('#table_univ').removeClass('active');
        $('#table_fakultas').removeClass('active');
        $('#table_pamiy').removeClass('active');
        $('#table_portofolio').removeClass('active');
        $('#table_univ').hide();
        $('#table_fakultas').hide();
        $('#table_umum').hide();
        $('#table_pamiy').hide();
        $('#table_portofolio').hide();
    });

    $('#btnTableUniversitas').click(function(){
       console.log("univ");
        $('#table_univ').show();
        $('#table_hima').removeClass('active');
        $('#table_univ').addClass('active');
        $('#table_fakultas').removeClass('active');
        $('#table_pamiy').removeClass('active');
        $('#table_portofolio').removeClass('active');
        $('#table_hima').hide();
        $('#table_fakultas').hide();
        $('#table_umum').hide();
        $('#table_pamiy').hide();
        $('#table_portofolio').hide();
    });
    $('#btnTableFakultas').click(function(){
        $('#table_fakultas').show();
        $('#table_hima').removeClass('active');
        $('#table_portofolio').removeClass('active');
        $('#table_univ').removeClass('active');
        $('#table_pamiy').removeClass('active');
        $('#table_fakultas').addClass('active');
        $('#table_hima').hide();
        $('#table_univ').hide();
        $('#table_umum').hide();
        $('#table_portofolio').hide();
        $('#table_pamiy').hide();
    });
    $('#btnTableUmum').click(function(){
        $('#table_umum').show();
        $('#table_hima').removeClass('active');
        $('#table_univ').removeClass('active');
        $('#table_fakultas').removeClass('active');
        $('#table_pamiy').removeClass('active');
        $('#table_portofolio').removeClass('active');
        $('#table_umum').addClass('active');
        $('#table_hima').hide();
        $('#table_univ').hide();
        $('#table_fakultas').hide();
        $('#table_pamiy').hide();
        $('#table_portofolio').hide();
    });
    $('#btnTablePamiy').click(function(){
        $('#table_pamiy').show();
        $('#table_hima').removeClass('active');
        $('#table_univ').removeClass('active');
        $('#table_fakultas').removeClass('active');
        $('#table_umum').removeClass('active');
        $('#table_portofolio').removeClass('active');
        $('#table_pamiy').addClass('active');
        $('#table_hima').hide();
        $('#table_univ').hide();
        $('#table_umum').hide();
        $('#table_fakultas').hide();
        $('#table_portofolio').hide();
        
    });
    $('#btnTablePortofolio').click(function(){
        $('#table_portofolio').show();
        $('#table_hima').removeClass('active');
        $('#table_univ').removeClass('active');
        $('#table_fakultas').removeClass('active');
        $('#table_umum').removeClass('active');
        $('#table_pamiy').removeClass('active');
        $('#table_portofolio').addClass('active');
        $('#table_hima').hide();
        $('#table_univ').hide();
        $('#table_umum').hide();
        $('#table_fakultas').hide();
        $('#table_pamiy').hide();
        
    });

});
</script>
<script>
 $('.hapusInfo').on('click', function(e){
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
