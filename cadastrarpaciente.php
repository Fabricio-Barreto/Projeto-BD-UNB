<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Paciente');

use \App\Entity\Paciente;
$obPaciente = New Paciente;


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



    $obPaciente-> cadastrar();

    header('location: Paciente.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariopaciente.php';
include __DIR__.'/includes/footer.php';