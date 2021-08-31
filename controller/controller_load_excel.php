<?php

include_once 'model/information.php';
$infoDB = new information();
$where = "";
if (isset($_POST['buscar'])) {
  if (empty($_POST['xgenero'])) {
    $where = " where virus_name like '" . $_POST['xname'] . "%' ";
  } else if (empty($_POST['xname'])) {
    $where = " where gender= '" . $_POST['xgenero'] . "' ";
  } else {
    $where = " where virus_name like '" . $_POST['xname'] . "%' and gender= '" . $_POST['xgenero'] . "' ";
  }
  $rows_data = $infoDB->readSearch($where, $_POST['xregistros']);
} else {
  $rows_data = $infoDB->read();
}
include 'view/home.php';
