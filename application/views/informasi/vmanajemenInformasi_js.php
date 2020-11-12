 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

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

    
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#table_hima').show();
    $('#table_hima').addClass('active');
    $('#table_univ').hide();
    $('#table_fakultas').hide();

    $('#btnTableHima').click(function(){
        $('#table_hima').show();
        $('#table_hima').addClass('active');
        $('#table_univ').removeClass('active');
        $('#table_fakultas').removeClass('active');
        $('#table_univ').hide();
        $('#table_fakultas').hide();
    });

    $('#btnTableUniversitas').click(function(){
       console.log("univ");
        $('#table_univ').show();
        $('#table_hima').removeClass('active');
        $('#table_univ').addClass('active');
        $('#table_fakultas').removeClass('active');
        $('#table_hima').hide();
        $('#table_fakultas').hide();
    });
    $('#btnTableFakultas').click(function(){
        $('#table_fakultas').show();
        $('#table_hima').removeClass('active');
        $('#table_univ').removeClass('active');
        $('#table_fakultas').addClass('active');
        $('#table_hima').hide();
        $('#table_univ').hide();
    });

});
</script>
