<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Cidade');

use \App\Entity\Cidade;
$obCidade = New Cidade;


//Validação do POST
if(isset($_POST['nome'],$_POST['estado_codigo'])){
    $obCidade -> nome = $_POST['nome'];
    $obCidade -> estado_codigo = $_POST['estado_codigo'];

    $obCidade -> cadastrar();

    header('location: cidade.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariocidade.php';
include __DIR__.'/includes/footer.php';