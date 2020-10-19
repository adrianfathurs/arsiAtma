<script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
              crossorigin="anonymous"></script>
              
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
                        reload(data);
                    }
                }); 

            }

            
       });
    });
</script>