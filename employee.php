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
									<h2>Master Karyawan</h2>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="transaction-employee.php">
									<button type="button" data-toggle="tooltip" class="btn"><i class="notika-icon notika-plus-symbol"> Tambah Baru</i></button>
								</a>
								<a href="javascript:void(0);" onclick="formToggle('importExcel');">
									<button type="button" data-toggle="tooltip" data-placement="top" title="Pastikan Format File CSV Sama Dengan Tabel. Maksimal 5Mb" class="btn"><i class="notika-icon notika-sent"> Import Data</i></button>
								</a>
							</div>
						</div>
    					<!-- Dropzone area Start-->
    					<div class="dropzone-area">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-3">
								<div class="dropdone-nk">
									<div id="dropzone1" class="multi-uploader-cs">
										<div id="importExcel" style="display:none;">
											<form action="controller/import_data.php" method="POST" enctype="multipart/form-data">
												<div class="dz-message needsclick download-custom">
													<input type="file" id="upload_file" name="file">
													<input type="hidden" name="jenis" value="employee">
													<br>
												</div>
													<button type="submit" name="importSubmit" value="import" class="btn btn-info"><i class="notika-icon notika-sent"> Submit</i></button>
													<a onclick="Cancel_Attachment()" type="button" id="cancel_upload" class="btn btn-login btn-danger"><i class="notika-icon notika-close"> Cancel</i></a>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
    					<!-- Dropzone area End-->
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
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Karyawan</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Nomor Kontak</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
                            		<td><?php echo $row['ALAMAT']; ?></td>
                            		<td><?php echo $row['EMAIL']; ?></td>
                            		<td><?php echo $row['KONTAK']; ?></td>
                            		<td><?php echo $row['USERNAME']; ?></td>
                            		<td><?php echo $row['STATUS']; ?></td>
                            		<td><a href="transaction-employee.php?id=<?php echo $row['ID']; ?>"><button class="btn btn-warning" id="update<?php echo $row['ID']; ?>">Update</button></a></td>
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
                                    <th>Nama Karyawan</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Nomor Kontak</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
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