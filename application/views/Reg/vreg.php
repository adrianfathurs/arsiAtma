<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
<?php
    if(isset($css))
    {
        $this->load->view($css);
    }
    ?>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
<div>
              <?php if(!empty($notif)) { 
                    echo $notif; } ?>
              </div>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?php echo base_url('assets/')?>img/logo.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
				<form action="<?php echo site_url('Reg/insert')?>" method="post">
						<?php if($data != "forgot"){ ?>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="nama" class="form-control input_user" value="" placeholder="Nama Lengkap" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="far fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="email" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-university"></i></span>
							</div>
							<input type="text" name="instansi" class="form-control input_user" value="" placeholder="instansi" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>
							<input type="text" name="telp" class="form-control input_user" value="" placeholder="no. telp" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" minlength="8" name="pass" class="form-control input_pass" value="" placeholder="password" required>
						</div>
						
						<?php } else { ?>
							<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="far fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="email akun anda" required>
						</div>
							<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username akun anda" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" minlength="8" name="pass" class="form-control input_pass" value="" placeholder="password yang baru" required>
						</div>
						<?php }; ?>
						<div class="d-flex justify-content-center mt-3 login_container">
							<?php if($data != "forgot"){ ?>
							<button type="submit" name="daftar" class="btn login_btn">Daftar</button>
							<input type="text" hidden id="submit" name="submit" value="submit">
							<?php } else { ?>
							<button type="submit" name="ganti_pass" class="btn login_btn">Ganti Password</button>
							<input type="text" hidden id="forgot" name="forgot" value="submit">
							<?php }; ?>
				   		</div>
				  	</form>
				</div>
		
				
			</div>
		</div>
	</div>
</body>
<footer>
<?php
    if(isset($js))
    {
        $this->load->view($js);
    }
    ?></footer>
</html>
