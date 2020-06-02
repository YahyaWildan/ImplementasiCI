<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()."Asset/"; ?>/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."Asset/"; ?>/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."Asset/"; ?>/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."Asset/"; ?>/Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."Asset/"; ?>/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."Asset/"; ?>/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."Asset/"; ?>/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."Asset/"; ?>/Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url()."Asset/"; ?>/Login/images/img-01.png" alt="IMG">
				</div>
				<form action="<?php echo base_url()."index.php/depan/proses_daftar_anggota"; ?>" method="post">
				
                  <div class="form-group mb-5 text-center">
                    <label class="form-label" for=""><h2>Registrasi</h2></label>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama_lengkap" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Username</label>
                    <input class="form-control" type="text" name="username" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="password" name="password" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Id telegram</label>
                    <input class="form-control" type="text" name="id_telegram" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Alamat</label>
                    <textarea class="form-control" name="alamat"></textarea>
                  </div>
                  <!-- <div class="form-group">
                    <label class="form-label" for="">Foto</label>
                    <input class="form-control" type="text" name="foto" required>
                  </div> -->
                  <div class="form-group text-right">
                  <a class='btn btn-sm btn-warning mx-1' href="<?php echo base_url()."index.php/depan/index"; ?>">Cancel</a>
                    <input class="btn btn-success" type="submit" name="submit" value="Submit" />
                  </div>
                </form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="<?php echo base_url()."Asset/"; ?>/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."Asset/"; ?>/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()."Asset/"; ?>/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."Asset/"; ?>/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."Asset/"; ?>/Login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."Asset/"; ?>/Login/js/main.js"></script>

</body>
</html>