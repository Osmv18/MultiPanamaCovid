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

  public function __construct($virus_name = ''){
  $this-> virus_name = $virus_name;
  $this-> accession_id = $accession_id;
  $this-> collection_date = $collection_date;
  $this-> location = $location;
  $this-> host = $host;
  $this-> additional_location= $additional_location;
  $this-> gender = $gender;
  $this-> patient_age = $patient_age;
  $this-> patient_status = $patient_status;
  $this-> passage = $passage;
  $this-> specimen = $specimen;
  $this-> additional_host = $additional_host;
  $this-> linage = $linage;
  $this-> clade = $clade;
  $this-> aa_substitutions = $aa_substitutions;
  $this-> id = $id;
  }
}
