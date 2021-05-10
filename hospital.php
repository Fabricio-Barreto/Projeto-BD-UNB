<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Hospital;

$hospitais = Hospital::getHospitais();


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagemhospital.php';
include __DIR__.'/includes/footer.php';