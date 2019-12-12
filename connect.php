<?php
    $conn = new mysqli("localhost","root","12345678","usedcar");
    if($conn->connect_errno){
        die("Connection Failed".$conn->connect_error);
    }
    
?>
