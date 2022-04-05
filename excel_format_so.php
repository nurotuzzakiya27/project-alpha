<?php
require_once 'PHPExcel/Classes/PHPExcel.php';

/* ---------------------------------------------------------------------------------------------------------------- */

$objPHPExcel = new PHPExcel();
$namaFile ="Format Excel Import SO.xlsx";
$objPHPExcel->getProperties()->setCreator("Project Alpha")
                ->setLastModifiedBy("Project Alpha")
                ->setTitle("PHPExcel Test Document")
                ->setSubject("PHPExcel Test Document")
                ->setDescription("Test document for PHPExcel, generated using PHP classes.")
                ->setKeywords("office PHPExcel php")
                ->setCategory("Test result file");

$boldText = array(
    'font' => array(
        'bold' => true
    )
);

$italicText = array(
    'font' => array(
        'italic' => true
    )
);

$fillEndGrp = array(
    'fill' => array(
    	'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => 'e7f3fd')
    ),
    'font' => array(
        'bold' => true
    )
);

/* ---------------------------------------------------------------------------------------------------------------- */

/* Title Excel */
// $objPHPExcel->getActiveSheet()->getStyle('A1:J1')->applyFromArray($boldText);
// $objPHPExcel->setActiveSheetIndex(0)
// 			->mergeCells('A1:J1');
// $objPHPExcel->getActiveSheet()
// 	        ->setCellValue('A1', 'Report Monitoring Detail Absensi Karyawan Android');

$row = 1;

/* Header Excel */
$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($fillEndGrp);
$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':L'.$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':L'.$row)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()
            ->setCellValue('A' . $row, 'No')
            ->setCellValue('B' . $row, 'Nama Karyawan')
            ->setCellValue('C' . $row, 'Organisasi')
            ->setCellValue('D' . $row, 'Lokasi')
            ->setCellValue('E' . $row, 'Departemen')
            ->setCellValue('F' . $row, 'Posisi / Jabatan')
            ->setCellValue('G' . $row, 'Latitude Absensi')
            ->setCellValue('H' . $row, 'Longitude Absensi')
            ->setCellValue('I' . $row, 'Alamat Lokasi Absensi')
            ->setCellValue('J' . $row, 'Tanggal Absen')
            ->setCellValue('K' . $row, 'Status In / Out')
            ->setCellValue('L' . $row, 'Keterangan'); 

/* Body Excel */
// $row++; 
// $count=1;
//
/* Code Here */
//
// while($hslDt = oci_fetch_assoc($rsltQuery))
// {
// 	$tgl_Absen =  new DateTime($hslDt['CHECKLOG']);
//     // $tgl_Absen =  new DateTime($hslDt['TANGGAL_ABSEN']);
    
//     $objPHPExcel->getActiveSheet()
//                 ->setCellValue('A' . $row, $count)
//                 ->setCellValue('B' . $row, $hslDt['NAMA_KARYAWAN'])
//                 ->setCellValue('C' . $row, $hslDt['NAMA_ORGANISASI'])
//                 ->setCellValue('D' . $row, $hslDt['NAMA_LOKASI'])
//                 ->setCellValue('E' . $row, $hslDt['NAMA_DEPARTEMEN'])
//                 ->setCellValue('F' . $row, $hslDt['NAMA_JABATAN'])
//                 ->setCellValue('G' . $row, $hslDt['LATITUDE'])
//                 ->setCellValue('H' . $row, $hslDt['LONGITUDE'])
//                 ->setCellValue('I' . $row, $hslDt['ALAMAT_LOKASI'])
//                 // ->setCellValue('J' . $row, PHPExcel_Shared_Date::PHPToExcel( $tgl_Absen ))
//                 ->setCellValue('K' . $row, $hslDt['STATUS_ABSEN'])
//                 ->setCellValue('L' . $row, $hslDt['KETERANGAN']);

//     if(!empty($hslDt['CHECKLOG'])){
//     	$objPHPExcel->getActiveSheet()
//     				->setCellValue('J' . $row, PHPExcel_Shared_Date::PHPToExcel( $tgl_Absen ));
//     	$objPHPExcel->getActiveSheet()->getStyle('J'.$row)->getNumberFormat()->setFormatCode('DD/MM/YYYY hh:mm:ss');
// 	}
// 	else{
// 		$objPHPExcel->getActiveSheet()
//     				->setCellValue('J' . $row, $hslDt['CHECKLOG']);
// 	}

//     $objPHPExcel->getActiveSheet()->getStyle('A' . $row . ':L' . $row)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

//     $count++; 
// 	$row++; 

	foreach (range('B','L') as $columnID) {
	    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
	            	->setAutoSize(true);
	}
// }

/* Footer Excel */            
// $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($italicText);
// $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':L'.$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
// $objPHPExcel->setActiveSheetIndex(0)
// 			->mergeCells('A'.$row.':L'.$row);
// $objPHPExcel->getActiveSheet()
//         ->setCellValue('A' . $row, 'Printed Date : '.date("d-M-Y H:i:s"));
$row++; 

/* ---------------------------------------------------------------------------------------------------------------- */

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save($namaFile);

// header file excel
header("Status: 200");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header("Pragma: hack");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private", false);
header("Content-Description: File Transfer");
header("Content-Type: application/force-download");
header("Content-Type: application/download");
header("Content-Disposition: attachment; filename=\"".$namaFile."\""); 
header("Content-Transfer-Encoding: binary");
readfile($namaFile);

exit;

?>