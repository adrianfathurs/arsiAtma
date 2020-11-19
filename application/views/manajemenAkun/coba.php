<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle</title>
    
             
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" checked id="gender">
            <label class="custom-control-label" id="label" for="gender">active</label>
        </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
              crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#gender').change(function(){
                if($(this).prop('checked')){
                    var gender="active";
                    $('#label').html("Active");
                    _submitphp(gender);
                }
                else{
                     var gender="deactive";
                     $('#label').html("Deactive");
                     _submitphp(gender);
                    
                }
            });
        });

        function _submitphp(gender){
            console.log(gender);
        }
    </script>
</body>
</html>

<td scope="col" class="text-dark">Admin</td>
 <?php if($key['status']==1){?>
                        <td scope="col" class="text-dark"> 
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="gender">
                                <label class="custom-control-label" id="label" for="gender">active</label>
                            </div>
                        </td>
                    <?php } else{?>
                        <td scope="col" class="text-dark">
                        <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"  id="gender">
                                <label class="custom-control-label" id="label" for="gender">deactive</label>
                            </div>
                        </td>
                    <?php } ?>