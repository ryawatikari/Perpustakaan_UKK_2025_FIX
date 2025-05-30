
<?php 
// session_start();
include "koneksi.php"
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <!-- Favicon -->
     <link rel="icon" type="image/png" href="assets/images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Buat Akun dan Mulai Membaca</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Halo, Sobat Buku!</h2>
								<p>Sudah punya akun? Masuk ke perpustakaan digitalmu dan mulai jelajahi koleksi buku seru!</p>
								<a href="login.php" class="btn btn-white btn-outline-white">Login</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Buat Akun</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					  <?php
                                        if (isset($_POST['registrasi'])){
											$nama = $_POST['nama'];
											$username = $_POST['username'];
											$email = $_POST['email'];
											$password = md5($_POST['password']); // Enkripsi password
											$alamat = $_POST['alamat'];
											$no_telpon = $_POST['no_telpon'];

											// email sudah terdaftar
											$cek_email = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");
											// logic email yg sudah terdaftar
											if (mysqli_num_rows($cek_email) > 0) {
												echo "<script>alert('Email sudah terdaftar! Silahkan Gunakan Email Lain');</script>";	
											} else {
												$insert = mysqli_query($koneksi, "INSERT INTO user (nama, username, email, password, alamat, no_telpon, level) VALUES ('$nama', '$username', '$email', '$password', '$alamat', '$no_telpon', 'peminjam')");
											if ($insert){
												echo "<script>alert('Registrasi Berhasil! Silahkan Login'); window.location='login.php';</script>";
											} else {
												echo "<script>alert('Registrasi Gagal!');</script>";
											} 
											}
                                            
										} else {
											echo "<script>alert('Silahkan isi form registrasi');</script>";
                                        }
                                        
                                        ?>
							<form method="POST" class="signin-form">
									<div class="form-group mb-3">
										<label class="label">Nama Lengkap</label>
										<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
									</div>
									<div class="form-group mb-3">
										<label class="label">Email</label>
										<input type="text" class="form-control" name="email" placeholder="Email" required>
									</div>
									<div class="form-group mb-3">
										<label class="label">Username</label>
										<input type="text" class="form-control" name="username" placeholder="Username" required>
									</div>
									<div class="form-group mb-3">
										<label class="label">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password" required>
									</div>	<div class="form-group mb-3">
										<label class="label">Alamat</label>
										<textarea name="alamat" id="" rows="3" class="form-control py-2"></textarea>
									</div>
									<div class="form-group mb-3">
										<label class="label">No Telpon</label>
									<input type="no_telpon" class="form-control" name="no_telpon" placeholder="Password" required>
									</div>
								<div class="form-group">
									<button type="submit" value="registrasi" name="registrasi" class="form-control btn btn-primary submit px-3">Buat Akun</button>
									<!-- <button type="submit" class="form-control btn btn-info submit px-3">login</button> -->
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
												<input type="checkbox" checked>
												<span class="checkmark"></span>
													</label>
												</div>
												<div class="w-50 text-md-right">
													<a href="#">Forgot Password</a>
												</div>
								</div>
							</form>
		        		</div>
		     		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

