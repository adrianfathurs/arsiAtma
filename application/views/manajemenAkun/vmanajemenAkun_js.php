 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>

<script type="text/javascript">
     $(document).ready( function () {
        $(document).on("click",'#btnPraedit',function(){
            var id_akun= $(this).data('id_akun');
            var username= $(this).data('username');
            var email= $(this).data('email');
            var nama_lengkap= $(this).data('nama_lengkap');
            var no_telp= $(this).data('no_telp');
            var type_akun= $(this).data('type_akun');
            var status= $(this).data('status');
            var instansi= $(this).data('instansi');
            console.log(username);
            $('.modal-footer #id_akun ').val(id_akun);
            $('.form-group #email').val(email);
            $('.form-group #username').val(username);
            $('.form-group #namaLengkap').val(nama_lengkap);
            $('.form-group #noTelp').val(no_telp);
            $('.form-group #instansi').val(instansi);
            $(' .row .col .form-group #tipeAkun').val(type_akun);
            $(' .row .col .form-group #statusAKun').val(status);
        });
    } );
</script>