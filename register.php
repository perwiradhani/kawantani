<?php

require_once("config.php");

if(isset($_POST['register'])){
    $name = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$role = $_POST['role'];
    $noHp = $_POST['noHp'];
    $lname = $_POST['lname'];
    $ran_id = rand(time(), 100000000);
    $status = "Active now";

    $sql = "INSERT INTO users (unique_id, fname, lname, email, username, password, noHp, role, status) 
            VALUES ('$ran_id', '$name', '$lname', '$email', '$username', '$password', '$noHp', '$role', '$status')";
	
    $stmt = mysqli_query($db, $sql);

    if($role == "Dinas Pertanian"){
        echo "<script>alert('Registrasi berhasil')</script>";
        echo "<script>location = 'admin/login.php'</script>";
    } else if($role == "Pegawai BPP"){
            echo "<script>alert('Registrasi berhasil')</script>";
            echo "<script>location = 'login.php'</script>";
        }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets\img\logo.png">
 
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="First Name" name="fname" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Last Name" name="lname" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="No Handphone" name="noHp" required>
            </div>
            <div class="input-group">
                <select name="role" required>
                    <option selected>Role</option>
                    <option value="Dinas Pertanian">Dinas Pertanian</option> 
                    <option value="Pegawai BPP">Pegawai BPP</option>
                </select>
            </div>
            <div class="input-group">
                <button name="register" class="btn">Daftar</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

    <script src="assets/js/main.js"></script>
</html>