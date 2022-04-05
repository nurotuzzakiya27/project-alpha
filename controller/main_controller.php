<?php
session_start();
require 'db_connection.php';

$data = [];
$status = false;
$message = 'Gagal Simpan';
$type = $_POST['type'];
/* --------------------------------------------------------------- */


switch($type){
	case "login":

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		$query_counter = "SELECT COUNT(-1) AS COUNTER FROM KARYAWAN WHERE USERNAME = '{$username}'";
		$result = mysqli_query($connection, $query_counter);
		$row = mysqli_fetch_array($result);
		$checker = $row['COUNTER'];

		if($checker > 0){
			$query_cek = "SELECT ID, NAMA, USERNAME, PASSWORD FROM KARYAWAN WHERE USERNAME = '{$username}'";
			$result = mysqli_query($connection, $query_cek);
			$row = mysqli_fetch_array($result);

			if($username == $row['USERNAME'] && $password == $row['PASSWORD']){
				$_SESSION['ID_LOGIN'] = $row['ID'];
				$_SESSION['NAMA_KARYAWAN'] = $row['NAMA'];
				$status = true;
			} else {
				$status = false;
				if($username != $row['USERNAME']){
					$message = "Terdapat Kesalahan Pada Username. Silakan Coba Kembali.";
				} else if ($password != $row['PASSWORD']){
					$message = "Terdapat Kesalahan Pada Password. Silakan Coba Kembali.";
				}
			}
		} else {
			$status = false;
			$message = "Terdapat Kesalahan Pada Username. Silakan Coba Kembali.";
		}

	break;

	case "add-company":

		$nama_company = strtoupper($_POST['nama_company']);
		$deskripsi_company = $_POST['deskripsi_company'];
		$alamat_company = $_POST['alamat_company'];
		$email_company = $_POST['email_company'];
		$kontak_company = $_POST['kontak_company'];
		$kontak_wa_company = $_POST['kontak_wa_company'];
		$status_company = $_POST['status_company'];
		
		$query_counter = "INSERT INTO PERUSAHAAN (NAMA, DESKRIPSI, ALAMAT, EMAIL, KONTAK, KONTAK_WA, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$nama_company."', '".$deskripsi_company."', '".$alamat_company."', '".$email_company."', '".$kontak_company."', '".$kontak_wa_company."','".$status_company."', ".$_SESSION['ID_LOGIN'].", NOW())";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Perusahaan Berhasil Ditambahkan.";
		} else {
			$status = false;
			$message = "Data Perusahaan Gagal Ditambahkan.";
		}

	break;

	case "update-company":

		$id_company = $_POST['id_company'];
		$nama_company = strtoupper($_POST['nama_company']);
		$deskripsi_company = $_POST['deskripsi_company'];
		$alamat_company = $_POST['alamat_company'];
		$email_company = $_POST['email_company'];
		$kontak_company = $_POST['kontak_company'];
		$kontak_wa_company = $_POST['kontak_wa_company'];
		$status_company = $_POST['status_company'];
		
		$query_counter = "UPDATE PERUSAHAAN SET NAMA = '".$nama_company."', DESKRIPSI = '".$deskripsi_company."', ALAMAT = '".$alamat_company."', EMAIL = '".$email_company."', KONTAK = '".$kontak_company."', KONTAK_WA = '".$kontak_wa_company."', STATUS = '".$status_company."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE ID = '".$id_company."'";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Perusahaan Berhasil Diubah.";
		} else {
			$status = false;
			$message = "Data Perusahaan Gagal Diubah.";
		}

	break;

	case "add-bank":

		$perusahaan_bank = $_POST['perusahaan_bank'];
		$jenis_bank = strtoupper($_POST['jenis_bank']);
		$rekening_bank = $_POST['rekening_bank'];
		$atas_nama_bank = strtoupper($_POST['atas_nama_bank']);
		$status_bank = $_POST['status_bank'];
		
		$query_counter = "INSERT INTO BANK (JENIS_BANK, NO_REK, ATAS_NAMA, STATUS, CREATED_BY, CREATED_DATE, ID_PERUSAHAAN) VALUES ('".$jenis_bank."', '".$rekening_bank."', '".$atas_nama_bank."','".$status_bank."', ".$_SESSION['ID_LOGIN'].", NOW(), ".$perusahaan_bank.")";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Bank Berhasil Ditambahkan.";
		} else {
			$status = false;
			$message = "Data Bank Gagal Ditambahkan.";
		}

	break;

	case "update-bank":

		$id_bank = $_POST['id_bank'];
		$perusahaan_bank = $_POST['perusahaan_bank'];
		$jenis_bank = strtoupper($_POST['jenis_bank']);
		$rekening_bank = $_POST['rekening_bank'];
		$atas_nama_bank = strtoupper($_POST['atas_nama_bank']);
		$status_bank = $_POST['status_bank'];
		
		$query_counter = "UPDATE BANK SET JENIS_BANK = '".$jenis_bank."', NO_REK = '".$rekening_bank."', ATAS_NAMA = '".$atas_nama_bank."', STATUS = '".$status_bank."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW(), ID_PERUSAHAAN = ".$perusahaan_bank." WHERE ID = '".$id_bank."'";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Bank Berhasil Diubah.";
		} else {
			$status = false;
			$message = "Data Bank Gagal Diubah.";
		}

	break;

	case "add-customer":

		$nama_customer = strtoupper($_POST['nama_customer']);
		$alamat_customer = $_POST['alamat_customer'];
		$email_customer = $_POST['email_customer'];
		$kontak_customer = $_POST['kontak_customer'];
		$status_customer = $_POST['status_customer'];
		
		$query_counter = "INSERT INTO PELANGGAN (NAMA, ALAMAT, EMAIL, KONTAK, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$nama_customer."', '".$alamat_customer."', '".$email_customer."', '".$kontak_customer."', '".$status_customer."', ".$_SESSION['ID_LOGIN'].", NOW())";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Pelanggan Berhasil Ditambahkan.";
		} else {
			$status = false;
			$message = "Data Pelanggan Gagal Ditambahkan.";
		}

	break;

	case "update-customer":

		$id_customer = $_POST['id_customer'];
		$nama_customer = strtoupper($_POST['nama_customer']);
		$alamat_customer = $_POST['alamat_customer'];
		$email_customer = $_POST['email_customer'];
		$kontak_customer = $_POST['kontak_customer'];
		$status_customer = $_POST['status_customer'];
		
		$query_counter = "UPDATE PELANGGAN SET NAMA = '".$nama_customer."', ALAMAT = '".$alamat_customer."', EMAIL = '".$email_customer."', KONTAK = '".$kontak_customer."', STATUS = '".$status_customer."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE ID = '".$id_customer."'";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Pelanggan Berhasil Diubah.";
		} else {
			$status = false;
			$message = "Data Pelanggan Gagal Diubah.";
		}

	break;

	case "add-employee":

		$nama_employee = strtoupper($_POST['nama_employee']);
		$ktp_employee = $_POST['ktp_employee'];
		$alamat_employee = $_POST['alamat_employee'];
		$email_employee = $_POST['email_employee'];
		$kontak_employee = $_POST['kontak_employee'];
		$username_employee = $_POST['username_employee'];
		$password_employee = md5($_POST['password_employee']);
		$status_employee = $_POST['status_employee'];
		
		$query_counter = "INSERT INTO KARYAWAN (NAMA, NO_KTP, ALAMAT, EMAIL, KONTAK, USERNAME, PASSWORD, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$nama_employee."', '".$ktp_employee."', '".$alamat_employee."', '".$email_employee."', '".$kontak_employee."', '".$username_employee."', '".$password_employee."', '".$status_employee."', ".$_SESSION['ID_LOGIN'].", NOW())";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Karyawan Berhasil Ditambahkan.";
		} else {
			$status = false;
			$message = "Data Karyawan Gagal Ditambahkan.";
		}

	break;

	case "update-employee":

		$id_employee = $_POST['id_employee'];
		$nama_employee = strtoupper($_POST['nama_employee']);
		$ktp_employee = $_POST['ktp_employee'];
		$alamat_employee = $_POST['alamat_employee'];
		$email_employee = $_POST['email_employee'];
		$kontak_employee = $_POST['kontak_employee'];
		$username_employee = $_POST['username_employee'];
		$status_employee = $_POST['status_employee'];
		
		if($_POST['password_employee'] != null){
			$password_employee = md5($_POST['password_employee']);
			
			$query_counter = "UPDATE KARYAWAN SET NAMA = '".$nama_employee."', NO_KTP = '".$ktp_employee."', ALAMAT = '".$alamat_employee."', EMAIL = '".$email_employee."', KONTAK = '".$kontak_employee."', USERNAME = '".$username_employee."', PASSWORD = '".$password_employee."', STATUS = '".$status_employee."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE ID = '".$id_employee."'";
		} else {
			$query_counter = "UPDATE KARYAWAN SET NAMA = '".$nama_employee."', NO_KTP = '".$ktp_employee."', ALAMAT = '".$alamat_employee."', EMAIL = '".$email_employee."', KONTAK = '".$kontak_employee."', USERNAME = '".$username_employee."', STATUS = '".$status_employee."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE ID = '".$id_employee."'";
		}
		
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Karyawan Berhasil Diubah.";
		} else {
			$status = false;
			$message = "Data Karyawan Gagal Diubah.";
		}

	break;

	case "add-items":

		$kode_items = strtoupper($_POST['kode_items']);
		$nama_items = $_POST['nama_items'];
		$satuan_items = $_POST['satuan_items'];
		$status_items = $_POST['status_items'];

		$query_cek_item = "SELECT COUNT(-1) AS COUNTER FROM BARANG WHERE KODE_BARANG = '{$kode_items}'";
		$result = mysqli_query($connection, $query_cek_item);
		$row = mysqli_fetch_array($result);
		$counter = $row['COUNTER'];
		
		if($counter == 0){
			$query_counter = "INSERT INTO BARANG (KODE_BARANG, NAMA_BARANG, SATUAN, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$kode_items."', '".$nama_items."', '".$satuan_items."','".$status_items."', ".$_SESSION['ID_LOGIN'].", NOW())";
			if(mysqli_query($connection, $query_counter)){
				$status = true;
				$message = "Data Barang Berhasil Ditambahkan.";
			} else {
				$status = false;
				$message = "Data Barang Gagal Ditambahkan.";
			}
		} else {
			$status = false;
			$message = "Kode Barang Sudah Pernah Diinputkan Sebelumnya. Mohon Untuk Memasukkan Kode Lainnya.";
		}

	break;

	case "update-items":

		$id_items = $_POST['id_items'];
		$kode_items = strtoupper($_POST['kode_items']);
		$nama_items = $_POST['nama_items'];
		$satuan_items = $_POST['satuan_items'];
		$status_items = $_POST['status_items'];
		
		$query_counter = "UPDATE BARANG SET KODE_BARANG = '".$kode_items."', NAMA_BARANG = '".$nama_items."', SATUAN = '".$satuan_items."', STATUS = '".$status_items."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE ID = '".$id_items."'";
		if(mysqli_query($connection, $query_counter)){
			$status = true;
			$message = "Data Barang Berhasil Diubah.";
		} else {
			$status = false;
			$message = "Data Barang Gagal Diubah.";
		}

	break;
}


$data = ['message' => $message,'status' => $status];

echo json_encode($data);
?>