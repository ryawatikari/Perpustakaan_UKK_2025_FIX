<?php 
// session_start();
include "koneksi.php"
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
     <!-- Favicon -->
     <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Halo, Sobat Buku!</h2>
								<p>Masuk ke perpustakaan digitalmu. Belum punya akun? Yuk, daftar!</p>
								<a href="registrasi.php" class="btn btn-white btn-outline-white">Registrasi</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					  <?php
                                        if (isset($_POST['login'])){
											$email = $_POST['email'];
											$password = md5($_POST['password']); // Enkripsi password

                                            $data = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' and password='$password'");
                                            $cek = mysqli_num_rows($data);
                                            // $sql = "SELECT * FROM user WHERE email='$email'";
                                            // $result = $conn->query($sql);

                                            // if ($result->num_rows > 0) {
                                            //     $row = $result->fetch_assoc();
                                            //     if (password_verify($password, $row['password'])) {
                                            //         $_SESSION['user_id'] = $row['id'];
                                            //         $_SESSION['level'] = $row['level'];
                                            //         echo "Login berhasil!";
                                            //     } else {
                                            //         echo "Password salah!";
                                            //     }
                                            // } else {
                                            //     echo "Email tidak ditemukan!";
                                            // }
                                            if ($cek > 0){
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                echo '<script>alert("Selamat datang, login berhasil!");
                                                location.href="dashboard.php"; </script>';
                                            } else {
                                                echo '<script>alert("Maaf, email atau password salah");</script>';
                                            }
                                        }
                                        
                                        ?>
							<form method="POST" class="signin-form">
								<div class="form-group mb-3">
										<label class="label">Email</label>
										<input type="text" class="form-control" name="email" placeholder="Email" required>
								</div>
								<div class="form-group mb-3">
									<label class="label">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary submit px-3" name="login">Login</button>
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

