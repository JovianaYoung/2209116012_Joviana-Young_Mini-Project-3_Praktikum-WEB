<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
   exit(); // Penting: Pastikan untuk keluar setelah pengalihan header
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="holder holder-form">
    <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "includes/database.php"; // Sesuaikan dengan lokasi file database Anda
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    exit(); // Penting: Pastikan untuk keluar setelah pengalihan header
                } else {
                    echo "<div class='alert alert-danger'>Kata sandi tidak cocok</div>";
                }
            } else if (empty($email)) {
                echo "<div class='alert alert-danger'>File wajib diisi</div>";
            } else {
                echo "<div class='alert alert-danger'>Email tidak cocok</div>";
            }
        }
    ?>
        <h2 class="text-center"> Masuk</h2>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Masukkan Email Anda:" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Masukkan Password Anda:" name="password" class="form-control" required>
        </div>
        <div class="form-btn text-center w-100">
            <input type="submit" value="Login" name="login" class="btn btn-primary w-100">
        </div>
      </form>
         <div class="text-center mt-2">
            <p>Belum Punya Akun? <a href="registration.php">Buat Akun</a></p>
        </div>
    </div>
    <div class="homepage">
        <a href="index.php" class="homepage__a">Kembali Ke Beranda</a>
    </div>
</body>
</html>