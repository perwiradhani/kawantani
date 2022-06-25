<?php
require_once "config.php";

if(isset($_POST["id"])){

    $id = $_POST["id"];
    $sql = "DELETE FROM proker WHERE id = $id";
    $result = mysqli_query($db, $sql);

    if($result){
        header("location: table-datatable.php");
            exit();
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo ($_GET["id"]); ?>"/>
                            <p>Apakah Anda yakin ingin menghapus file proker ini?</p>
                            <p>
                                <input type="submit" value="Ya" class="btn btn-danger">
                                <a href="table-datatable.php" class="btn btn-secondary ml-2">Tidak</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>