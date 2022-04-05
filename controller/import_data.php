<?php
session_start();
require 'db_connection.php';

if(isset($_POST['importSubmit'])){
	$jenis = $_POST['jenis'];
	$type = explode('.',$_FILES['file']['name']);
	$file_size = $_FILES['file']['size'];

    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && $type[1] == 'csv'){
        
    	// File Size Can't over 5 MB
    	if($file_size <= 5234000){

	        // If the file is uploaded
	        if(is_uploaded_file($_FILES['file']['tmp_name'])){
	            
	            // Open uploaded CSV file with read-only mode
	            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
	            
	            // Skip the first line
	            fgetcsv($csvFile);
	            
	            if($jenis == 'customer'){
		            // Parse data from CSV file line by line
		            while(($line = fgetcsv($csvFile)) !== FALSE){
		            	
		            	if($line[5] == null){
			                // Get row data
			                $name   	= strtoupper($line[0]);
			                $address 	= $line[1];
			                $email  	= $line[2];
			                $phone  	= $line[3];
			                $status 	= $line[4];
			                
			                // Check whether member already exists in the database with the same email
			                $prevQuery = "SELECT NAMA FROM PELANGGAN WHERE NAMA = '".$line[0]."'";
			                $prevResult = $connection->query($prevQuery);
			                
			                if($prevResult->num_rows > 0){
			                    // Update member data in the database
			                    $connection->query("UPDATE PELANGGAN SET NAMA = '".$name."', ALAMAT = '".$address."', EMAIL = '".$email."', KONTAK = '".$phone."', STATUS = '".$status."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE NAMA = '".$name."'");
			                }else{
			                    // Insert member data in the database
			                    $connection->query("INSERT INTO PELANGGAN (NAMA, ALAMAT, EMAIL, KONTAK, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$name."', '".$address."', '".$email."', '".$phone."', '".$status."', ".$_SESSION['ID_LOGIN'].", NOW())");
			                }
	            			$qstring = '?status=success_import';
		            	} else {
	            			$qstring = '?status=false_file';
		            	}
		            }
	            } else if($jenis == 'employee'){
		            // Parse data from CSV file line by line
		            while(($line = fgetcsv($csvFile)) !== FALSE){

		            	if($line[8] == null){
			                // Get row data
			                $name   	= strtoupper($line[0]);
			                $no_ktp   	= $line[1];
			                $address 	= $line[2];
			                $email  	= $line[3];
			                $phone  	= $line[4];
			                $username 	= $line[5];
			                $password 	= MD5($line[6]);
			                $status 	= $line[7];
			                
			                // Check whether member already exists in the database with the same email
			                $prevQuery = "SELECT NAMA FROM KARYAWAN WHERE NAMA = '".$line[0]."' AND NO_KTP = '".$line[1]."'";
			                // echo $prevQuery; exit;
			                $prevResult = $connection->query($prevQuery);
			                
			                if($prevResult->num_rows > 0){
			                    // Update member data in the database
			                    $connection->query("UPDATE KARYAWAN SET NAMA = '".$name."', NO_KTP = '".$no_ktp."', ALAMAT = '".$address."', EMAIL = '".$email."', KONTAK = '".$phone."', USERNAME = '".$username."', PASSWORD = '".$password."', STATUS = '".$status."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE NAMA = '".$name."'");
			                }else{
			                    // Insert member data in the database
			                    $connection->query("INSERT INTO KARYAWAN (NAMA, NO_KTP, ALAMAT, EMAIL, KONTAK, USERNAME, PASSWORD, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$name."', '".$no_ktp."', '".$address."', '".$email."', '".$phone."', '".$username."', '".$password."', '".$status."', ".$_SESSION['ID_LOGIN'].", NOW())");
			                }
	            			$qstring = '?status=success_import';
		            	} else {
	            			$qstring = '?status=false_file';
		            	}
		            }
	            } else if($jenis == 'items'){
		            // Parse data from CSV file line by line
		            while(($line = fgetcsv($csvFile)) !== FALSE){

		            	if($line[4] == null){
			                // Get row data
			                $kode_barang   	= strtoupper($line[0]);
			                $nama_barang   	= $line[1];
			                $satuan_barang 	= $line[2];
			                $status 		= $line[3];
			                
			                // Check whether member already exists in the database with the same email
			                $prevQuery = "SELECT KODE_BARANG FROM BARANG WHERE KODE_BARANG = '".$line[0]."'";
			                // echo $prevQuery; exit;
			                $prevResult = $connection->query($prevQuery);
			                
			                if($prevResult->num_rows > 0){
			                    // Update member data in the database
			                    $connection->query("UPDATE BARANG SET KODE_BARANG = '".$kode_barang."', NAMA_BARANG = '".$nama_barang."', SATUAN = '".$satuan_barang."', STATUS = '".$status."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE NAMA = '".$kode_barang."'");
			                }else{
			                    // Insert member data in the database
			                    $connection->query("INSERT INTO BARANG (KODE_BARANG, NAMA_BARANG, SATUAN, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$kode_barang."', '".$nama_barang."', '".$satuan_barang."', '".$status."', ".$_SESSION['ID_LOGIN'].", NOW())");
			                }
	            			$qstring = '?status=success_import';
		            	} else {
	            			$qstring = '?status=false_file';
		            	}
		            }
	            } else if($jenis == 'sales_orders'){
		            // Parse data from CSV file line by line
		            while(($line = fgetcsv($csvFile)) !== FALSE){

		            	if($line[4] == null){
			                // Get row data
			                $kode_barang   	= strtoupper($line[0]);
			                $nama_barang   	= $line[1];
			                $satuan_barang 	= $line[2];
			                $status 		= $line[3];
			                
			                // Check whether member already exists in the database with the same email
			                $prevQuery = "SELECT KODE_BARANG FROM BARANG WHERE KODE_BARANG = '".$line[0]."'";
			                // echo $prevQuery; exit;
			                $prevResult = $connection->query($prevQuery);
			                
			                if($prevResult->num_rows > 0){
			                    // Update member data in the database
			                    $connection->query("UPDATE BARANG SET KODE_BARANG = '".$kode_barang."', NAMA_BARANG = '".$nama_barang."', SATUAN = '".$satuan_barang."', STATUS = '".$status."', LAST_UPDATED_BY = ".$_SESSION['ID_LOGIN'].", LAST_UPDATED_DATE = NOW() WHERE NAMA = '".$kode_barang."'");
			                }else{
			                    // Insert member data in the database
			                    $connection->query("INSERT INTO BARANG (KODE_BARANG, NAMA_BARANG, SATUAN, STATUS, CREATED_BY, CREATED_DATE) VALUES ('".$kode_barang."', '".$nama_barang."', '".$satuan_barang."', '".$status."', ".$_SESSION['ID_LOGIN'].", NOW())");
			                }
	            			$qstring = '?status=success_import';
		            	} else {
	            			$qstring = '?status=false_file';
		            	}
		            }
	            }
	            
	            // Close opened CSV file
	            fclose($csvFile);
	        } else {
	            $qstring = '?status=error_import';
	        }
    	} else {
        	$qstring = '?status=over_file_size';
    	}
    } else {
        $qstring = '?status=invalid_file';
    }
if($jenis == 'customer') header("Location: ../customer.php".$qstring);
if($jenis == 'employee') header("Location: ../employee.php".$qstring);
if($jenis == 'items') header("Location: ../items.php".$qstring);
if($jenis == 'sales_orders') header("Location: ../sales-orders.php".$qstring);
}


?>