<?php
require_once "auth.php";
$id = $_SESSION["user"]["id_akun"];

$status = "";

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
                                    <h4 class="card-title">Detail Lahan</h4>
                                    <a href="lahanUpdate.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Tambah Data Lahan</a>
                                </div>
                                <?php
                                require_once "config.php";
                                
                                $sql = "SELECT * FROM lahan WHERE id_user = '$id'";
                                $result = mysqli_query($db, $sql);
                                if(mysqli_num_rows($result) > 0){
                                $data = mysqli_fetch_assoc($result);
                                $id_lahan = $data['id_lahan'];
                                $pemilik = $data['nama_pemilik'];
                                $penggarap = $data['penggarap'];
                                $komoditas = $data['komoditas'];
                                $daerah = $data['daerah'];
                                $luas = $data['luas'];
                                $status = $data['status'];

                                
                                echo '<div class="card-content">';
                                    echo '<div class="card-body">';
                                    echo '<form class="form">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-6 col-12">';
                                    echo '<div class="form-group">';
                                                        echo '<label for="first-name-column">Pemilik Lahan</label>';
                                                        echo '<input type="text" id="first-name-column" class="form-control" name="pemilik" value="'.$pemilik.'" readonly>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-md-6 col-12">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="last-name-column">Penggarap</label>';
                                                        echo '<input type="text" id="last-name-column" class="form-control" name="penggarap" value="'.$penggarap.'" readonly>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-md-6 col-12">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="city-column">Luas</label>';
                                                        echo '<input type="text" id="city-column" class="form-control" name="luas" value="'.$luas." m2".'" readonly>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-md-6 col-12">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="country-floating">Komoditas</label>';
                                                        echo '<input type="text" id="country-floating" class="form-control" name="komoditas" value="'.$komoditas.'" readonly>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-md-6 col-12">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="company-column">Daerah</label>';
                                                        echo '<input type="text" id="company-column" class="form-control" name="daerah" value="'.$daerah.'" readonly>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="form-group col-12">';
                                                    echo "<div class='form-group'>";
                                                    if($status == "Tanam"){
                                                        echo '<p>Status <span class="badge bg-success">Menunggu Panen</span></p>';
                                                    } else if($status == "Panen"){
                                                        echo '<p>Status <span class="badge bg-info">Panen</span></p>';
                                                    } else{
                                                        echo '<p>Status <span class="badge bg-danger">Belum tanam</span></p>';
                                                    }
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-12 d-flex justify-content-end">';
                                                            echo '<a href="tanam.php?id='.$id_lahan.'" class="btn btn-primary me-1 mb-1">Tanam</a>';
                                                            echo '<a href="panen.php?id='.$id_lahan.'" class="btn btn-light-secondary me-1 mb-1">Panen</a>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</form>';
                                    echo '</div>';
                                echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                    <?php
                                    if($status == "Tanam"){
                                        $sql2 = "SELECT * FROM penanaman WHERE id_lahan = '$id_lahan'";
                                        $result2 = mysqli_query($db, $sql2);

                                        $data2 = mysqli_fetch_assoc($result2);
                                        if(mysqli_num_rows($result2) > 0){
                                        $tgl = $data2['tgl_tanam'];
                                        $luasTanam = $data2['luas'];

                                        echo '<form class="form">';
                                            echo '<div class="row">';
                                                echo '<div class="col-md-6 col-12">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="first-name-column">Luas yang Ditanami</label>';
                                                        echo '<input type="text" id="first-name-column" class="form-control" name="luas2" value="'.$luasTanam.' m2" readonly>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-md-6 col-12">';
                                                    echo '<div class="form-group">';
                                                        echo '<label for="last-name-column">Tanggal Tanam</label>';
                                                        echo '<input type="text" id="last-name-column" class="form-control" name="tanam" value="'.$tgl.'" readonly>';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</form>';
                                    }
                            }else if($status == "Panen"){
                                $sql3 = "SELECT * FROM panen WHERE id_lahan = '$id_lahan'";
                                $result3 = mysqli_query($db, $sql3);
                                $data3 = mysqli_fetch_assoc($result3);
                                if(mysqli_num_rows($result3) > 0){
                                $tgl = $data3['tgl'];
                                $jml = $data3['jumlah'];
                                echo '<form class="form">';
                                    echo '<div class="row">';
                                        echo '<div class="col-md-6 col-12">';
                                            echo '<div class="form-group">';
                                                echo '<label for="first-name-column">Jumlah Hasil Panen</label>';
                                                echo '<input type="text" id="first-name-column" class="form-control" name="luas2" value="'.$jml.' kg" readonly>';
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-md-6 col-12">';
                                            echo '<div class="form-group">';
                                                echo '<label for="last-name-column">Tanggal Panen</label>';
                                                echo '<input type="text" id="last-name-column" class="form-control" name="tanam" value="'.$tgl.'" readonly>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</form>';
                            }        
                        }
                                        ?>

                                        
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