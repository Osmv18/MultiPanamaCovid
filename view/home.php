<div class="container" id="bodyMain">
  <div class="container">
    <form method="POST" action="">
      <div class="form-group">
        <div class="row">
          <div class="col">
            <input type="filter" class="form-control" id="exampleInputFilter" aria-describedby="filterSearch" placeholder="Buscar">
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
require 'vendor/autoload.php';
$conexion = new mysqli('localhost', 'root', '', 'db_covid_panama');

class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {

  public function readCell($column, $row, $worksheetName = '') {
    // Read title row and rows 20 - 30
    if ($row > 1) {
      return true;
    }
    return false;
  }

}

// Importar excel

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$inputFileName = "DB/metadata_panama.xlsx";

/**  Identify the type of $inputFileName  * */
$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
/**  Create a new Reader of the type that has been identified  * */
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

//  Leer de  la funcion para obtener los datos de una celda en especifico
$reader->setReadFilter(new MyReadFilter());

/**  Load $inputFileName to a Spreadsheet Object  * */
$spreadsheet = $reader->load($inputFileName);
$cantidad = $spreadsheet->getActiveSheet()->toArray();
foreach ($cantidad as $row) {

  if ($row[0] != "") {
    /*$consulta = "INSERT INTO informacion(virus_name,accession_id,collection_date,location,host,additional_location,gender,"
            . "patient_age,patient_status,passage,specimen,additional_host,linage,clade,aa_substitutions) VALUES ('$row[0]','$row[1]',"
            . "'$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]',"
            . "'$row[12]','$row[13]','$row[14]');";
    $result = $conexion->query($consulta);*/
  }
}
?>