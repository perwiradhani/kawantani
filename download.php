<?php
require_once "config.php";

if(!empty($_GET['file'])){
    $fileName  = basename($_GET['file']);
    $filePath  = "assets/img/".$fileName;
    
    if(!empty($fileName) && file_exists($filePath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: multipart/form-data");
        header("Content-Transfer-Encoding: binary");

        $sql = "UPDATE proker SET status = 1 WHERE nama_file='$fileName'";
        $stmt = mysqli_query($db, $sql);
    
            // if($stmt){
            //     header("location: show.php");
            //     exit();
            // } else{
            //     echo "Oops! Something went wrong. Please try again later.";
            // }       
        
        //read file 
        if($stmt){
            readfile($filePath);
            exit;
        }
    } 
    else{
        echo "file not exit";
    }


}
