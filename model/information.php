<?php

require_once 'model/connection.php';

class information {

  public $virus_name;
  public $accession_id;
  public $collection_date;
  public $location;
  public $host;
  public $additional_location;
  public $gender;
  public $patient_age;
  public $patient_status;
  public $passage;
  public $specimen;
  public $additional_host;
  public $linage;
  public $clade;
  public $aa_substitutions;
  public $id;

  public function __construct($virus_name = '', $accession_id = '', $collection_date = '', $location = '', $host = '', $additional_location = '', $gender = '', $patient_age = '', $patient_status = '',
          $passage = '', $specimen = '', $additional_host = '', $linage = '', $clade = '', $aa_substitutions = '', $id = 0) {
    $this->virus_name = $virus_name;
    $this->accession_id = $accession_id;
    $this->collection_date = $collection_date;
    $this->location = $location;
    $this->host = $host;
    $this->additional_location = $additional_location;
    $this->gender = $gender;
    $this->patient_age = $patient_age;
    $this->patient_status = $patient_status;
    $this->passage = $passage;
    $this->specimen = $specimen;
    $this->additional_host = $additional_host;
    $this->linage = $linage;
    $this->clade = $clade;
    $this->aa_substitutions = $aa_substitutions;
    $this->id = $id;
  }
  
  public function read ($id = 0) {
    $rows = [];
    try {
      $sql = "SELECT * FROM informacion";
      $pdo = new connection();
      $pdo = $pdo->open();
      if ($id) {
        $sql .= " WHERE id='$id'";
      }
      $result = $pdo->query($sql);
      foreach ($result->fetchAll() as $value) {
        $rows [] = new information($value['virus_name'], $value['accession_id'], $value['collection_date'], $value['location'],
                $value['host'],$value['additional_location'],$value['gender'],$value['patient_age'],$value['patient_status'],$value['passage'],
                $value['specimen'],$value['additional_host'],$value['linage'],$value['clade'],$value['aa_substitutions'],$value['id']);
      }
    } catch (PDOException $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }
    return $rows;
  }
}
