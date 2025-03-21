<?php 
// session_start();
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">    
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 w-100 h-100">
                                    <div class="card-header d-flex justify-content-center">
                                        <!-- <h3 class="text-center font-weight-light my-4">Login</h3> -->
                                        <img src="assets/images/logomak.png" alt="" class="w-50">
                                    </div>
                                    <div class="card-body mt-3">
                                        <h3 class="text-center fw-5 mb-3">Login</h3>
                                    <?php
                                        if (isset($_POST['login'])){
                                            $email = $_POST["email"];
                                            $password = md5($_POST["password"]);

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
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="email" name="email"/>
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password"/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-danger" href="registrasi.php">Register</a>
                                                <button class="btn btn-primary" type="submit" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

<style setup>
    /* .card{
        background-image: url(assets/images/logomak.png);

    } */
</style>
