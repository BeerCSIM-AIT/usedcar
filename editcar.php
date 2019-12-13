<?php
    include("connect.php");
    $id = $_GET['id'];
    $sql="SELECT * FROM car WHERE id = $id";

    $result=$conn->query($sql);
    if(!$result){
        echo "Error: " . $conn->error;
    }
    $car=$result->fetch_object();
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit car</h1>
    </div>
</div>
<!-- ... Your content goes here ... -->
<div class="row">
    <div class="col-md-6">
        <div class="thumbnail">
            <img src="images/cars/<?php echo $car->carpic;?>" alt="">
        </div>            
    </div>
    <div class="col-md-6">
        <form action="updatecar.php" class="form-horizontal" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-md-2">ประเภทรถ:</label>
                    <div class="col-md-9">
                       <?php 
                        switch($car->carType){
                            case 1: echo "$car->carType: รถเก๋ง";
                                break;
                            case 2: echo "$car->carType: รถกระบะ";
                                break;
                            case 3: echo "$car->carType: รถตู้";
                                break;
                        }
                       ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-2">ยี่ห้อรถ:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtBrand" value="<?php echo $car->brand; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-2">รุ่น:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtModel" value="<?php echo $car->model; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-2">ปี:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtYear" value="<?php echo $car->modelYear; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-2">สี:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtColor" value="<?php echo $car->color; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-2">เลขทะเบียน:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtLicense" value="<?php echo $car->license; ?>">
                    </div>
                </div>        
                <div class="form-group">
                    <label for="" class="control-label col-md-2">จังหวัด:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtProvince" value="<?php echo $car->province; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-2">ราคา:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtPrice" value="<?php echo $car->price; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-2">
                        <input type="hidden" name="hdnId" value="<?php echo $car->id; ?>">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </div>
            </form>
    </div>
    
</div>