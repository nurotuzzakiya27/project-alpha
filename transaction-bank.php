<?php
include'phpinclude/header.php';
require 'controller/db_connection.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $result = $connection->query("SELECT * FROM BANK WHERE ID = {$id}");
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

?>

<!-- Form Element area Start-->
<div class="form-element-area transaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd">
                        <h2>Form Bank</h2>
                    </div>
                    <!-- <form> -->
                        <div class="row" hidden>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="hidden" id="id_bank" class="form-control" value="<?php echo $row['ID']; ?>" placeholder="ID Bank">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" id="nama_perusahaan">
                                            <?php
                                                $result = $connection->query("SELECT * FROM PERUSAHAAN WHERE STATUS = 'A'");
                                                if($result->num_rows > 0){
                                                    while($row2 = $result->fetch_assoc()){
                                            ?>
                                            <option value="<?php echo $row2['ID']; ?>" <?php if($row['ID_PERUSAHAAN'] == $row2['ID']) echo 'selected'; ?>><?php echo $row2['NAMA']; ?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-finance"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="jenis_bank" class="form-control" value="<?php echo $row['JENIS_BANK']; ?>" placeholder="Jenis Bank" style="text-transform:uppercase" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-credit-card"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="rekening_bank" class="form-control" value="<?php echo $row['NO_REK']; ?>" placeholder="Nomor Rekening Bank" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-draft"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="atas_nama_bank" class="form-control" value="<?php echo $row['ATAS_NAMA']; ?>" placeholder="Bank Atas Nama" style="text-transform:uppercase" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-flag"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" id="status_bank">
                                            <option value="A">Active</option>
                                            <option value="I">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a onclick="UpdateFunction_Bank()" type="submit" id="btn_submit" class="btn btn-login btn-success">
                                Submit
                            </a>
                            <button class="btn btn-warning" id="btn_cancel_bank">Kembali</button>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form Element area End-->

<?php

        }
    }
} else {

?>

<!-- Form Element area Start-->
<div class="form-element-area transaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd">
                        <h2>Form Bank</h2>
                    </div>
                    <!-- <form> -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" id="nama_perusahaan">
                                            <?php
                                                $result = $connection->query("SELECT * FROM PERUSAHAAN WHERE STATUS = 'A'");
                                                if($result->num_rows > 0){
                                                    while($row = $result->fetch_assoc()){
                                            ?>
                                            <option value="<?php echo $row['ID']; ?>"><?php echo $row['NAMA']; ?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-finance"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="jenis_bank" class="form-control" placeholder="Jenis Bank" style="text-transform:uppercase" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-credit-card"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="rekening_bank" class="form-control" placeholder="Nomor Rekening Bank" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-draft"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="atas_nama_bank" class="form-control" placeholder="Bank Atas Nama" style="text-transform:uppercase" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-flag"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" id="status_bank">
                                            <option value="A">Active</option>
                                            <!-- <option value="I">Inactive</option> -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a onclick="SubmitFunction_Bank()" type="submit" id="btn_submit" class="btn btn-login btn-success">
                                Submit
                            </a>
                            <button class="btn btn-warning" id="btn_cancel_bank">Kembali</button>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form Element area End-->

<?php
}
include'phpinclude/footer.php';
?>