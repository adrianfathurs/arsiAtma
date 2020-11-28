<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<!-- boost traps toogle -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!--  -->
<script src="<?php echo base_url('assets/')?>js/select2.min.js"></script>


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
            // console.log(type_akun);
            $('.modal-footer #id_akun ').val(id_akun);
            $('.form-group #email').val(email);
            $('.form-group #username').val(username);
            $('.form-group #namaLengkap').val(nama_lengkap);
            $('.form-group #noTelp').val(no_telp);
            $('.form-group #instansi').val(instansi);
            // $(' .row .col .form-group #tipeAkun').val(type_akun);
            // $('[name="tipeAkun"]').val(type_akun);
            $('#tipeAkun').val(type_akun).select2();
            $(' .row .col .form-group #statusAKun').val(status);
            

            // Initialize Select2
            // $('#tipeAkun').select2();

            // Set option selected onchange
            
            // var value = $(this).data('type_akun');

            // Set selected 
            // $('#tipeAkun').val(value);
            // $('#tipeAkun').select2().trigger('change');

            
            
            
        });
        
    } );
    
</script>

<script>
        $(document).ready(function(){
            $('#gender[]').change(function(){
                if($(this).prop('checked')){
                var id_akun=$('#gender').val();
                console.log(id_akun);
                    var gender="active";
                    $('#label').html("Active");
                    _submitUpdateStatus(gender);
                }
                else{
                     var gender="deactive";
                     $('#label').html("Deactive");
                     _submitUpdateStatus(gender);
                    
                }
            });
        });

        function _submitUpdateStatus(gender){
            console.log(gender);
        }
    </script>
</body>