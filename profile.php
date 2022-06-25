<?php
require_once "auth.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Kawantani</title>

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

                        <li class="sidebar-item ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Profil</h3>
                            <!-- <p class="text-subtitle text-muted">Multiple form layout you can use</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                    <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <img src="assets/images/faces/1.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3"><?php echo  $_SESSION["user"]["fname"] ?><?php echo " "; echo  $_SESSION["user"]["lname"] ?></h5>
                                <p class="text-muted mb-1"><?php echo  $_SESSION["user"]["role"] ?></p>
                                <p class="text-muted mb-4"><?php echo  $_SESSION["user"]["noHp"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Detail Profil</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">First Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="first-name-icon" value="<?php echo  $_SESSION["user"]["fname"] ?>" name="name" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Last Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="first-name-icon" value="<?php echo  $_SESSION["user"]["lname"] ?>" name="name" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">

                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Email</label>
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control" id="email-id-icon" value="<?php echo  $_SESSION["user"]["email"] ?>" name="email" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="mobile-id-icon">Username</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="mobile-id-icon" value="<?php echo  $_SESSION["user"]["username"] ?>" name="username" readonly>
                                                                <div class="form-control-icon">
                                                                <i class="fa-solid fa-user"></i>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Password</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" placeholder="Password" id="password-id-icon" value="<?php echo  $_SESSION["user"]["password"] ?>" name="password" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">No Handphone</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="password-id-icon" value="<?php echo  $_SESSION["user"]["noHp"] ?>" name="noHp" readonly>
                                                                <div class="form-control-icon">
                                                                    
                                                                    <i class="bi bi-phone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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