<?php
    include("connect.php");
    $sql = "SELECT * FROM car ORDER BY id";
    $result = $conn->query($sql);
    if(!$result){
        echo "Error: " . $conn->error;
    }
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Cars</h1>
    </div>
</div>
<!-- ... Your content goes here ... -->
<div class="row">
    <div class="col-md-12 text-right">
        <a href="index.php?menu=postcar" class="btn btn-success">
            <i class="fa fa-plus fa-fw"></i> Post a car
        </a>
    </div>
</div>
<div class="row" style="margin-top:20px">
    <?php
        if($result->num_rows>0){
            while($car = $result->fetch_object()){
    ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div style="height:150px;">
                    <a href="cardetail.php?pid=<?php echo $car->id; ?>">
                        <img src="images/cars/<?php echo $car->carpic;?>" style="height:100%" alt="">
                    </a>
                </div>                
                <div class="caption">
                    <h4><?php echo" $car->brand $car->model"; ?></h4>
                    <p>ปี: <?php echo "$car->modelYear"; ?></p>
                    <p>สี: <?php echo "$car->color"; ?></p>
                    <p><?php echo "$car->license $car->province"; ?></p>
                    <p>
                        <strong>Price: <?php echo $car->price?></strong>
                    </p>
                    <p>
                        <a href="editcar.php?pid=<?php echo $car->id?>" class="btn btn-warning">
                            <i class="glyphicon glyphicon-pencil"></i> Edit
                        </a>
                        <a href="deletecar.php?pid=<?php echo $car->id?>" class="btn btn-danger lnkDelete" id="">
                            <i class="glyphicon glyphicon-trash"></i> Delete
                        </a>
                    </p>
                </div>
            </div>
        </div>    
    <?php
            }
        }
    ?>
</div>