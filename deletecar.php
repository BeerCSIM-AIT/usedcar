<?php
    session_start();
    include("connect.php");
    $id = $_GET['id'];

    $sql = "DELETE FROM car WHERE id=$id";
    $result=$conn->query($sql);

    if(!$result){
        echo "Error: " . $conn->error;
    }
    else{
        header("Location:index.php?menu=allcars");
    }
?>