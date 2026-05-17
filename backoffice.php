<?php
// backoffice.php  (raíz del proyecto)
// URL: localhost/Thread/backoffice.php

session_start();
require_once __DIR__ . '/controllers/ContactoController.php';

$ctrl = new ContactoController();
$ctrl->backoffice();   // carga la vista del backoffice
?>
