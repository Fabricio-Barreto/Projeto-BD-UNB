<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Hospital;



if(isset($_POST['value'])){
    $hospitais = Hospital::getHospitalProcedure($_POST['value']);
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formularioprocedure.php';
include __DIR__.'/includes/listagemhospitalprocedure.php';
include __DIR__.'/includes/footer.php';