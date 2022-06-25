<?php
require_once "auth.php";
require_once "config.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $jml = $_POST['jumlah'];

    $query = "INSERT INTO panen (id, id_lahan, jumlah, tgl) 
    VALUES (NULL, '$id', '$jml', '$tgl')";
    $stmt = mysqli_query($db, $query);

    $query2 = "UPDATE lahan SET status = 'Panen' WHERE id_lahan = '$id'";
    $stmt2 = mysqli_query($db, $query2);

    if($stmt2){
        echo "<script>alert('Berhasil')</script>";
        echo "<script>location = 'lahan.php'</script>";
    }else{
        echo "<script>alert('Gagal')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Lahan - Kawantani Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets\img\logo.png">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="profile.php" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="ChatApp/users.php" target="_blank" rel="noopener noreferrer" class='sidebar-link'\a>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Chat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-datatable.php" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Progress Proker</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="lahan.php" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Lahan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Lahan</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Informasi Lahan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Detail Lahan</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="" class="form" method="POST">
                                        <input type="hidden" name="id" value="<?php echo ($_GET["id"]); ?>"/>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Tanggal Panen</label>
                                                        <input type="date" id="first-name-column" class="form-control" name="tgl">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Jumlah Hasil Panen</label>
                                                        <input type="number" id="city-column" class="form-control" name="jumlah">
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                <button class="btn btn-primary me-1 mb-1" name="update">Submit</button>
                                                <a href="lahan.php" class="btn btn-danger me-1 mb-1">Batal</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; kawantani</p>
                    </div>
                    <div class="float-end">
                        <p>Made with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://github/PerwiraDhani.com">NDR Tech</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>