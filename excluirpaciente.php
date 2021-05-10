<?php

require __DIR__.'/vendor/autoload.php';


use \App\Entity\Paciente;


//Validação DO ID (Return to paciente.php)
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location:paciente.php?status=error');
    exit;
}

$obPaciente= Paciente::getPaciente($_GET['id']);

//Validação do Paciente (Return to paciente.php)
if(!$obPaciente instanceof Paciente){
    header('location:paciente.php?status=error');
    exit;
}

//Validação do POST
if(isset($_POST['excluir'])){

    $obPaciente -> excluir();

    header('location: paciente.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao-paciente.php';
include __DIR__.'/includes/footer.php';