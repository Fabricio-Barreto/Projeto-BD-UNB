<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Paciente;

$pacientes = Paciente::getPacienteView();
//echo "<pre>"; print_r($pacientes); echo"</pre>"; exit;


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagemview.php';
include __DIR__.'/includes/footer.php';