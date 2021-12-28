<?php
namespace App;

use App\seguridad\Index;

include_once("seguridad/autenticacion.php");

$index = new Index();
$index->formIndex();
