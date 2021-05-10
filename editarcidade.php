<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Cidade');

use \App\Entity\Cidade;


//Validação DO ID (Return to cidade.php)
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location:cidade.php?status=error');
    exit;
}

$obCidade = Cidade::getCidade($_GET['id']);

//Validação da cidade (Return to cidade.php)
if(!$obCidade instanceof Cidade){
    header('location:cidade.php?status=error');
    exit;
}

//Validação do POST
if(isset($_POST['nome'],$_POST['estado_codigo'])){
    $obCidade -> nome = $_POST['nome'];
    $obCidade -> estado_codigo = $_POST['estado_codigo'];



    $obCidade -> atualizar();

    header('location: cidade.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariocidade.php';
include __DIR__.'/includes/footer.php';