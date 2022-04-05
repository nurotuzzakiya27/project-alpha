<?php
include'phpinclude/header.php';
require 'controller/db_connection.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $result = $connection->query("SELECT * FROM PELANGGAN WHERE ID = {$id}");
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
                        <h2>Form Pelanggan</h2>
                    </div>
                    <!-- <form> -->
                        <div class="row" hidden>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="hidden" id="id_pelanggan" class="form-control" value="<?php echo $row['ID']; ?>" placeholder="ID Pelanggan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="nama_pelanggan" class="form-control" value="<?php echo $row['NAMA']; ?>" placeholder="Nama Pelanggan" style="text-transform:uppercase" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="alamat_pelanggan" class="form-control" value="<?php echo $row['ALAMAT']; ?>" placeholder="Alamat Pelanggan" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="email_pelanggan" class="form-control" value="<?php echo $row['EMAIL']; ?>" placeholder="Email Pelanggan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="kontak_pelanggan" class="form-control" value="<?php echo $row['KONTAK']; ?>" placeholder="Kontak Pelanggan">
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
                                        <select class="selectpicker" id="status_pelanggan">
                                            <option value="A">Active</option>
                                            <option value="I">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a onclick="UpdateFunction_Customer()" type="submit" id="btn_submit" class="btn btn-login btn-success">
                                Submit
                            </a>
                            <button class="btn btn-warning" id="btn_cancel_customer">Kembali</button>
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
                        <h2>Form Pelanggan</h2>
                    </div>
                    <!-- <form> -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" style="text-transform:uppercase" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="alamat_pelanggan" class="form-control" placeholder="Alamat Pelanggan" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="email_pelanggan" class="form-control" placeholder="Email Pelanggan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="kontak_pelanggan" class="form-control" placeholder="Kontak Pelanggan">
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
                                        <select class="selectpicker" id="status_pelanggan">
                                            <option value="A">Active</option>
                                            <!-- <option value="I">Inactive</option> -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a onclick="SubmitFunction_Customer()" type="submit" id="btn_submit" class="btn btn-login btn-success">
                                Submit
                            </a>
                            <button class="btn btn-warning" id="btn_cancel_customer">Kembali</button>
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