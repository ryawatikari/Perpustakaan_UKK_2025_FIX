<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_telpon = $_POST['no_telpon'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (full_name, email, phone, password) VALUES ('$username', '$email', '$no_telpon', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="Nama Lengkap" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="no_telpon" placeholder="No. HP" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
