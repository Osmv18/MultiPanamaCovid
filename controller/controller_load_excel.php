<?php

include_once 'model/information.php';
$infoDB = new information();
$rows_data = $infoDB->read();
include 'view/home.php';
