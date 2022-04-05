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
									<h2>Master Perusahaan</h2>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="transaction-company.php">
									<button type="button" data-toggle="tooltip" class="btn"><i class="notika-icon notika-plus-symbol"> Tambah Baru</i></button>
								</a>
                                <a href="transaction-bank.php">
                                    <button type="button" data-toggle="tooltip" class="btn"><i class="notika-icon notika-plus-symbol"> Tambah Bank</i></button>
                                </a>
							</div>
						</div>
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
                                    <th>Nama Perusahaan</th>
                                    <th>Deskripsi</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Nomor Kontak</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $counter = 1;
                                $result = $connection->query("SELECT * FROM PERUSAHAAN ORDER BY ID ASC");
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        ?>
                                <tr>
                                    <td><?php echo $counter; ?></td>
                                    <td><?php echo $row['NAMA']; ?></td>
                                    <td><?php echo $row['DESKRIPSI']; ?></td>
                                    <td><?php echo $row['ALAMAT']; ?></td>
                                    <td><?php echo $row['EMAIL']; ?></td>
                                    <td><?php echo $row['KONTAK']; ?></td>
                                    <td><?php echo $row['STATUS']; ?></td>
                                    <td><a href="transaction-company.php?id=<?php echo $row['ID']; ?>"><button class="btn btn-warning" id="update<?php echo $row['ID']; ?>">Update</button></a></td>
                                </tr>
                                        <?php
                                        $counter++;
                                    }
                                } else {
                                    ?>
                                    <tr><td colspan="7"></td>Data Perusahaan Tidak Ada</tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Deskripsi</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Nomor Kontak</th>
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
<br>
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
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Bank</th>
                                    <th>Nomor Rekening</th>
                                    <th>Atas Nama</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	$counter = 1;
                            	$result = $connection->query("SELECT B.ID AS ID
                                        , P.NAMA AS NAMA_PERUSAHAAN
                                        , B.JENIS_BANK AS JENIS_BANK
                                        , B.NO_REK AS NO_REK
                                        , B.ATAS_NAMA AS ATAS_NAMA
                                        , B.STATUS AS STATUS
                                    FROM BANK B 
                                        INNER JOIN PERUSAHAAN P ON P.ID = B.ID_PERUSAHAAN 
                                    ORDER BY ID ASC");
                            	if($result->num_rows > 0){
                            		while($row = $result->fetch_assoc()){
                            			?>
                            	<tr>
                            		<td><?php echo $counter; ?></td>
                            		<td><?php echo $row['NAMA_PERUSAHAAN']; ?></td>
                                    <td><?php echo $row['JENIS_BANK']; ?></td>
                            		<td><?php echo substr_replace($row['NO_REK'], str_repeat('*', strlen($row['NO_REK'])-4), 0, strlen($row['NO_REK'])-4); ?></td>
                            		<td><?php echo $row['ATAS_NAMA']; ?></td>
                            		<td><?php echo $row['STATUS']; ?></td>
                            		<td><a href="transaction-bank.php?id=<?php echo $row['ID']; ?>"><button class="btn btn-warning" id="update<?php echo $row['ID']; ?>">Update</button></a></td>
                            	</tr>
                            			<?php
                            			$counter++;
                            		}
                            	} else {
                            		?>
                            		<tr><td colspan="7"></td>Data Bank Tidak Ada</tr>
                            		<?php
                            	}
                            	?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Bank</th>
                                    <th>Nomor Rekening</th>
                                    <th>Atas Nama</th>
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