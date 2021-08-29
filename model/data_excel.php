<?php
require 'vendor/autoload.php';
// Importar excel

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$inputFileName = 'DB/metadata_panama.xlsx';

/**  Identify the type of $inputFileName  **/
$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
/**  Create a new Reader of the type that has been identified  **/
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
/**  Load $inputFileName to a Spreadsheet Object  **/
$spreadsheet = $reader->load($inputFileName);
$cantidad = $spreadsheet->getActiveSheet()->toArray();
echo count($cantidad);
?>

