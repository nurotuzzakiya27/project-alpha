<?php
include'phpinclude/header.php';
require 'controller/db_connection.php';
?>

<!-- Breadcomb area Start-->
<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-ctn">
									<h2>Sales Orders</h2>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="javascript:void(0);" onclick="filterSO('searchSO','importExcel');">
									<button type="button" data-toggle="tooltip" data-placement="top" title="Pencarian Transaksi Yang Telah Dilakukan" class="btn"><i class="notika-icon notika-search"> Filter Data</i></button>
								</a>
								<a href="transaction-sales-orders.php">
									<button type="button" data-toggle="tooltip" class="btn"><i class="notika-icon notika-plus-symbol"> Tambah Baru</i></button>
								</a>
								<a href="javascript:void(0);" onclick="formToggle2('importExcel','searchSO');">
									<button type="button" data-toggle="tooltip" data-placement="top" title="Pastikan Format File Transaksi adalah CSV" class="btn"><i class="notika-icon notika-sent"> Import Data</i></button>
								</a>
							</div>
						</div>
    					<!-- Dropzone area Filter Search Start -->
    					<div class="dropzone-area">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-3">
								<div class="dropdone-nk">
									<div id="dropzone1" class="multi-uploader-cs">
										<div id="searchSO" style="display:none;">
											<form action="controller/import_data.php" method="POST" enctype="multipart/form-data">			
                            					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							                        <div class="form-example-int">
							                            <div class="form-group">
							                                <label>Nomor SO</label>
							                                <div class="bootstrap-select fm-cmp-mg">
							                                    <select class="selectpicker" data-live-search="true" id="f_id_so">
																	<option>Drama</option>
																	<option>Cariska</option>
																	<option>Cheriska</option>
																	<option>Malias</option>
																	<option>Kamines</option>
																	<option>Austranas</option>
																</select>
							                                </div>
							                            </div>
							                        </div>
							                    </div>
                            					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							                        <div class="form-example-int">
							                            <div class="form-group">
							                                <label>Nama Customer</label>
							                                <div class="bootstrap-select fm-cmp-mg">
							                                    <select class="selectpicker" data-live-search="true" id="f_id_customer">
																	<option>Drama</option>
																	<option>Cariska</option>
																	<option>Cheriska</option>
																	<option>Malias</option>
																	<option>Kamines</option>
																	<option>Austranas</option>
																</select>
							                                </div>
							                            </div>
							                        </div>
							                    </div>
                            					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							                        <div class="form-example-int">
							                            <div class="form-group">
							                                <label>Nama Pembuat SO</label>
							                                <div class="bootstrap-select fm-cmp-mg">
							                                    <select class="selectpicker" data-live-search="true" id="f_id_pembuat_so">
																	<option>Drama</option>
																	<option>Cariska</option>
																	<option>Cheriska</option>
																	<option>Malias</option>
																	<option>Kamines</option>
																	<option>Austranas</option>
																</select>
							                                </div>
							                            </div>
							                        </div>
							                    </div>
                            					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							                        <div class="form-example-int">
							                            <div class="form-group">
							                                <label>Status SO</label>
							                                <div class="bootstrap-select fm-cmp-mg">
							                                    <select class="selectpicker" data-live-search="true" id="f_status_so">
																	<option>Drama</option>
																	<option>Cariska</option>
																	<option>Cheriska</option>
																	<option>Malias</option>
																	<option>Kamines</option>
																	<option>Austranas</option>
																</select>
							                                </div>
							                            </div>
							                        </div>
							                    </div>
                            					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							                        <div class="form-example-int">
                            							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin-left: -17px; margin-right: 8px;">
								                            <div class="form-group">
								                                <label style="margin-bottom: 5px;">Tanggal Awal Pembuatan SO</label>
								                                <div class="nk-int-st">
								                                    <input type="date" class="form-control input-sm" id="f_tgl_pembuatan_awal">
								                                </div>
								                            </div>
								                        </div>
                            							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								                            <div class="form-group">
								                                <label style="margin-bottom: 5px;">Tanggal Akhir Pembuatan SO</label>
								                                <div class="nk-int-st">
								                                    <input type="date" class="form-control input-sm" id="f_tgl_pembuatan_akhir">
								                                </div>
								                            </div>
								                        </div>
							                        </div>
							                    </div>
												<button type="submit" name="importSubmit" value="import" class="btn btn-info"><i class="notika-icon notika-search"> Tampilkan</i></button>
												<a onclick="Cancel_Attachment()" type="button" id="cancel_upload" class="btn btn-login btn-danger"><i class="notika-icon notika-close"> Bersihkan</i></a>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
    					<!-- Dropzone area Filter Search End -->
    					<!-- Dropzone area Import Start -->
    					<div class="dropzone-area">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-3">
								<div class="dropdone-nk">
									<div id="dropzone1" class="multi-uploader-cs">
										<div id="importExcel" style="display:none;">
											<form action="controller/import_data.php" method="POST" enctype="multipart/form-data">
												<div class="dz-message needsclick download-custom">
													<input type="file" id="upload_file" name="file">
													<input type="hidden" name="jenis" value="sales_orders">
													<br>
												</div>
													<button type="submit" name="importSubmit" value="import" class="btn btn-info"><i class="notika-icon notika-sent"> Submit</i></button>
													<button onclick="Cancel_Attachment()" type="button" id="cancel_upload" class="btn btn-login btn-danger"><i class="notika-icon notika-close"> Cancel</i></button>
													<a href="excel_format_so.php" type="button" id="download_excel_format_so" class="btn btn-success"><i class="notika-icon notika-down-arrow"> Excel Format</i></a>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
    					<!-- Dropzone area Import End -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor SO</th>
                                    <th>Tanggal Pembuatan</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    <th colspan="2" style="text-align: center; width: 3%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	$counter = 1;
                            	$result = $connection->query("SELECT * FROM KARYAWAN ORDER BY ID ASC");
                            	if($result->num_rows > 0){
                            		while($row = $result->fetch_assoc()){
                            			?>
                            	<tr>
                            		<td><?php echo $counter; ?></td>
                            		<td><?php echo $row['NAMA']; ?></td>
                            		<td><?php echo $row['KONTAK']; ?></td>
                            		<td><?php echo $row['USERNAME']; ?></td>
                            		<td><?php echo $row['STATUS']; ?></td>
                            		<td style="float: right;">
                            			<a href="transaction-employee.php?id=<?php echo $row['ID']; ?>">
                            				<button class="btn btn-info" id="update<?php echo $row['ID']; ?>" data-toggle="tooltip" data-placement="left" title="Melihat Detail Transaksi Sales Order Customer <?php echo $row['NAMA']; ?>">Detail</button>
                            			</a>
                            		</td>
                            		<td>
                            			<a href="transaction-employee.php?id=<?php echo $row['ID']; ?>">
                            				<button class="btn btn-warning" id="update<?php echo $row['ID']; ?>">Update</button>
                            			</a>
                            		</td>
                            	</tr>
                            			<?php
                            			$counter++;
                            		}
                            	} else {
                            		?>
                            		<tr><td colspan="7"></td>Data Karyawan Tidak Ada</tr>
                            		<?php
                            	}
                            	?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor SO</th>
                                    <th>Tanggal Pembuatan</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    <th colspan="2" style="text-align: center;">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->

<?php
include'phpinclude/footer.php';
?>