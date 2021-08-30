<?php

require_once 'model/config.php';

class connection {

  private $dsn;

  public function __construct() {
    $this->dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
  }

  public function open() {
    try {
      return new PDO($this->dsn, DB_USER, DB_PASSWORD);
    } catch (PDOException $ex) {
      $message = "Error en la ejecuccion: En el archivo " . __FILE__ . " en la clase " . __CLASS__ .
              "en la linea" . __LINE__ . " lo siguiente " . $ex->getMessage();
      error_log($message);
    }
    return null;
  }

}
