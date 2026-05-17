<?php
// controllers/procesar.php
// Punto de entrada para el formulario POST
// URL: localhost/Thread/controllers/procesar.php

session_start();
require_once __DIR__ . '/../controllers/ContactoController.php';

$ctrl = new ContactoController();
$ctrl->enviar();   // valida, guarda en BD y redirige
?>
