<?php
    include("connect.php");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Post a car</h1>
    </div>
</div>
<!-- ... Your content goes here ... -->
<div class="row">
    <form action="savecar.php" class="form-horizontal" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="" class="control-label col-md-2">ประเภทรถ:</label>
            <div class="col-md-9">
                <select name="ddlCarType" class="form-control">
                    <option value="">--เลือก--</option>
                    <option value="1">รถเก๋ง</option>
                    <option value="2">รถกระบะ</option>
                    <option value="3">รถตู้</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">ยี่ห้อรถ:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="txtBrand">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">รุ่น:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="txtModel">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">ปี:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="txtYear">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">สี:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="txtColor">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">เลขทะเบียน:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="txtLicense">
            </div>
        </div>        
        <div class="form-group">
            <label for="" class="control-label col-md-2">จังหวัด:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="txtProvince">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">ราคา:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="txtPrice">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">รูปรถ:</label>
            <div class="col-md-9">
                <input type="file" class="form-control-file" name="filePic">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-9 col-md-offset-2">
                <button class="btn btn-primary" type="submit">Post</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </div>
    </form>
</div>