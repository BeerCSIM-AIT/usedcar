<?php
    session_start();
    include("connect.php");
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filePic"]["type"]);
    $size = $_FILES["filePic"]["size"]/1024/1024;
    //image/png   fileType=["image","png"]
    if(!in_array($fileType[1],$allowedType)){
        //เมื่ออัพโหลดไฟล์ที่ไม่ตรงกับ Type ใน AllowedType
        echo "Non-image file is not allowed.";
    }
    else if($size>10.00){
        echo "File size exceeds the maximum treshold.";
    }
    else{
        $postedBy = $_SESSION['id'];
        $carType=$_POST['ddlCarType'];
        $brand=$_POST['txtBrand'];
        $model=$_POST['txtModel'];
        $color=$_POST['txtColor'];
        $year=$_POST['txtYear'];
        $license=$_POST['txtLicense'];
        $province=$_POST['txtProvince'];
        $price=$_POST['txtPrice'];
        $filename = $_FILES["filePic"]["name"];

        move_uploaded_file($_FILES["filePic"]["tmp_name"],"images/cars/".$_FILES["filePic"]["name"]);

        $sqlInsert = "INSERT INTO car (carType,brand,model,color, license, province, modelYear,price, postedBy, postedDate, carpic) VALUES($carType,'$brand','$model','$color','$license','$province','$year',$price,$postedBy,now(),'$filename')";
        
        $result=$conn->query($sqlInsert);
        if(!$result){
            echo "Error: " . $conn->error;
        }

        header("Location: index.php?menu=allcars");
    }
?>