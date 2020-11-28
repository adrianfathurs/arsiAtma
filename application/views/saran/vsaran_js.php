<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
      var cekreload= false;
      function reload(data)
    {
        var cekreload =true;
        var postForm = null;
        var checker =2;
        var tampil=data;
       
        console.log(checker);
       $("#announce").html(data);
    };
      
       $("#btnSubmitSaran").click(function(){
            if(cekreload){
                $("#announce").html(tampil);
            }
            else{
            var postForm = {
                'name' : document.getElementById('name').value,
                'email' :document.getElementById('email').value,
                'no_telp':document.getElementById('nomor_telepon').value,
                'message':document.getElementById('message').value
            };

                $.ajax({
                    type:"post",
                    url:'http://localhost/arsiAtma/saran/submitSaran',
                    data:postForm,

                    success:function(data){
                        var checker=1;
                        console.log(data);
                        reload(data);
                    }
                }); 

            }

            
       });
    });
</script>
<!-- Data Tables -->
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<!-- SYTAX HAPUS -->
<script type="text/javascript">
     $(document).ready( function () {
        $(document).on("click",'#btnPrahapus',function(){
            var id_saran= $(this).data('id');
            console.log(id_saran);
            $('.modal-footer #modal_id_saran').val(id_saran);
        });
    } );
</script>