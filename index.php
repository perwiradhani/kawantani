<?php 
require_once("auth.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kawantani</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

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

                        <li class="sidebar-item active ">
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
                        <li class="sidebar-item">
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
                <h3>Home</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col col-lg col-md">
                                <div class="card">
                                <a href="table-datatable.php"><div class="card-body px-3 py-5">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="text-muted font-semibold">Update Proggress</h4>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                            <div class="col col-lg col-md">
                                <div class="card">
                                    <a href="lahan.php"><div class="card-body px-3 py-5">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                               
                                                <h4 class="text-muted font-semibold">Informasi Lahan</h4>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body py-5 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="assets/images/faces/1.jpg" alt="Face 1">
                                            <!-- <img class="img img-responsive rounded-circle mb-3" width="160" src="assets/images/faces/1.jpg" /> -->
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold mb-1"><?php echo  $_SESSION["user"]["fname"] ?></h5>
                                            <h6 class="text-muted mb-0">@<?php echo  $_SESSION["user"]["username"] ?></h6>
                                            <a href="profile.php" class="font-bold text-text-primary">Update Profile</a>
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

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>