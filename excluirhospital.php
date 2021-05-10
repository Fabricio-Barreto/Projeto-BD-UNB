<?php

require __DIR__.'/vendor/autoload.php';


use \App\Entity\Hospital;


//Validação DO ID (Return to hospital.php)
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location:hospital.php?status=error');
    exit;
}

$obHospital = Hospital::getHospital($_GET['id']);

//Validação do hospital (Return to hospital.php)
if(!$obHospital instanceof Hospital){
    header('location:hospital.php?status=error');
    exit;
}

//Validação do POST
if(isset($_POST['excluir'])){

    $obHospital -> excluir();

    header('location: hospital.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao-hospital.php';
include __DIR__.'/includes/footer.php';