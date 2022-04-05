<?php

	require '../controller/db_connection.php';

	if (isset($_GET['search'])){	
		$name = $_GET['search'];
		$name = strtoupper($name);
		$querywhere = " AND UPPER(PPF.FULL_NAME) LIKE '%$name%' ";
	}

	$query = "SELECT DISTINCT B.ID AS DATA_VALUE, B.KODE_BARANG AS DATA_NAME, B.NAMA_BARANG AS DATA_DESKRIPSI
		FROM BARANG B
		WHERE 1=1
			AND B.STATUS = 'A'
			$querywhere 
		ORDER BY B.NAMA_BARANG ASC
	";

	$result = oci_parse($con, $query);
	oci_execute($result);
	while($row = oci_fetch_assoc($result))
	{
		$record = array();
		$record['DATA_VALUE']=$row['DATA_VALUE'];
		$record['DATA_NAME']=$row['DATA_NAME'];
		$data[]=$record;
	}

	echo json_encode($data);
?>