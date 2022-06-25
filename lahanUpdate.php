<?php
require_once "auth.php";
require_once "config.php";
// $id = $_SESSION["user"]["id_akun"];

$id = $_SESSION["user"]["id_akun"];


if(isset($_POST['update'])){
    // $id = $_POST['id_user'];
    $pemilik = $_POST['pemilik'];
    $penggarap = $_POST['penggarap'];
    $komoditas = $_POST['komoditas'];
    $daerah = $_POST['daerah'];
    $luas = $_POST['luas'];
    $status = "Belum Tanam";

    $query = "INSERT INTO lahan (id_lahan, id_user, nama_pemilik, luas, komoditas, penggarap, daerah, status) 
    VALUES (NULL, '$id', '$pemilik', '$luas', '$komoditas', '$penggarap', '$daerah', '$status')";
    $stmt = mysqli_query($db, $query);

    if($stmt){
        echo "<script>alert('Berhasil ditambahkan')</script>";
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
                            <a href="index.php" style="color: #8E6412;"><img src="assets/img/logo.png" alt="Logo" srcset="">Kawantani.<span style="color: #007443;">id</span></a>
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
                            <!-- <p class="text-subtitle text-muted">Multiple form layout you can use</p> -->
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

                <!-- // Basic multiple Column Form section start -->
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
                                            <!-- <input type="hidden" name="id_user" > -->
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Pemilik Lahan</label>
                                                        <input type="text" id="first-name-column" class="form-control" name="pemilik">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Penggarap</label>
                                                        <input type="text" id="last-name-column" class="form-control" name="penggarap">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Luas</label>
                                                        <input type="number" id="city-column" class="form-control" name="luas">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Komoditas</label>
                                                        <input type="text" id="country-floating" class="form-control" name="komoditas">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Daerah</label>
                                                        <input type="text" id="company-column" class="form-control" name="daerah">
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group col-12">
                                                    <div class='form-select'>
                                                    <label for="company-column">Status</label>
                                                        <select name="status" id="stat">
                                                            <option selected>Pilih</option>
                                                            <option value="Active">Aktif</option>
                                                            <option value="NonActive">Tidak Aktif</option>
                                                        </select>
                                                    </div>
                                                </div> -->
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
                <!-- // Basic multiple Column Form section end -->
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