<?php
    session_start();
    include("connect.php");

    $brand=$_POST['txtBrand'];
    $model=$_POST['txtModel'];
    $color=$_POST['txtColor'];
    $year=$_POST['txtYear'];
    $license=$_POST['txtLicense'];
    $province=$_POST['txtProvince'];
    $price=$_POST['txtPrice'];
    $id = $_POST['hdnId'];

    $sql = "UPDATE car SET brand='$brand', model='$model', color='$color', modelYear='$year', license='$license', province='$province',price=$price WHERE id = $id";

    $result=$conn->query($sql);
    if(!$result){
        echo "Error:" . $conn->error;
        die();
    }
    else{
        header("Location:index.php?menu=allcars");
    }
?>