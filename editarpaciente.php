<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Paciente');

use \App\Entity\Paciente;


//Validação DO ID (Return to paciente.php)
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location:paciente.php?status=error');
    exit;
}

$obPaciente = Paciente::getPaciente($_GET['id']);

//Validação do Paciente (Return to paciente.php)
if(!$obPaciente instanceof Paciente){
    header('location:paciente.php?status=error');
    exit;
}

//Validação do POST
if(isset($_POST['CPF'],$_POST['nome'],$_POST['plano_saude'],$_POST['sexo'],$_POST['descrição'],$_POST['uti_codigo'],$_POST['enfermeiro_coren'],$_POST['crm_medico'],$_POST['enfermidade_codigo'])){
    $obPaciente -> CPF= $_POST['CPF'];
    $obPaciente -> nome = $_POST['nome'];
    $obPaciente -> plano_saude = $_POST['plano_saude'];
    $obPaciente -> sexo = $_POST['sexo'];
    $obPaciente -> descrição = $_POST['descrição'];
    $obPaciente -> uti_codigo = $_POST['uti_codigo'];
    $obPaciente -> enfermeiro_coren = $_POST['enfermeiro_coren'];
    $obPaciente -> crm_medico = $_POST['crm_medico'];
    $obPaciente -> enfermidade_codigo = $_POST['enfermidade_codigo'];



    $obPaciente-> atualizar();

    header('location: Paciente.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariopaciente.php';
include __DIR__.'/includes/footer.php';