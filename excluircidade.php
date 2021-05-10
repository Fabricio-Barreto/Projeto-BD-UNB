<?php

require __DIR__.'/vendor/autoload.php';


use \App\Entity\Cidade;


//Validação DO ID (Return to cidade.php)
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location:cidade.php?status=error');
    exit;
}

$obCidade = Cidade::getCidade($_GET['id']);

//Validação do hospital (Return to cidade.php)
if(!$obCidade instanceof Cidade){
    header('location:cidade.php?status=error');
    exit;
}

//Validação do POST
if(isset($_POST['excluir'])){

    $obCidade -> excluir();

    header('location: cidade.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao-cidade.php';
include __DIR__.'/includes/footer.php';