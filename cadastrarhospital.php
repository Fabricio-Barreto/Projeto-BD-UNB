<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Hospital');

use \App\Entity\Hospital;
$obHospital = New Hospital;


//Validação do POST
if(isset($_POST['cep'],$_POST['nome'],$_POST['nomeadm'],$_POST['cpfadm'],$_POST['nascadm'],$_POST['sexo'],$_POST['iniciogeren'],$_POST['codcid'])){
    $obHospital = New Hospital;
    $obHospital -> cep = $_POST['cep'];
    $obHospital -> nome = $_POST['nome'];
    $obHospital -> administrador_name = $_POST['nomeadm'];
    $obHospital -> administrador_cpf = $_POST['cpfadm'];
    $obHospital -> administrador_nasc = $_POST['nascadm'];
    $obHospital -> administrador_sexo = $_POST['sexo'];
    $obHospital -> inicio_gerencia = $_POST['iniciogeren'];
    $obHospital -> cidade_codigo = $_POST['codcid'];

    $obHospital -> cadastrar();

    header('location: hospital.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariohospital.php';
include __DIR__.'/includes/footer.php';