<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($db, $sql);
	
    $user = mysqli_fetch_assoc($result);

    $status = "Active now";
        $sql2 = mysqli_query($db, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
        if($sql2){
        $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";
        }else{
            echo "Something went wrong. Please try again!";
        }

    if($user){
        if(password_verify($password, $user['password'])){
            session_start();
            $_SESSION['unique_id'] = $user['unique_id'];
            $_SESSION["user"] = $user;
            header("Location: index.php");
        }else{
            echo "<script>alert('Username / Password salah')</script>";
            echo "<script>location = 'login.php'</script>";
        }
    }else{
        echo "<script>alert('Username / Password salah')</script>";
        echo "<script>location = 'login.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/logo.png">
 
    <title>Login</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
    </div>
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="login" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>